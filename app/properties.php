<?php
namespace XDE;
class Properties{
    protected $brand;
    protected $model;
    protected $price;
    protected $weight;
    protected $engine;
    protected $power;
    protected $speed;
    protected $description;
    protected $seats;


    // Konstruktorius
    public function __construct($brand, $model){
        $this->brand=$brand;
        $this->model=$model;
}

    //Seteriai
    public function changeDescription($description){
        $this->description=$description;
    }
    public function changeSeats($seats){
        $this->seats=$seats;
    }
    public function changePrice($price){
        $this->price=$price;
    }
    //Geteriai
    public function getProperties(){
        return[
        $this->brand,
        $this->model,
        $this->engine,
        $this->power,
        $this->speed,
        $this->weight,
        $this->seats,
        $this->price,
        $this->description
        ];
    }

    public function generateCar($data){
    echo"<ul>";
    foreach($data as $details) {
        echo"<li>$details";
    }
    echo"</ul>";
}
}