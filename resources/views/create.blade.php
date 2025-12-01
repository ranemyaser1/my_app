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
                            <form method="post" action="{{route('store')}}" enctype="multipart/form-data">
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
<label>Government</label>
<select name="student_gov" class="form-control" required>
    @foreach($governments as $gov)
        <option value="{{ $gov->id }}" 
            {{ old('student_gov', $student->government_id ?? '') == $gov->id ? 'selected' : '' }}>
            {{ $gov->name }}
        </option>
    @endforeach
</select>


                                            <div class="form-group"> <label for="exampleInputPassword1">Image</label> <input
                                            type="file" class="form-control" id="exampleInputimage1"
                                          name="image"  placeholder="Enter Student image"> </div>
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
    @endsection
