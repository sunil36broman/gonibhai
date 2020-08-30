@extends('layouts.app')

@section('stylesheet')
   <link href="{{ asset('public/css/onlydashboard.css') }}" rel="stylesheet">
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="applicationindex">
                <!-- <a class="btn btn-success" href="{{ route('applications.create') }}"> Create Application</a> -->
                
                 
                     <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($peindingApplications as $product)
                                <tr>
                                    <td> 
                                       <div class="col-sm">
                                       <img src="{{URL::to('/')}}/public/images/{{ $product->upload_photo }}" class="card-img" alt="...">
                                       </div>
                                    </td>
                                    <td>
                                        <div class="card-body ">
                                            <p class="card-text">Name: {{ $product->name }}</p>
                                            <p class="card-text">Reference Number: {{ $product->refrence_id }}</p>
                                            <p class="card-text">Designation: {{ $product->designation }}</p>
                                            <p class="card-text">Department Name: {{ $product->department_name }}</p>  
                                            <p class="card-text">Date of publication: {{ $product->created_at }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{ route('applications.destroy',$product->id) }}" method="POST">
                                            <!-- <a class="btn btn-info" href="{{ route('applications.show',$product->id) }}">Show</a> -->

                                            <a class="btn btn-primary" href="{{ route('applications.edit',$product->id) }}">View</a>
                                            @csrf
                                            @method('DELETE')

                                            <!-- <button type="submit" class="btn btn-danger">Delete</button> -->

                                        </form>
                                    </td>
                                </tr>
                            @endforeach                       
                            </tbody>
                        </table>

                        
                   
                
        </div>
    </div>
</div>


@endsection

@section('javascript')

@stop
