<?php

class Session
{
    public static function start()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function set($key, $value)
    {
        self::start();
        $_SESSION[$key] = $value;
    }

    public static function get($key, $default = null)
    {
        self::start();

        return $_SESSION[$key] ?? $default;
    }

    public static function remove($key)
    {
        self::start();
        unset($_SESSION[$key]);
    }

    public static function clear()
    {
        self::start();
        session_unset();
    }

    public static function destroy()
    {
        self::start();
        session_destroy();
    }

    public static function unsetFlash()
    {
        self::start();
        unset($_SESSION['flash']);
    }

    public static function setFlash($key, $value)
    {
        self::start();
        $_SESSION['flash'][$key] = $value;
    }

    public static function getFlash($key, $default = null)
    {
        self::start();
        if (isset($_SESSION['flash'][$key])) {
            $value = $_SESSION['flash'][$key];
            unset($_SESSION['flash'][$key]);

            return $value;
        } else {
            return $default;
        }
    }

    public static function flash($key, $value = null)
    {
        if ($value) {
            return self::setFlash($key, $value);
        }

        return self::getFlash($key);
    }
}
