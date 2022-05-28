<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
          include "conn.php"; 
    ?>

    <title>Login-dashboard</title>
    <style>
           #btn-auth{
               display: none;
           }
           .navbar{
               top: 0;
               z-index: 999;
               position: fixed;
           }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
      <?php
            include "navbar.php";
                    
      ?>
      <section class="row landing" style="height: 95vh;">
                <div class="col-sm-2 bg-danger" style="height: 95vh;">
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nisi odio optio repudiandae sequi, nam deleniti quas accusantium cupiditate voluptatibus provident veritatis sint cum praesentium illo culpa omnis dolores voluptates dolor non quidem similique. Fuga eaque facilis nobis magnam quos similique minus dolor voluptate illum!
                         <div class="container-fluid">
                             <a href="#" class="btn btn-dark" style="width: 100%; bottom:0; position=relative;>Settings</a>
                         </div>
                </div>
                <div class="col-sm-9 bg-light" style="height: 95vh;">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe natus, necessitatibus vitae possimus voluptatem quisquam dolores, ipsam nihil consequuntur eaque incidunt aut itaque quam iusto dolore consequatur quo perferendis laudantium praesentium in non numquam alias, pariatur temporibus? Architecto saepe ipsa veritatis pariatur accusantium dolores veniam.
                </div>
      </section>
</body>
</html>