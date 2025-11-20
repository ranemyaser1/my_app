<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body>

    @include('navbar')
    @include('sidebar')



    <div class="content-wrapper">

        <section class="content">
            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <!-- Your card -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Student</h3>
                            </div>
                             <div>
                                @if($errors->any())
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                                @endif
                             </div>
                            <form method="post" action="{{route('store')}}">
                                @csrf
                                @method('post')
                                <div class="card-body">
                                    <div class="form-group"> <label for="exampleInputEmail1">Student Name</label>
                                        <input type="text" class="form-control" id="exampleInputname1" name="name"
                                            placeholder="Enter Student Name"> </div>
                                    <div class="form-group"> <label for="exampleInputPassword1">Level</label> <input
                                            type="text" class="form-control" id="exampleInputlevel1"
                                          name="level"  placeholder="Enter Student Level"> </div>
                                     <div class="form-group"> <label for="exampleInputPassword1">Age</label> <input
                                            type="number" class="form-control" id="exampleInputAge1"
                                          name="age"  placeholder="Enter Student Age"> </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>
