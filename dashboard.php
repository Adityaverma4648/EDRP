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
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

     <!--  heat map  -->

     <script src="/path/to/jquery.min.js"></script>
     <script src="js/github_contribution.js"></script>
     <link href="css/github_contribution_graph.css" rel="stylesheet" />


     <?php
     include "conn.php";
     include "session.php";
     ?>
</head>

<body>
     <!-- <section id="ContainerDashboard" class="row">

          <!-- navimcons -->
     <!-- <div id="navIcons" style="width: 8vw">
          <ul class="d-flex flex-column align-items -center justify-space-evenly">
               <li class="d-flex flex-column align-items-center justify-content-center py-4" id="profile">
                    <a href="#" class="text-decoration-none">
                         <img src="#" alt="p">
                    </a>
                    <small class="text-white">
                         <!-- username -->
     <!-- <?php echo $login_session; ?>
     </small>
     <small class="text-white">
          <?php
          $sql =  "SELECT name,email FROM student WHERE userid = '$login_session' ";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
               // output data of each row
               while ($row = $result->fetch_assoc()) {
                    echo  $row["name"];
               }
          }
          ?>
     </small>
     </li>
     <li class="py-4 elem">
          <a href="#" class="d-flex flex-column text-decoration-none">
               <i class="fa fa-home"></i>
               <small>
                    Home
               </small>
          </a>
     </li>
     <li class="py-4 elem">
          <a href="attendance.php" class="d-flex flex-column text-decoration-none">
               <i class="fa fa-user-check"></i>
               <small>
                    Attendance
               </small>
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
               <small>
                    Feedback
               </small>
          </a>
     </li>
     <li class="py-4 elem">
          <a href="#" class="d-flex flex-column text-decoration-none">
               <i class="far fa-calendar"></i>
               <span>
                    calendar
               </span>
          </a>
     </li>
     <li class="py-4 elem">
          <a href="logout.php" class="d-flex flex-column text-decoration-none">
               <i class="fa fa-gear"></i>
               <small>
                    Settings
               </small>
          </a>
     </li>
     <li class="py-4 elem">
          <a href="logout.php" class="d-flex flex-column text-decoration-none">
               <i class="fa fa-sign-out"></i>
               <small>
                    Logout
               </small>
          </a>
     </li>


     </ul>
     </div> -->


     <!-- main body  -->
     <!-- <div class="col-sm-10 px-1 d-flex align-items-center justify-content-center" id="mainBody">

          <div class="cont row d-flex flex-col justify-content-center align-items-center">
               <div class="col-sm-11 my-2 text-light d-flex flex-column justify-content-center align-items-center" id="mainHeaderCont">
                    <div class="d-flex px-5 align-items-center justify-content-end" style="width:100%;cursor:pointer;">
                         <i class="fa fa-bell text-white" style="font-size:23px"></i>
                    </div>
                    <h3 class="d-flex justify-content-center align-items-center" style="height:70%;Width:100%;">Welcome! <?php
                                                                                                                             $sql =  "SELECT name,email FROM student WHERE userid = '$login_session' ";
                                                                                                                             $result = $conn->query($sql);
                                                                                                                             if ($result->num_rows > 0) {
                                                                                                                                  // output data of each row
                                                                                                                                  while ($row = $result->fetch_assoc()) {
                                                                                                                                       echo  $row["name"];
                                                                                                                                  }
                                                                                                                             }
                                                                                                                             ?> </h3>
               </div>
               <div class="col-sm-11" id="performance">
                    <div class="row">
                         <div class="col-sm-2 px-2" id="vertical">
                              <div id="vertCont">
                                   <div class="text-center text-white h5 py-2">
                                        Performance
                                   </div>

                              </div>
                         </div>
                         <div class="col-sm-10" id="horizontal">
                              <div class="row">
                                   <div class="col-sm-12 my-1 d-flex justify-content-center ">
                                        <span class="h5 container text-white py-2">
                                             Attendance
                                        </span>
                                   </div>
                                   <div class="col-sm-12 my-1">
                                        <div class="text-white h5 py-2 px-4">
                                             Performance
                                        </div>
                                        <canvas id="bar_chart" height="50px" width="50px"></canvas>

                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>

     </div> -->

     <!-- activity log -->
     <!-- <div class="col-sm-1" id="activityLog">
          <ul class="d-flex flex-column align-items-center justify-space-evenly">


          </ul>
     </div> 
     </section>-->

     <!-- <script src="chart.js"></script> -->
</body>

</html>