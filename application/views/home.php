<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>MMBO</title>
  </head>
  <body>
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="card" style="margin-top: 30px">
					  <div class="card-header text-center">
					    Register Now
					  </div>
					  <div class="card-body">
					   <form method="post" autocomplete="off" action="<?=base_url('welcome/registerNow')?>">
					   	<div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Name</label>
						    <input type="text" placeholder="User Name" name="username" class="form-control" id="name" aria-describedby="name" required>
						    
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Email address</label>
						    <input type="email"  placeholder="Email Address" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputPassword1" class="form-label">Password</label>
						    <input type="password" name="password"  placeholder="User Password"  class="form-control" id="exampleInputPassword1" required>
						  </div>

						 <div class="text-center">
						  <button type="submit" class="btn btn-primary">Register Now</button>
						</div>

						<p>If already have an account, please <a href="<?=base_url('welcome/login')?>">Login</a></p>

						<?php
						if($this->session->flashdata('success')) {	?>
						 <p class="text-success text-center" style="margin-top: 10px;"> <?=$this->session->flashdata('success')?></p>
						<?php } ?>
						
						</form>
					  </div>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
