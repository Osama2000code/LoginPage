<?php
include_once "header.php";
?>

<div class="jumbotron">
	<div class="alert alert-success" role="alert">
		<?php if(logged_in()) {
			header("LOCATION:admin.php");
		}else{
			header("LOCATION:Guest.php");
		}
		?>
	</div>
	<h1 class="text-center"> Home </h1>
</div>

<?php
include_once "footer.php";
?>