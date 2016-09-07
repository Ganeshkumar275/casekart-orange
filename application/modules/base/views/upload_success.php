<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/customer_detail.css">
<ul class="nav-bar">
	<li><a class="active" href="#home">View Design</a></li>
	<li><a href="#news">Selected Design</a></li>
	<li><a href="" class="right"><?php echo ucfirst($this->session->userdata('username')); ?></a></li>
</ul>
<div class="container">
<?php 
if (!isset($error)) {
	foreach ($all_uploads as $key => $value) {
		echo '<div class="thumb_img">';
		echo '<img src="'.base_url().$value->image_path.$value->image_name.'">';
		echo '</div>';
	}
}else{
	print_r($error);
}
?>
</div>