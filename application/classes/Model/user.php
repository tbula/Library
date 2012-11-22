<?php
    class Model_User extends ORM
    {
        public function __construct($id = NULL) {
            parent::__construct($id);
        }
        
        public function setData( $login, $password, $firstname, $email, $active) 
        {    
            $this->login = $login;
            $this->password = $password;
            $this->firstname = $firstname;
            $this->email = $email;
            $this->active = $active;
        }
    }
?>
