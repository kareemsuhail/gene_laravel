<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    @yield('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.2.0-rc2/css/bootstrap-rtl.min.css" >
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body>

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
</body>