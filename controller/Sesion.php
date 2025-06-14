<?php
class Sesion
{
    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function login($userId, $userData = [])
    {
        $_SESSION['user_id'] = $userId;
        $_SESSION['user_data'] = $userData;
    }

    public function logout()
    {
        $_SESSION = [];
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
    }

    public function isAuthenticated()
    {
        return isset($_SESSION['user_id']);
    }

    public function getUserId()
    {
        return $_SESSION['user_id'] ?? null;
    }

    public function getUserData()
    {
        return $_SESSION['user_data'] ?? [];
    }

    public function getProductos()
    {
        return $_SESSION['user_data']['productos'] ?? [];
    }

    public function setFlash($key, $message)
    {
        $_SESSION['flash'][$key] = $message;
    }

    public function getFlash($key)
    {
        if (isset($_SESSION['flash'][$key])) {
            $msg = $_SESSION['flash'][$key];
            unset($_SESSION['flash'][$key]); // Se borra después de leer
            return $msg;
        }
        return null;
    }
}

?>