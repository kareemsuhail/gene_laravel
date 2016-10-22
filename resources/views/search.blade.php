@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.min.css" >
@endsection
@section('content')
    <div class="container">
        <div class="page-header" style="text-align: center">
            <h1></h1>
        </div>
        <form method="post" action="/search" class="form-horizontal">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <input type="submit" class="btn btn-block btn-primary " value="بحث">
            </div>
            <div class="col-lg-4 ">
                <input type="text" class="form-control" name="search" placeholder="البحث بالرقم">

            </div>



            </div>
            <br>
        </form>
        <form class="form-horizontal" method="post" action="/search/date">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <input type="submit" class="btn btn-block btn-primary" value="بحث">
                </div>
                <div class="col-lg-4">
                    <input type="date" class="form-control" name="date" >
                </div>

            </div>

        </form>
    </div>
@endsection