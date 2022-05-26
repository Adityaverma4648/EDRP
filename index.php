<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edrp</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="header">
        <div class="logo">
            <h1>LOGO</h1>
        </div>
        <nav class="navbar">
            <ul class="navlists">
                <li class="navlinks">
                    <a href="#">Home</a>
                </li>
                <li class="navlinks">
                    <a href="#">Impotant-Notices</a>
                </li>
                <li class="navlinks">
                    <a href="#">Notice</a>
                </li>
            </ul>
        </nav>
        <div class="toggle">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>

        </div>
    </section>
    <section class="main" id="main">
        <video width="auto" height="100%" controls autoplay loop id="player">
             <source src="/hello.mp4" type="video/mp4" id="vidsrc">
             your browser donot this video
        </video>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="form-reg">
             
             <label for="UserId">User-Id</label>
             <br>
             <input type="text" name = "userid" placeholder="Enter your ID" required>
             <br>

             <label for="password">password</label>
             <br>
             <input type="password" name = "password" placeholder="Enter your Password" required>
             <br>
               
             <label for="session">Choose your Session</label>
             <br>
             <input list="sessions" name="session" id="session" placeholder="select.." required>
                 <datalist id="sessions">
                        <option value="Jan-22(New Session)">
                        <option value="Jun-21(Old Session">
                 </datalist>
                 <br>
                  <button type="submit" id="submit" name="submit">LOGIN</button>
                  <button type="reset" id="reset" name="reset">RESET</button>
            </form>

            <?php
               // JSON
                  $memberJSON = '{{
                    "id": 1,
                    "name": "Aditya verma",
                    "userid" : "SSGI20203367",
                    "password" : "6261997767",
                    "born": "31 Oct 2001",
                },
                {
                    "id": 2,
                    "name": "Steven Miller",
                    "userid" : "SSGI20203301",
                    "password" : "9131373524",
                    "born": "24 Apr 2000",
                },
                {
                    "id": 3,
                    "name": "Daniel James",
                    "userid" : "SSGI20203301",
                    "password" : "9752461233",
                    "born": "05 May 1970",
                }}
                
                ';
                $member = json_decode($memberJSON , true);
                echo $member[2]['id'];
                  
 
               // variables
               if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $userid = test_input($_POST["userid"]);
                $password = test_input($_POST["password"]);
                $session = test_input($_POST["session"]);

              }
              
              function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
              }

               // connecting DB
               $conn = new mysqli('localhost' , 'root' , '', 'edrp');
            
                        if($conn -> connect_error){
                            die("couldn't connect : " . $conn->connect_error);
                        }
                        // echo "Connection established :)";
                        
                 $stmt = $conn-> prepare("INSERT INTO login(userid , password , session) VALUES(?,?,?)");
           
                  // BINDING
                  $stmt->bind_param("sss", $userid, $password, $session);    
                  $stmt->execute();
                  $stmt->close();
                  $conn->close();
             ?>
    </section>
    <section class="footer">
           <div class="link">
           <a href="#" class="goals">Vision</a>
            <a href="#" class="goals">Mission</a>
            <a href="#" class="goals">Policies</a>
            <a href="#" class="goals">Anti Ragging</a>
            <a href="#" class="goals">Women Grievanance Redressal Cell</a>
            </div>
            <span class="developer"><strong>Developer</strong>: adityaverma4648@gmail.com</span>
    </section>
    <script src="index.js"></script>
</body>
</html>