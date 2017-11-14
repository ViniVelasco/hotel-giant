<?php
class User {
    private $user_id;
    private $user_email;
    private $user_password;
    private $user_firstname;
    private $user_lastname;
    private $user_role;
    private $user_image;

    /**
     * @return mixed
     */
    public function getUserImage()
    {
        return $this->user_image;
    }

    /**
     * @param mixed $user_image
     */
    public function setUserImage($user_image)
    {
        $this->user_image = $user_image;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->user_email;
    }

    /**
     * @param mixed $user_email
     */
    public function setUserEmail($user_email)
    {
        $this->user_email = $user_email;
    }

    /**
     * @return mixed
     */
    public function getUserPassword()
    {
        return $this->user_password;
    }

    /**
     * @param mixed $user_password
     */
    public function setUserPassword($user_password)
    {
        $this->user_password = $user_password;
    }

    /**
     * @return mixed
     */
    public function getUserFirstname()
    {
        return $this->user_firstname;
    }

    /**
     * @param mixed $user_firstname
     */
    public function setUserFirstname($user_firstname)
    {
        $this->user_firstname = $user_firstname;
    }

    /**
     * @return mixed
     */
    public function getUserLastname()
    {
        return $this->user_lastname;
    }

    /**
     * @param mixed $user_lastname
     */
    public function setUserLastname($user_lastname)
    {
        $this->user_lastname = $user_lastname;
    }

    /**
     * @return mixed
     */
    public function getUserRole()
    {
        return $this->user_role;
    }

    /**
     * @param mixed $user_role
     */
    public function setUserRole($user_role)
    {
        $this->user_role = $user_role;
    }

}