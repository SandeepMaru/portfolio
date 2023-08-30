<?php
//error_reporting(0);
    //Database connection
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "portfoliocontact";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn) 
    {
        echo "Connected successfully";
    }
    else
    {
        echo "connection failed".mysqli_connect_error();
    }

    //if(isset($_POST['fullname']) || isset($_POST['emailaddress']) || isset($_POST['mobilenumber']) || isset($_POST['emailsubject']) || isset($_POST['yourmessage']))
    if(isset($_POST['register']))
    {
        $id = $_POST['id'];
        $fullname = $_POST['fullname'];
        $emailaddress = $_POST['emailaddress'];
        $mobilenumber = $_POST['mobilenumber'];
        $emailsubject = $_POST['emailsubject'];
        $yourmessage = $_POST['yourmessage'];

        $query = "INSERT INTO contactdata values('$id','$fullname','$emailaddress','$mobilenumber','$emailsubject','$yourmessage')";
        $data = mysqli_query($conn,$query);

        //if($data)
        //{
            //echo "data inserted";
        //}
        //else
        //{
            //echo "Failed";
        //}
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <header class="header">
        <a href="#" class="logo">Portfolio</a>

        <i class='bx bx-menu' id="menu-icon"></i>
        
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#projects">Projects</a>
            <a href="#skills">Skills</a>
            <!--<a href="#certificates">Certifications</a>-->
            <a href="#contact">Contact</a>
        </nav>

    </header>

    <!--home section design-->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, Its Me</h3>
            <h1>Sandeep Maru</h1>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <p>" In a world of data, the possibilities are limitless,<br> and I'm here to transform them into reality... "</p>
            <div class="social-media">
                <a href="https://github.com/SandeepMaru"><i class='bx bxl-github' ></i></a>
                <a href="https://www.linkedin.com/in/sandeep-maru-6001541b1/"><i class='bx bxl-linkedin' ></i></a>
                <a href="mailto:sandeepmaru654321@gmail.com"><i class='bx bxl-gmail'></i></a>
            </div>
            <a href="https://drive.google.com/file/d/1aIZseUGwO0VXxdrILTTaPZBD6xTbQX94/view?usp=sharing" class="btn">Download CV</a>
        </div>

        <div class="home-img">
            <img src="hello.png" alt="">
        </home-img></div>
    </section>

    <!--About section design-->
    <section class="about" id="about">
        <div class="about-img">
            <img src="inside.png" alt="">
        </div>

        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Data Scientist!</h3>
            <p>I'm Sandeep Maru, a passionate and innovative Data Scientist with a strong knack for extracting insights from complex datasets with a blend of analytical skills, coding skills, and a curious mind, I thrive on uncovering patterns that empower informed decision-making.
                My journey into the domain of data began during my academic years, where I earned my degree in B.Tech CSE specialisation in (Business Analytics and Optimization) from Sandip University. Throughout my education, I developed a deep appreciation for the art of transforming raw data into meaningful narratives. This ignited my determination to delve deeper into the world of Data Science.
                <h2 id="dots">...</h2>
                <p id="more">What sets me apart is my holistic approach to data science. I don't just stop at building models, I understand the importance of effective communication. As a lifelong learner, I am constantly honing my skills and I have hands-on experience with popular data science libraries and tools. This technical versatility allows me to tackle challenges from various angles and create innovative solutions.
                    <br><br>Let's transform data into decisions together. Feel free to connect with me by providing your contact details in the Contact section or you can get my contact details  by downloading "Download CV" from the home page. So let's explore the boundless opportunities that data science has to offer.
                </p>
            </p>
            <button onclick="myFunction()" id="myBtn" class="btn">Read more</button>
            
            <!--<a href="#" class="btn">Read More</a>-->
        </div>
    </section>

    <!--project section design-->
    <section class="projects" id="projects">
        <h2 class="heading">My<span> Projects</span></h2>
    
        <div class="projects-container">
            <div class="projects-box">
                <img src='images/airline price.jpg' alt="">
                <div class="projects-layer">
                    <h4>Airline Price Detection</h4>
                    <p>Data Cleaning, Feature Engineering, Feature Selection,... </p>
                    <a href="https://github.com/SandeepMaru/Airline-Price-Detection"><i class='bx bx-link-external' ></i></a>
                </div>
            </div>
            
            <div class="projects-box">
                <img src="images/drowziness.jpg" alt="" height="220">
                <div class="projects-layer">
                    <h4>Drowsiness Detection System</h4>
                    <p>Data Cleaning, Keras, TensorFlow,...</p>
                    <a href="https://github.com/SandeepMaru/Drowsiness-Detection"><i class='bx bx-link-external' ></i></a>
                </div>
            </div>

            <div class="projects-box">
                <img src='images/brain tumor.jpg' alt="" height="220">
                <div class="projects-layer">
                    <h4>Brain Tumor Detection</h4>
                    <p>Keras, TensorFlow, CNN,...</p>
                    <a href="https://colab.research.google.com/drive/1MFfH4UQI6lLN6xerhr65iUvBU6xegv87?usp=share_link"><i class='bx bx-link-external' ></i></a>
                </div>
            </div>

            <div class="projects-box">
                <img src="images/movie prediction.jpg" alt="" height="220">
                <div class="projects-layer">
                    <h4>Movie Prediction System</h4>
                    <p>Feature Engineering, NLP, Stemming,...</p>
                    <a href="https://github.com/SandeepMaru/Movie-Prediction"><i class='bx bx-link-external' ></i></a>
                </div>
            </div>

            <div class="projects-box">
                <img src="images/sms spam.jpg" alt="">
                <div class="projects-layer">
                    <h4>Spam SMS Detection</h4>
                    <p>Text Cleaning, NLP, Stemming,...</p>
                    <a href="https://github.com/SandeepMaru/SMS-Spam-Detection"><i class='bx bx-link-external' ></i></a>
                </div>
            </div>

            <div class="projects-box">
                <img src="images/car price.jpg" alt="">
                <div class="projects-layer">
                    <h4>Car Price Prediction</h4>
                    <p>Feature Engineering, Data Cleaning, Feature Selection,...</p>
                    <a href="https://github.com/SandeepMaru/Car-Price-Prediction"><i class='bx bx-link-external' ></i></a>
                </div>
            </div>
        </div>
    </section>

    <!--skills section design-->
    <section class="skills" id="skills">
        <h2 class="heading">My<span> Skills</span></h2>
    
        <div class="skills-container">
            <div class="skills-box">
                <a href="#" class="btn">Python</a>
            </div>

            <div class="skills-box">
                <a href="#" class="btn">Machine Learning</a>
            </div>

            <div class="skills-box">
                <a href="#" class="btn">Natural Language Processing</a>
            </div>

            <div class="skills-box">
                <a href="#" class="btn">Deep Learning</a>
            </div>

            <div class="skills-box">
                <a href="#" class="btn">MySQL</a>
            </div>

            <div class="skills-box">
                <a href="#" class="btn">NoSQL</a>
            </div>

            <div class="skills-box">
                <a href="#" class="btn">Data Scraping</a>
            </div>

            <div class="skills-box">
                <a href="#" class="btn">Django</a>
            </div>

            <div class="skills-box">
                <a href="#" class="btn">OpenCV</a>
            </div>

            <div class="skills-box">
                <a href="#" class="btn">MS-Excel</a>
            </div>
            
            <div class="skills-box">
                <a href="#" class="btn">Tableau</a>
            </div>

            <div class="skills-box">
                <a href="#" class="btn">PowerBI</a>
            </div>

        </div>
    </section>

    <!--contact section design-->
    <section class="contact" id="contact">
        <h2 class="heading">Contact<span> Me!</span></h2>

        <form action="" method="post">
            <div class="input-box">
                <input type="text" placeholder="Full Name" name="fullname">
                <input type="email" placeholder="Email Id" name="emailaddress">
            </div>

            <div class="input-box">
                <input type="number" placeholder="Contact Number" name="mobilenumber">
                <input type="text" placeholder="Email Subject" name="emailsubject">               
            </div>

            <textarea name="yourmessage" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" value="Send Message" class="btn" name="register">
        </form>
    </section>

    <!--footer section design-->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2023 by Maru | All Rights Reserved.</p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt' ></i></a>
        </div>
    </footer>

    <!--scroll reveal-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <script type="text/javascript" src="script.js"></script>
    
</body>
</html>
