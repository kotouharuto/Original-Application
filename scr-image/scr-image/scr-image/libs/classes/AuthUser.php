<?php

class AuthUser
{
    const SESSION_LOGIN_KEY = 'logged_user_id';

    private $user_id;

    public function __construct()
    {
        $this->user_id = SessionManager::get(self::SESSION_LOGIN_KEY);
    }

    public function setLoggedIn($user_id)
    {
        SessionManager::set(self::SESSION_LOGIN_KEY, $user_id);;
    }

    public function getLoggedInUserId()
    {
        return $this->user_id;
    }

    public function isLoggedIn()
    {
        return (false === is_null($this->user_id));
    }

    public function logOut() {
        SessionManager::unset(self::SESSION_LOGIN_KEY);
    }
}
