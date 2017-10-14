<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hearing Dog Training Log</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/about.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/form.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/logentry.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/navigation.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/footer.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/parallax.css" rel="stylesheet" type="text/css"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="assets/js/parallax.min.js" type="text/javascript"></script>
        
        <style>
            .content-container h1 {
                text-align: center;
            }
            
            .content-container p {
                text-align: center;
            }
            
            .content-container {                
                height: 350px;
            }
            
            h1 {
                margin-top: 75px;
            }
        </style>
    </head>
    <body>
        <?php 
            include 'includes/NavigationBar.php';
        ?>
        
        <div class="parallax-container" data-parallax="scroll" data-image-src="./assets/img/GraduateInGarden.jpg"></div>
        
        <section class="content-container">
            <div class="content-body">
                <h1>Login</h1><br>
                <p>
                    <a href="Login.php" class="btn btn-primary btn-lg active">Login</a><br><br>
                    Login to enter your training log
                </p>
            </div>
        </section>
        
        <div class="parallax-container2" data-parallax="scroll" data-image-src="./assets/img/LabsChasingBalls.jpg"></div> 
        
        <section class="content-container">
            <div class="content-body">
                <h1>About</h1><br>
                <p>
                    <a href="About.php" class="btn btn-primary btn-lg active">About</a><br><br>
                    Learn more about the site
                </p>
            </div>
        </section>
        
        <div class="parallax-container3" data-parallax="scroll" data-image-src="./assets/img/LabsOnStairs.jpg"></div> 
        
        <section class="content-container">
            <div class="content-body">
                <h1>Contact</h1><br>
                <p>
                    <a href="Contact.php" class="btn btn-primary btn-lg active">Contact</a><br><br>
                    Get in touch with us for questions and comments
                </p>
            </div>
        </section>
        
        <div class="parallax-container4" data-parallax="scroll" data-image-src="./assets/img/LabsRunning.jpg"></div> 
        
        <section class="content-container">
            <div class="content-body">
                <h1>Register</h1><br>
                <p>
                    <a href="CreateNewAccount.php" class="btn btn-primary btn-lg active">Register</a><br><br>
                    Create an account and start logging away 
                </p>
            </div>
        </section>
        
             
                
        <script type="text/javascript">
            $('.parallax-container').parallax({imageSrc: '/assets/img/GraduateInGarden.jpg'});
            $('.parallax-container2').parallax({imageSrc: '/assets/img/LabsChasingBalls.jpg'});
            $('.parallax-container3').parallax({imageSrc: '/assets/img/LabsOnStairs.jpg'});
            $('.parallax-container4').parallax({imageSrc: '/assets/img/LabsRunning.jpg'});
        </script>
        
        

        <?php 
            include 'includes/Footer.php';
        ?>
        
    </body>
</html>
