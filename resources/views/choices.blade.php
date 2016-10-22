@extends('layouts.app')
@section('css')
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.min.css" > -->
@endsection
@section('content')
<div class="container">
<div class="page-header" style="text-align: center;">
	<h1 class="btn btn-secondary btn-block btn-lg" style="font-family: “Droid Arabic Kufi” , serif; 
	 font-size: 36px">اختر ما لا تريده في برنامجك الغذائي</h1>
</div>
 <form  method="post" action="/table">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 <div class="row">
 <div class="col-lg-2">
 <?php
  $a1name = "a1";
  $a2name = "a2";
  $c1name = "c1";
  $b1name = "b1";
  $b2name = "b2";
  $b3name = "b3";
  $d1name = "d1";
  $d2name = "d2";
 ?>

 @foreach($a1 as $a)
         <div class=" form-group" data-toggle="buttons">
    <label  style="margin-top: 1px !important; margin-bottom: 1px !important; display: block" class="btn btn-primary ">
     <input type="checkbox" autocomplete="off" name="{{$a1name}}" value=  {{$a->id}} > {{$a->value}}
    </label>

    </div>
 <?php $a1name = $a1name."1" ;?>
  @endforeach
  @foreach($a2 as $a)

         <div class=" form-group" data-toggle="buttons">
             <label  style="margin-top: 1px !important; margin-bottom: 1px !important; display: block" class="btn btn-info ">
      <input type="checkbox" name= "{{$a2name}}" value=  {{$a->id}} > {{$a->value}}
    </label>

  </div>
  <?php $a2name = $a2name."1" ; ?>
  @endforeach
  </div>
  <div class="col-lg-2">
 @foreach($b1 as $a)
          <div class=" form-group" data-toggle="buttons">
              <label  style="margin-top: 1px !important; margin-bottom: 1px !important; display: block" class="btn btn-default ">
      <input type="checkbox" name="{{$b1name}}" value=  {{$a->id}} > {{$a->value}}
    </label>
  </div>
  <?php $b1name = $b1name."1" ; ?>
  @endforeach

  @foreach($b2 as $a)
         <div class=" form-group" data-toggle="buttons">
             <label  style="margin-top: 1px !important; margin-bottom: 1px !important; display: block" class="btn  btn-secondary ">
      <input type="checkbox" name="{{$b2name}}" value=  {{$a->id}} > {{$a->value}}
    </label>
  </div>
  <?php $b2name = $b2name."1" ; ?>
  @endforeach
  </div>
  <div class="col-lg-2">
 @foreach($b3 as $a)
         <div class=" form-group" data-toggle="buttons">
              <label  style="margin-top: 1px !important; margin-bottom: 1px !important; display: block" class="btn btn-default ">
      <input type="checkbox" name="{{$b3name}}" value=  {{$a->id}} > {{$a->value}}
    </label>
  </div>
  <?php $b3name = $b3name."1" ; ?>
  @endforeach
  @foreach($c1 as $a)
         <div class=" form-group" data-toggle="buttons">
             <label  style="margin-top: 1px !important; margin-bottom: 1px !important; display: block" class="btn btn-success ">
      <input type="checkbox" name="{{$c1name}}" value=  {{$a->id}}  > {{$a->value}}
    </label>
  </div>
  <?php $c1name = $c1name."1" ; ?>

  @endforeach
  </div>
  <div class="col-lg-3">
 @foreach($d1 as $a)
          <div class=" form-group" data-toggle="buttons">
              <label  style="margin-top: 1px !important; margin-bottom: 1px !important; display: block" class="btn btn-warning ">
      <input type="checkbox" name="{{$d1name}}" value=  {{$a->id}} > {{$a->value}}
    </label>
  </div>
  <?php $d1name = $d1name."1" ; ?>
  @endforeach
      </div>
      <div class="col-lg-3">
   @foreach($d2 as $a)
              <div class=" form-group" data-toggle="buttons">
                  <label  style="margin-top: 1px !important; margin-bottom: 1px !important; display: block" class="btn btn-danger">
      <input type="checkbox" name="{{$d2name}}" value=  {{$a->id}} > {{$a->value}}
    </label>
  </div>
  <?php $d2name = $d2name."1" ; ?>
  @endforeach

  </div>
  </div>
  <div class="row">
  	<div class="col-lg-3">
        <input type="submit"  value="ارسال" class="btn btn-info-outline waves-effect" style="display: block!important;">

  	</div>
  </div>
 </form>  
</div>
@endsection
