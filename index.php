<html>
    <head>
        <title>Haider Alsalih</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/queriy.css" />
        <link rel="stylesheet" type="text/css" href="vendoes/grid.css" />
        <link rel="stylesheet" type="text/css" href="vendoes/animated.css" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900" rel="stylesheet">
        <script src="https://unpkg.com/ionicons@4.4.4/dist/ionicons.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://unpkg.com/ionicons@4.4.4/dist/css/ionicons.min.css" rel="stylesheet">

        
    </head>
    
    <body>
        
<!--HEADER & MAIN-NAV-->
        <header>
            <nav>
            <div class="row">
                 
                <ul class="main-nav js--main--nav">
                    <li><a href="#about-skills">ABOUT ME</a></li>
                    <li><a href="#myWork">MY WORK</a></li>
                    <li><a href="#cv">CV</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    
                </ul>
                <a class="mobile-nav ja--mobile-nav"><i class="icon ion-md-menu"></i></a>
            </div>
            </nav>
            <div class="row">
                <div class="hero-text-box js--wp-2">
                
                    <h1>HEllo,I'am<br>
                        haider alsalih</h1>
                    <h3>QA/Software testar, UI/UX designer & Frontent Developer.From Sweden, Malmö </h3> 
                </div>
            </div>
            
                 <div class="img-logo js--wp-1" >   
                    <img  src="img/42085911_311194976102479_5944961179842510848_n.png" />
                </div>
            
                
            <div class="iconm js--wp-3">
                       <a href="https://www.linkedin.com/in/haider-alsalih-59725254/" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a> 
                        <a href="" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a  href="https://github.com/Haider86?tab=repositories" target="_blank"><ion-icon name="logo-github"></ion-icon></a>
                    </div>
        </header>
        
        
        
        
<!--SECTION MY WORK-->
        <section id="about-skills" class="section-adout js--section-about">
            <div class="row">
                <div class="col span-1-of-2 abaut-me js--wp-6">
                <h2>About me</h2>
                <p>Born 1986, Baghdad Iraq, examen as software testare at EC-Utbildning Malmö. <br><br> than I start to learn programering by myself, under 5 years leaning jearny I learnd alot of stafs and I become more.  </p>
            
            </div>
            <div class="col span-1-of-2 js--wp-4">
                <div class="icon-respo ">
                <h2>Skills</h2>
                
                <ul class="icon-img">
                    <li><img src="img/skills-icon/selenium-png-8.png"></li>
                    <li><img src="img/skills-icon/logo.png"></li>
                    <li><img src="img/skills-icon/Jira-PBXDom.png"></li>
                    <li><img src="img/skills-icon/Git_icon.svg.png"></li>
                </ul>
                
                
                <ul class="icon-img">
                    
                    <li><img src="img/skills-icon/HTML_Logo.png"></li>
                    <li><img src="img/skills-icon/css3.png"></li>
                    <li><img src="img/skills-icon/javascript_633988.png"></li>
                    <li><img src="img/skills-icon/JQuery_logo-512.png"></li>
                </ul>
                
                <ul class="icon-img">
                    <li><img src="img/skills-icon/2000px-Python-logo-notext.svg.png"></li>
                    <li><img src="img/skills-icon/c--logo-icon-0.png"></li>
                    <li><img src="img/skills-icon/sql-server-icon-png-7.png"></li>
                    <li><img src="img/skills-icon/php-512.png"></li>
                </ul>
                
            </div>
            </div>
            </div>
        </section>
        
        <section id="myWork" class="section-work">
            
            <div class="row ">
                <h2>My work</h2>
                <p class="p">Forms of a work I had performed</p>
            </div>
            
            <div class="row bro brocss js--wp-5">
                <div class="col span-1-of-2">
                <img class="browser-img" src="img/bros/My_safari_template.png" />
                <p>AKKA GRILLEN a restuarant </p>
                </div>
                <div class="col span-1-of-2">
               <a ><img  class="browser-img" src="img/bros/My_safari_template.png" /></a>
                     <p>AKKA GRILLEN a restuarant </p>
            </div>
            </div>
        </section>
        
        
        <section id="cv" class="section-cv">
            
            <div class="row">
                <h2 class="hresume">Resume</h2> 
            </div>
            <div class="row resume">
                <div class="col span-1-of-2 js--wp-8">
                   <a href="doc/Haider_Alsalih_-_CV.pdf" download> <button  class="btn" s><i class="fa fa-download"></i> Download Resume As PDF</button></a>
<!--                <input class="btn btn-hero" type="button" value="Download resume as PDF" />-->
            </div>
            
                <div class="col span-1-of-2 js--wp-7">
               <a href="doc/Haider_Alsalih_-_CV.pdf" target="_blank"> <img  class="resume-img" src="img/00001.jpg" /></a>
                </div>
            </div>
        
        
        </section>
        
        
        <section  id="contact" class="row section-contact">
            
            <div class="row" id="form">
                <h1>contact me </h1>
                <form method="post" action="mail.php" class="input-form">
                    <div class="row">
                        <?php
                         if (isset($_GET['success'])) {    if ($_GET['success'] == 1) {        echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";    }    if ($_GET['success'] == -1) { echo "<div class=\"form-messages error\">Oops! Something went wrong, please try again.</div>";    }}
                    
                        ?>
                        
                        
                        <input id="name" name="name" type="text" placeholder="*Your Name"  required />
                            
                    </div>
                    <div class="row">
                        <input id="email" name="email" type="email" placeholder="*Your Email" required />
                    </div>
                    <div class="row">
                        <textarea name="message" placeholder="Your massage"></textarea>
                    </div>
                    <input class="btn-massage" type="submit" value="SEND MASSAGE" />
                </form>
                <div class="row">
                    
                </div>
            </div>
        </section>
        
        
        <footer class="footer-section">
            
            <div class="row">
                <div class="icon-footer">
                       <a href="https://www.linkedin.com/in/haider-alsalih-59725254/" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a> 
                        <a href="" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a  href="https://github.com/Haider86?tab=repositories" target="_blank"><ion-icon name="logo-github"></ion-icon></a>
                    </div>
                <p class="p-footer">&copy;2018 Haider Alsalih</p>
                </div>
            
        
        
        </footer>
        
        
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="vendoes/jquery.waypoints.min.js"></script>
    
    </body>


</html>