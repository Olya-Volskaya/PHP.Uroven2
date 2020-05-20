<?php
class Product {	

            private $name;          
            private $category;
            private $price;
            private $availability;
            

            public function __construct($name, $category, $price, $availability) {
                    $this->name = $name;
                    $this->category = $category;
                    $this->price = $price;	
                    $this->availability = $availability;
                    						
            }

            public function getName() {
				return $this->name;
			}
			public function getCategory() {
				return $this->category;
			}
			public function getPrice() {
				return $this->price;
			}
			public function getAvailability() {
				return $this->availability;
			}
			protected function getInfo() {
                    $info = 'Наименование: ' . $this->name . '<br>'.
                            'Категория: ' . $this->category . '<br>'.
                            'Цена: ' . $this->price .  ' руб.' . '<br>'.
                            'Наличие: ' . $this->availability . '<br>';
                    
                    return $info;
            }

        }
		class PazzleProduct extends Product {
			private $detalCount;
			public function __construct($name, $category, $price, $availability, $detalCount) {
				parent::__construct($name, $category, $price, $availability);
				$this->detalCount=$detalCount;
			}
			public function getDetalCount() {
				return $this->detalCount;
			}
			public function getInfo() {
				$info = parent::getInfo() . 'Количество деталей: ' . $this->detalCount;
				return $info;
			}
		}
		class BroshkaProduct extends Product {
			private $razmer;
			public function __construct($name, $category, $price, $availability, $razmer) {
				parent::__construct($name, $category, $price, $availability);
				$this->razmer=$razmer;
			}
			public function getRazmer() {
				return $this->razmer;
			}
			public function getInfo() {
				$info = parent::getInfo() . 'Размер брошки: ' . $this->razmer;
				return $info;
			}
		}

        $tovar = new PazzleProduct("Синий Трактор", "пазлы", 1500, "под заказ", 26);
        echo $tovar->getInfo();  
?>		