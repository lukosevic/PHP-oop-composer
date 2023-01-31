<?php
namespace XDE;

class Cars extends Properties{
   
    public function __construct($brand, $model, $engine, $power, $speed, $weight){
        parent::__construct($brand, $model, $engine, $power, $speed, $weight);
        $this->brand = $brand;
        $this->model = $model;
        $this->engine = $engine;
        $this->power = $power;
        $this->speed = $speed;
        $this->weight = $weight;
    }
    public function getProperties(){
        $data=parent::getProperties();

        return $data;
}
}