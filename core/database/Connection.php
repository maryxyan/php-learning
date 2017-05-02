<?php


class Connection
{
	
	public static function make($config)
	{
		try {
	
		
	return new PDO(

			$config['connection'].';dbname='.$config['name'],

			$config['username'],

			$config['password'],

			$config['options']

		);

	}catch (PDOEception $e){

		die ($e->getMessage());
		}

	}
}

//$pdo = Connection::make();