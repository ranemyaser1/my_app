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
                <div class="col-md-10">   
                    
                
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Students Info</h3>

                            <div class="card-tools">
                            </div>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Level</th>
                                        <th>Age</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $student )
                                    <tr>
                                        <td>{{$student->id}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->level}}</td>
                                        <td>{{$student->age}}</td>
                                     <td>  
                                        <a href = "{{route('edit' , ['student' => $student])}}" >Edit</a>
                                    </td>
                                      <td>  
                                        <form method="post" action="{{route('destroy', ['student' => $student])}}">
                                            @csrf
                                            @method('delete')
                                        <input type="submit" value= "Delete" />
                                        </form>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div> 
                    <!-- END CARD -->

                </div>
            </div>

        </div>
    </section>

</div>