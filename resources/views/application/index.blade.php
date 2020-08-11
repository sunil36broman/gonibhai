@extends('layouts.app')

@section('stylesheet')
   <link href="{{ asset('css/onlydashboard.css') }}" rel="stylesheet">
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="applicationindex">
                <!-- <a class="btn btn-success" href="{{ route('applications.create') }}"> Create Application</a> -->
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    @can('application-pending')
                    <li class="nav-item" role="presentation">
                        <a
                        class="@if($active_status=='application-pending') nav-link active @else nav-link @endif"

                        id="pills-pending-tab" data-toggle="pill" href="#pills-pending" role="tab" aria-controls="pills-pending" aria-selected="true">Pending</a>
                    </li>
                    @endcan
                    @can('application-investigation')
                    <li class="nav-item" role="presentation">
                        <a
                        class="@if($active_status=='application-investigation') nav-link active @else nav-link @endif"
                        id="pills-investigation-tab" data-toggle="pill" href="#pills-investigation" role="tab" aria-controls="pills-investigation" aria-selected="false">Investigation</a>
                    </li>
                    @endcan
                    @can('application-approved')
                    <li class="nav-item" role="presentation">
                        <a
                        class="@if($active_status=='application-approved') nav-link active @else nav-link @endif"

                         id="pills-approved-tab" data-toggle="pill" href="#pills-approved" role="tab" aria-controls="pills-approved" aria-selected="false">Approved</a>
                    </li>
                    @endcan
                    @can('application-handover')
                    <li class="nav-item" role="presentation">
                        <a
                        class="@if($active_status=='application-handover') nav-link active @else nav-link @endif"

                         id="pills-handover-tab" data-toggle="pill" href="#pills-handover" role="tab" aria-controls="pills-handover" aria-selected="false">Handover</a>
                    </li>
                    @endcan
                    @can('application-rejected')
                    <li class="nav-item" role="presentation">
                        <a
                        class="@if($active_status=='application-rejected') nav-link active @else nav-link @endif"

                         id="pills-rejected-tab" data-toggle="pill" href="#pills-rejected" role="tab" aria-controls="pills-rejected" aria-selected="false">Rejected</a>
                    </li>
                    @endcan
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    @can('application-pending')
                    <div
                     class="@if($active_status=='application-pending') tab-pane fade show active @else tab-pane fade @endif"
                     id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab">
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
                                       <img src="{{URL::to('/')}}/images/{{ $product->upload_photo }}" class="card-img" alt="...">
                                       </div>
                                    </td>
                                    <td>
                                        <div class="card-body ">
                                            <p class="card-text">Name: {{ $product->name }}</p>
                                            <p class="card-text">File Number: {{ $product->file_number }}</p>
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
                    @endcan

                    @can('application-investigation')
                    <div

                    class="@if($active_status=='application-investigation') tab-pane fade show active @else tab-pane fade @endif"

                    id="pills-investigation" role="tabpanel" aria-labelledby="pills-investigation-tab">
                        <table id="example1" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($investigationApplications as $product)
                                <tr>
                                    <td> 
                                       <div class="col-sm">
                                       <img src="{{URL::to('/')}}/images/{{ $product->upload_photo }}" class="card-img" alt="...">
                                       </div>
                                    </td>
                                    <td>
                                        <div class="card-body ">
                                            <p class="card-text">Name: {{ $product->name }}</p>
                                            <p class="card-text">File Number: {{ $product->file_number }}</p>
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
                    @endcan

                    @can('application-approved')
                    <div
                    class="@if($active_status=='application-approved') tab-pane fade show active @else tab-pane fade @endif"

                     id="pills-approved" role="tabpanel" aria-labelledby="pills-approved-tab">



                     <table id="example2" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($approvedApplications as $product)
                                <tr>
                                    <td> 
                                       <div class="col-sm">
                                       <img src="{{URL::to('/')}}/images/{{ $product->upload_photo }}" class="card-img" alt="...">
                                       </div>
                                    </td>
                                    <td>
                                        <div class="card-body ">
                                             <p class="card-text">Name: {{ $product->name }}</p>
                                            <p class="card-text">File Number: {{ $product->file_number }}</p>
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
                    @endcan

                    @can('application-handover')
                    <div
                    class="@if($active_status=='application-handover') tab-pane fade show active @else tab-pane fade @endif"

                     id="pills-handover" role="tabpanel" aria-labelledby="pills-handover-tab">

                     <table id="example3" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($handoverApplications as $product)
                                <tr>
                                    <td> 
                                       <div class="col-sm">
                                       <img src="{{URL::to('/')}}/images/{{ $product->upload_photo }}" class="card-img" alt="...">
                                       </div>
                                    </td>
                                    <td>
                                        <div class="card-body ">
                                            <p class="card-text">Name: {{ $product->name }}</p>
                                            <p class="card-text">File Number: {{ $product->file_number }}</p>
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
                    @endcan

                    @can('application-rejected')
                    <div
                    class="@if($active_status=='application-rejected') tab-pane fade show active @else tab-pane fade @endif"

                     id="pills-rejected" role="tabpanel" aria-labelledby="pills-rejected-tab">

                        <table id="example4" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($rejectedApplications as $product)
                                <tr>
                                    <td> 
                                       <div class="col-sm">
                                        <!-- <img src="{{ asset('images/profile.png') }}" class="card-img" alt="..."> -->
                                        <img src="{{URL::to('/')}}/images/{{ $product->upload_photo }}" class="card-img" alt="...">

                                       </div>
                                    </td>
                                    <td>
                                        <div class="card-body ">
                                            <p class="card-text">Name: {{ $product->name }}</p>
                                            <p class="card-text">File Number: {{ $product->file_number }}</p>
                                            <p class="card-text">Designation: {{ $product->designation }}</p>
                                            <p class="card-text">Department Name: {{ $product->department_name }}</p>
                                            <p class="card-text">Date of publication: {{ $product->created_at }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{ route('applications.destroy',$product->id) }}" method="POST">
                                            <a class="btn btn-info" href="{{ route('applications.show',$product->id) }}">Resubmit</a>

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
                    @endcan
                </div>
        </div>
    </div>
</div>


@endsection

@section('javascript')

@stop
