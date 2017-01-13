<?php

namespace SON;

class Cliente{

    //public $id;
    //public $name;

    const CLIENTE_CPF = "00000000000";

    private $id;
    private $name;

    /**
     * Cliente constructor.
     * @param $id
     * @param $name
     */
    public function __construct()
    {
        $this->id = 100;
        $this->name = "Luiz Carlos";
    }

    public function id($id){
        //echo $id;
        return $id;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        //echo "adfasdfasdf";
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    public function __toString()
    {
        return $this->name;
    }
}