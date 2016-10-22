@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.min.css" >
@endsection
@section('content')
    <div class="container">
       <div class="page-header">
           <h1></h1>
       </div>
        <div class="row ">
            <div class="col-lg-3 col-lg-offset-9">
                <a class="btn btn-block btn-success btn-lg " href="/choices/add_view"> اضف عنصر جديد </a>
                <br>
            </div>
        </div>
        <div class="row">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th >#</th>
                    <th >العنصر</th>
                    <th>المجموعة</th>
                    <th>حذف</th>
                    <th>تعديل</th>

                </tr>
               </thead>
                <?php foreach ($w as $a){  ?>
                 <tr>
                     <form method="post" action="/choices/update">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         <td class="tdnum"><?php echo $a['id']; ?></td>
                         <input type="hidden" value="<?php echo $a['id']; ?>" name="id">
                                 <td><input type="text" class="form-control" name="update" value=" <?php echo $a['value']; ?>"></td>
                         <td style="padding-top: 25px !important; padding-left: 15px !important;">
                             <select class="btn btn-secondary-outline waves-effect btn-block" name="group" >
                                 <option  class="btn-block btn-primary" value="<?php echo $a['group']?>"> <?php echo $a['group']?> </option>
                                 <option class="btn-block btn-primary" value="a1">a1</option>
                                 <option class="btn-block btn-primary" value="a2">a2</option>
                                 <option class="btn-block btn-primary" value="c1">c1</option>
                                 <option  class="btn-block btn-primary" value="b1">b1</option>
                                 <option class="btn-block btn-primary" value="b2">b2</option>
                                 <option  class="btn-block btn-primary" value="b3">b3</option>
                                 <option class="btn-block btn-primary" value="d1">d1</option>
                                 <option class="btn-block btn-primary" value="d2">d2</option>

                             </select></td>
                         <td style="padding-top: 25px !important; padding-left: 15px !important;">
                             <button type="submit " class="btn btn-success btn-block">تعديل</button>
                            <!-- <input type="submit" class="btn btn-success-outline waves-effect btn-block" value="تعديل"> --></td>
                         <td style="padding-top: 25px !important; padding-left: 15px !important;"><a href="choices/delete/<?php echo $a['id']?>" class="btn btn-block btn-danger">حذف</a></td>
                     </form>
                 </tr>
                <?php }?>
            </table>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>

@endsection
