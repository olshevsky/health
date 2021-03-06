<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: "Montserrat", sans-serif;
            overflow: hidden;
        }

        .logo{
            position: absolute;
            top: 50%;
            margin-top: -36px;
            height: 72px;
        }

        h1{
            font-size: 24px;
            margin-top: 0;
            margin-bottom: 32px;
        }

        p{
            margin: 0 0 10px 0;
        }

        header{
            width: 100%;
            height: 162px;
            position: relative;
        }

        header .content{
            height: 162px;
        }

        .elipse1, .elipse2, .elipse3, .elipse4{
            position: absolute;
        }

        .elipse1{
            bottom: 0;
            right: 0px;
        }

        .elipse2{
            top: 0;
            right: -65px;
        }

        .elipse3{
            top: 0;
            left: 0;
        }

        .elipse4{
            bottom: 0;
            right: 0;
        }

        section .content{
            padding-top: 85px;
            padding-bottom: 85px;
        }

        .content{
            position: relative;
            width: 100%;
            max-width: 760px;
            margin: 0 auto;
            padding-left: 20px;
            padding-right: 20px;
            z-index: 99;
            background-color: #ffffff;
        }

        footer{
            position: relative;
        }

        footer .content{
            padding-top: 55px;
            padding-bottom: 55px;
        }

        footer a{
            text-decoration: none;
            color: #000;
        }

        footer a, footer p{
            font-size: 14px;
        }

        footer .icon{
            float: left;
            width: 14px;
            margin-right: 14px;
        }

        footer .icon img{
            width: 100%;
        }

        footer ul{
            list-style-type: none;
            padding: 0;
        }

        footer ul li{
            padding-bottom: 10px;
        }

        .grid{
            display: grid;
            grid-template-columns: auto auto;
        }

        .wrapper{
            max-width: 1400px;
            margin: 0 auto;
        }

        .socials{
            padding-top: 20px;
        }

        .clear{ clear: both; }
        .fleft{ float: left; }
    </style>
</head>
<body>
<div class="wrapper">
    <header>
        <div class="content">
            <img class="logo" src="images/mail/logo.png" height="72" alt="logo">
            <img class="elipse2" src="/images/mail/ellipse2.png" />
        </div>
        <img class="elipse1" src="/images/mail/ellipse1.png" />
    </header>
    <section>
        <div class="content">
            @yield('content')
        </div>
    </section>
    <footer>
        <img class="elipse3" src="/images/mail/ellipse3.png"/>
        <img class="elipse4" src="/images/mail/ellipse4.png"/>
        <div class="content">
            <div class="fleft" style="padding-right: 40px;">
                <ul>
                    <li>
                        <div class="icon">
                            <img src="/images/mail.svg" alt="">
                        </div>
                        <a href="mailto:cfoley@myhst.com" class="footerText">cfoley@myhst.com</a>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="/images/phone-call.svg" alt="">
                        </div>
                        <a href="tel:3146244363" class="footerText">Office: 314-624-4363</a>
                    </li>
                    <li>
                        <div class="icon">&nbsp;</div>
                        <a href="tel:3145038596" class="footerText">Christina Foley: 314-503-8596</a>
                    </li>
                </ul>
            </div>
            <div class="socials fleft">
                <a href="https://m.facebook.com/1001AffordableOptions/" target="_blank">
                    <img src="/images/mail/icon1.png" width="45" alt="">
                </a>
                <a href="https://twitter.com/topayitforward?lang=en" target="_blank">
                    <img src="/images/mail/icon2.png" width="45" alt="">
                </a>
                <a href="https://www.linkedin.com/in/christinafoley1?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BvXNL58yYS%2FWbErvWwOjt5Q%3D%3D" target="_blank">
                    <img src="/images/mail/icon3.png" width="45" alt="">
                </a>
            </div>
            <div class="clear"></div>
        </div>
    </footer>
</div>
</body>
</html>
