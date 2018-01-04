<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html><head>
    <style>
        .table7_3 table {
            width:150%;
            margin:15px 0
        }
        .table7_3 th {
            background-color:#FF7631;
            background:-o-linear-gradient(90deg, #FF7631, #F9B998);
            background:-moz-linear-gradient( center top, #FF7631 5%, #F9B998 100% );
            background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #FF7631), color-stop(1, #F9B998) );
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#FF7631', endColorstr='#F9B998');
            color:#000000
        }
        .table7_3,.table7_3 th,.table7_3 td
        {
            font-size:0.95em;
            text-align:center;
            padding:4px;
            border:2px solid #F9D3C0;
            border-collapse:collapse
        }
        .table7_3 tr:nth-child(odd){
            background-color:#ffffff;
            background:-o-linear-gradient(90deg, #ffffff, #f7fbfe);
            background:-moz-linear-gradient( center top, #ffffff 5%, #f7fbfe 100% );
            background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ffffff), color-stop(1, #f7fbfe) );
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f7fbfe');
        }
        .table7_3 tr:nth-child(even){
            background-color:#fdfdfd;
        }
    </style>
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
    @foreach ($pos as $poss)
        <form  action="{{ route('ticket.destroy', $poss->id) }}" method="post">
            @endforeach
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
    <section>
        <table width="1200" class=table7_3>
            <tr>
                <th>年</th><th>月</th><th>日</th><th>車次</th><th>出發時間</th><th>起站</th><th>終點</th><th>您所訂購的票數</th><th>單張票價</th><th>合計金額</th><th>取消此訂票</th>
            </tr>
            <tr>


                @foreach($posts as $post)

                <td>{{$post->year}}年</td>
                <td>{{$post->month}}月</td>
                <td>{{$post->day}}日</td>
                @endforeach

                    @foreach($pos as $poss)
                    <td>{{$poss->station}}</td>
                <td>{{$poss->time}}</td>
                    @endforeach
                    @foreach($station1 as $station2)</th>
                    <td>{{$station2->stationname}}</td>
                    @endforeach

                    @foreach( $ticketnum as  $ticketnum1)
                        <td><input  type="hidden" name="quantity" value="{{ $ticketnum1->quantity}}"  style="height:32px;font-size:12px;line-height:3em;"> {{ $ticketnum1->quantity}}</td>
                    @endforeach
                    @foreach($money as $money1)
                        <td><input  type="hidden" name="price" value="{{$money1->price}}"  style="height:32px;font-size:12px;line-height:3em;">{{$money1->price}}</td>
                    @endforeach
                    @foreach( $ticketnum as  $ticketnum1)
                        @foreach($money as $money1)
                            <td>@php

                                                        $w=$ticketnum1->quantity;$r=$money1->price;
                                                       $wr=$w*$r ;
                                                       echo ($wr);
                            @endphp
                            </td>
                        @endforeach
                        <td><input type="submit" name="can" value="取消此訂票" style="width:200px;height:40px;background-color:#FCDED0;"></td>
                    @endforeach
            </tr>
        </table>



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



        <input type="submit" name="cannn" value="返回查詢" style="width:200px;height:40px;background-color:#FCDED0;">

        </form>

    </section>
    <p>&nbsp;</p>

</div>
</div>
<p>&nbsp;</p>


<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/util.js"></script>
<!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->
<script src="js/main.js"></script>

</body>
</html>
