<?php
$serverName = "127.0.0.1:3308";
$userName = "root";
$password = "";
$db = "contact_db";

$conn = new mysqli($serverName, $userName,$password, $db);


if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }


  if(isset($_POST['send'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);
 
    $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email'  AND message = '$msg'") or die('query failed');
    
    if(mysqli_num_rows($select_message) > 0){
       $message[] = 'message sent already!';
    }else{
       mysqli_query($conn, "INSERT INTO `contact_form`(name, email,message) VALUES('$name', '$email','$msg')") or die('query failed');
       $message[] = 'message sent successfully!';
    }
 
 }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/27f28a8215.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="images/logo7.png" class="logo">
                <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#portfolio">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <i class="fa-solid fa-xmark" onclick="closemenu()"></i>
                </ul>
                <i class="fa-solid fa-bars" onclick="openmenu()"></i>
            </nav>
            <div class="header-text">
                <p>Software Engineer
                </p>
                <h1>Hi, I'm <span>Edi</span> Morina <br> a Web Developer</h1>
                <a href="https://www.linkedin.com/in/edi-morina-b28ab7244/" class="button">CONNECT WITH ME</a>
            </div>
        
        </div>
    </div>

<!----------------about------------>
<div id="about">
    <div class="container">
        <div class="row">
            <div class="about-col-1">
                <img src="images/user1.jpg">
            </div>
            <div class="about-col-2">
                <h1 class="sub-title">About Me</h1>
                <p>Hello, I am Edi, a computer engineering student at the University of Pristina.I have always been fascinated by computer sciences. They have always been in my interest so I decided to pursue my dream and continue it as a profession. Now that I am studying computer sciences I am even more fascinated with the algorithms and logic needed.</p>
                <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                    <p class="tab-links" onclick="opentab('experience')">Experience</p>
                    <p class="tab-links" onclick="opentab('education')">Education</p>
                </div>
                <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>Web Development</span><br>HTML, CSS,  JavaScript, PHP</li>
                        <li><span>Application Development</span><br>C++, Java, Python, Django</li>
                        <li><span>Web/App Design</span><br>ReactJs, JavaFx</li>
                    </ul>
                </div>
                <div class="tab-contents" id="experience">
                    <ul>
                        <li><span>2022</span><br>Full Stack Web Developer - Academy P??rProgramera</li>
                        <li><span>2019</span><br>The Django Platform And Python Programming - Academy jCoders</li>
                        <li><span>2018</span><br>Python Basic Programming Module - Academy jCoders</li>
                        <li><span>2017</span><br>Concepst Of Computer Structers,Web Design and Coding Music With SonicPi - Academy jCoders</li>
                    </ul>
                </div>
                <div class="tab-contents" id="education">
                    <ul>
                        <li><span>2019 - Present</span><br>Computer Engineering, University of Prishtina, Kosovo</li>
                        <li><span>2016 - 2019</span><br>High School, Sejdi Kryeziu, Kamenice</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</div>

<!-------------Projects------------>
<div id="portfolio">
    <div class="container">
        <h1 class="sub-title">My Work</h1>
        <div class="work-list">
            <div class="work">
                <img src="images/work-1.png">
                <div class="layer">
                    <h3>Desktop Application</h3>
                    <p>In this project, we worked as a group during my studies at the faculty, where I contributed to all parts. The project is a desktop
                        application where the entire university system is enabled digitally and within it there is a chat application to communicate with students, it is made with Java.</p>
                    <a href="https://github.com/AndiHasanaj/SistemetShperndara"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="images/work-2.png">
                <div class="layer">
                    <h3>Web Application</h3>
                    <p>In this project we also worked as a group where we implemented the two Breadth First Search and Depth First Search algorithms in the Pac Man game and we worked with javascript.</p>
                    <a href="https://github.com/EgzonGa/Pac-Man"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="images/work-3.png">
                <div class="layer">
                    <h3>Website</h3>
                    <p>The website for the latest news and updates that was implemented during my studies at the faculty, mainly worked with php.</p>
                    <a href="https://github.com/Aulon1/INT20_21_Gr21"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
        <a href="https://github.com/EdiMorina1" class="btn">See more</a>
    </div>
    
</div>


<!------------Contact------------>
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me</h1>
                <p><i class="fa-solid fa-paper-plane"></i>edimorina03@gmail.com</p>
                <p><i class="fa-solid fa-phone"></i>+38349758293</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/edi.g.morina/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/edi-morina-b28ab7244/"><i class="fa-brands fa-linkedin"></i></a>
                </div>
                <a href="images/CV-Edi Morina.pdf" download class="btn btn2">Donwload CV</a>
            </div>
            <div class="contact-right">
                <form action="" method="post">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" rows="6" placeholder="Your Message"></textarea>
                    <button type="submit" name="send" class="btn btn2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>




<script>

    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");

    function  opentab(tabname){
        for(tablink of tablinks){
            tablink.classList.remove("active-link");
        }
        for(tabcontent of tabcontents){
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }


</script>

<script>
    var sidemeu = document.getElementById("sidemenu");

    function openmenu(){
        sidemeu.style.right = "0";
    }

    function closemenu(){
        sidemeu.style.right = "-200px";
    }

</script>


</body>
</html>

