<html>
<head>
    <title>登入訂票</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="/css/ie8.css" /><![endif]-->
</head>


<body>
<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="inner">

            <!-- Logo --><!-- Nav -->
            

        </div>
    </header>

    <!-- Menu -->
    <nav id="menu">

        <ul>
            <li><a href="index.php">首頁</a></li>
            <li><a href="search.php">高鐵</a></li>
            <li><a href="aboutus.php">關於我們</a></li>
            <!--<li><a href="generic.html">登入</a></li>-->
            <!--<li><a href="generic.html">訂票紀錄</a></li>-->
            <li><a href="cutser.php">線上客服</a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">
        <div class="inner">
            <h1>登入</h1>
            <div class="row uniform">
                <div class="6u 12u$(xsmall)">

                    <form action="/auth/login" method="POST" name="form1" id="form1">
                        {!! csrf_field() !!}
                        <table width="80%"  style="border:5px #000000 double; padding:5px;"  cellpadding='5' height="151" border="1">
                            <tr>
                                <td width="400" height="129" style="border:4px #AD0000 double;">
                                    <p>
                                        <label for="account">帳號：</label>
                                        <input type="text" name="account" id="account" />
                                    </p>
                                    <p>
                                        <label for="password">密碼：</label>
                                        <input type="text" name="password" id="password" />
                                    </p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>
                                        <input type="submit" name="login" id="login" value="登入" /></input>
                                        <input name="cancle" type="submit" onClick="javascript:location.href='#'" value="取消" /></input></p>

                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <p>&nbsp;</p>
            </ul>
            <ul class="actions">

            </ul>

            </p>
            <p>&nbsp;</p>
        </div>
    </div>

    <!-- Footer -->
</div>
<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/util.js"></script>
<!--[if lte IE 8]><script src="js/respond.min.js"></script><![endif]-->
<script src="js/main.js"></script>


</body>
</html>


