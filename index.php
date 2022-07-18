<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">

	<!-- <section class="py-4"> -->

	    <div class="container">

		    <div class="row">
		    	<div class="col-md-6">
		    		<!-- <div class="card"> -->
		    			<div class="card-header">
				             <center><h2 class="text-dark">Signup Page</h2></center>
				             <p class="text-dark">please fill in this form to create an account</p>
				        </div>
				        <div class="card-body">
				        	<form action="detail.php" method="post">
				        	<div class="row">
				        		<div class="col-md-12">
				        			<div class="form-group">
					                    <label>Email</label>
				                        <input type="text" name="email" placeholder="Email" class="form-control">
				                    </div>
				                </div>
				                <div class="col-md-12">
				        			<div class="form-group">
					                    <label>Password</label>
				                        <input type="text" name="password" placeholder="Password" class="form-control">
				                    </div>
				                </div>
				                <div class="col-md-12">
				        			<div class="form-group">
					                    <label>Repeat Password</label>
				                        <input type="text" name="repeatpass" placeholder="Repeat Password" class="form-control">
				                    </div>
				                </div>
				                <div class="col-md-12">
				                	<button type="submit" name="submit" class="btn btn-info">Submit</button>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
		</div>
	</section>
				

</body>
</html>