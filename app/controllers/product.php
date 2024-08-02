<?php

class product extends DController{
    public function __construct(){
        parent:: __construct();
    }
    public function chitietsanpham($id,$slug){
        echo 'chi tiết sản phẩm';
        echo $id;
        echo $slug;
    }
}

?>