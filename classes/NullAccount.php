<?php

class NullAccount extends AbstractAccount {

    public function getUsername(){
        return '';
    }

    public function getPassword(){
        return '';
    }
}

