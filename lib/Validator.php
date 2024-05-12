<?php

class Validator
{
    protected $data;
    protected $rules;
    protected $errors = [];

    public function __construct($data, $rules)
    {
        $this->data = $data;
        $this->rules = $rules;
        $this->saveOldData();
    }

    public function saveOldData()
    {
        foreach ($this->data as $key => $data) {
            Session::flash("old.$key", $data);
        }
    }

    public function validateAndRedirect($url = null)
    {
        if (!$this->validate()) {
            Session::flash('error', $this->errors());
            Response::redirect($url ?? $_SERVER['HTTP_REFERER']);
        }
    }

    public function validate()
    {
        foreach ($this->rules as $field => $rules) {
            if (!is_array($rules)) {
                $rules = explode('|', $rules);
            }

            foreach ($rules as $rule) {
                $this->validateRule($field, $rule);
            }
        }

        $empty = empty($this->errors);

        return $empty;
    }

    protected function validateRule($field, $rule)
    {
        $parameters = [];

        if (strpos($rule, ':') !== false) {
            list($rule, $parameters) = explode(':', $rule, 2);
            $parameters = explode(',', $parameters);
        }

        $value = $this->data[$field];
        $this->$rule($value, $field, $parameters);
    }

    protected function addError($field, $message)
    {
        if (!isset($this->errors[$field])) {
            $this->errors[$field] = [];
        }
        $this->errors[$field][] = $message;
    }

    public function errors()
    {
        return $this->errors;
    }

    public function required($value, $field)
    {
        if (empty($value)) {
            $this->addError($field, "The $field field is required.");
        }
    }

    public function email($value, $field)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->addError($field, "The $field field must be a valid email address.");
        }
    }

    public function confirmed($value, $field)
    {
        $confirm_field = $field.'_confirmation';
        $confirm_value = $this->data[$confirm_field] ?? null;

        if ($confirm_value !== $value) {
            $this->addError($field, "The $field field did not match");
        }
    }

    public function max($value, $field, $parameter)
    {
        $check = is_numeric($value) ? $value > $parameter[0] : strlen($value) > $parameter[0];
        if ($check) {
            $this->addError($field, "The $field field must not be more that {$parameter[0]} characters");
        }
    }

    public function min($value, $field, $parameter)
    {
        $check = is_numeric($value) ? $value < $parameter[0] : strlen($value) < $parameter[0];
        if ($check) {
            $this->addError($field, "The $field field must be {$parameter[0]} characters or more");
        }
    }

    public function unique($value, $field, $parameter)
    {
        $db = new Database();
        $table = $parameter[0];
        $column = $parameter[1];

        $result = $db->query("SELECT * FROM $table WHERE $column = ?", [$value]);
        if ($result->num_rows) {
            $this->addError($field, "The $field already exist");
        }
    }

    public function exists($value, $field, $parameter)
    {
        $db = new Database();
        $table = $parameter[0];
        $column = $parameter[1];

        $result = $db->query("SELECT * FROM $table WHERE $column = ?", [$value]);
        if (!$result->num_rows) {
            $this->addError($field, "The $field does not exist");
        }
    }
}
