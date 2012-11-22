<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Common_Avatar
 *
 * @author tbula
 */
class Common_Avatar {
    
    public function saveAvatar(Model_Avatar $avatar){
        $avatar->save();
        if(!$avatar->saved())
        {
            throw new Exception('Save error');
        }
    }
}

?>
