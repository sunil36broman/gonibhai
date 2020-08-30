@extends('layouts.app')
@section('stylesheet')

   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h4 class="applicationHeader">Application for government accommodation under the PWD Dhaka</h4>
            <a href="{{action('ApplicationController@downloadPDF', $application->id)}}"><i style="
                    font-size: 25px;
                    color: #932ae0;
                    display: inline-block;
                "
                            class="fa fa-file-pdf-o" aria-hidden="true"></i> Document Download
            </a>
            <br />
            @if ((Auth::user()->roles[0]->name=='User') && $application->allotmentLetterUpload!=null)
            
               <a href="{{URL::to('/')}}/images/{{ $application->allotmentLetterUpload }}" target="_blank" ><i style="
                    font-size: 25px;
                    color: #932ae0;
                    display: inline-block;
                "
                            class="fa fa-file-pdf-o" aria-hidden="true"></i> Approved letter</a></br>
            @endif


        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif


            <!-- <form action="{{ route('applications.store') }}" method="POST" enctype="multipart/form-data"> -->
            <form onSubmit="return confirm('Do you want to submit?') " action="{{ route('applications.update',$application->id) }}" method="POST" enctype="multipart/form-data">
               @csrf
               @method('PUT')

               <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 showapplication">
                        <table class="table table-borderless">

                            <tbody>
                                <tr>
                                    <th scope="row">Name</th>
                                    <td>{{ $application->name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Designation</th>
                                    <td>{{ $application->designation }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Father's Name</th>
                                    <td>{{ $application->fathers_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mother's Name</th>
                                    <td>{{ $application->mothers_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">In the Department</th>
                                    <td>{{ $application->department_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">In Present Posting</th>
                                    <td>{{ $application->present_posting }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Department Name</th>
                                    <td>{{ $application->department_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Present posting</th>
                                    <td>{{ $application->present_posting }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Scale</th>
                                    <td>{{ $application->scale }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Pay including special pay of any</th>
                                    <td>{{ $application->pay_including_special_pay_of_any }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Marital Status</th>
                                    <td>{{ $application->marital_status }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mobile number</th>
                                    <td>{{ $application->mobile_number }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Spouse Name</th>
                                    <td>{{ $application->spouse_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Number of Family Member's</th>
                                    <td>{{ $application->number_of_family_members }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Whether any house/house at Dhaka Narayangonj is/are owned by</th>
                                    <td>{{ $application->any_house }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Legally Separated</th>
                                    <td>{{ $application->legally_separated }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Date</th>
                                    <td>{{ $application->date }}</td>
                                </tr>

                                <!-- <tr>
                                    <th scope="row">Please Describe here</th>
                                    <td>{{ $application->load_detail }}</td>
                                </tr> -->


                                <tr>
                                    <th scope="row">Areas where he wants to</th>
                                    <td>{{ $application->areas_where_he_wants_to }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Get House as pointy as 1</th>
                                    <td>{{ $application->pontyAsDatenew }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Get House as pointy as 2</th>
                                    <td>{{ $application->pontyAsDatenew2 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Get House as pointy as 3</th>
                                    <td>{{ $application->pontyAsDatenew3 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Recommendation of Executive Engineer</th>
                                    
                                    <td><a href="{{URL::to('/')}}/images/{{ $application->executive_engineer }}" target="_blank" > View </a></td>
                                </tr>
                                <tr>
                                    <th scope="row">Recommendation of Superintending Engineer</th>
                                    <td><a href="{{URL::to('/')}}/images/{{ $application->superintending_engineer }}" target="_blank" > View </a></td>
                                </tr>
                               

                                <tr>
                                    <th scope="row">Whether any loan was obtained from Govt for construction of such house / houses.</th>
                                    <td>{{ $application->loan }} | Amount: {{ $application->load_detail }} Date: {{ $application->date_of_loan }} </td>
                                </tr>

                                <tr>
                                    <th scope="row"> Whether any loan was obtained House Building Finance Cur-or any other agency for counts of such house / houses. (Amount and date of loan be also noted)
                                    </th>
                                    <td>{{ $application->loan2 }} | Amount: {{ $application->load_detail2 }} Date: {{ $application->date_of_loan2 }} </td>
                                </tr>

                                <tr>
                                    <th scope="row"> Whether any house/flat has been allotted to him/hire by the housing Rehabilitation Directorate PWD Directorate of Accommodation act.
</th>
                                    <td>{{ $application->flat_allotted }}  </td>
                                </tr>




                            </tbody>
                        </table>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <img src="{{URL::to('/')}}/images/{{ $application->upload_photo }}" class="card-img" alt="...">
                    </div>


                   


                   
                    
                    <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                         <strong>Whether any loan was obtained from Govt for construction of such house / houses. </strong>
                         <br><strong>Yes</strong>
                         <textarea class="form-control" style="height:150px" name="load_detail" placeholder="Please Describe here">{{ $application->load_detail }}</textarea>
                    </div> -->
                    <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                       <strong>Whether any house/flat has been allotted to him/hire by the housing Rehabilitation Directorate PWD Directorate of Accommodation act.</strong></br>
                        <strong>Yes</strong>
                    </div> -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <strong>What is his/her present accommodation arraignment</strong>
                        <textarea class="form-control" style="height:150px" name="accommodation_detail" placeholder="Please Describe here"> {{ $application->accommodation_detail }}</textarea>
                     </div>

                     <!-- <div class="col-xs-6 col-sm-6 col-md-6" style="margin-top:25px;margin-bottom:25px">
                         <strong>Areas where he wants to</strong>
                         <br><strong>{{ $application->areas_where_he_wants_to }}</strong>
                     </div>
                     <div class="col-xs-6 col-sm-6 col-md-6" style="margin-top:25px;margin-bottom:25px">
                        <strong>Get house on pointy as:{{ $application->pontyAsDatenew }}</strong>
                        <br><strong>{{ $application->ponty_as_date }}</strong>
                     </div> -->

                     <!-- <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                             <strong>Recommendation of Executive Engineer:</strong><br>
                           
                             <a href="{{URL::to('/')}}/images/{{ $application->superintending_engineer }}" class="btn btn-bd-primary" target="_blank">Download File</a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Recommendation of Superintending Engineer:</strong>
                            <br><a href="{{URL::to('/')}}/images/{{ $application->superintending_engineer }}" class="btn btn-bd-primary" target="_blank">Download File</a>
                        </div>
                    </div> -->


               </div>

               <div class="row buttonArea">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                         <strong> Signature of Application  </strong>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8">
                   
                        <img height="150" src=" {{URL::to('/')}}/images/{{ $application->signature_upload }}" class="card-img" alt="..." style="
    background: #fff;
    border: 1px solid #000;
    padding: 20px;
">

                    </div>
                </div>

                <div class="row buttonArea">
                    <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                        <strong>Office Approval</strong>
                    </div> -->

                    @if($application->status==3 && (!$application->approved_superintendent_engineer && $application->approved_executive_engineer))
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-check">
                            <input required class="form-check-input" name="pontyAsDatenewSelected" type="radio" value="{{$application->pontyAsDatenew}}" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                               Get house on pointy as 1 ({{$application->pontyAsDatenew}})
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" name="pontyAsDatenewSelected" type="radio" value="{{$application->pontyAsDatenew2}}" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                               Get house on pointy as 2 ({{$application->pontyAsDatenew2}})
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" name="pontyAsDatenewSelected" type="radio" value="{{$application->pontyAsDatenew3}}" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                               Get house on pointy as 3 ({{$application->pontyAsDatenew3}})
                            </label>
                        </div>
                    </div>
                    @endif

                    @if($application->file_number==NULL)
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                       <div class="form-group">
                            <strong>File number:</strong>
                            <input required type="text" name="file_number" class="form-control" placeholder="File Number">
                        </div>
                        </div>
                        </div>
                    </div> 
                    @endif
                    <div class="col-xs-6 col-sm-6 col-md-6">
                       <div class="row">
                           <div class="col-xs-12 col-sm-12 col-md-12">
                                    <!-- <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Staff Investigation completed
                                        </label>
                                    </div> -->
                                    <div class="form-group">
                                        <strong>Comment</strong>
                                        <textarea required class="form-control" style="height:70px" name="accommodation" placeholder="Comment"></textarea>
                                    </div>
                           </div>

                           @if ($application->status <= 3)
                           <div class="col-xs-6 col-sm-6 col-md-6">
                                
                           @if($application->status==3 && (!$application->approved_superintendent_engineer && $application->approved_executive_engineer))
                                <div class="file btn btn-lg btn-primary" style="margin-bottom: 10px;">
                                     Regulation upload 
                                    <input type="file" name="regulationUpload"/>
                                </div>
                            @endif    



                            @if($application->status <= 3 && !($application->approved_executive_engineer))

                                <div class="file btn btn-lg btn-primary">
                                    Upload
                                    <input type="file" name="accommodation_file"/>
                                </div>

                            @endif   

                            @if($application->status==3 && (!$application->approved_superintendent_engineer && $application->approved_executive_engineer))    
                                <div class="file btn btn-lg btn-primary" style="margin-top: 10px;">
                                     Allotment letter upload
                                    <input type="file" name="allotmentLetterUpload"/>
                                </div>
                            @endif    


                           </div>
                           <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">

                                    <select required name="status" class="form-control" id="exampleFormControlSelect1">
                                        <option value="" selected disabled hidden>Status</option>
                                        <!-- <option value="pending">Pending</option>
                                        <option value="investigation">Investigation</option> -->
                                        <option value="approved">Approved</option>
                                        <option value="rejected">Rejected</option>
                                    </select>

                                </div>
                            </div>
                            @endif 
                    

                    

                  


                       </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-check">
                            <input required class="form-check-input"<?php echo ($application->status==3 && (!$application->approved_superintendent_engineer && $application->approved_executive_engineer)? ' ' : ' disabled');?> <?php echo ($application->approved_superintendent_engineer == 1 ? ' checked' : '');?> name="approved_superintendent_engineer" type="checkbox" value="1" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            Approved By Superintendent Engineer 
                                
                                @if($application->super_status=='rejected' && $application->approved_superintendent_engineer)
                                <i style="color:red" class="fa fa-times" aria-hidden="true"></i>
                                @elseif($application->super_status=='approved' && $application->approved_superintendent_engineer)
                                  <i style="color:green" class="fa fa-check" aria-hidden="true"></i>
                                @endif
                               
                                
                           
                                @if($application->recommendation_superintendent!=null || $application->recommendation_superintendent_file!=null),
                                  <a href="#" data-toggle="modal" data-target="#exampleModal4">
                                    View
                                  </a>
                                @endif
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Remarks and Files</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        @if($application->recommendation_superintendent!=null), Remarks: {{$application->recommendation_superintendent}} @endif @if($application->recommendation_superintendent_file!=null)</br>
                                        <a href="{{URL::to('/')}}/images/{{ $application->recommendation_superintendent_file }}" target="_blank" > View </a></br>
                                        <a href="{{URL::to('/')}}/images/{{ $application->regulationUpload }}" target="_blank" > Regulated File View </a></br>
                                        <a href="{{URL::to('/')}}/images/{{ $application->allotmentLetterUpload }}" target="_blank" > Allotment Letter View </a>
                                        
                                         @endif
                                        </div>
                                       


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" <?php echo ($application->status==3 && !$application->approved_executive_engineer? ' ' : ' disabled');?> <?php echo ($application->approved_executive_engineer == 1 ? ' checked' : '');?> name="approved_executive_engineer" type="checkbox" value="1" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            Forwarded by Executive Engineer  
                                @if($application->executive_status=='rejected' && $application->approved_executive_engineer)
                                <i style="color:red" class="fa fa-times" aria-hidden="true"></i>
                                @elseif($application->executive_status=='approved' && $application->approved_executive_engineer)
                                  <i style="color:green" class="fa fa-check" aria-hidden="true"></i>
                                @endif
                               

                                @if($application->recommendation_executive!=null || $application->recommendation_executive_file!=null),
                                  <a href="#" data-toggle="modal" data-target="#exampleModal3">
                                    View
                                  </a>
                                @endif
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Remarks and Files</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        @if($application->recommendation_executive!=null), Remarks: {{$application->recommendation_executive}} @endif @if($application->recommendation_executive_file!=null), <a href="{{URL::to('/')}}/images/{{ $application->recommendation_executive_file }}" target="_blank" > View </a> @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        
                                        </div>
                                        </div>
                                    </div>
                                </div>
</label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" <?php echo ($application->status==2 && !$application->approved_estate_officer? ' ' : ' disabled');?> <?php echo ($application->approved_estate_officer == 1 ? ' checked' : '');?> name="approved_estate_officer" type="checkbox" value="1" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            Forwarded by Estate Officer 
                                

                                @if($application->estate_status=='rejected' && $application->approved_estate_officer)
                                <i style="color:red" class="fa fa-times" aria-hidden="true"></i>
                                @elseif($application->estate_status=='approved' && $application->approved_estate_officer)
                                  <i style="color:green" class="fa fa-check" aria-hidden="true"></i>
                                @endif
                               
                                @if($application->recommendation_estate!=null || $application->recommendation_estate_file!=null),
                                  <a href="#" data-toggle="modal" data-target="#exampleModal2">
                                    View
                                  </a>
                                @endif
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Remarks and Files</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                         @if($application->recommendation_estate!=null), Remarks: {{$application->recommendation_estate}} @endif @if($application->recommendation_estate_file!=null), <a href="{{URL::to('/')}}/images/{{ $application->recommendation_estate_file }}" target="_blank" > View </a> @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" <?php echo ($application->status==1 && !$application->approved_sectional_officer? ' ' : ' disabled');?>  <?php echo ($application->approved_sectional_officer? ' checked' : '');?> name="approved_sectional_officer" type="checkbox" value="1" id="defaultCheck1" >
                            <label class="form-check-label" for="defaultCheck1">
                            Forwarded by Sectional Officer  

                               

                                @if($application->sectional_status=='rejected' && $application->approved_sectional_officer)
                                <i style="color:red" class="fa fa-times" aria-hidden="true"></i>
                                @elseif($application->sectional_status=='approved' && $application->approved_sectional_officer)
                                  <i style="color:green" class="fa fa-check" aria-hidden="true"></i>
                                @endif

                                @if($application->recommendation_sectional!=null || $application->recommendation_sectional_file!=null),
                                  <a href="#" data-toggle="modal" data-target="#exampleModal">
                                    View
                                  </a>
                                @endif
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Remarks and Files</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        @if($application->recommendation_sectional!=null)
                                            {{$application->recommendation_sectional}}
                                        @endif
                                        @if($application->recommendation_sectional_file!=null), <a href="{{URL::to('/')}}/images/{{ $application->recommendation_sectional_file }}" target="_blank" > View </a> @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        
                                        </div>
                                        </div>
                                    </div>
                                </div>
                           
                           
                            </label>
                            
                        </div>
                    </div>
                </div>
                <div class="row buttonArea">
                @if (Auth::user()->roles[0]->name!='User')
                  @if ($application->status<=3)
                     <div class="col-xs-6 col-sm-6 col-md-6">
                           <a href="{{ route('applications.index') }}" class="btn btn-primary resetButton">Back</a>

                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                          <button type="submit" class="btn btn-primary previewButton">Submit</button>
                    </div>
                  @else
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <a href="{{ route('applications.index') }}" class="btn btn-primary resetButton">Back</a>

                    </div>
                 @endif
                @else  
                     <div class="col-xs-12 col-sm-12 col-md-12">
                    <a href="{{ route('applications.index') }}" class="btn btn-primary resetButton">Back</a>

                    </div>
                @endif 
                    
                </div>
            </form>
        </div>
    </div>
@endsection

@section('javascript')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $('#dateOfJoining').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy/mm/dd'
    });
    $('#dateOfJoining').datepicker("setDate", new Date());


    $('#date').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy/mm/dd'
    });
    $('#date').datepicker("setDate", new Date());


    $('#pontyAsDate').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy/mm/dd'
    });
    $('#pontyAsDate').datepicker("setDate", new Date());

</script>
@stop






