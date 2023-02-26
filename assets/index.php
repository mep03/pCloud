<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Share+Tech+Mono|Montserrat:700");

        * {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            color: inherit;
        }

        body {
            background-image: -o-linear-gradient(330deg, #4f0088 0%, #000000 100%);
            background-image: linear-gradient(120deg, #4f0088 0%, #000000 100%);
            height: 100vh;
        }

        h1 {
            font-size: 45vw;
            text-align: center;
            position: fixed;
            width: 100vw;
            z-index: 1;
            color: #ffffff26;
            text-shadow: 0 0 50px rgba(0, 0, 0, 0.07);
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            font-family: "Montserrat", monospace;
        }

        div {
            background: rgba(0, 0, 0, 0);
            width: 70vw;
            position: relative;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            margin: 0 auto;
            padding: 30px 30px 10px;
            border-radius: 15px;
            -webkit-box-shadow: 0 0 150px -20px rgba(0, 0, 0, 0.5);
            box-shadow: 0 0 150px -20px rgba(0, 0, 0, 0.5);
            z-index: 3;
        }

        P {
            font-family: "Share Tech Mono", monospace;
            color: #f5f5f5;
            margin: 0 0 20px;
            font-size: 17px;
            line-height: 1.2;
        }

        span {
            color: #f0c674;
        }

        i {
            color: #8abeb7;
        }

        div a {
            text-decoration: none;
        }

        b {
            color: #81a2be;
        }

        @-webkit-keyframes slide {
            from {
                right: -100px;
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                opacity: 0;
            }

            to {
                right: 15px;
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }
        }

        @keyframes slide {
            from {
                right: -100px;
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                opacity: 0;
            }

            to {
                right: 15px;
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }
        }
    </style>
    <title>403 Forbidden</title>
</head>

<body>
    <h1>403</h1>
    <div>
        <p>> <span>ERROR CODE</span>: "<i>HTTP 403 Forbidden</i>"</p>
        <p>
            > <span>ERROR DESCRIPTION</span>: "<i>Access Denied. You Do Not Have The Permission To Access This Page On
                This Server</i>"
        </p>
        <p>
            > <span>ERROR POSSIBLY CAUSED BY</span>: [<b>The requested URL was execute access forbidden, directory listing
                denied</b>...]
        </p>
        <p>
            >
            <span>SOME PAGES ON THIS SERVER THAT YOU CAN ACCESS</span>: [<a href="/">Home</a>]
        </p>
        <p>> <span>HAVE A NICE DAY SIR</span></p>
    </div>

    <script type="text/javascript">
        var str = document.getElementsByTagName("div")[0].innerHTML.toString(),
            i = 0;
        (document.getElementsByTagName("div")[0].innerHTML = ""),
        setTimeout(function() {
            var e = setInterval(function() {
                i++,
                (document.getElementsByTagName("div")[0].innerHTML =
                    str.slice(0, i) + "|"),
                i == str.length &&
                    (clearInterval(e),
                        (document.getElementsByTagName("div")[0].innerHTML = str));
            }, 10);
        }, 0);
    </script>
    <script type="text/javascript">
        document.onkeydown = function(e) {
            if (event.keyCode == 123) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                return false;
            }
        }
    </script>
</body>

</html>
