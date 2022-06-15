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
           /* .navbar{
               top: 0;
               z-index: 999;
               position: fixed;
           } */
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand navbar-info bg-light">
                    <a class="navbar-brand" href="#">EDRP</a>
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation"></button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-2 mt-2 mt-lg-0">
                            <li class="nav-item active">
                                 <a class="nav-link" href="#">Home <span class="visually-hidden">(current)</span></a>
                            </li>
                              <li class="navitem">
                                  <a href="#" class="nav-link">Students Info</a>
                              </li>
                              <li class="navitem">
                                  <a href="#" class="nav-link">Notice</a>
                              </li>
                              <li class="navitem">
                                  <a href="#" class="nav-link">Library</a>
                              </li>
                              <li class="navitem">
                                  <a href="#" class="nav-link">Fees counter</a>
                              </li>
                              <li class="navitem">
                                  <a href="#" class="nav-link">Feedback</a>
                              </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="#">Action 1</a>
                                    <a class="dropdown-item" href="#">Action 2</a>
                                </div>
                            </li>
                        </ul>
                        <form class="d-flex my-2 my-lg-0">
                            <input class="form-control me-sm-2" type="text" placeholder="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
      <section class="container-fluid row landing bg-dark d-flex jusitfy-content-center align-items-center" style="height: 95vh;">
                <div class="col-sm-3 bg-danger text-white" style="height: 95vh;">
                       <div class="row d-flex flex-column">
                       <div class="col container-fluid bg-warning">
                         <a href="#" class="btn btn-warning btn-block p-2 h4" style="width: 100%; bottom:0; position:relative;">Log out</a>
                         </div>
                         
                         <div class="col container-fluid bg-dark">
                         
                             <a href="#" class="btn btn-dark btn-block p-2 h4" style="width: 100%; bottom:0; position:relative;">Settings</a>
                         </div>
                       </div>

                </div>
                <div class="col-sm-9 bg-secondary text-white" style="height: 95vh;">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe natus, necessitatibus vitae possimus voluptatem quisquam dolores, ipsam nihil consequuntur eaque incidunt aut itaque quam iusto dolore consequatur quo perferendis laudantium praesentium in non numquam alias, pariatur temporibus? Architecto saepe ipsa veritatis pariatur accusantium dolores veniam.
                </div>
      </section>
</body>
</html>