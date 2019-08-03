<?php
class ColorController extends DataBaseInterface
{
  public function getAllColors()
	{ 
		$colors= $this->repo->getAllColors();
		var_dump($colors);
		

	}
   public function getColorById($Id,$color_name)
{   
    $color= $this->repo->getColorById($id);
    var_dump($color);

   }
}




?>