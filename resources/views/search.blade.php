<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>高鐵查詢班次</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
</head>
<body>
<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="inner">
        </div>
    </header>

    <!-- Main -->
    <div id="main">
        <div class="inner">
            <h1>高鐵查詢班次</h1>
            <p>請選擇您的時間、起程與終點站</p>
        </div>
    </div>
    <div id="footer" style="background-color:#ffffff">
        <div class="inner">

            <form action="/searchend" method="post">
                {{ csrf_field() }}
                <legend class="legendclass" ></i>日期</legend>
                <table>
                    <td width="250px" height="30px" valign="top"style="background-color:#FCDED0;"><p>請選擇搭乘時間</p>

                        <select name="year">
                            <option value="0">年</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                        </select>

                        <select name="month" >
                            <option value="0">月</option>
                            @php
                                for($i=1;$i<=12;$i++){
                            @endphp
                            <option value="<?=$i?>"><?=$i?></option>
                            @php
                                }
                            @endphp
                        </select>

                        <select name="day">
                            <option value="0">日</option>
                            @php
                                for($i=1;$i<=31;$i++){
                            @endphp

                            <option value="<?=$i?>"><?=$i?></option>
                            @php
                                }
                            @endphp
                        </select>
                    </td>
                </table>


                <legend class="legendclass" ></i>起程站</legend>

                <table>
                    <td width="150px" height="30px" style="background-color:#FCDED0;">出發車站<br />

                        <select name="start"><option value="1">南港</option><option value="2">台北</option><option value="3">板橋</option><option value="4">桃園</option><option value="5">新竹</option><option value="6">苗栗</option><option value="7">台中</option><option value="8">彰化</option><option value="9">雲林</option><option value="10">嘉義</option><option value="11">台南</option><option value="12">左營</option></select>
                    </td>
                </table>

                <legend class="legendclass" ></legend>
                <legend class="legendclass" >目的站</legend>
                <table>
                    <td width="150px" height="30px" style="background-color:#FCDED0;"><p>目的車站</p>

                        <span style="background-color:#FCDED0;">
   <select name="arrive"><option value="1">南港</option><option value="2">台北</option><option value="3">板橋</option><option value="4">桃園</option><option value="5">新竹</option><option value="6">苗栗</option><option value="7">台中</option><option value="8">彰化</option><option value="9">雲林</option><option value="10">嘉義</option><option value="11">台南</option><option value="12">左營</option></select>
                        </span>
                    </td>
                </table>

                <p>&nbsp;</p>
                <td width="100px" height="30px" valign="middle">
                    <input name="submit" type="submit" value="前往查詢及購票" style="background-color:#FCDED0;"></button>
                </td>

            </form>

        </div>
    </div>

</div>
<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/util.js"></script>
<!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->
<script src="js/main.js"></script>

</body>
