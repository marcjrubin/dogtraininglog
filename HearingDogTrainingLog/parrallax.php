<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Parallax Show!</title>
        <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/about.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/form.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/logentry.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/navigation.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/footer.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/parallax.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="assets/js/parallax.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
            include 'NavigationBar.php';
        ?> 
        
        <section id="firstPart" class="content-container">
            <div class="content-body">
                <h1>Juneau, Alaska</h1>
                <p>
                    This is our first cruise port of call after 2 days in the sea from Seattle all the way to Juneau. We got to experience the gold panning and collected some gold. After that,
                    we went to Mendenhall Glacier to see the glacier and waterfall. Finally, we went to a salmon bake to eat Alaskan dish - glazed salmon and the fixin'. 
                </p>
            </div>
        </section>  
        
        <div class="parallax-container" data-parallax="scroll" data-image-src="./assets/img/Alaska1.JPG"></div>
        
        <section class="content-container">
            <div class="content-body">
                <h1>Glacier Hike</h1>
                <p>
                    The next port of call, Skagway, Alaska which is a small town and is a big for all bush pilots to fly in for grocery shopping on weekly basis. Don't expect to have something in the 
                    store you need because by the time you need it, it's gone already. Note the hiker, he's the assistant hiking guide. I wish it was me who does the hiking down that route. 
                </p>
            </div>
        </section> 
        
        <div class="parallax-container2" data-parallax="scroll" data-image-src="./assets/img/Alaska2.JPG"></div>
        
        <section class="content-container">
            <div class="content-body">
                <h1>Glacier Bay Park Part I</h1>
                <p>
                    The cruise took the route to Glacier Bay National Park in southeast Alaska and we took a photo of the glacier's wall facing us. We got to witness the calves breaking away 
                    from the glacier wall. It was thunderous loud! 
                </p>
            </div>
        </section> 
        
        <div class="parallax-container3" data-parallax="scroll" data-image-src="./assets/img/Alaska3.JPG"></div>
        
        <section class="content-container">
            <div class="content-body">
                <h1>Glacier Bay Park Part II</h1>
                <p>
                    Stepping back from the glacier wall through the eyes of a photographer, that is where glacier lies and ice floats away from the wall. And also you can see the seal resting on
                    the ice in the image. 
                </p>
            </div>
        </section>   
        
        <div class="parallax-container4" data-parallax="scroll" data-image-src="./assets/img/Alaska4.JPG"></div>
        
        <section class="content-container">
            <div class="content-body">
                <h1>Seattle, WA</h1>
                <p>
                    Seattle is the gateway to Alaska via cruise or plane. Seattle is very vibrant city with plenty of sightings to visit and also is the most disability-friendly city with 
                    many opportunities for the disabled. 
                </p>
            </div>
        </section>  
        
        <div class="parallax-container5" data-parallax="scroll" data-image-src="./assets/img/Alaska5.JPG"></div>
        
        <section class="content-container">
            <div class="content-body">
                <h1>The End</h1>
                <p>

                </p>
            </div>
        </section>
        
        <script type="text/javascript">
            $('.parallax-container').parallax({imageSrc: '/assets/img/Alaska1.JPG'});
            $('.parallax-container2').parallax({imageSrc: '/assets/img/Alaska2.JPG'});
            $('.parallax-container3').parallax({imageSrc: '/assets/img/Alaska3.JPG'});
            $('.parallax-container4').parallax({imageSrc: '/assets/img/Alaska4.JPG'});
            $('.parallax-container5').parallax({imageSrc: '/assets/img/Alaska5.JPG'});
        </script>
        
        <?php
            include 'Footer.php';
        ?>
    </body>
</html>
