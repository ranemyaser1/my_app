@extends('layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content">
            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <!-- Your card -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Student</h3>
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
                            <form method="post" action="{{route('update', ['student' => $student ])}}">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="form-group"> <label for="exampleInputEmail1">Student Name</label>
                                        <input type="text" class="form-control" id="exampleInputname1" name="name"
                                            placeholder="Enter Student Name" value = "{{$student->name}}"> </div>
                                    <div class="form-group"> <label for="exampleInputPassword1">Level</label> <input
                                            type="text" class="form-control" id="exampleInputlevel1"
                                          name="level"  placeholder="Enter Student Level" value = "{{$student->level}}"> </div>
                                     <div class="form-group"> <label for="exampleInputPassword1">Age</label> <input
                                            type="number" class="form-control" id="exampleInputAge1"
                                          name="age"  placeholder="Enter Student Age" value = "{{$student->age}}"> </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>
 @endsection