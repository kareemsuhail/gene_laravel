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
               <td><?php echo $result['w2d1b'];?></td>
               <td><?php echo $result['w2d1s1'];?></td>
               <td><?php echo $result['w2d1l'];?></td>
               <td><?php echo $result['w2d1s2'];?></td>
               <td><?php echo $result['w2d1d'];?></td>
           </tr>
           <tr>
               <td>الاحد</td>
               <td><?php echo $result['w2d2b'];?></td>
               <td><?php echo $result['w2d2s1'];?></td>
               <td><?php echo $result['w2d2l'];?></td>
               <td><?php echo $result['w2d2s2'];?></td>
               <td><?php echo $result['w2d2d'];?></td>
           </tr>
           <tr>
               <td>الاثنين</td>
               <td><?php echo $result['w2d3b'];?></td>
               <td><?php echo $result['w2d3s1'];?></td>
               <td><?php echo $result['w2d3l'];?></td>
               <td><?php echo $result['w2d3s2'];?></td>
               <td><?php echo $result['w2d3d'];?></td>
           </tr>
           <tr>
               <td>الثلاثاء</td>
               <td><?php echo $result['w2d4b'];?></td>
               <td><?php echo $result['w2d4s1'];?></td>
               <td><?php echo $result['w2d4l'];?></td>
               <td><?php echo $result['w2d4s2'];?></td>
               <td><?php echo $result['w2d4d'];?></td>
           </tr>
           <tr>
               <td>الاربعاء</td>
               <td><?php echo $result['w2d5b'];?></td>
               <td><?php echo $result['w2d5s1'];?></td>
               <td><?php echo $result['w2d5l'];?></td>
               <td><?php echo $result['w2d5s2'];?></td>
               <td><?php echo $result['w2d5d'];?></td>
           </tr>
           <tr>
               <td>الخميس</td>
               <td><?php echo $result['w2d6b'];?></td>
               <td><?php echo $result['w2d6s1'];?></td>
               <td><?php echo $result['w2d6l'];?></td>
               <td><?php echo $result['w2d6s2'];?></td>
               <td><?php echo $result['w2d6d'];?></td>
           </tr>
           <tr>
               <td>الجمعة</td>
               <td><?php echo $result['w2d7b'];?></td>
               <td><?php echo $result['w2d7s1'];?></td>
               <td><?php echo $result['w2d7l'];?></td>
               <td><?php echo $result['w2d7s2'];?></td>
               <td><?php echo $result['w2d7d'];?></td>
           </tr>
       </table>
    </div>
@endsection
