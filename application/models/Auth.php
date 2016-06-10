<?php

/**
 * Created by PhpStorm.
 * User: judzhin
 * Date: 6/10/16
 * Time: 11:39 AM
 */
class Model_Auth
{
    public $email;
    public $pass;

    /**
     * Model_Auth constructor.
     * @param $email
     * @param $pass
     */
    public function __construct($email, $pass)
    {
        $this->email = $email;
        $this->pass = $pass;
    }
    
    /**
     * @return bool
     */
    public function isValid()
    {
        return 'some@email.com' == $this->email && 'password' == $this->pass;
    }
}