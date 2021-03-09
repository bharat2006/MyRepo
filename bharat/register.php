 <?php
 include('conn.php');

 if(isset($_POST['sign_up']))
         {
         
           $name=addslashes($_POST['name']);
           $email=addslashes($_POST['email']);
           $password=addslashes($_POST['password']);
           $date=addslashes(date('y-m-d'));
           $status=addslashes($_POST['status']);
           
           if($name=="" or  $email=="" or   $password=="")
           {
         
             echo "<script>alert('Please Fill All Details')</script>";
           }
           else
           {
             $select=mysqli_query($conn,"select * from `customers` where email='".$email."' and status=1  ");
             $res=mysqli_fetch_assoc($select);
         
             if($res['email']==$email)
             {
         
              echo "<script>alert('Email Already Exit')</script>";
            }
            else
            {
             $insert=mysqli_query($conn,"insert into `customers` set name='".$name."',email='".$email."',password='".$password."',date='".date('y-m-d')."',status=1 ");
            
         
             if($insert)
             {
               echo "<script>alert('Successfully Registered....')</script>";
           }
           else
           {
              echo "<script>alert('Something Went Wrong.....')</script>";
           }
         }
         }
         }
         ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" >
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            
                            
                            <div class="form-group form-button">
                                <input type="submit" name="sign_up" id="sign_up" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="index.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

      
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>