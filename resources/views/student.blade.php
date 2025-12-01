@extends('layouts.app')

@section('content')
    
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
                                        <th>Government</th>
                                        <th>Image</th>
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
                                        <td>{{ $student->government ? $student->government->name : ' - ' }}</td>
                                        <td>
                                           <img src="{{ asset('storage/'.$student->image) }}" width="150">
                                           
                                        </td>
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
@endsection