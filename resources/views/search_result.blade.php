@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.min.css" >
@endsection
@section('content')
    <div class="container">
        <table class="table table-bordered table-responsive ">
            <tr>
                <th>رقم المريض</th>
                <th> اسم المريض</th>
                <th>التاريخ</th>
                <th>رقم الاسبوع</th>

                <th>عرض </th>
                <th>حذف</th>
            </tr>
            <?php
            foreach ($result as $a){
              ?>
            <tr>
              <td><?php echo $a['pno']; ?></td>
              <td><?php echo $a['pname']; ?></td>
              <td><?php echo $a['date']; ?></td>
                <td><?php echo $a['wno']; ?></td>
                <td><a class="btn btn-block  btn-success" href=" search/<?php echo $a['wno'];?>/<?php echo $a['id'] ; ?>">عرض</a></td>
                <td><a class="btn btn-block  btn-danger" href=" delete/<?php echo $a['id'] ; ?>">حذف</a></td>
            </tr>
            <?php
            }

            ?>
        </table>
    </div>
@endsection