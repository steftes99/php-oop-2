<?php 

    class Product{
        public $name;
        public $price;

        public function __construct($_name){
            $this->name = $_name;
        }

        function set_price($price) {
            $this->price = $price;
          }
        function get_price() {
            return $this->price;
          }

        
    }
?>