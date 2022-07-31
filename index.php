<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edrp</title>



    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



     <!-- importing google fonts  -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&family=Roboto&display=swap" rel="stylesheet">
     <!-- ends here  -->

     <!-- fontawsome import here------------------------------------- -->
     <script src="https://kit.fontawesome.com/8dc03a4776.js" crossorigin="anonymous"></script>
     <!-- ends here -->

     <!-- styles ------------------------------------------------------->
     <link rel="stylesheet" href="style.css">
     <!-- ends here  -->
<body class="d-flex align-items-center justify-content-center">
   <section id="LoginPage">
     <div class="row" id="parent">
        <div class="col-sm-5" id="GlassCont">
             <div class="d-flex justify-content-center align-items-center" id="GlassMorph">
                 <div class="d-flex flex-column">
                    <span class="text-dark py-4">
                        Login To Get Info On
                     </span>
                    <span class="border-2 border-start border-dark ">
                        <i class="fa fa-circle" class="text-dark"></i>
                        <span class="px-2">
                            Fee Structure
                        </span>
                    </span>   
                    <span class="border-2 border-start border-dark ">
                        <i class="fa fa-circle" class="text-dark"></i>
                        <span class="px-2">
                            Teachers
                        </span>
                    </span> 
                    <span class="border-2 border-start border-dark ">
                        <i class="fa fa-circle" class="text-dark"></i>
                        <span class="px-2">
                            Feedback
                        </span>
                    </span> 
                    <span class="border-2 border-start border-dark ">
                        <i class="fa fa-circle" class="text-dark"></i>
                        <span class="px-2">
                            Results
                        </span>
                    </span> 
                    <span class="border-2 border-start border-dark ">
                        <i class="fa fa-circle" class="text-dark"></i>
                        <span class="px-2">
                            E-library
                        </span>
                    </span> 
                    <span class="border-2 border-start border-dark ">
                        <i class="fa fa-circle" class="text-dark"></i>
                        <span class="px-2">
                            Attendance
                        </span>
                    </span> 
                    <span class="border-2 border-start border-dark ">
                        <i class="fa fa-circle" class="text-dark"></i>
                        <span class="px-2">
                            Notice
                        </span>
                    </span>  
                 </div>
             </div>
        </div>
        <div class="col-sm-7 d-flex align-items-center justify-content-center" id="FormCont">

            <div id="borderCont" class="d-flex flex-column align-items-center justify-content-center">
                     <span class="h4 my-2" id="LoginHeading">
                        LOGIN
                     </span>
                     <form action="#" class="was-validated" id="Form">
                         <div class="d-flex flex-column my-4">
                            <input type="text" placeholder="Enter UserID" name="userID" class="px-1">
                            <div class="valid-feedback">Valid.</div>
                             <div class="invalid-feedback">Please fill out this field.</div>
                         </div>
                         <div class="d-flex flex-column my-4">
                            <input type="password" placeholder="Enter Password" name="password" class="px-1">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                            <a href="#" class="small px-3">Forgot password?</a>
                         </div>
                         <div class="d-flex flex-column my-3">
                            <input type="submit" name="submit" value="Login" class="px-1">
                         </div>
                        </form>
                         <div class="d-flex flex-column my-3 px-1" id="otherLogin">
                                <span class="text-dark h5">
                                    Login Using Other Options
                                </span>   
                                <div class="d-flex">
                                    <div class="d-flex flex-column" id="GoogleLogin">
                                          <a href="#" class="text-decoration-none">
                                            <i class="fa fa-google text-white"></i>
                                          <small style="color:#272727;">
                                            Google
                                          </small>
                                          </a>
                                    </div>
                                    <div class="d-flex flex-column" id="FacebookLogin">
                                        <a href="#" class="text-decoration-none">     
                                             <i class="fa fa-facebook text-white"></i>
                                             <small style="color:#272727;">
                                                Facebook
                                             </small>
                                        </a>
                                    </div>

                                </div>
                        
                         </div>
                     <!-- </form> -->
            </div>
               
        </div>

     </div>    
   </section>
</body>
</html>