<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Common_User
 *
 * @author tbula
 */
    class Common_User {
            
        public function save(Model_User $user)
        {
            $user->save();
            $objectSaved = FALSE;
            
            if($user->saved() === TRUE)
            {
                $objectSaved = TRUE;
            }
            
            return $objectSaved;
        }
            
        public  function getUserByLogin($login)
        {
            return ORM::factory('user')
                    ->where('login','=',$login)
                    ->find();
        }
        
        public function ValidateUserData($login, $email, $id)
        {
            $user = ORM::factory('user')
                    ->or_where('login','=',  $login)
                    ->or_where('email', '=', $email)
                    ->where('id','!=', $id)
                    ->find();

            if(isset($user))
            {
                if($login === $user->login)
                {
                    throw new Exception("Login already exists");
                }
                else if($email === $user->email)
                {
                    throw new Exception("Email already in use");
                }
            }

            return TRUE;
        }
        
         public function validateData($login, $pass, $name, $email){
            if((isset($login) && trim($login) !== "") &&
               (isset($pass) && trim($pass) !== "") &&
               (isset($name) && trim($name) !== "") &&
               (isset ($email) && trim($email) !== ""))
            {
                return TRUE;
            }
            else
                return FALSE;
        }
    }
?>
