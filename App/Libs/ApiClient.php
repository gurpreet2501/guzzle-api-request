<?php 
namespace App\Libs;
require 'vendor/autoload.php';
use GuzzleHttp\Client;

class ApiClient
{
	
	function __construct()
	{
		$this->params = [];
		$this->conn = new Client();
	}

	function set($key,$value){
		 $this->params[$key] = $value;	
		 return $this;
	}

	function getParams(){
		return $this->params;
	}

	function exec(){
		$resp = $this->conn->request('POST', 'http://zorango-api.com/v1', [
			  'form_params' => $this->getParams()
			]);

		$contents = $resp->getBody()->getContents();

		$parsed = json_decode($contents);

		if(!$parsed)
			throw new Exception('Unable to parse json response > '.$contents);
			
		 return $parsed;
			

	}
   


}
