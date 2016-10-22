@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.min.css" >
    <script type="text/javascript" src="{{ URL::asset('jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('jquery.PrintArea.js') }}"></script>


    <script>
        $(document).ready(function(){
            $("#print_button1").click(function(){
                var mode = 'iframe'; // popup
                var close = mode == "popup";
                var options = { mode : mode, popClose : close};
                $("div.wrapper").printArea( options );
            });
            $("#print_button2").click(function(){
                var mode = 'iframe'; // popup
                var close = mode == "popup";
                var options = { mode : mode, popClose : close};
                $("div.content").printArea( options );
            });
        });

    </script>
@endsection

@section('content')
 <style>
     th{
         text-align: center;
         background-color: #5e5e5e;
         font-size: large;
         color: #FFFFFF;
     }
 </style>

<div class="container">
    <form method="post" action="/save">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row"><div class="col-lg-4">

                <div class="md-form">
                    <i class="fa fa-calendar"></i>
                    <input type="date" id="form81" class="form-control validate" name="date">
                    <label for="form81" data-error="wrong" data-success="right">التاريخ</label>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="md-form">
                    <i class="fa fa-user"></i>
                    <input type="number" id="form81" class="form-control validate" name="pno">
                    <label for="form81" data-error="wrong" data-success="right">الرقم</label>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="md-form">
                    <i class="fa fa-user"></i>
                    <input type="text" id="form81" class="form-control validate" name="pname">
                    <label for="form81" data-error="wrong" data-success="right">الاسم</label>
                </div>
            </div>
        </div>
        <div class="row"><hr></div>

    <div class="row">
        <div  class="wrapper">
        <table class="table table-bordered table-responsive">
            <tr>
                <th>اليوم</th>
                <th>الفطور</th>
                <th>وجبة خفيفة</th>
                <th> الغداء</th>
                <th> وجبة خفيفة</th>
                <th> العشاء</th>

            </tr>
            <tr>
                <td>السبت</td>

                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('1');"></a><textarea class="md-textarea" id = "1" name="w1d1b"
                    id = "1"> <?php foreach ($w1d1ba1 as $a) { $a1 =  $a->value;  } foreach ($w1d1bc1 as $a ){
                            $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea> </td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('2');"></a><textarea class="md-textarea" id = "2" name="w1d1s1"  id = ""> <?php foreach ($w1d1s1b3 as $a) { echo $a->value;  }?> </textarea> </td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('3');"></a><textarea class="md-textarea" id = "3" name="w1d1l" > <?php foreach ($w1d1la2 as $a) { echo $a->value;  }?> </textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('4');"></a><textarea class="md-textarea" id = "4" name="w1d1s2"  > <?php foreach ($w1d1s2b3 as $a) { echo $a->value;  }?></textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('5');"></a><textarea class="md-textarea" id = "5" name="w1d1d" > <?php foreach ($w1d1dd2 as $a) { echo $a->value;  }?> </textarea></td>
            </tr>
            <tr>
                <td>الأحد</td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('6');"></a><textarea class="md-textarea" id = "6" name="w1d2b" rows="2" > <?php foreach ($w1d2ba1 as $a) { $a1 =  $a->value;  } foreach ($w1d2bc1 as $a ){
                            $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('7');"></a><textarea class="md-textarea" id = "7" name="w1d2s1" rows="2" > <?php foreach ($w1d2s1b3 as $a) { echo $a->value;  }?> </textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('8');"></a><textarea class="md-textarea" id = "8" name="w1d2l" rows="2" > <?php foreach ($w1d2ld1 as $a) { $a1 =  $a->value;  } foreach ($w1d2la1 as $a ){
                            $c1 = $a->value ; } echo $a1." + ".$c1." + "."طماطم" ;?></textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('9');"></a><textarea class="md-textarea" id = "9" name="w1d2s2" rows="2" > <?php foreach ($w1d2s2b3 as $a) { echo $a->value;  }?></textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('10');"></a><textarea class="md-textarea" id = "10" name="w1d2d" rows="2" > <?php foreach ($w1d2da1 as $a) { $a1 =  $a->value;  } foreach ($w1d2dc1 as $c ){
                            $c1 = $c->value ; }foreach ($w1d2db1 as $k){ $k1 = $k->value; } echo $a1." + ".$c1." + ".$k1." + "."توست" ;?></textarea></td>
            </tr>
            <tr>
                <td>الاثنين</td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('11');"></a><textarea class="md-textarea" id = "11" name="w1d3b" rows="2" > <?php foreach ($w1d3ba1 as $a) { $a1 =  $a->value;  } foreach ($w1d3bc1 as $a ){
                            $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('12');"></a><textarea class="md-textarea" id = "12" name="w1d3s1" rows="2" > <?php foreach ($w1d3s1b3 as $a) { echo $a->value;  }?> </textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('13');"></a><textarea class="md-textarea" id = "13" name="w1d3l" rows="2" > <?php foreach ($w1d3lc1 as $a) { $a1 =  $a->value;  } echo $a1." + "."طماطم + توست"?></textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('14');"></a><textarea class="md-textarea" id = "14" name="w1d3s2" rows="2" > <?php foreach ($w1d3s2b3 as $a) { echo $a->value;  }?></textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('15');"></a><textarea class="md-textarea" id = "15" name="w1d3d" rows="2" > <?php foreach ($w1d3dd2 as $a) { echo $a->value;  }?></textarea></td>
            </tr>
            <tr>
                <td>الثلاثاء</td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('16');"></a><textarea class="md-textarea" id = "16" name="w1d4b" rows="2" > <?php foreach ($w1d4ba1 as $a) { $a1 =  $a->value;  } foreach ($w1d4bc1 as $a ){
                            $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('17');"></a><textarea class="md-textarea" id = "17" name="w1d4s1" rows="2" > <?php foreach ($w1d4s1b3 as $a) { echo $a->value;  }?> </textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('18');"></a><textarea class="md-textarea" id = "18" name="w1d4l" rows="2" > <?php foreach ($w1d4la2 as $a) { echo $a->value;  }?> </textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('19');"></a><textarea class="md-textarea" id = "19" name="w1d4s2" rows="2" > <?php foreach ($w1d4s2b3 as $a) { echo $a->value;  }?></textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('20');"></a><textarea class="md-textarea" id = "20" name="w1d4d" rows="2" > <?php foreach ($w1d4dd1 as $a) { $a1 =  $a->value;  } foreach ($w1d4db1 as $a ){
                            $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>

            </tr>
            <tr>
                <td>الاربعاء</td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('21');"></a><textarea class="md-textarea" id = "21" name="w1d5b" rows="2" > <?php foreach ($w1d5ba1 as $a) { $a1 =  $a->value;  } foreach ($w1d5bc1 as $a ){
                            $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('22');"></a><textarea class="md-textarea" id = "22" name="w1d5s1" rows="2" > <?php foreach ($w1d5s1b3 as $a) { echo $a->value;  }?> </textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('23');"></a><textarea class="md-textarea" id = "23" name="w1d5l" rows="2" > <?php foreach ($w1d5lb2 as $a) { $a1 =  $a->value;  } foreach ($w1d5lc1 as $a ){
                            $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('24');"></a><textarea class="md-textarea" id = "24" name="w1d5s2" rows="2" > <?php foreach ($w1d5s2b3 as $a) { echo $a->value;  }?></textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('25');"></a><textarea class="md-textarea" id = "25" name="w1d5d" rows="2" > <?php foreach ($w1d5da1 as $a) { $a1 =  $a->value;  } foreach ($w1d5dd1 as $a ){
                            $c1 = $a->value ; }foreach ($w1d5db1 as $d){ $d1 = $d->value; } echo $a1." + ".$c1." + ".$d1;?></textarea></td>
            </tr>
            <tr>
                <td>الخميس</td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('26');"></a><textarea class="md-textarea" id = "26" name="w1d6b" rows="2" > <?php foreach ($w1d6ba1 as $a) { $a1 =  $a->value;  } foreach ($w1d6bc1 as $a ){
                            $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('27');"></a><textarea class="md-textarea" id = "27" name="w1d6s1" rows="2" > <?php foreach ($w1d6s1b3 as $a) { echo $a->value;  }?> </textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('28');"></a><textarea class="md-textarea" id = "28" name="w1d6l" rows="2" > <?php foreach ($w1d6la2 as $a) { echo $a->value;  }?> </textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('29');"></a><textarea class="md-textarea" id = "29" name="w1d6s2" rows="2" > <?php foreach ($w1d6s2b3 as $a) { echo $a->value;  }?></textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('30');"></a><textarea class="md-textarea" id = "30" name="w1d6d" rows="2" > <?php foreach ($w1d6dd1 as $a) { $a1 =  $a->value;  } foreach ($w1d6db1 as $a ){
                        $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>

            </tr>
            <tr>
                <td>الجمعة</td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('31');"></a><textarea class="md-textarea" id = "31" name="w1d7b" rows="2" > <?php foreach ($w1d7ba1 as $a) { $a1 =  $a->value;  } foreach ($w1d7bc1 as $a ){
                            $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('32');"></a><textarea class="md-textarea" id = "32" name="w1d7s1" rows="2" > <?php foreach ($w1d7s1b3 as $a) { echo $a->value;  }?> </textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('33');"></a><textarea class="md-textarea" id = "33" name="w1d7l" rows="2" > <?php foreach ($w1d7la1 as $a) { $a1 =  $a->value;  } foreach ($w1d7lb2 as $a ){
                            $c1 = $a->value ; }foreach ($w1d7ld1 as $d){ $d1 = $d->value; } echo $a1." + ".$c1." + ".$d1." + "."طماطم" ;?></textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('34');"></a><textarea class="md-textarea" id = "34" name="w1d7s2" rows="2" > <?php foreach ($w1d7s2b3 as $a) { echo $a->value;  }?></textarea></td>
                <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('35');"></a><textarea class="md-textarea" id = "35" name="w1d7d" rows="2" > <?php foreach ($w1d7db2 as $a) { echo $a->value;  }?></textarea></td>
            </tr>
           <tr>
               <td><a id="12" onclick="ajax('12');">ajax is here</a></td>
           </tr>
        </table>
        </div>
    </div>
        <div class="row">
            <table class="table table-bordered table-responsive">
                <tr>
                    <th>اليوم</th>
                    <th>الفطور</th>
                    <th>وجبة خفيفة</th>
                    <th> الغداء</th>
                    <th> وجبة خفيفة</th>
                    <th> العشاء</th>

                </tr>
                <tr>
                    <td>السبت</td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('36');"></a><textarea class="md-textarea" id = "36" name="w2d1b" rows="2" > <?php foreach ($w2d1ba1 as $a) { $a1 =  $a->value;  } foreach ($w2d1bc1 as $a ){
                                $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea> </td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('37');"></a><textarea class="md-textarea" id = "37" name="w2d1s1" rows="2" > <?php foreach ($w2d1s1b3 as $a) { echo $a->value;  }?> </textarea> </td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('38');"></a><textarea class="md-textarea" id = "38" name="w2d1l" rows="2" >  <?php foreach ($w2d1lb1 as $a) { $a1 =  $a->value;  } foreach ($w2d1lc1 as $a ){
                                $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('39');"></a><textarea class="md-textarea" id = "39" name="w2d1s2" rows="2" > <?php foreach ($w2d1s2b3 as $a) { echo $a->value;  }?></textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('40');"></a><textarea class="md-textarea" id = "40" name="w2d1d" rows="2" >  <?php foreach ($w2d1da1 as $a) { $a1 =  $a->value;  } foreach ($w2d1dc1 as $a ){
                                $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>
                </tr>
                <tr>
                    <td>الأحد</td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('41');"></a><textarea class="md-textarea" id = "41" name="w2d2b" rows="2" > <?php foreach ($w2d2ba1 as $a) { $a1 =  $a->value;  } foreach ($w2d2bc1 as $a ){
                                $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('42');"></a><textarea class="md-textarea" id = "42" name="w2d2s1" rows="2" > <?php foreach ($w2d2s1b3 as $a) { echo $a->value;  }?> </textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('43');"></a><textarea class="md-textarea" id = "43" name="w2d2l" rows="2" > <?php foreach ($w2d2ld1 as $a) { $a1 =  $a->value;  } foreach ($w2d2lb1 as $a ){
                                $c1 = $a->value ; } echo $a1." + ".$c1." + "."طماطم" ;?></textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('44');"></a><textarea class="md-textarea" id = "44" name="w2d2s2" rows="2" > <?php foreach ($w2d2s2b3 as $a) { echo $a->value;  }?></textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('45');"></a><textarea class="md-textarea" id = "45" name="w2d2d" rows="2" >  <?php foreach ($w2d2da1 as $a) { $a1 =  $a->value;  } foreach ($w2d2dc1 as $a ){
                                $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>
                </tr>
                <tr>
                    <td>الاثنين</td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('46');"></a><textarea class="md-textarea" id = "46" name="w2d3b" rows="2" > <?php foreach ($w2d3ba1 as $a) { $a1 =  $a->value;  } foreach ($w2d3bc1 as $a ){
                                $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('47');"></a><textarea class="md-textarea" id = "47" name="w2d3s1" rows="2" > <?php foreach ($w2d3s1b3 as $a) { echo $a->value;  }?> </textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('48');"></a><textarea class="md-textarea" id = "48" name="w2d3l" rows="2" > <?php foreach ($w2d3lb1 as $a) { $a1 =  $a->value;  } foreach ($w2d3ld1 as $a ){
                                $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('49');"></a><textarea class="md-textarea" id = "49" name="w2d3s2" rows="2" > <?php foreach ($w2d3s2b3 as $a) { echo $a->value;  }?></textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('50');"></a><textarea class="md-textarea" id = "50" name="w2d3d" rows="2" > <?php foreach ($w2d3dc1 as $a) { $a1 =  $a->value;  } foreach ($w2d3db2 as $a ){
                                $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>
                </tr>
                <tr>
                    <td>الثلاثاء</td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('51');"></a><textarea class="md-textarea" id = "51" name="w2d4b" rows="2" > <?php foreach ($w2d4ba1 as $a) { $a1 =  $a->value;  } foreach ($w2d4bc1 as $a ){
                                $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('52');"></a><textarea class="md-textarea" id = "52" name="w2d4s1" rows="2" > <?php foreach ($w2d4s1b3 as $a) { echo $a->value;  }?> </textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('53');"></a><textarea class="md-textarea" id = "53" name="w2d4l" rows="2" > <?php foreach ($w2d4lb2 as $a) { $a1 =  $a->value;  } foreach ($w2d4lc1 as $a ){
                                $c1 = $a->value ; } echo $a1." + ".$c1 ;?> </textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('54');"></a><textarea class="md-textarea" id = "54" name="w2d4s2" rows="2" > <?php foreach ($w2d4s2b3 as $a) { echo $a->value;  }?></textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('55');"></a><textarea class="md-textarea" id = "55" name="w2d4d" rows="2" > <?php foreach ($w2d4dc1 as $a) { $a1 =  $a->value;  } foreach ($w2d4db2 as $a ){
                                $c1 = $a->value ; } echo $a1." + ".$c1." + "."طماطم" ;?></textarea></td>

                </tr>
                <tr>
                    <td>الاربعاء</td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('56');"></a><textarea class="md-textarea" id = "56" name="w2d5b" rows="2" > <?php foreach ($w2d5ba1 as $a) { $a1 =  $a->value;  } foreach ($w2d5bc1 as $a ){
                                $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('57');"></a><textarea class="md-textarea" id = "57" name="w2d5s1" rows="2" > <?php foreach ($w2d5s1b3 as $a) { echo $a->value;  }?> </textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('58');"></a><textarea class="md-textarea" id = "58" name="w2d5l" rows="2" >  <?php foreach ($w2d5ld2 as $a) { echo $a->value;  }?></textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('59');"></a><textarea class="md-textarea" id = "59" name="w2d5s2" rows="2" > <?php foreach ($w2d5s2b3 as $a) { echo $a->value;  }?></textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('60');"></a><textarea class="md-textarea" id = "60" name="w2d5d" rows="2" > <?php foreach ($w2d5db2 as $a) { $a1 =  $a->value;  } foreach ($w2d5dc1 as $a ){
                                $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>
                </tr>
                <tr>
                    <td>الخميس</td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('61');"></a><textarea class="md-textarea" id = "61" name="w2d6b" rows="2" > <?php foreach ($w2d6ba1 as $a) { $a1 =  $a->value;  } foreach ($w2d6bc1 as $a ){
                                $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('62');"></a><textarea class="md-textarea" id = "62" name="w2d6s1" rows="2" > <?php foreach ($w2d6s1b3 as $a) { echo $a->value;  }?> </textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('63');"></a><textarea class="md-textarea" id = "63" name="w2d6l" rows="2" > <?php foreach ($w2d6la1 as $a) { $a1 =  $a->value;  } foreach ($w2d6ld1 as $a ){
                                $c1 = $a->value ; } echo $a1." + ".$c1 ;?> </textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('64');"></a><textarea class="md-textarea" id = "64" name="w2d6s2" rows="2" > <?php foreach ($w2d6s2b3 as $a) { echo $a->value;  }?></textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('65');"></a><textarea class="md-textarea" id = "65" name="w2d6d" rows="2" > <?php foreach ($w2d6da1 as $a) { $a1 =  $a->value;  } foreach ($w2d6da2 as $a ){
                                $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>

                </tr>
                <tr>
                    <td>الجمعة</td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('66');"></a><textarea class="md-textarea" id = "66" name="w2d7b" rows="2" > <?php foreach ($w2d7ba1 as $a) { $a1 =  $a->value;  } foreach ($w2d7bc1 as $a ){
                                $c1 = $a->value ; } echo $a1." + ".$c1 ;?></textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('67');"></a><textarea class="md-textarea" id = "67" name="w2d7s1" rows="2" > <?php foreach ($w2d7s1b3 as $a) { echo $a->value;  }?> </textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('68');"></a><textarea class="md-textarea" id = "68" name="w2d7l" rows="2" > <?php foreach ($w2d7la1 as $a) { $a1 =  $a->value;  } foreach ($w2d7lb2 as $a ){
                                $c1 = $a->value ; }foreach ($w2d7ld1 as $d){ $d1 = $d->value; } echo $a1." + ".$c1." + ".$d1." + "."طماطم" ;?></textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('69');"></a><textarea class="md-textarea" id = "69" name="w2d7s2" rows="2" > <?php foreach ($w2d7s2b3 as $a) { echo $a->value;  }?></textarea></td>
                    <td> <a class="glyphicon glyphicon-refresh" onclick="ajax('70');"></a><textarea class="md-textarea" id = "70" name="w2d7d" rows="2" ><?php foreach ($w2d7da1 as $a) { $a1 =  $a->value;  } foreach ($w2d7dd1 as $a ){
                                $c1 = $a->value ; } echo $a1." + ".$c1." + "."طماطم" ;?></textarea></td>
                </tr>
            </table>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <input type="submit" value="حفظ وارسال" class="btn btn-info-outline waves-effect"  >
            </div>

        </div>


    </form>
</div>
<script>
    function ajax(id) {
        

     ;
    jQuery.ajax({
        type : 'get',
        url: '/ajax/'+id,
        data : {
            id : id

        },
        success : function(data) {
            //alert('data');
            //var div =

            document.getElementById(id).innerHTML =  data;
            //document.getElementById(element_id).innerHTML =  data;
            //$('#meals_content').html(data);
            //var json = $.parseJSON(data);
            //alert(json.length);
            /*for (var i=0;i<json.length;++i)
             {
             //document.getElementById(element_id).innerHTML = json[i].ITEM_GROUP_ID1 + "  " + json[i].ITEM_GROUP_ID2 + "  ";
             document.getElementById(element_id).innerHTML = json[i].ITEM_NAME + "  ";
             }*/

            //document.getElementById("sat1").innerHTML = data;
        }
     });
    }
</script>




@endsection