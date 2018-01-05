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
  
    <div id="footer" style="background-color:#ffffff">
        <div class="inner">

            <form action="/ticket" method="post">
                {{ csrf_field() }}
                @foreach($posts as $post)
                    <td> <input  type="hidden" name="year" value="{{$post->year}}"  style="height:32px;font-size:12px;line-height:3em;">{{$post->year}}年</td>
                    <td><input  type="hidden" name="month" value="{{$post->month}}"  style="height:32px;font-size:12px;line-height:3em;">{{$post->month}}月</td>
                    <td><input  type="hidden" name="day" value="{{$post->day}}"  style="height:32px;font-size:12px;line-height:3em;">{{$post->day}}日</td>
                    <input  type="hidden" name="start" value="{{$post->start}}"  style="height:32px;font-size:12px;line-height:3em;">
                    <input  type="hidden" name="arrive" value="{{$post->arrive}}"  style="height:32px;font-size:12px;line-height:3em;">

                @endforeach

                <table>
                    <td>
                        @foreach ($sqlprice as $sqlpric)
                            <font color="#FF5511"><strong><input  type="hidden" name="price" value="{{$sqlpric->price}}"  style="height:32px;font-size:12px;line-height:3em;"><strong>★ 票價一張：{{$sqlpric->price }}元 ★</strong> </font>
                        @endforeach
                    </td>

                    <td width="250px" height="30px" valign="top"><p>請選擇訂購數量</p>

                        <select name="quantity">
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

                @foreach($posts as $post)
                    @if($post->start < $post->arrive)
                        @foreach ($selectstanum1 as $selectstanum)
                            @if($selectstanum->num===2)
                                    <tr>
                                        <td align="center"> <input  type="hidden" name="station" value="{{$selectstanum->stationnumber}}"  style="height:32px;font-size:12px;line-height:3em;">{{$selectstanum->stationnumber}}</td>
                                        <td align="center"><input  type="hidden" name="time" value="{{$selectstanum->detime}}"  style="height:32px;font-size:12px;line-height:3em;">  {{$selectstanum->detime}}</td>
                                        <td align="center"><input class="button" type="submit" name="btticket" value="前往訂票"  style="height:32px;font-size:12px;line-height:3em;"></td>
                                    </tr>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            <!--北上-->
               @foreach($posts as $post)
                   @if($post->start > $post->arrive)
                        @foreach ($selectstanum2 as $selectstanum22)
                            @if($selectstanum22->num===2)
                                    <tr>
                                        <td align="center"> <input  type="hidden" name="station" value="{{$selectstanum22->stationnumber}}"  style="height:32px;font-size:12px;line-height:3em;">{{$selectstanum22->stationnumber}}</td>
                                        <td align="center"> <input  type="hidden" name="time" value="{{$selectstanum22->detime}}"  style="height:32px;font-size:12px;line-height:3em;">{{$selectstanum22->detime}}</td>
                                        <td align="center"><input class="button" type="submit" name="btticket" value="前往訂票"  style="height:32px;font-size:12px;line-height:3em;"href="{{ url('/register') }}"></td>
                                    </tr>
                            @endif
                        @endforeach
                   @endif
               @endforeach


                </table>
                </form>
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
