<?php

/**
 * Description of Role
 *
 * @author Iyngaran Iyathurai <iyngaran55@gmail.com>
 */
class Base_Model_ObtorLib_App_Core_User_Entity_Role {

    //put your code here

    private $id;
    private $name;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

}