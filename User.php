<?php

    class User{
        protected $name;
        protected $email;
        protected $year;
        protected $discount = 0;

        public function __construct($_name, $_email,$_year)
        {
            $this->name = $_name;
            $this->email = $_email;
            $this->year = $_year;
        }

        public function getInfo(){
            return $this->name . ' ' . $this -> email . ' ' . $this->year;
        }

        public function setDiscount($year){
            if($year < 2019){
                $this ->discount = 30;
            }
        }

        public function getDiscount(){
            return $this->discount;
        }
    }

    

    $pippo = new User('pippo', 'pippo@gmail.com', 2016);
