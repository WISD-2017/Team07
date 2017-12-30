<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html><head>
    <title>高鐵訂票系統</title>

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

            <!-- Logo --><!-- Nav -->
        </div>
    </header>

    <!-- Main -->
    <div id="main">
        <div class="inner">
            <h1>高鐵班次查詢與訂票</h1>
        </div>
    </div>

    <div id="footer" style="background-color:#ffffff">
        <div class="inner">

            <form action="/" method="post">
                {{ csrf_field() }}
                <table>
                    <td>
                        @foreach ($sqlprice as $sqlpric)
                            <font color="#FF5511"><strong>★ 票價一張：{{$sqlpric->price }}元 ★</strong> </font>
                        @endforeach
                    </td>

                    <td width="250px" height="30px" valign="top"><p>請選擇訂購數量</p>

                        <select name="ticketnum">
                            @php
                                for($i=1;$i<=10;$i++){
                            @endphp
                            <option value="<?=$i?>"><?=$i?></option>
                            @php
                                }
                            @endphp
                        </select>

                    </td>
                </table>
            </form>

        </div>
    </div>

    <div class="table-wrapper">
        <div class="inner">
            <!--南下-->
            <div style="float:left" ><table width="100%">
                    <tr>
                        <td align="center">車次</td>
                        <td align="center">發車時間</td>
                        <td align="center">前往訂票</td>
                    </tr>
            <!--北上-->


                </table>
            </div>
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
</html>
