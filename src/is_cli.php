<?php

if(!defined("IS_CLI")){
	define("IS_CLI", substr(strtolower(php_sapi_name()), 0, 3) == "cli");
}

if(!function_exists("is_cli")){
	function is_cli(){
		return substr(strtolower(php_sapi_name()), 0, 3) == "cli";
	}
}