<?php
	// get image string
	$base = $_REQUEST['image'];
	// get file name posted from android
	$filename = $_REQUEST['filename'];

// decode base64
	$binary = base64_decode($base);
	header('Content-Type:bitmap;charset=utf-8');
	// image will be saved on /uploaded images
	$file = fopen('uploadedimages/'.$filename, 'wb');
	//create file
	fwrite($file, $binary);
	fclose($file);

	class Result{
		public $message = "";
	}

	$e = new Result();
	$e->message="gambar sukses diunggah";

	echo json_encode($e);

?>
