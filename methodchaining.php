<?php 


interface action 
{
	public function walk();
}

class man implements action
{
	public function walk()
	{
		echo 'Man walks 10 km par hour .';
	}
	
}
class car implements action
{
	public function walk()
	{
		echo 'car walks 100 km par hour .';
	}
	
}
class plane implements action
{
	public function walk()
	{
		echo 'Plane walks 1000 km par hour .';
	}
	
}
class useThis
{
	private $useThis;
	public function  __construct($object)
	{
			$this->useThis = $object;
			$this->useThis->walk();
	}
		
		
	
}
$obj = new car();
$objj = new useThis($obj);








/* class database 
{
	
	public function select($select = '*' )
	{
		
		 if(is_string($select))
		 {
			 $arr = explode(',',$select);
			 //print_r($arr);
		 }
		
		
		//echo "SELECT * FROM $table";
		//return $this;
		
	}
	public function where($field,$value)
	{
		echo " WHERE $field = $value ";
		//return $this;
		
	}
	
	
}

$db = new database;
$db->select('id,name,salary'); */


?>