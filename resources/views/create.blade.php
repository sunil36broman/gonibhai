





@extends('layouts.app')
@section('stylesheet')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center logincustom">
        <div class="col-md-12">

    <div class="row">
        <div class="col-md-12">
            <h4 class="applicationHeader">Application for government accommodation under the PWD Dhaka</h4>

            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                @csrf



                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Email:</strong>
                            <input required type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Designation:</strong>
                            <input required type="text" name="designation" class="form-control" placeholder="Designation">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>password:</strong>
                            <input required type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>password:</strong>
                            <input required type="password" name="confirm-password" class="form-control" placeholder="Confirm Password">
                        </div>
                    </div>
                    
                </div>

               

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Father's Name:</strong>
                            <input required type="text" name="fathers_name" class="form-control" placeholder="Father' Name">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Mother's Name:</strong>
                            <input required type="text" name="mothers_name" class="form-control" placeholder="Mother's Name">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Date of Joining:</strong>
                            <input required data-date-format="dd/mm/yyyy" id="dateOfJoining" type="text" name="date_of_joining" class="form-control" placeholder="Date of Joining">

                        </div>
                        <!-- <div class="form-group">
                            <strong>Date of Joining:</strong>
                            <div class='input-group date' id='datetimepicker1'>
                                <input type="text" name="dateOfJoining" class="form-control" placeholder="Date of Joining">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>In the Department:</strong>
                            <input required type="text" name="department_name" class="form-control" placeholder="In the Department">
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>In Present Posting:</strong>
                            <input required type="text" name="present_posting" class="form-control" placeholder="In Present Posting">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Upload joining letter :</strong>
                            <input required type="file" class="form-control-file" name="upload_joining_letter" id="exampleFormControlFile1">

                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Pay Scale:</strong>
                            <input required type="text" name="scale" class="form-control" placeholder="Pay Scale">
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Present Salary:</strong>
                            <input required type="text" name="present_salary" class="form-control" placeholder="Present Salary">
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Pay including special pay of any:</strong>
                            <input type="text" name="pay_including_special_pay_of_any" class="form-control" placeholder="Pay including special pay of any">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <strong>Marital Status:</strong>
                                <div class="form-group">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input required type="radio" id="maritalStatus" name="marital_status" value="single" class="custom-control-input">
                                        <label class="custom-control-label" for="maritalStatus">Single</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input required type="radio" id="maritalStatus2" name="marital_status" value="married" class="custom-control-input">
                                        <label class="custom-control-label" for="maritalStatus2">Married</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Mobile number:</strong>
                                    <input required type="text" name="mobile_number" class="form-control" placeholder="Mobile Number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Spouse Name:</strong>
                                    <input required type="text" name="spouse_name" class="form-control" placeholder="Spouse Name">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Number of Family Member's:</strong>
                                    <input type="text" name="number_of_family_members" class="form-control" placeholder="Number of Family Member's">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <strong>Whether any house/house at Dhaka Narayangonj is/are owned by</strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="anyHouse" name="any_house" value="himHer" class="custom-control-input">
                                        <label class="custom-control-label" for="anyHouse">Him/Her</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="anyHouse2" name="any_house" value="spouse" class="custom-control-input">
                                        <label class="custom-control-label" for="anyHouse2">Spouse</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Legally Separated:</strong>
                                    <input type="text" name="legally_separated" class="form-control" placeholder="Legally Separated">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Date/ dates of Completion of first Letting unit/units of such house/houes.</strong>

                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Date:</strong>
                                    <input data-date-format="dd/mm/yyyy" type="text" name="date" id="date" class="form-control" placeholder="Date">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Upload your photo</strong>
                            <input required type="file" class="form-control-file" name="upload_photo" id="exampleFormControlFile1">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                         <strong>Whether any loan was obtained from Govt for construction of such house / houses.(Amount and Date of Loan) </strong>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="loan4" name="loan" class="custom-control-input" value="yes">
                                <label class="custom-control-label" for="loan4">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="loan5" name="loan" class="custom-control-input" value="no">
                                <label class="custom-control-label" for="loan5">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Amount:</strong>
                            <input type="text" name="load_detail" class="form-control" placeholder="Amount">
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Date:</strong>
                            <input data-date-format="dd/mm/yyyy" id="date_of_loan" type="text" name="date_of_loan" class="form-control" placeholder="Date">
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                         <strong>Whether any loan was obtained House Building Finance Cur-or any other agency for counts of such house / houses. (Amount and date of loan be also noted)  </strong>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="loan" name="loan2" class="custom-control-input" value="yes">
                                <label class="custom-control-label" for="loan">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="loan2" name="loan2" class="custom-control-input" value="no">
                                <label class="custom-control-label" for="loan2">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Amount:</strong>
                            <input type="text" name="load_detail2" class="form-control" placeholder="Amount">
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Date:</strong>
                            <input data-date-format="dd/mm/yyyy" id="date_of_loan2" type="text" name="date_of_loan2" class="form-control" placeholder="Date">
                        </div>
                    </div>

                </div>   



                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Whether any house/flat has been allotted to him/hire by the housing Rehabilitation Directorate PWD Directorate of Accommodation act.</strong></br>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="flatAllotted" name="flat_allotted" class="custom-control-input" value="yes">
                                <label class="custom-control-label" for="flatAllotted">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="flatAllotted2" name="flat_allotted" class="custom-control-input" value="no">
                                <label class="custom-control-label" for="flatAllotted2">No</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>What is his/her present accommodation arraignment</strong>
                            <textarea class="form-control" style="height:150px" name="accommodation_detail" placeholder="Please Describe here"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Areas where he wants to</strong>
                            <select class="form-control" id="exampleFormControlSelect1" name="areas_where_he_wants_to">
                                <option value="Badda, Dhaka">Badda, Dhaka</option>
                                <option value="Kuril, Dhaka">Kuril, Dhaka</option>
                                <option value="KhilKhet, Dhaka">KhilKhet, Dhaka</option>
                                <option value="Bashundhara, Dhaka">Bashundhara, Dhaka</option>
                                <option value="Norda, Dhaka">Norda, Dhaka</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Get house on pointy as:</strong>
                            <input type="text" id="pontyAsDate33" name="pontyAsDatenew" class="form-control" placeholder="Get house on pointy as">
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Date:</strong>
                            <input type="text" data-date-format="dd/mm/yyyy" id="pontyAsDate" name="ponty_as_date" class="form-control" placeholder="Get house on pointy as date">
                        </div>
                    </div>
                </div>

                <div class="row recommendationArea">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                             <strong>Recommendation of Executive Engineer:</strong>
                            <input type="file" name="executive_engineer" class="form-control-file " id="exampleFormControlFile1">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Recommendation of Superintending Engineer:</strong>
                            <input type="file" class="form-control-file" name="superintending_engineer" id="exampleFormControlFile1">
                        </div>
                    </div>
                </div>
                <div class="row buttonArea">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                         <strong> Signature of Application  </strong>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="form-group">
                            <strong>Upload</strong>
                            <input required type="file" name="signature_upload" class="form-control-file " id="exampleFormControlFile1">
                        </div>
                    </div>
                </div>
                <div class="row buttonArea">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                           <button type="reset" class="btn btn-primary resetButton">Reset</button>

                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                          <button type="submit" class="btn btn-primary previewButton">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

       </div>
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


    $('#date_of_loan').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy/mm/dd'
    });
    $('#date_of_loan').datepicker("setDate", new Date());


    $('#date_of_loan2').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy/mm/dd'
    });
    $('#date_of_loan2').datepicker("setDate", new Date());

</script>
@stop










