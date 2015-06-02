<?php
	function jshref($url=""){
		return "window.location.href='$url'";
	}
	function sessm($key,$val){
		return (isset($_SESSION[$key]) && $_SESSION[$key]==$val);
	}
	function init_db(){
		global $DB,$db_data;
		if($DB==null){
			$DB = new mysqli( $db_data['host'] , $db_data['user'] , $db_data['pass'] , $db_data['db']);
			Sql::init($DB);
		}
	}
	function closedb(){
		global $DB;
		if($DB!=null)
			$DB->close();
	}
	function getval($key,$arr){
		 return (isset($arr[$key]) ? $arr[$key] : null );
	}
	function post($key){
		return getval($key,$_POST);
	}
	function get($key){
		return getval($key,$_GET);
	}
	function sets($key,$val){
		$_SESSION[$key]=$val;
	}
	function gets($key){
		return $_SESSION[$key];
	}
	function load_view($view,$inp=array()){
		foreach($inp as $key=>$val){
			$$key=$val;
		}
		$view="php/views/".$view;
		if(file_exists($view))
			include $view;
		else
			echo "MM Error : Unable to load view ".$view." Line ".__LINE__." in file ".__FILE__ ;
	}

?>