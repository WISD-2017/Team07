<html>
<head>
    <title>註冊</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="/css/ie8.css" /><![endif]-->
</head>
<body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form name="form" method="POST" action="/auth/register">
    {!! csrf_field() !!}
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="inner">

                <!-- Logo --><!-- Nav -->

            </div>
        </header>

        <!-- Main -->
        <div id="main">
            <div class="inner">
                <h1>註冊</h1>
                <p>●請先註冊才能使用訂票功能喔！ </p>
                <p>●若您已經註冊過，請直接按「我已註冊過」的按鈕喔！</p>
                <p>&nbsp;</p>
                <div class="row uniform">
                    <div class="6u 12u$(xsmall)">
                        <table width="80%"  style="border:5px #000000 double; padding:5px;"  cellpadding='5' height="151" border="1">
                            <tr>
                                <td width="500" height="150" style="border:4px #AD0000 double;">
                                    <p>
                                        <label for="name">身分證號碼：(請務必填寫！)</label>
                                        <input type="text" name="name" id="name" maxlength="10" placeholder=""  required="true"/>

                                    </p>
                                    <p>
                                        <label for="account">帳號：(登入時需用)</label>
                                        <input type="text" name="account" id="account"  required="true" />
                                    </p>
                                    <p>
                                        <label for="password">密碼：(登入時需用)</label>
                                        <input type="text" name="password" id="password2" required />
                                    </p>
                                </td>
                            </tr>
                        </table>

                    </div>
                </div>

                <p>&nbsp;</p>

                </ul>
                <input name="actionOK" type="submit" id= "button" value="確定送出" />
                <input name="rea" type="submit" id= "button" value="我已註冊過" onClick="location.href='login.php'" />
            </div>
            <p>&nbsp;</p>
        </div>




        <!-- Footer -->


        <footer id="footer">
            <div class="inner">
                <section>
                    <h2>Follow</h2>
                    <ul class="icons">
                        <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
                        <li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
                    </ul>
                </section>

            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/util.js"></script>
    <!--[if lte IE 8]><script src="js/respond.min.js"></script><![endif]-->
    <script src="js/main.js"></script>

</body>
</html>

