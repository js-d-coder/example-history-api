<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Heroes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <style media="screen">
            img {
                display: inline;
                max-width: 100%;
                height: auto;
            }
            .circle {
                display: inline-block;
                border-radius: 50%;
                overflow: hidden;
                border: 3px solid transparent;
            }
            .circle.active {
                border: 3px solid;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid text-center">
            <h1>Pick a character</h1>
        </div>
        <div class="container gallery my-5">
            <div class="row">
                <div class="col-4 text-right"><a class="circle" href="/holmes"><img width="200" height="200" src="img/holmes.jpg" alt="Image of Sherlock Holmes"></a></div>
                <div class="col-4 text-center"><a class="circle" href="/watson"><img width="200" height="200" src="img/watson.jpg" alt="Image of Dr. John Watson"></a></div>
                <div class="col-4 text-left"><a class="circle" href="/moriarty"><img width="200" height="200" src="img/moriarty.jpg" alt="Image of Professor Moriarty"></a></div>
            </div>
        </div>
        <div class="container details">
            <div class="row">
                <div class="col-xs-12"><h2 class="title px-3"></h2></div>
                <div class="col-xs-12"><p class="desc px-3"></p></div>
            </div>
        </div>
        <script src="js/jquery.js" charset="utf-8"></script>
        <script src="js/main.js" charset="utf-8"></script>
    </body>
</html>
