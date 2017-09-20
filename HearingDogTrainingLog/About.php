<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>About Us</title>
        <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/navigation.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/footer.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/about.css" rel="stylesheet" type="text/css"/>       
        <link href="assets/css/navigation.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="assets/js/scripts.js" type="text/javascript"></script>
        <script src="assets/js/about.js" type="text/javascript"></script>   
    </head>
    
    <body onload="currentYearCopyright()">          

        <?php
            include 'NavigationBar.php';
        ?>        
        
        <script src="assets/js/navigation.js" type="text/javascript"></script>

    <main>
        <header>
          <h1>About Hearing Dog Training Log</h1>
        </header>
        
        <section>
            <h2>Vision</h2>
            
            <p>
              The Hearing Dog Training Log website enable users to enter
              the training log at anytime and anywhere. This is to eliminate 
              the use of pen and paper to enter the log. So forth, tracking 
              the log online have made it easier for users. Furthermore, 
              the log allows the users to browse the training history on 
              what the dog had been trained.
            </p>
            
            <h2>Purpose</h2>
            
            <p>
              The users enter the log each time the training occurs and to 
              allow users reduce the amount of paper for log tracking. The 
              users will not forget by browsing the training history for 
              training analysis. 
            </p>
            
            <h2>Who is it for?</h2>
            
            <p>The site is for the graduates with the hearing dog.</p>   
            
            <figure>
              <img class="imgTraining" alt="Hearing Dog in training" src="assets/img/TeamTraining.jpg" />
              <figcaption>
                Team Training - Marc Rubin and Millie
              </figcaption>
            </figure>
            
            <h3 class="hover"><a href="#">Create a new account</a></h3>
            <h3 class="hover"><a href="#">Sign up with Facebook Login</a></h3>
            <h3 class="hover"><a href="#">Sign up with Twitter Login</a></h3>

            <br />

            <h3 class="hover"><a href='Bio.php'>Developer's Bio</a></h3> 
        </section>

        <aside>
            <figure>
                <img class="imgMikeRoyer" src="assets/img/MikeHD.jpg" alt="Courtesy of Mike Royer" />
                <figcaption>
                  Courtesy of Mike Royer
                </figcaption>
            </figure>      
        </aside>
        
    </main> 
  
    <?php 
        include 'Footer.php';
    ?>
  
</body>
</html>
