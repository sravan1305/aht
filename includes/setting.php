<?php

	define("server",'laptop');//server = laptop,server,poorvi

	if(server=="poorvi"){
		define('HOST','http://poorvi.cse.iitd.ac.in/~cs1120233/aht/',false); // false mean that HOST cannot be used as hOsT
		define('ROOT', '/home/btech/cs1120233/private_html/aht/', false);
		define('CDN', HOST.'photo/', false);
		$db_data = array() ;
		$db_data['host'] = 'poorvi.cse' ;
		$db_data['user'] = 'mohit' ;
		$db_data['pass'] = 'mohitsaini' ; 
		$db_data['db'] = 'mohit' ;
	}
	else if(server=="laptop"){
		define('HOST','http://localhost/aht/',false); // false mean that HOST cannot be used as hOsT
		define('ROOT', '/var/www/aht/', false);
		define('CDN', HOST.'photo/', false);
		if(false){
			$db_data = array() ;
			$db_data['host'] = '10.237.20.8' ;
			$db_data['user'] = 'mohit' ;
			$db_data['pass'] = 'mohitsaini' ; 
			$db_data['db'] = 'mohit' ;
		}
		else{
			$db_data = array() ;
			$db_data['host'] = 'localhost' ;
			$db_data['user'] = 'root' ;
			$db_data['pass'] = 'mohitsaini' ; 
			$db_data['db'] = 'aht' ;
			$info=array();
		}
	}
	else if(server=="server"){
		define('HOST','http://54.149.49.212/aht/',false); // false mean that HOST cannot be used as hOsT
		define('ROOT', '/var/www/html/aht/', false);
		define('CDN', HOST.'photo/', false);
		$db_data = array() ;
		$db_data['host'] = 'localhost' ;
		$db_data['user'] = 'root' ;
		$db_data['pass'] = 'mohit' ;
		$db_data['db'] = 'aht' ;
	}

	$info=array();
	$info['title']="AHT";


?>