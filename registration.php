<!doctype html>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <title>Registration Form</title>

    <style>
        .divide{
            position: relative;
            text-align:center ;
            margin: 15px 0px;
        }
        .divide span{
            padding: 8px;
        position: relative;
       
        
        }
        
    </style>
  </head>
  <body>

<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
  $username =   $_POST['username'];
  $email =  $_POST['email'];
  $mobile =  $_POST['mobile'];
  $password =  $_POST['password'];
  $cpassword =  $_POST['cpassword'];

  $pass  = password_hash($password,PASSWORD_BCRYPT);
  $cpass = password_hash($cpassword,PASSWORD_BCRYPT);
  
  $userquery = "select * from  registration where username = '$username'";
   $query = mysqli_query($con,$userquery);

   $usercount = mysqli_num_rows($query);

   if($usercount>0){
    ?>
    <script>alert("username already exist")</script> 
<?php
   }
   else{
    if($password === $cpassword){
      $insertquery = "insert into registration (username, email, mobile, password, cpassword ) values ( '$username', '$email' ,'$mobile','$pass','$cpass')";
        $iquery = mysqli_query($con,$insertquery);
        if($iquery){
          
    ?>
    <script>alert("signup successfull")</script>

    <?php
}
else{
    
    ?>
    <script>alert("signup not successfull")</script>
    
    <?php
        }

      
    }
    else{
        
    ?>
    <script>alert(" password not  matching")</script>
    
    <?php
    }
   }



}





?>



  

<!-- Making strting signup form -->

<div class="container">

    <div class="card bg-light">
        <div class="card-body mx-auto">  
           <h4 class="card-tittle mt-3 text-center ">Create Acount</h4>
           <p class="text-center">Get started signup here ....... </p>

           <a href="" class="btn btn-block btn-success">
            <i class="fab fa-google"></i>
            Login with Google</a>


           <a href="" class="btn btn-block btn-primary">
             <i class="fab fa-facebook"></i>
             Login with Facebook </a>


             <p class="divide ">
                <span>OR</span>
             </p>


             <form action="" method= "POST">

                    <div class="form-group input-group">

                         <div class="input-group-prepend">

                           <span class="input-group-text">
                            <i class=" fa fa-user"></i>
                            </span>
                         </div>
                        <input type="text" name = "username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" required>
                    </div>


                    <div class="form-group input-group">

                        <div class="input-group-prepend">

                          <span class="input-group-text">
                           <i class=" fa fa-envelope"></i>
                           </span>
                        </div>
                       <input type="email" name ="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"  required>
                   </div>


                   <div class="form-group input-group">

                    <div class="input-group-prepend">

                      <span class="input-group-text">
                       <i class=" fa fa-phone"></i>
                       </span>
                    </div>
                    <select class="custom" style="max-width:80px;">
                        <option >+91</option>
                        <option >+92</option>
                        <option >+93</option>
                    </select>
                   <input type="number" name= "mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter phone"  required>
               </div>



               <div class="form-group input-group">

                <div class="input-group-prepend">

                  <span class="input-group-text">
                   <i class=" fa fa-lock"></i>
                   </span>
                </div>
               <input type="password"  name = "password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter password"  required>
           </div>

           
           <div class="form-group input-group">

            <div class="input-group-prepend">

              <span class="input-group-text">
               <i class=" fa fa-unlock"></i>
               </span>
            </div>
           <input type="password" name = "cpassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter confirm password"  required>
       </div>
       <button  type = "submit" name = "submit"  class="btn btn-block btn-outline-success">Create account</button>
           
        <p class=" text-center mt-3">Have an account <a href="/loginsystem1/login.php">Log in</a></p>
             </form>

        </div>

    </div>

</div>























    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>