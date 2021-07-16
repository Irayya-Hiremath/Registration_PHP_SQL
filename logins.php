
<?php
   
   include 'dbcon.php';


    if(isset($_POST['submit'])){

        $email=$_POST['email'];
        $password=$_POST['password'];

        $email_search ="SELECT * FROM registration WHERE email='$email'";
        $query=mysqli_query($con,$email_search);

        $email_count=mysqli_num_rows($query);

        if ($email_count){

            $email_pass=mysqli_fetch_assoc($query);

            $db_pass=$email_pass['password'];

            $pass_decode=password_verify($password, $db_pass);


            if($pass_decode){
                echo"login successful";

            }else{
                echo"password incorect";
            }

        }
        else{
            echo"invalid email";
        }

    }


?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="style.css">



<div class="container">
<hr>
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Get started with your free account</p>
	<p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
	</p>
	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
	
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input class="form-control" placeholder="Email address" type="email" name="email" required >
    </div> 

    

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder=" Enter password" type="password" name="password" required >
    </div> 

                    
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary btn-block" required > Log In </button>
    </div>     
    <p class="text-center"> Don't Have an account? <a href="index.php">Create Account</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->
