@extends('layouts.app')
@section('css')
@endsection
@section('content')
<style>
    body{
        background-color:  #f2f2f2;
    }
</style>

    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="http://placehold.it/1200x400?text=IMAGE" alt="Image">
                    <div class="carousel-caption">
                        <h3>Sell $</h3>
                        <p>Money Money.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="http://placehold.it/1200x400?text=Another Image Maybe" alt="Image">
                    <div class="carousel-caption">
                        <h3>More Sell $</h3>
                        <p>Lorem ipsum...</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4">
                <div class="jumbotron" style="text-align: center">
                    <h3 class="h1-responsive">برنامج غذائي</h3>
                    <p class="lead">من هنا يمكنك انشاء جدول غذائي للمريض وحفظه ايضا</p>

                    <p class="lead">
                        <a class="btn btn-primary btn-lg" role="button"  href="/get">استخدم</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="jumbotron" style="text-align: center">
                    <h3 class="h1-responsive">ابحث عن مريض</h3>
                    <p class="lead">من هنا يمكنك البحث عن المريض باستخدام رقمه او التاريخ الذي جاء به</p>

                    <p class="lead">
                        <a class="btn btn-primary btn-lg" role="button" href="/search_view">استخدم</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="jumbotron" style="text-align: center">
                    <h3 class="h1-responsive">تعديل الخيارات</h3>
                    <p class="lead">من هنا يمكنك تعديل الخيارات من حيث الحذف والاضافة</p>

                    <p class="lead">
                        <a class="btn btn-primary btn-lg" role="button" href="/choices_show">استخدم</a>
                    </p>
                </div>
            </div>

        </div>

    </div>
   <!-- <div class="row">
        <hr>
    </div>
<div class="row">
    <div class="col-lg-4 col-lg-offset-4">
        <a class="btn btn-block btn-primary btn-lg"  href="/get">انشاء برنامج غذائي  جديد</a>
        <br>
    </div>
</div>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <a class="btn btn-block btn-primary btn-lg"  href="/search_view">ابحث عن مريض</a>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <a class="btn btn-block btn-primary btn-lg"  href="/choices_show">عدل الخيارات</a>
        </div>
    </div> -->


@endsection