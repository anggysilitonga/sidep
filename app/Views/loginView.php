<!DOCTYPE html>
<html>
<head>
	<title>SIDEP</title>
</head>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/style.css">
<body>
	
	<main class="form-signin">
	  <form action="<?php echo base_url()?>/Home/login" method="post">
	    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

	    <div class="form-floating">
	      <input type="text" name="username" class="form-control" id="floatingInput" placeholder="username">
	      <label for="floatingInput">Username</label>
	    </div>
	    <div class="form-floating">
	      <input type="password" name="password"class="form-control" id="floatingPassword" placeholder="Password">
	      <label for="floatingPassword">Password</label>
	    </div>

	    
	    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
	    <p class="mt-5 mb-3 text-muted">&copy; 2017–{{< year >}}</p>
	  </form>
	</main>	

	
	<script type="text/javascript" src= "<?php echo base_url() ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>



