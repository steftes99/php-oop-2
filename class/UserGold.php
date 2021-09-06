<?php 

    class UserGold extends User {
        public $level;
        public $discount;

        public function __construct($_username, $_email, $_level){
            $this->level = $_level;
            parent::__construct($username, $email)
        }

        function setDiscount(){
            switch ($level){
                case 1:
                    $this->discount = 0.1;
                    break;
                case 2:
                    $this->discount = 0.2;
                    break;
                case 3:
                    $this->discount = 0.3;
                    break;
            }

            $this->getDiscount();
        }

        function getDiscount(){
            return $this->sconto;
        }
    }


?>