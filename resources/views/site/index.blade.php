<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Gux Project</title>
    <style>
        body,
        html {
            height: 100%;
        }

        #app {
            display: flex;
            height: 100%;
            flex-direction: column;
        }

        .header {
            background: #DDD;
            flex: 1;
            max-height: 100px;
            background-color: #343434;
            font-size: 40px;
            color: #FFF;
            line-height: 90px;
            padding-left: 23px;
            font-weight: bold;
        }

        .header a{
            font-size: 80px;
            position: absolute;
            padding-left: 5px;
        }

        .header a:hover{
            text-decoration: none;
        }

        .menu {
            background: #099;
            flex: 1;
            max-height: 50px;
            background-color: #666;
        }

        .content {
            flex: 1;
            height: 80%;
            display: flex;
        }

        .footer {
            line-height: 50px;
            background: #CCC;
            flex: 1;
            max-height: 50px;
            background-color: #343434;
            color: #FFF;
        }

        a {
            color: #FB820B!important;
            font-weight: bolder;
        }

        a:hover {
            color: #fd9e41!important;
            font-weight: bolder;
            text-decoration: none!important;
        }
    </style>


</head>

<body class="bg-white">

    <div id="app">

        <div class="header">
            Html
            <a href="/">5</a>
        </div>

        <div class="menu">
            <menu-horizontal></menu-horizontal>
        </div>

        <content-comp></content-comp>

        <div class="footer text-center">
            Copyright <a href="#">YourSite</a>. All rights Reserved.
        </div>

    </div>

    <script src="/js/app.js"></script>
</body>

</html>
