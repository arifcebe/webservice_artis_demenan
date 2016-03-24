<?php
	class Demenan{
		public $name = "";
		public $status = "";
		public $panggilanSayang = "";
	}

	$e = new Demenan();
	$e->name="ira";
	$e->status = "yangku";
	$e->panggilanSayang = "honey";

	echo json_encode($e);
?>