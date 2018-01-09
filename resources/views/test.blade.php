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
        </div>
    </header>

    <!-- Menu -->

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
                </ul>

    <p>&nbsp;</p>
    @foreach ($pos as $poss)
        <form  action="/ticket/{{$poss->id}}" method="post">
            @endforeach
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <section>

                @foreach($pos as $data)
                <table width="1200" class=table7_3>


                        <tr>訂購人:{{$data->name}}</tr>


                    <tr>
                        <th>年</th><th>月</th><th>日</th><th>車次</th><th>出發時間</th><th>起站</th><th>終點</th><th>您所訂購的票數</th><th>單張票價</th><th>合計金額</th><th>取消此訂票</th>
                    </tr>
                    <tr>




                            <td>{{$data->year}}年</td>
                            <td>{{$data->month}}月</td>
                            <td>{{$data->day}}日</td>

                        <td>{{$data->station}}</td>
                        <td>{{$data->time}}</td>
                            <td>{{$data->start}}</td>
                        <td>{{$data->arrive}}</td>
                        <td>{{$data->quantity}}</td>
                        <td>{{$data->price}}</td>




                        <td>@php

                                $w=$data->quantity;
                                $r=$data->price;
                               $wr=$w*$r ;
                               echo ($wr);
                            @endphp
                        </td>





                            <td><input type="submit" name="can" value="取消此訂票" style="width:200px;height:40px;background-color:#FCDED0;"></td>

                    </tr>
                </table>
                @endforeach
            </section>
        </form>




        <input type="button" value="返回首頁" onclick="location.href='{{ route('welcome') }}'">



        <p>&nbsp;</p>

</div>

<p>&nbsp;</p>


<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/util.js"></script>
<!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->
<script src="js/main.js"></script>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
