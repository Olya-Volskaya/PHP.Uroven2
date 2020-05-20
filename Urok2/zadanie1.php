<?php
abstract class Product {	
            protected $price = 100;
			abstract public function getPrice(); 
	        }
			
class DigitalProduct extends Product {
	         public function getPrice() {
				 return $this->price/2;
			 }
}

class NormalProduct extends Product {
	        public function getPrice() {
				 return $this->price;
			 }
}

class WeigthProduct extends Product {
	        public function getPrice($count=1) {
				return $this->price*$count;
			 }
}

        $tovar1 = new DigitalProduct();
        echo 'Цифровой товар: ' . $tovar1->getPrice() . ' руб.' . '<br>';  
		
		$tovar2 = new NormalProduct();
        echo 'Штучный товар: ' . $tovar2->getPrice() . ' руб.' . '<br>';  
		
		$tovar3 = new WeigthProduct();
		$count = 3;
        echo 'Весовой товар: ' . $tovar3->getPrice($count) . ' руб. за ' . $count . ' кг<br>';  
?>		