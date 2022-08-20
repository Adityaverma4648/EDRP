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
    //   include "session.php";
?>
</head>
<body>
    <section id="ContainerDashboard" class="row">
          <div class="col-sm-1" id="navIcons">
            <ul>
              <li class="d-flex flex-column">
                     <a href="#" class="text-decoration-none">
                          <img src="#" alt="profile">
                     </a>
                     <span class="text-white">
                     username
                     </span>
                     <span class="text-white">
                         userid
                     </span>
              </li>
            </ul>
          </div>
    </section>
    
</body>
</html>