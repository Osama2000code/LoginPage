<?php
include_once "header.php";


?>
<h1 class="text-center  ">Welcome Admin</h1>

<div class="jumbotron">
	<div class="alert alert-info" role="alert">
  <section class="py-5  container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h4 class="fw-light">This Is For Admin </h4>
        <p class="lead text-muted">This Is The Admin Page And The Admin Is <strong><?php  echo "Welcome " . get_name($_SESSION['email']);  ?> </strong></p>
       <p>
	   <a href="logout.php" class="btn btn-danger my-2">logout</a>
	   </p>
      </div>
    </div>
  </section>

	</div>
</div>


<?php
include_once "footer.php";
?>