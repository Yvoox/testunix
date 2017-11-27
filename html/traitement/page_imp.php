<?php
$uploaddir = '../uploads/';
$uploadfile = $uploaddir . basename($_FILES['temp_file']['name']);
$extensions = array('.gcode', '.STL', '.stl', '.GCODE');
$extension = strrchr($_FILES['temp_file']['name'], '.');
$gcode = array('.gcode','.GCODE');
$stl = array('.STL', '.stl');
if(!in_array($extension, $extensions)){
	echo('<script>window.location="../search_file.html";</script>');
}
else{
	session_start();
	move_uploaded_file($_FILES['temp_file']['tmp_name'], $uploadfile);
	if(in_array($extension,$gcode)){
		$_SESSION['root']=basename($_FILES['temp_file']['name']);
		$_SESSION['size']=filesize($uploadfile);
		echo('<script>window.location="../start_gcode.php";</script>');
	}
	if(in_array($extension,$stl)){
		$_SESSION['root']=basename($_FILES['temp_file']['name']);
		$_SESSION['size']=filesize($uploadfile);
		echo('<script>window.location="../start_stl.html";</script>');
	}
}
?>