<?php 
session_start();
$id = $_POST['id'];
$model = $_POST['data'];
$selected[$id] = $model;
// $_SESSION['selected'] = $selected;
session_destroy();
if(!isset($_SESSION['selected'])){
	$_SESSION['selected'] = array();
}
if ( array_key_exists($_POST['id'], $_SESSION['selected']) ) {
	// $_SESSION['selected'] = array();
	// $selected[$_POST['id']] = $model;
echo "exists";
}else{
	array_push($_SESSION['selected'], $selected);
}

// var_dump($_SESSION['id']);
// var_dump($_SESSION['models']);

// echo json_encode(array("message"=>$_SESSION['selected']));
$this->session->sess_destroy();
?>