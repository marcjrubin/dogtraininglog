<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dog Park Location</title>
        <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/about.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/form.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/navigation.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/footer.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/dogpark.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="assets/js/scripts.js" type="text/javascript"></script>
        <script src="assets/js/dogpark.js" type="text/javascript"></script>
        
    </head>
    <body>
        <?php
            include 'NavigationBar.php';
        ?>
        
        <input id="pac-input" class="controls" type="text" placeholder="Search Box">
        <div id="map-canvas"></div>
            
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXdiIl0X4lCmxMCU62Mez1S3-Rjj3d9Ss&libraries=places&callback=initialize" async defer>
        </script>
                
        <?php
            include 'Footer.php';
        ?>
    </body>
</html>
