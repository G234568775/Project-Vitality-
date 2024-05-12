<?php

function clean_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

function load_partials($name)
{
    include dirname(__DIR__)."/partials/$name.partials.php";
}

function auth()
{
    return new Authentication();
}

function old($name, $default = null)
{
    $data = Session::flash("old.$name");

    return $data ?? $default;
}
