<?php 


  require_once 'SQLRepo.php';
   abstract  class DataBaseInterface
{
	protected $repo;
	public function _construct()
	{
		$this->repo = new SQLRepo();
}
	
?>