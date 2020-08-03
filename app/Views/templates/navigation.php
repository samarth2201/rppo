<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
		
		<script src="<?= base_url("jquery.js") ?>"></script>
		<script src="<?= base_url("popper.js") ?>"></script>
		<script src="<?= base_url('bootstrap.js') ?>"></script>
		<script src="<?= base_url('script1.js') ?>"></script>

		
		<link rel="stylesheet" href="<?= base_url('bootstrap.css')?>">
		
</head>
<body>
 


<!-- Navigation bar -->
<nav class="navbar navbar-dark bg-primary navbar-expand">
		<ul class="navbar-nav">
			<li class="nav-item"><a class="nav-link  text-white" href="/show/home">Home</a></li>
			<li class="nav-item"><a class="nav-link  text-white" href="/show/reports">Reports</a></li>
			<?php if($_SESSION['type']==1): ?>
			<li class="nav-item"><a class="nav-link  text-white" href="/show/banks">Manage-Banks</a></li>
			<li class="nav-item"><a class="nav-link  text-white" href="/show/register">Manage-Users</a></li>

		    <?php endif; ?>		
			</ul>	 
 </nav>
 


