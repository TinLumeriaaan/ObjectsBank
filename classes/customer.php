<?php

class Customer {
    public $f_name;
    public $l_name;
    public $user_acts; 

    public function __construct($f_name, $l_name, $user_acts) {
        $this->f_name = $f_name;
        $this->l_name = $l_name;
        $this->user_acts = $user_acts;
    }

    public function getFullName() {
        $name1 = $this->f_name;
        $name2 = $this->l_name;
        $full = $name1 . " " . $name2;
        return $full;
    }
}
?>