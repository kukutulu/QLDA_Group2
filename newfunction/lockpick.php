<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="style.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Lockpick Simulator</title>
</head>
    <body style="">
	<input type="button" value="Phá khóa" onclick="start()">
        <div id="wrap">
            <img src="collar.png" alt="" id="collar" />
            <div id="cylinder"></div>
            <div id="driver"></div>
            <div id="pin">
                <div class="top"></div>
                <div class="bott"></div>
            </div>
        </div>
    </body>
</html>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="script.js" type="text/javascript"></script>
