@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.min.css" >
@endsection

@section('content')
    <div class="container-fluid">
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
               <td><?php echo $result['w1d1b'];?></td>
               <td><?php echo $result['w1d1s1'];?></td>
               <td><?php echo $result['w1d1l'];?></td>
               <td><?php echo $result['w1d1s2'];?></td>
               <td><?php echo $result['w1d1d'];?></td>
           </tr>
           <tr>
               <td>الاحد</td>
               <td><?php echo $result['w1d2b'];?></td>
               <td><?php echo $result['w1d2s1'];?></td>
               <td><?php echo $result['w1d2l'];?></td>
               <td><?php echo $result['w1d2s2'];?></td>
               <td><?php echo $result['w1d2d'];?></td>
           </tr>
           <tr>
               <td>الاثنين</td>
               <td><?php echo $result['w1d3b'];?></td>
               <td><?php echo $result['w1d3s1'];?></td>
               <td><?php echo $result['w1d3l'];?></td>
               <td><?php echo $result['w1d3s2'];?></td>
               <td><?php echo $result['w1d3d'];?></td>
           </tr>
           <tr>
               <td>الثلاثاء</td>
               <td><?php echo $result['w1d4b'];?></td>
               <td><?php echo $result['w1d4s1'];?></td>
               <td><?php echo $result['w1d4l'];?></td>
               <td><?php echo $result['w1d4s2'];?></td>
               <td><?php echo $result['w1d4d'];?></td>
           </tr>
           <tr>
               <td>الاربعاء</td>
               <td><?php echo $result['w1d5b'];?></td>
               <td><?php echo $result['w1d5s1'];?></td>
               <td><?php echo $result['w1d5l'];?></td>
               <td><?php echo $result['w1d5s2'];?></td>
               <td><?php echo $result['w1d5d'];?></td>
           </tr>
           <tr>
               <td>الخميس</td>
               <td><?php echo $result['w1d6b'];?></td>
               <td><?php echo $result['w1d6s1'];?></td>
               <td><?php echo $result['w1d6l'];?></td>
               <td><?php echo $result['w1d6s2'];?></td>
               <td><?php echo $result['w1d6d'];?></td>
           </tr>
           <tr>
               <td>الجمعة</td>
               <td><?php echo $result['w1d7b'];?></td>
               <td><?php echo $result['w1d7s1'];?></td>
               <td><?php echo $result['w1d7l'];?></td>
               <td><?php echo $result['w1d7s2'];?></td>
               <td><?php echo $result['w1d7d'];?></td>
           </tr>
       </table>
    </div>
@endsection
