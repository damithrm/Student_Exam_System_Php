<?php
    session_start();
?>
<?php
    include "../backend/connection.php";
    $studentId="";
    $password="";

    $errormsg="";
    $suss ="";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $studentId= $_POST["studentId"];
        $password= $_POST["password"];

        do{
            if(empty($studentId)||empty($password)){
                $errormsg="all need";
                break;
            }
            $sql = "INSERT INTO `student_details`(`studentId`, `password`) VALUES ('$studentId','$password')";
            $result = $con->query($sql);

            if(!$result){
                $errormsg = "Invalid Query";
                break;
            }

            $studentId="";
            $password="";

            $suss="added correctly";
            header("location: index.php");

        }while(false);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
    
    <!----===== Boxicons CSS ===== -->
    
    <title>Add Students</title> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Administrator </span>
                    <span class="profession">Admin Panel</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'><img style="width: 90%;" src="icons/menu.png"></i>
        </header>

        <div class="menu-bar">
            <div class="menu">


                <ul class="menu-links">
                    <li  class="nav-link">
                        <a  href="index.php">
                            <i  class='bx bx-menu icon' ><img style="width: 50%;" src="icons/profile.png"></i>
                            <span  class="text nav-text">Student List</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a  href="Instructors.php">
                            <i class='bx bx-bell icon'><img style="width: 50%;" src="icons/instructor.png"></i>
                            <span class="text nav-text">Instructor List</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a style="background-color: #00bbff;"  href="AddStu.php">
                            <i class='bx bx-pie-chart-alt icon'><img style="width: 50%;" src="icons/addstudent.png"></i>
                            <span class="text nav-text">Add Students</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="AddIns.php">
                            <i class='bx bx-heart icon' ><img style="width: 50%;" src="icons/addinstructor.png"></i>
                            <span class="text nav-text">Add Instructor</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="../Login/logout.php">
                        <i class='bx bx-log-out icon' ><img style="width: 50%;" src="icons/logout.png"></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>        
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Add Students</div>
        <div style="padding: 2%; padding-bottom: 0%;">
            <form action="" method="post">
                <label for="fname">Enter Student Id</label>
                <input type="text" id="fname" name="studentId" value="<?php echo $studentId ?>" placeholder="">
            
                <label for="lname">Enter Password</label>
                <input type="text" id="lname" name="password" value="<?php echo $password ?>" placeholder="">
              
                <input type="submit" value="Save the Student">
              </form>
        </div>
        <div style="padding: 2%; padding-top: 0px;">
        </div>
        <div>
            
        </div>

    </section>

    

    </div>

    <script src="script.js"></script>

</body>
</html>