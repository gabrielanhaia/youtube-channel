<?php
	abstract class IPizza
	{
		public abstract function prepare();
		public function bake() {}
		public function cut() {}
		public function box() {}
	}
	
	class  PepperoniPizza implements IPizza
	{
		public function prepare(){
			//...
		}
	}
	
	class CheesePizza implements IPizza
	{
		public function prepare(){
			//...
		}
	}
	
	class ChickenPizza implements IPizza
	{
		public function prepare() {
			
		}
	}
	
	class SimplePizzaFactory
	{
		// String
		public function makePizza($pizzaName) {
			$pizza = null;
			
			switch($pizzaName) {
				case ('pepperoni'):
					$pizza = new PepperoniPizza();
					break;
				case ('cheese'):
					$pizza = new CheesePizza();
					break;
				case ('chicken'):
					$pizza = new ChickenPizza();
			}
			
			return $pizza;
		}
	}
	
	// Com Simple Factory
	class Client
	{
		public $factory;
		
		public function __construct() {
			$this->factory = new SimplePizzaFactory();
		}
		
		// String
		public function orderPizza($pizzaName) {
			$pizza = null;
			
			$pizza = $this->factory->makePizza($pizzaName);
			
			return $pizza;
		}
	}
	
	// Sem Simple Factory
	class ClientOld
	{
		// String
		public function makePizza($pizzaName) {
			$pizza = null;
			
			switch($pizzaName) {
				case ('pepperoni'):
					$pizza = new PepperoniPizza();
					break;
				case ('cheese'):
					$pizza = new CheesePizza();
					break;
				case ('chicken'):
					$pizza = new ChickenPizza();
				
			}
			
			return $pizza;
		}
	}
?>