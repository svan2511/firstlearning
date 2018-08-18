<?php

interface loggerInterface
{
	public function logmsg($msg);
}

class logger implements loggerInterface
{
	public function logmsg($msg)
	{
		echo "Logging Message with DB: $msg ";
		
	}
	
}
class loggeremail implements loggerInterface
{
	public function logmsg($msg)
	{
		echo "Logging Message with Email: $msg ";
		
	}
	
}
class loggerfile implements loggerInterface
{
	public function logmsg($msg)
	{
		echo "Logging Message with File: $msg ";
		
	}
	
}

class Userprofile
{
	private $logger;
	public function createUser()
	{
		 echo " Creating User:";
	
     $this->logger->logmsg('User Created');

 
	}
	public function UpdateUser()
	{
		echo " Updating User:";
	
     $this->logger->logmsg('User Updated');
	
	}
	public function deleteUser()
	{
		echo "Deleting User :";	
		
     $this->logger->logmsg('User deleted ');
	

	}
	public function __construct(loggerInterface $loggerinterfaceobject)
	{
		$this->logger = $loggerinterfaceobject;
	}
	
}

function getobj($type)
{
	switch($type)
	{
		case 'file':
		return new loggerfile;
		break;
		case 'database':
		return new logger;
		break;
		case 'email':
		return new loggeremail;
		break;
		
	}
	
}

$obj = getobj('file');
$profile = new Userprofile($obj);
$profile->deleteUser();




?>