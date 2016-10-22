@extends('layouts.app')
@section('content')
    <div class="container">
        <form class="form-horizontal" method="post" action="choices/add">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="col-lg-4"></div>

                <div class="col-lg-4  ">
                  <input  type="text" style="text-align: center" class="form-control" name="value" required>
                    <br>
                </div>
                <div class="col-lg-1"><label>ادخل العنصر</label></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <select name="group" class="form-control">
                        <option value="a1">a1</option>
                        <option value="a2">a2</option>
                        <option value="c1">c1</option>
                        <option value="b1">b1</option>
                        <option value="b2">b2</option>
                        <option value="b3">b3</option>
                        <option value="d1">d1</option>
                        <option value="d2">d2</option>
                    </select>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <input type="submit" class="btn btn-block btn-success" style="font-size: large" value="حفظ">
                </div>
            </div>
        </form>

    </div>
@endsection