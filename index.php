<?php 

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once'DataBaseInterface.php';
include_once'ColorController.php';
 if(isset($_GET['action']) && isset($_GET['controller'])){
 	if(class_exists($_GET['controller']))
 	{
 		$ds =new $_GET['controller'];
 		$params =new $_GET;



 		unset($params['controller']);
 		 unset($params['action']);

 		 call_user_func_array(array($ds,$_GET['action']), $params);


 	}
 	
 	

 }
 function setUpEnv()
 {
 	$handle = fopen(".env","r");
 	if($handle)
 	{
 		while($line = fgets($handle) !== false)
 		{
 			putenv(trim($line));
 		}
 	
 	fclose($handle);
    }
 }


  
?>