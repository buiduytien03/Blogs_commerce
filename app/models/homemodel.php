<?php

class homemodel {
    function __construct(){
        echo 'this is homemodel';
    }
    public function category(){
        return $category = array(
            'catOne' => 'Điện thoại',
            'catTwo'=>'Tủ lạnh',
            'catThree'=>'Mắt kính'
        );
    }
}



?>