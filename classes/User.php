<?php

class User extends AbstractUser
{
    /**
     * Useful for mapping SQL fields with a different name
     * to the properties of this object
     */
    public function __set($name, $value){
        switch ($name) {
            case 'username':
                $this->login = $value;
                break;
           default:
               // do nothing;
               break;
        }

    }

}
