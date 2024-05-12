<?php

class Authentication
{
    private $auth;

    public function __construct()
    {
        $db = new Database();
        $user_id = Session::get('user_id');
        $result = $db->query('SELECT * FROM users WHERE id=?', [$user_id]);
        $this->auth = $result->fetch_assoc();
    }

    public function user()
    {
        return $this->auth;
    }

    public function id()
    {
        return $this->auth['id'] ?? null;
    }

    public function login($email, $password)
    {
        // Prepare SQL statement to retrieve user data based on email
        $db = new Database();
        $result = $db->query('SELECT * FROM users WHERE email = ?', [$email]);

        // Check if user exists
        if ($result->num_rows <= 0) {
            return false;
        }

        // User found, verify password
        $user = $result->fetch_assoc();
        if (!password_verify($password, $user['password'])) {
            return false;
        }

        // Login the user
        Session::set('user_id', $user['id']);

        // Redirect user to dashboard or any other authenticated page
        return true;
    }

    public function logout()
    {
        Session::clear();
    }
}
