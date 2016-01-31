<?php
	class SingletonLogs
	{
		private static $singletonLogs;
		
		private function __construct() {}
		private function __wakeup() {}
		private function __clone() {}
		
		public static function getInstance() {
			if (self::$singletonLogs === null) {
				self::$singletonLogs = new SingletonLogs();
				echo 'Nova instancia da classe SingletonLogs<br>';
			} else {
				echo 'A classe já foi instanciada!<br>';
			}
			
			return self::$singletonLogs;
		}
	}
	
	class Client
	{
		public function __construct() {
			$logs = SingletonLogs::getInstance();
			$logs2 = SingletonLogs::getInstance();
			$logs3 = SingletonLogs::getInstance();
		}
	}
	
	$client = new Client();
	
?>