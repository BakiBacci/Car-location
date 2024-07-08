<?php
namespace App\Entity;


class Test{


    public string $nom;

    
    public function __construct( string $nom)
    {
        $this->nom=$nom;
    }

public function display(){
    return 'hello world';
}

}