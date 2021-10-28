<?php
    class Product{
        public $name;
        public $price;
        public $category;

        public function __construct($_name, $_price, $_category)
        {
            $this->name = $_name;
            $this->price = $_price;
            $this->category = $_category;

        }

        public function getInfo(){
            return $this->name . ' ' . $this->price . ' ' . '€' . ', ' . $this->category; 
        }

    }

    $iphone = new Product('iPhone',700 ,'Telefonia');

    $dyson = new Product('Dyson', 350, 'Elettrodomestici');

?>
