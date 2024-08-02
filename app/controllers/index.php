<?php

class index extends DController{
    public function __construct(){
        parent:: __construct();
    }
    public function homepage(){
        echo 'This is homepage from index class';
    }
}
?>