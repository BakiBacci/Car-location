<?php

namespace App\Controller;

class CarController {

    public function CarIndex($param){
        $id = $param['id'];
        require_once './templates/CarPage.php';

        
    }
}