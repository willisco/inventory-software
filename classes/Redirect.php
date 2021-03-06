<?php

class Redirect
{
	public static function to($location=null) {
		if($location){
			if(is_numeric($location)) {
				switch($location) {
					case 404:
						header('HTTP/1.0 404 NOT FOUND');
						include 'includes/errors/404.php';
						exit();
					break;

					case 502:
					 	header('HTTP/1.0 502 NOT PERMITTED');
					 	include 'includes/errors/502.php';
					 	exit();
					break;

					case 503:
					 	header('HTTP/1.0 503 FAILURE');
					 	include 'includes/errors/503.php';
					 	exit();
					break;

					case 401:
					 	header('HTTP/1.0 401 SYSTEM FAILURE');
					 	include 'includes/errors/401.html';
					 	exit();
					break;
				}
			}

			header('Location: '.$location);
		    exit();
		}
		
	}
}