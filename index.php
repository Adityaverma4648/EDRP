<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edrp</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <style>
         .landingPage{
             width: 100vw;
             height: 80vh;
             /* background-color: ; */
             background-image: linear-gradient(rgba(0,0,0,0.5) , rgba(0,0,0,0.5)), url("./cse.jpg");
             background-repeat: no-repeat;
             background-position: center;
             background-size: cover;
         }
         .nav-link{
            transition: all 0.3 ease-in-out;
                  
         }
         .nav-link:hover{
                  border-bottom: 1px solid yellow;
                  transition: all 0.3 ease-in-out;

         }
         .c1{
             height: 50vh;

         }
         
         form{
             padding: 5rem 1rem;
             /* background-color: yellow; */
             background: #ff6b30;
             backdrop-filter: blur(1rem);
             -webkit-backdrop-filter: blur(1rem);
             background: linear-gradient(rgba(255, 77, 23,0.7) , rgba(255, 77, 23,0.7));
             width: 70%;
         }
         .form-control{
             border: none;
         }




         @media only screen and (max-width : 800px){
            .landingPage{
                height: 100vh;
                 display: flex;
                 flex-direction: column-reverse;
                 padding: 2rem 0px;
             }
             .c2{
             width: 100vw;
             display: flex;
             flex-direction: column;
             justify-content: center ;
             align-items: center;
             padding: 0px 1rem;
             /* background-color:red; */
              }
         }
     </style>
</head>
<body>
      <?php
            include "navbar.php";
                    
      ?>
  <section class="landingPage container-fluid row text-white d-flex justify-content-center align-items-center">

         <div class="col c1 text-white d-flex justify-content-center align-items-center">
                <?php
                //connection
                    include "conn.php";
                // variables are ready
                if ($_SERVER["REQUEST_METHOD"] == "POST") {


                    $username = $_POST['username'];
                    
                    $password = $_POST['password'];
                
                    // $session = $_POST['session'];
                    
                    $stmt = $conn-> prepare("INSERT student_login(username,password) VALUES(?,?)");
                                             
                                             
                    //redirection to post-login dashboard
                    if($_POST['submit']){
                                   header("Location: login_dashboard.php");
                     }

                     
                    // BINDING
                    $stmt->bind_param("ss", $username , $password);    
                    $stmt-> execute();
                    $stmt->close();
                    $conn->close();

                    

                //binding and data insertion by user

                    

                }
                     
                ?>
                <form action="" method="post" class="d-flex flex-column jusitify-content-center align-items-center">
                <h3 class="text-white text-center p-2">Student's Login</h3>
                      <input type="text" name="username" placeholder="User Id"  class=" form-control bg-dark text-white p-2" required>
                      <br>
                      <input type="password" name="password" placeholder="Enter your password" class=" form-control bg-dark text-white p-2" required>
                      <br>
                      <input type="submit" name ="submit" class=" form-control btn btn-success" value="login" placeholder="login">

                </form>
         </div>
         <div class="col c2 d-flex flex-column jusitfy-content-center align-items-center p-3">
             <h1 class="text-center">Welcome to EDRP ** College</h1>
             <br>
           <p class="text-center">
           Login to view attendance , faculty information , feedback , fee-structure, fee history, test results and Sem results 
           </p>
         </div>
  </section>
  <section class="footer container-fluid bg-dark p-2">
  <div class="container-fluid">
                       <a href="#" class="navbar-brand text-white">
                       EDRP
                       </a>
                </div>
                <div class="container-fluid text-center text-light">
                         <a href="#" class="text-white btn">Opportunities</a>
                         |
                         <a href="#" class="text-white btn">Jobs</a>
                         |
                         <a href="#" class="text-white btn">Communities</a>
                         |
                         <a href="#" class="text-white btn">Women</a>
                         |
                         <a href="#" class="text-white btn">privacy</a>
                         |
                         <a href="#" class="text-white btn">Policies</a>
                         

                </div>
                <div class="container-fluid text-center text-muted">
                         Copyrights Reserved @2022,all rights reserved.
                </div>
  </section>
  

</body>
</html>