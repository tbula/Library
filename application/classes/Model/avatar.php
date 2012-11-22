<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_Avatar
 *
 * @author tbula
 */
class Model_Avatar extends ORM {
    
    public function __construct($id = NULL) {
        parent::__construct($id);
    }
    
    public function setData($avatar, $filename){
        $this->avatar = base64_encode(file_get_contents($avatar['tmp_name']));
        $this->filename = $filename;
    }
    
    
}

?>
