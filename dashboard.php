<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- bootstrap cdn  -->
           
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ends here--------------------------------------------------------------------------------------- -->

     <!-- importing google fonts  -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&family=Roboto&display=swap" rel="stylesheet">
     <!-- ends here  -->

     <!-- fontawsome import here------------------------------------- -->
     <script src="https://kit.fontawesome.com/8dc03a4776.js" crossorigin="anonymous"></script>
     <!-- ends here -->

     <!-- styles ------------------------------------------------------->
     <link rel="stylesheet" href="dashboard.css">
     <!-- ends here  -->

<?php
      include "conn.php";
      include "session.php";
?>
</head>
<body>
    <section id="ContainerDashboard" class="row">

    <!-- navimcons -->
          <div class="col-sm-1" id="navIcons">
            <ul class="d-flex flex-column align-items -center justify-space-evenly">
              <li class="d-flex flex-column align-items-center justify-content-center py-4" id="profile">
                     <a href="#" class="text-decoration-none">
                          <img src="#" alt="profile">
                     </a>
                     <span class="text-white">
                     <!-- username -->
                     <?php echo $login_session; ?>
                     </span>
                     <span class="text-white">
                    <?php
                         $sql =  "SELECT name,email FROM student WHERE userid = '$login_session' ";
                         $result = $conn->query($sql);
                         if ($result->num_rows > 0) {
                              // output data of each row
                              while($row = $result->fetch_assoc()) {
                                echo  $row["name"] ;
                              }
                         }


                    ?>
                     </span>
              </li>
              <li class="py-4 elem">
                     <a href="#" class="d-flex flex-column text-decoration-none">
                          <i class="fa fa-home"></i>
                          <span>
                             Home
                          </span>
                     </a>
              </li>
              <li class="py-4 elem">
                     <a href="attendance.php" class="d-flex flex-column text-decoration-none">
                          <i class="fa fa-user-check"></i>
                          <span>
                             Attendance
                          </span>
                     </a>
              </li>
              <li class="py-4 elem">
                     <a href="#" class="d-flex flex-column text-decoration-none">
                          <i class="fa fa-money"></i>
                          <span>
                             Fees
                          </span>
                     </a>
              </li>
              <li class="py-4 elem">
                     <a href="#" class="d-flex flex-column text-decoration-none">
                          <i class="fa fa-group"></i>
                          <span>
                             Faculty
                          </span>
                     </a>
              </li>
              <li class="py-4 elem">
                     <a href="#" class="d-flex flex-column text-decoration-none">
                          <i class="fa fa-envelope"></i>
                          <span>
                             Feedback
                          </span>
                     </a>
              </li>
              <li class="py-4 elem">
                     <a href="#" class="d-flex flex-column text-decoration-none">
                          <i class="far fa-calendar"></i>
                          <span >
                             calendar
                          </span>
                     </a>
              </li>
              <li class="py-4 elem">
                     <a href="logout.php" class="d-flex flex-column text-decoration-none">
                          <i class="fa fa-gear"></i>
                          <span>
                             Settings
                          </span>
                     </a>
              </li>
              <li class="py-4 elem">
                     <a href="logout.php" class="d-flex flex-column text-decoration-none">
                          <i class="fa fa-sign-out"></i>
                          <span>
                             Logout
                          </span>
                     </a>
              </li>
              
              
            </ul>
          </div>


          <!-- main body  -->
          <div class="col-sm-10 px-1 d-flex align-items-center justify-content-center" id="mainBody">

          <div class="cont row">
                  <div class="col-sm-12 my-2 px-0" id="mainHeaderCont">
                     1
                  </div>
                  <div class="col-sm-12" id="performance">
                     <div class="row">
                          <div class="col-sm-3" id="vertical">
                               <div id="vertCont">
                               <div class="text-center text-white h5">
                                               Performance 
                                         </div>
                                        
                               </div>
                          </div>
                          <div class="col-sm-9" id="horizontal">
                              <div class="row">
                                    <div class="col-sm-12 my-1">
                                         3
                                    </div>
                                    <div class="col-sm-12 my-1">4</div>
                              </div>
                          </div>
                     </div>
                  </div>
          </div>

          </div>

          <!-- activity log -->
          <div class="col-sm-1" id="activityLog">
            <ul class="d-flex flex-column align-items-center justify-space-evenly">
                
              
            </ul>
          </div>
    </section>
    
    <script src="chart.js"></script>
</body>
</html>