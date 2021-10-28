<?php

    require_once 'User.php';

    class PremiumUser extends User{
        private $premiumDiscount;

        public function setPremiumDiscount($_premiumDiscount){
            $this->premiumDiscount = 50;
              
        }

        public function getPremiumDiscount(){
            return $this ->premiumDiscount;
        }
    }

?>