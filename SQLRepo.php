<?php
require_once 'IRepository.php';


class SQLRepo implements IRepository
{  
    private $con;
    public function _construct()
	{
		$this->con 	= mysqli_connect(getenv('DB_IP'),getenv('DB_USER'),getenv('DB_PASSWORD'),getenv('DB_NAME'),getenv('DB_PORT'));
	}

	 public function getAlColors()
	 {
         $con = $this->con;

 	$stmt = $con->prepare("select * from color");
 	$stmt->execute();
 	$stmt->bind_result($ID, $color_name);
    $content = [];

 	while($stmt->fetch())
 	{
 		array_push($content, $color_name);
 	}

    $stmt->close();
    $this->$con->close();
         return $content;

	 }
	 public function getColorById($Id)
	  {
          $stmt = $this->con->prepare("select * from color where id=?");
 	stmt->bind_param("i", $Id);
 	$stmt->execute();
 	$stmt->bind_result($ID, $color_name);

 	
 	while($stmt->fetch())
 	{
 	$output[] = array
 	(
 	'id' => $ID ,
 	'color_name' =>$color_name
 	   );
 	}
 	echo json_encode($output);
    $stmt->close();
    $con->close();

   }
	  

}


?>