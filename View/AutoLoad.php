<?php 
	spl_autoload_register(function ($class_name) { 
	include $class_name . '.php'; 
	}); 
	$obj = new HomeController(); 
	$obj2 = new StaticClass(); 
	echo "objects of HomeController and Static class created successfully";