<?php

class Account {
    public $num;
    public $cat;
    public $bal;

    public function __construct($num, $cat, $bal) {
        $this->num = $num;
        $this->cat = $cat;
        $this->bal = $bal;
    }
}
?>