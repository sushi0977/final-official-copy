<?php
/**
 * Created by PhpStorm.
 * User: Blaine
 * Date: 7/30/2017
 * Time: 2:10 PM
 */

namespace domain;


use PHPUnit\Runner\Exception;

class user
{
    protected $userID;
    protected $uuid;
    protected $username;
    protected $email;


    public function __construct()
    {
        $this->uuid = uniqid('user_');
    }

    public function setUsername($username)
    {
        if(empty($username))
        {
            Throw new Exception("We don't have a username");
        }
        $this->username = $username;
        return $this;
    }

    public function setEmail( $email)
    {
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            throw new \Exception("Not a valid email Address");
        }
        $this->email = $email;

        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setUserID($userID)
    {
        if(!is_numeric($userID))
        {
            Throw new \Exception("not a valid numeric value " . $userID);
        }
        $this->userID = $userID;
        return $this;

    }

    public function getUUID()
    {
        return $this->uuid;
    }

    public function getUserID()
    {
        return $this->userID;
    }
    public function setUUID($uuid)
    {
        if(empty($uuid))
        {
            throw new \Exception("Null UUID was passed");
        }

    }

}