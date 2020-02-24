<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <style>
        body{padding:0px;margin:0px;background-image:url('bg.jpg');background-repeat: no-repeat;background-size:cover;
            background-position:center center;background-attachment: fixed;}
        main{
            margin:160px auto;
            width:820px;
            padding-bottom:40px;
            background-color:rgb(255,255,255,0.3);
            text-align: center;
            border-radius: 8px;
        }
        h1{
            color:white;
            font-family:Helvetica, sans-serif;
            padding-top:150px;
            font-size: 64px;
        }
        .prazan{
            margin:-136px auto;
            z-index:2;
            border: 10px solid white;
            border-radius: 6px;
            width:331px;
            height:90px;
        }

        a{
            margin-top:180px;
            padding: 20px;
            border-radius: 4px;
            text-align: center;
            display: inline-block;
            color:#383736;
            text-decoration: none;
            padding-left: 40px;
            padding-right: 40px;
            font-family:Helvetica, sans-serif;
            position: relative;
            font-weight: 700;
            font-size: 15px;
            letter-spacing: 2px;
            background-color:#b2b2b2;
            border: 2px #383736 solid;
            text-transform: uppercase;
            outline: 0;
            overflow:hidden;
            z-index: 1;
            cursor: pointer;
            transition:         0.08s ease-in;
            -o-transition:      0.08s ease-in;
            -ms-transition:     0.08s ease-in;
            -moz-transition:    0.08s ease-in;
            -webkit-transition: 0.08s ease-in;
        }
        a:hover{
            color:white;
            background-color:rgba(255, 0, 0, 0);
        }
    </style>
</head>
<body>
    <main>
        <h1>Welcome</h1>
        <div class="prazan"></div>
        <a href="next.php">NEXT</a>
    </main>
</body>
</html>