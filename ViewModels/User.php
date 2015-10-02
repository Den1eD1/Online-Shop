<?php

namespace Project\ViewModels;

class User
{
    private $id;
    private $user;
    private $pass;
    private $email;

    public function __construct($user, $pass, $id = null, $email = null)
    {
        $this->setId($id)
            ->setUsername($user)
            ->setPass($pass)
            ->setEmail($email);
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return $this
     */
    private function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     * @return $this
     */
    public function setUsername($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     * @return $this
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $gold
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

}