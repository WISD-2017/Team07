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
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
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
            <nav>
                <ul>
                    <li><a href="#menu">Menu</a></li>
                </ul>
            </nav>

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
            <form action="/" method="POST">
                {{ csrf_field() }}
                <h1>高鐵班次查詢與訂票</h1>
        </div>
    </div>


    <!-- Main -->
    <div id="main">
        <div class="inner">
            <h1>高鐵訂票紀錄							</h1>
            <p>● 請您務必再次確認資料！</p>
        </div>
    </div>

    <p>









        <div id="main">
            <div class="inner">
                <ul class="actions">


                    </u1>
    <p>&nbsp;</p>
    <section>
        <table width="1200" class=table7_3>
            <tr>

                @foreach($posts as $post)
                    <th>年{{$post->year}}</th>
                    <th>月{{$post->month}}</th>
                    <th>日{{$post->day}}</th>
                @endforeach
                @foreach($pos as $poss)

                    <th>車次{{$poss->station}}</th>
                    <th>出發時間{{$poss->time}}</th>
                @endforeach



                @foreach($station1 as $station2)<th>起站→終點{{$station2->stationname}}</th>@endforeach
                @foreach( $ticketnum as  $ticketnum1)
                    <th><input  type="hidden" name="quantity" value="{{ $ticketnum1->quantity}}"  style="height:32px;font-size:12px;line-height:3em;">您所訂購的票數 {{ $ticketnum1->quantity}}</th>
                @endforeach
                @foreach($money as $money1)
                    <th><input  type="hidden" name="price" value="{{$money1->price}}"  style="height:32px;font-size:12px;line-height:3em;">單張票價{{$money1->price}}</th>
                @endforeach

                <th>  @foreach( $ticketnum as  $ticketnum1)
                        @foreach($money as $money1)
                        @php
                            echo ('合計金額' );
                                                    $w=$ticketnum1->quantity;$r=$money1->price;
                                                   $wr=$w*$r ;
                                                   echo ($wr);
                        @endphp
                    @endforeach
                @endforeach



                <th>





                </th>

            </tr>
            <tr>



            </tr>
        </table>
        <p>&nbsp;</p>
    <!--<ul class="actions">

  <font color="#000000"><strong>您所選擇的張數：</strong></font><li><span class="button disabled" ><? //echo $_SESSION["Quantity"] ; ?></span></li>
</u1>-->


        <form method="post">
            <input type="submit" name="can" value="取消本次訂票" style="width:200px;height:40px;background-color:#FCDED0;">

        </form>

    </section>
    <p>&nbsp;</p>

</div>
</div>
<p>&nbsp;</p>

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
        <ul class="copyright">
            <li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </div>
</footer>
</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html><?