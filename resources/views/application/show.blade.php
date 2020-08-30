@extends('layouts.app')
@section('stylesheet')
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h4 class="applicationHeader">Application for government accommodation under the PWD Dhaka</h4>


            
            
            <form action="{{ route('updatee',$application->id) }}" method="POST" enctype="multipart/form-data">
            
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input required type="text" name="name" class="form-control" placeholder="Name" value="{{ $application->name }}">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Designation:</strong>
                            <input required type="text" value="{{ $application->designation }}" name="designation" class="form-control" placeholder="Designation">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Father's Name:</strong>
                            <input required type="text" value="{{ $application->fathers_name }}" name="fathers_name" class="form-control" placeholder="Father' Name">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Mother's Name:</strong>
                            <input required type="text" value="{{ $application->mothers_name }}" name="mothers_name" class="form-control" placeholder="Mother's Name">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Date of Joining:</strong>
                            <input required  type="text" value="{{ $application->date_of_joining }}" name="date_of_joining" class="form-control" placeholder="Date of Joining">

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
                            <input required data-date-format="dd/mm/yyyy" id="dateOfJoining" type="text" value="{{ $application->department_name }}" name="department_name" class="form-control" placeholder="In the Department:">
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>In Present Posting:</strong>
                            <input required data-date-format="dd/mm/yyyy" id="dateOfJoining2" type="text" value="{{ $application->present_posting }}" name="present_posting" class="form-control" placeholder="In Present Posting">
                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Upload joining letter :</strong>
                            <input type="file" class="form-control-file" name="upload_joining_letter" id="exampleFormControlFile1">
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Pay Scale:</strong>
                            <input required type="text" value="{{ $application->scale }}" name="scale" class="form-control" placeholder="Pay Scale">
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Present Salary:</strong>
                            <input required type="text" value="{{ $application->present_salary }}" name="present_salary" class="form-control" placeholder="Present Salary">
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <strong>Pay including special pay of any:</strong>
                            <input type="text" value="{{ $application->pay_including_special_pay_of_any }}" name="pay_including_special_pay_of_any" class="form-control" placeholder="Pay including special pay of any">
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
                                        <input required type="radio" id="maritalStatus" name="marital_status" value="single" class="custom-control-input" {{ ($application->marital_status=="single")? "checked" : "" }}>
                                        <label class="custom-control-label" for="maritalStatus">Single</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input required type="radio" id="maritalStatus2" name="marital_status" value="married" class="custom-control-input" {{ ($application->marital_status=="married")? "checked" : "" }}>
                                        <label class="custom-control-label" for="maritalStatus2">Married</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Mobile number:</strong>
                                    <input required type="text" value="{{ $application->mobile_number }}" name="mobile_number" class="form-control" placeholder="Mobile Number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Spouse Name:</strong>
                                    <input type="text" value="{{ $application->spouse_name }}" name="spouse_name" class="form-control" placeholder="Spouse Name">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Number of Family Member's:</strong>
                                    <input type="text" value="{{ $application->number_of_family_members }}" name="number_of_family_members" class="form-control" placeholder="Number of Family Member's">
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
                                        <input type="radio" id="anyHouse" name="any_house" value="himHer" class="custom-control-input" {{ ($application->any_house=="himHer")? "checked" : "" }}>
                                        <label class="custom-control-label" for="anyHouse">Him/Her</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="anyHouse2" name="any_house" value="spouse" class="custom-control-input" {{ ($application->any_house=="spouse")? "checked" : "" }}>
                                        <label class="custom-control-label" for="anyHouse2">Spouse</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Legally Separated:</strong>
                                    <input type="text" value="{{ $application->legally_separated }}" name="legally_separated" class="form-control" placeholder="Legally Separated">
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
                                    <input data-date-format="dd/mm/yyyy" type="text" value="{{ $application->date }}" name="date" id="date" class="form-control" placeholder="Date">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Upload your photo</strong>
                            <input type="file" class="form-control-file" name="upload_photo" id="exampleFormControlFile1">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                         <strong>Whether any loan was obtained from Govt for construction of such house / houses. </strong>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="loan" name="loan" class="custom-control-input" value="yes" {{ ($application->loan=="yes")? "checked" : "" }}>
                                <label class="custom-control-label" for="loan">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="loan2" name="loan" class="custom-control-input" value="no" {{ ($application->loan=="no")? "checked" : "" }}>
                                <label class="custom-control-label" for="loan2">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Amount:</strong>
                            <input type="text" value="{{ $application->load_detail }}" name="load_detail" class="form-control" placeholder="Amount">
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Date:</strong>
                            <input data-date-format="dd/mm/yyyy" value="{{ $application->date_of_loan }}" id="date_of_loan" type="text" name="date_of_loan" class="form-control" placeholder="Date">
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
                                <input type="radio" id="loan" name="loan2" class="custom-control-input" value="yes" {{ ($application->loan2=="yes")? "checked" : "" }}>
                                <label class="custom-control-label" for="loan">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="loan2" name="loan2" class="custom-control-input" value="no" {{ ($application->loan2=="no")? "checked" : "" }}>
                                <label class="custom-control-label" for="loan2">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Amount:</strong>
                            <input type="text" value="{{ $application->load_detail2 }}" name="load_detail2" class="form-control" placeholder="Amount">
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Date:</strong>
                            <input data-date-format="dd/mm/yyyy" value="{{ $application->date_of_loan2 }}" id="date_of_loan2" type="text" name="date_of_loan2" class="form-control" placeholder="Date">
                        </div>
                    </div>

                </div> 

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Whether any house/flat has been allotted to him/hire by the housing Rehabilitation Directorate PWD Directorate of Accommodation act.</strong></br>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="flatAllotted" name="flat_allotted" class="custom-control-input" value="yes" {{ ($application->flat_allotted=="yes")? "checked" : "" }} >
                                <label class="custom-control-label" for="flatAllotted">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="flatAllotted2" name="flat_allotted" class="custom-control-input" value="no" {{ ($application->flat_allotted=="no")? "checked" : "" }} >
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
                            <select required class="form-control" id="exampleFormControlSelect1" name="areas_where_he_wants_to">
                                <option value="Badda, Dhaka">Badda, Dhaka</option>
                                <option value="Kuril, Dhaka">Kuril, Dhaka</option>
                                <option value="KhilKhet, Dhaka">KhilKhet, Dhaka</option>
                                <option value="Bashundhara, Dhaka">Bashundhara, Dhaka</option>
                                <option value="Norda, Dhaka">Norda, Dhaka</option>
                            </select>
                        </div>
                    </div>
                    


                    <!-- <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Get house on pointy as:</strong>
                            <input type="text" id="pontyAsDate33" name="pontyAsDatenew" value="{{ $application->pontyAsDatenew }}" class="form-control" placeholder="Get house on pointy as">
                        </div>
                    </div> -->
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Get house on pointy as 1:</strong>
                            <select required class="form-control first_select_one" id="exampleFormControlSelect1 first_select_one" name="pontyAsDatenew">
                                <option value="Residence of divisional Sub-Assistant Engineers atZigatola.">Residence of divisional Sub-Assistant Engineers atZigatola.</option>
                                <option value="Residence of divisional Sub-Assistant Engineers at Tejgaon">Residence of divisional Sub-Assistant Engineers at Tejgaon</option>
                                <option value="Residence of divisional Sub-Assistant Engineers at Rajarba">Residence of divisional Sub-Assistant Engineers at Rajarba</option>
                                <option value="Residence of divisional Sub-Assistant Engineers under Sher-E-Bangla Nagar PWD Division-1">Residence of divisional Sub-Assistant Engineers under Sher-E-Bangla Nagar PWD Division-1</option>
                                <option value="Three unit Residence of divisional Sub-Assistant Engineers inside Ramna Store at 64 Park Avenew ">Three unit Residence of divisional Sub-Assistant Engineers inside Ramna Store at 64 Park Avenew</option>
                                <option value=" Three unit Residence of divisional Sub-Assistant Engineers inside Ramna Store at 64 Park Avenew ">Three unit Residence of divisional Sub-Assistant Engineers inside Ramna Store at 64 Park Avenew</option>
                                <option value="Residence of divisional Sub-Assistant Engineers at 71 Circuit House Road."> Residence of divisional Sub-Assistant Engineers at 71 Circuit House Road</option>
                                <option value="Tin shed home of divisional Sub-Assistant Engineers at 71 Eskaton Garden Road (near Ladies Club)."> Tin shed home of divisional Sub-Assistant Engineers at 71 Eskaton Garden Road (near Ladies Club)</option>
                                <option value="Semi paka Tin shed home of divisional Sub-Assistant Engineers at Mohakhali"> Semi paka Tin shed home of divisional Sub-Assistant Engineers at Mohakhali </option>
                                <option value="Semi paka Tin shed home of divisional Sub-Assistant Engineers adjacent to the settlement court on the east side of the 1st 12 storey Govt. office building at Segunbagicha."> Semi paka Tin shed home of divisional Sub-Assistant Engineers adjacent to the settlement court on the east side of the 1st 12 storey Govt. office building at Segunbagicha.</option>
                                <option value="Semi paka Tin shed home of divisional Sub-Assistant Engineers located at store compound of Motijhil PWD Sub-Division-2."> Semi paka Tin shed home of divisional Sub-Assistant Engineers located at store compound of Motijhil PWD Sub-Division-2 </option>
                                <option value="Semi paka Tin shed home of divisional Sub-Assistant Engineers at Green road.">Semi paka Tin shed home of divisional Sub-Assistant Engineers at Green road</option>
                                <option value="Semi paka Tin shed home of divisional Sub-Assistant Engineers adjacent to Sobhanbagh garage.">Semi paka Tin shed home of divisional Sub-Assistant Engineers adjacent to Sobhanbagh garage.</option>
                                <option value="Residence of divisional Sub-Assistant Engineers built above Sobhanbagh Electric Sub-station.">Residence of divisional Sub-Assistant Engineers built above Sobhanbagh Electric Sub-station.</option>
                                <option value="Residence of divisional Sub-Assistant Engineers located at the premises of Elenbari Resource Division">Residence of divisional Sub-Assistant Engineers located at the premises of Elenbari Resource Division.</option>
                                <option value="Residence of divisional Sub-Assistant Engineers adjacent to Prime Minister Office at Tejgaon."> Residence of divisional Sub-Assistant Engineers adjacent to Prime Minister Office at Tejgaon</option>
                                <option value="Residence of divisional Sub-Assistant Engineers at Motijhil Commercial Area (behind Bangladesh Bank)"> Residence of divisional Sub-Assistant Engineers at Motijhil Commercial Area (behind Bangladesh Bank)</option>
                                <option value="Semi paka Tin shed home of divisional Sub-Assistant Engineers located at North Basabo."> Semi paka Tin shed home of divisional Sub-Assistant Engineers located at North Basabo.</option>
                                <option value="Residence of divisional Sub-Assistant Engineers at AgargaonTaltola."> Residence of divisional Sub-Assistant Engineers at AgargaonTaltola.</option>
                                <option value=" Divisional officers quarter no-1 located at Zigatola">Divisional officers quarter no-1 located at Zigatola</option>
                                <option value="Divisional officers quarter no-2located at Zigatola">Divisional officers quarter no-2 located at Zigatola</option>
                                <option value="Divisional officers quarter no-3 located at Zigatola ">Divisional officers quarter no-3 located at Zigatola</option>
                                <option value="Divisional officers quarter no-4 located at Zigatola">Divisional officers quarter no-4 located at Zigatola</option>
                                <option value="Divisional officers quarter no-4 located at Zigatola, newly built">Divisional officers quarter no-4 located at Zigatola, newly built</option>
                                <option value="Divisional officers quarter no-5 located at Zigatola(rest house)">Divisional officers quarter no-5 located at Zigatola(rest house)</option>
                                <option value="Divisional officers quarter no-6 located at Zigatola(rest house)">Divisional officers quarter no-6 located at Zigatola(rest house)</option>
                                <option value="Divisional officers quarter no-1 located at Dhanmondi, road no-1">Divisional officers quarter no-1 located at Dhanmondi, road no-1</option>
                                <option value="Divisional officers quarter no-2 located at Dhanmondi, road no-1">Divisional officers quarter no-2 located at Dhanmondi, road no-1</option>
                                <option value="Divisional officers quarter located at Dhanmondi, road no 23">Divisional officers quarter located at Dhanmondi, road no 23</option>
                                <option value="Divisional officers quarters no-24, located at Dhanmondi, road no-13 (new)">Divisional officers quarters no-24, located at Dhanmondi, road no-13 (new)</option>
                                <option value="Divisional officers quarters (Kolabagan) located at Mirpur Road ">Divisional officers quarters (Kolabagan) located at Mirpur Road </option>
                                <option value="Divisional officers quarters (adjacent to godown) located at khilgaon">Divisional officers quarters (adjacent to godown) located at khilgaon</option>
                                <option value="Divisional officers quarter no-1 located at khilgaon">Divisional officers quarter no-1 located at khilgaon</option>
                                <option value=" Divisional officers quarter no-2 located at khilgaon">Divisional officers quarter no-2 located at khilgaon</option>
                                <option value=" Divisional officers quarter no-3 located at khilgaon">Divisional officers quarter no-3 located at khilgaon</option>
                                <option value=" Divisional officers quarter no-4 located at khilgaon">Divisional officers quarter no-4 located at khilgaon</option>
                                <option value=" Divisional officers quarter no-5 located at khilgaon">Divisional officers quarter no-5 located at khilgaon</option>
                                <option value=" Divisional officers quarter no-6 located at khilgaon">Divisional officers quarter no-6 located at khilgaon</option>
                                <option value=" Divisional officers quarter no-7 located at khilgaon">Divisional officers quarter no-7 located at khilgaon</option>
                                <option value="Divisional officers quarter no-1 located at Azimpur">Divisional officers quarter no-1 located at Azimpur</option>
                                <option value="Divisional officers quarter no-2 located at Azimpur">Divisional officers quarter no-2 located at Azimpur</option>
                                <option value="Divisional officers quarter no-1 located at Mohakhali">Divisional officers quarter no-1 located at Mohakhali</option>
                                <option value="Divisional officers quarter no-2 located at Mohakhali">Divisional officers quarter no-2 located at Mohakhali</option>
                                <option value="Divisional officers quarter located at Agaergaon">Divisional officers quarter located at Agaergaon</option>
                                <option value="Divisional officers quarter located at Tejgaon">Divisional officers quarter located at Tejgaon</option>
                                <option value="Divisional officers quarter located at Rajarbagh">Divisional officers quarter located at Rajarbagh</option>
                                <option value="Divisional officers quarter above electric Sub-station at AgaergaonTaltola">Divisional officers quarter above electric Sub-station at AgaergaonTaltola</option>
                                <option value=" Divisional officers quarter located Sher-E-Bangla Nagar service compound">Divisional officers quarter located Sher-E-Bangla Nagar service compound</option>
                                <option value="Divisional officers quarter located at Elenbari">Divisional officers quarter located at Elenbari</option>
                                <option value="Divisional officers quarter above electric Sub-station at Greenroad">Divisional officers quarter above electric Sub-station at Greenroad</option>
                                <option value="Divisional officers quarter above Technical Training Centre, Mirpur">Divisional officers quarter above Technical Training Centre, Mirpur</option>
                                <option value="Divisional officers quarter above electric Sub-station at Baily Road">Divisional officers quarter above electric Sub-station at Baily Road</option>
                                <option value="Divisional officers quarter at 157 Pat, Kakrail (Behing Judges Complex)">Divisional officers quarter at 157 Pat, Kakrail (Behing Judges Complex)</option>
                                <option value="C-Type divisional staff quarter-1 at Zigatola">C-Type divisional staff quarter-1 at Zigatola</option>
                                <option value=" C-Type divisional staff quarter-2 at Zigatola">C-Type divisional staff quarter-2 at Zigatola</option>
                                <option value="Divisional staff quarter-6 at Zigatola">Divisional staff quarter-6 at Zigatola</option>
                                <option value=" Divisional staff quarter-7 at Zigatola">Divisional staff quarter-7 at Zigatola</option>
                                <option value=" Divisional staff quarter-9 at Zigatola">Divisional staff quarter-9 at Zigatola</option>
                                <option value=" Divisional staff quarterat Basabo">Divisional staff quarter atBasabo</option>
                                <option value="Divisional staff quarter Shanti Mahal at Khilgaon">Divisional staff quarter Shanti Mahal at Khilgaon</option>
                                <option value="Divisional staff quarter Chaya Building at Khilgaon">Divisional staff quarter Chaya Building at Khilgaon</option>
                                <option value="1 storey Divisional staff quarter located at store compound of Motijhil PWD Sub-division-2">1 storey Divisional staff quarter located at store compound of Motijhil PWD Sub-division-2</option>
                                <option value="Divisional staff quarter no-B-2 located above PWD Sub-division-1/2 at Rajarbagh">Divisional staff quarter no-B-2 located above PWD Sub-division-1/2 at Rajarbagh</option>
                                <option value="Divisional staff quarter no-B-2 located above PWD Sub-division-1/2 at RajarbaghB-Type">Divisional staff quarter no-B-2 located above PWD Sub-division-1/2 at RajarbaghB-Type </option>
                                <option value="Divisional staff quarter no-B-3 located above PWD Sub-division-1/2 at RajarbaghB-Type">Divisional staff quarter no-B-3 located above PWD Sub-division-1/2 at Rajarbagh B-Type </option>
                                <option value="Dormitory building no-1 located at the premises of PWD Sub-division-1/2 at Rajarbagh">Dormitory building no-1 located at the premises of PWD Sub-division-1/2 at Rajarbagh</option>
                                <option value="Dormitory building no-2 located at the premises of PWD Sub-division-1/2 at Rajarbagh">Dormitory building no-2 located at the premises of PWD Sub-division-1/2 at Rajarbagh</option>
                                <option value="Semi paka tin shed  residence  under Sher-E-Bangla Nagar PWD Division-3C-1 Type ">Semi paka tin shed  residence  under Sher-E-Bangla Nagar PWD Division-3C-1 Type </option>
                                <option value="Semi paka tin shed  residence  under Sher-E-Bangla Nagar PWD Division-3">Semi paka tin shed  residence  under Sher-E-Bangla Nagar PWD Division-3 </option>
                                <option value="Drivers quarter under Azimpur PWD Division ">Drivers quarter under Azimpur PWD Division</option>
                                <option value="Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 1250Sft)">Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 1250 Sft) </option>
                                <option value="Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 1000Sft) ">Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 1000Sft) </option>
                                <option value="Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 800Sft) ">Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 800Sft) </option>
                                <option value="Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 600Sft) ">Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 600Sft) </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Get house on pointy as 2:</strong>
                            <select required class="form-control select_area_dubule" id="exampleFormControlSelect1 select_area_dubule" name="pontyAsDatenew2">
                                <option value="Residence of divisional Sub-Assistant Engineers atZigatola.">Residence of divisional Sub-Assistant Engineers atZigatola.</option>
                                <option value="Residence of divisional Sub-Assistant Engineers at Tejgaon">Residence of divisional Sub-Assistant Engineers at Tejgaon</option>
                                <option value="Residence of divisional Sub-Assistant Engineers at Rajarba">Residence of divisional Sub-Assistant Engineers at Rajarba</option>
                                <option value="Residence of divisional Sub-Assistant Engineers under Sher-E-Bangla Nagar PWD Division-1">Residence of divisional Sub-Assistant Engineers under Sher-E-Bangla Nagar PWD Division-1</option>
                                <option value="Three unit Residence of divisional Sub-Assistant Engineers inside Ramna Store at 64 Park Avenew ">Three unit Residence of divisional Sub-Assistant Engineers inside Ramna Store at 64 Park Avenew</option>
                                <option value=" Three unit Residence of divisional Sub-Assistant Engineers inside Ramna Store at 64 Park Avenew ">Three unit Residence of divisional Sub-Assistant Engineers inside Ramna Store at 64 Park Avenew</option>
                                <option value="Residence of divisional Sub-Assistant Engineers at 71 Circuit House Road."> Residence of divisional Sub-Assistant Engineers at 71 Circuit House Road</option>
                                <option value="Tin shed home of divisional Sub-Assistant Engineers at 71 Eskaton Garden Road (near Ladies Club)."> Tin shed home of divisional Sub-Assistant Engineers at 71 Eskaton Garden Road (near Ladies Club)</option>
                                <option value="Semi paka Tin shed home of divisional Sub-Assistant Engineers at Mohakhali"> Semi paka Tin shed home of divisional Sub-Assistant Engineers at Mohakhali </option>
                                <option value="Semi paka Tin shed home of divisional Sub-Assistant Engineers adjacent to the settlement court on the east side of the 1st 12 storey Govt. office building at Segunbagicha."> Semi paka Tin shed home of divisional Sub-Assistant Engineers adjacent to the settlement court on the east side of the 1st 12 storey Govt. office building at Segunbagicha.</option>
                                <option value="Semi paka Tin shed home of divisional Sub-Assistant Engineers located at store compound of Motijhil PWD Sub-Division-2."> Semi paka Tin shed home of divisional Sub-Assistant Engineers located at store compound of Motijhil PWD Sub-Division-2 </option>
                                <option value="Semi paka Tin shed home of divisional Sub-Assistant Engineers at Green road.">Semi paka Tin shed home of divisional Sub-Assistant Engineers at Green road</option>
                                <option value="Semi paka Tin shed home of divisional Sub-Assistant Engineers adjacent to Sobhanbagh garage.">Semi paka Tin shed home of divisional Sub-Assistant Engineers adjacent to Sobhanbagh garage.</option>
                                <option value="Residence of divisional Sub-Assistant Engineers built above Sobhanbagh Electric Sub-station.">Residence of divisional Sub-Assistant Engineers built above Sobhanbagh Electric Sub-station.</option>
                                <option value="Residence of divisional Sub-Assistant Engineers located at the premises of Elenbari Resource Division">Residence of divisional Sub-Assistant Engineers located at the premises of Elenbari Resource Division.</option>
                                <option value="Residence of divisional Sub-Assistant Engineers adjacent to Prime Minister Office at Tejgaon."> Residence of divisional Sub-Assistant Engineers adjacent to Prime Minister Office at Tejgaon</option>
                                <option value="Residence of divisional Sub-Assistant Engineers at Motijhil Commercial Area (behind Bangladesh Bank)"> Residence of divisional Sub-Assistant Engineers at Motijhil Commercial Area (behind Bangladesh Bank)</option>
                                <option value="Semi paka Tin shed home of divisional Sub-Assistant Engineers located at North Basabo."> Semi paka Tin shed home of divisional Sub-Assistant Engineers located at North Basabo.</option>
                                <option value="Residence of divisional Sub-Assistant Engineers at AgargaonTaltola."> Residence of divisional Sub-Assistant Engineers at AgargaonTaltola.</option>
                                <option value=" Divisional officers quarter no-1 located at Zigatola">Divisional officers quarter no-1 located at Zigatola</option>
                                <option value="Divisional officers quarter no-2located at Zigatola">Divisional officers quarter no-2 located at Zigatola</option>
                                <option value="Divisional officers quarter no-3 located at Zigatola ">Divisional officers quarter no-3 located at Zigatola</option>
                                <option value="Divisional officers quarter no-4 located at Zigatola">Divisional officers quarter no-4 located at Zigatola</option>
                                <option value="Divisional officers quarter no-4 located at Zigatola, newly built">Divisional officers quarter no-4 located at Zigatola, newly built</option>
                                <option value="Divisional officers quarter no-5 located at Zigatola(rest house)">Divisional officers quarter no-5 located at Zigatola(rest house)</option>
                                <option value="Divisional officers quarter no-6 located at Zigatola(rest house)">Divisional officers quarter no-6 located at Zigatola(rest house)</option>
                                <option value="Divisional officers quarter no-1 located at Dhanmondi, road no-1">Divisional officers quarter no-1 located at Dhanmondi, road no-1</option>
                                <option value="Divisional officers quarter no-2 located at Dhanmondi, road no-1">Divisional officers quarter no-2 located at Dhanmondi, road no-1</option>
                                <option value="Divisional officers quarter located at Dhanmondi, road no 23">Divisional officers quarter located at Dhanmondi, road no 23</option>
                                <option value="Divisional officers quarters no-24, located at Dhanmondi, road no-13 (new)">Divisional officers quarters no-24, located at Dhanmondi, road no-13 (new)</option>
                                <option value="Divisional officers quarters (Kolabagan) located at Mirpur Road ">Divisional officers quarters (Kolabagan) located at Mirpur Road </option>
                                <option value="Divisional officers quarters (adjacent to godown) located at khilgaon">Divisional officers quarters (adjacent to godown) located at khilgaon</option>
                                <option value="Divisional officers quarter no-1 located at khilgaon">Divisional officers quarter no-1 located at khilgaon</option>
                                <option value=" Divisional officers quarter no-2 located at khilgaon">Divisional officers quarter no-2 located at khilgaon</option>
                                <option value=" Divisional officers quarter no-3 located at khilgaon">Divisional officers quarter no-3 located at khilgaon</option>
                                <option value=" Divisional officers quarter no-4 located at khilgaon">Divisional officers quarter no-4 located at khilgaon</option>
                                <option value=" Divisional officers quarter no-5 located at khilgaon">Divisional officers quarter no-5 located at khilgaon</option>
                                <option value=" Divisional officers quarter no-6 located at khilgaon">Divisional officers quarter no-6 located at khilgaon</option>
                                <option value=" Divisional officers quarter no-7 located at khilgaon">Divisional officers quarter no-7 located at khilgaon</option>
                                <option value="Divisional officers quarter no-1 located at Azimpur">Divisional officers quarter no-1 located at Azimpur</option>
                                <option value="Divisional officers quarter no-2 located at Azimpur">Divisional officers quarter no-2 located at Azimpur</option>
                                <option value="Divisional officers quarter no-1 located at Mohakhali">Divisional officers quarter no-1 located at Mohakhali</option>
                                <option value="Divisional officers quarter no-2 located at Mohakhali">Divisional officers quarter no-2 located at Mohakhali</option>
                                <option value="Divisional officers quarter located at Agaergaon">Divisional officers quarter located at Agaergaon</option>
                                <option value="Divisional officers quarter located at Tejgaon">Divisional officers quarter located at Tejgaon</option>
                                <option value="Divisional officers quarter located at Rajarbagh">Divisional officers quarter located at Rajarbagh</option>
                                <option value="Divisional officers quarter above electric Sub-station at AgaergaonTaltola">Divisional officers quarter above electric Sub-station at AgaergaonTaltola</option>
                                <option value=" Divisional officers quarter located Sher-E-Bangla Nagar service compound">Divisional officers quarter located Sher-E-Bangla Nagar service compound</option>
                                <option value="Divisional officers quarter located at Elenbari">Divisional officers quarter located at Elenbari</option>
                                <option value="Divisional officers quarter above electric Sub-station at Greenroad">Divisional officers quarter above electric Sub-station at Greenroad</option>
                                <option value="Divisional officers quarter above Technical Training Centre, Mirpur">Divisional officers quarter above Technical Training Centre, Mirpur</option>
                                <option value="Divisional officers quarter above electric Sub-station at Baily Road">Divisional officers quarter above electric Sub-station at Baily Road</option>
                                <option value="Divisional officers quarter at 157 Pat, Kakrail (Behing Judges Complex)">Divisional officers quarter at 157 Pat, Kakrail (Behing Judges Complex)</option>
                                <option value="C-Type divisional staff quarter-1 at Zigatola">C-Type divisional staff quarter-1 at Zigatola</option>
                                <option value=" C-Type divisional staff quarter-2 at Zigatola">C-Type divisional staff quarter-2 at Zigatola</option>
                                <option value="Divisional staff quarter-6 at Zigatola">Divisional staff quarter-6 at Zigatola</option>
                                <option value=" Divisional staff quarter-7 at Zigatola">Divisional staff quarter-7 at Zigatola</option>
                                <option value=" Divisional staff quarter-9 at Zigatola">Divisional staff quarter-9 at Zigatola</option>
                                <option value=" Divisional staff quarterat Basabo">Divisional staff quarter atBasabo</option>
                                <option value="Divisional staff quarter Shanti Mahal at Khilgaon">Divisional staff quarter Shanti Mahal at Khilgaon</option>
                                <option value="Divisional staff quarter Chaya Building at Khilgaon">Divisional staff quarter Chaya Building at Khilgaon</option>
                                <option value="1 storey Divisional staff quarter located at store compound of Motijhil PWD Sub-division-2">1 storey Divisional staff quarter located at store compound of Motijhil PWD Sub-division-2</option>
                                <option value="Divisional staff quarter no-B-2 located above PWD Sub-division-1/2 at Rajarbagh">Divisional staff quarter no-B-2 located above PWD Sub-division-1/2 at Rajarbagh</option>
                                <option value="Divisional staff quarter no-B-2 located above PWD Sub-division-1/2 at RajarbaghB-Type">Divisional staff quarter no-B-2 located above PWD Sub-division-1/2 at RajarbaghB-Type </option>
                                <option value="Divisional staff quarter no-B-3 located above PWD Sub-division-1/2 at RajarbaghB-Type">Divisional staff quarter no-B-3 located above PWD Sub-division-1/2 at Rajarbagh B-Type </option>
                                <option value="Dormitory building no-1 located at the premises of PWD Sub-division-1/2 at Rajarbagh">Dormitory building no-1 located at the premises of PWD Sub-division-1/2 at Rajarbagh</option>
                                <option value="Dormitory building no-2 located at the premises of PWD Sub-division-1/2 at Rajarbagh">Dormitory building no-2 located at the premises of PWD Sub-division-1/2 at Rajarbagh</option>
                                <option value="Semi paka tin shed  residence  under Sher-E-Bangla Nagar PWD Division-3C-1 Type ">Semi paka tin shed  residence  under Sher-E-Bangla Nagar PWD Division-3C-1 Type </option>
                                <option value="Semi paka tin shed  residence  under Sher-E-Bangla Nagar PWD Division-3">Semi paka tin shed  residence  under Sher-E-Bangla Nagar PWD Division-3 </option>
                                <option value="Drivers quarter under Azimpur PWD Division ">Drivers quarter under Azimpur PWD Division</option>
                                <option value="Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 1250Sft)">Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 1250 Sft) </option>
                                <option value="Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 1000Sft) ">Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 1000Sft) </option>
                                <option value="Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 800Sft) ">Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 800Sft) </option>
                                <option value="Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 600Sft) ">Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 600Sft) </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Get house on pointy as 3:</strong>
                            <select required class="form-control js_edit_multiplee_three" id="exampleFormControlSelect1 js_edit_multiplee_three" name="pontyAsDatenew3">
                                <option value="Residence of divisional Sub-Assistant Engineers atZigatola.">Residence of divisional Sub-Assistant Engineers atZigatola.</option>
                                <option value="Residence of divisional Sub-Assistant Engineers at Tejgaon">Residence of divisional Sub-Assistant Engineers at Tejgaon</option>
                                <option value="Residence of divisional Sub-Assistant Engineers at Rajarba">Residence of divisional Sub-Assistant Engineers at Rajarba</option>
                                <option value="Residence of divisional Sub-Assistant Engineers under Sher-E-Bangla Nagar PWD Division-1">Residence of divisional Sub-Assistant Engineers under Sher-E-Bangla Nagar PWD Division-1</option>
                                <option value="Three unit Residence of divisional Sub-Assistant Engineers inside Ramna Store at 64 Park Avenew ">Three unit Residence of divisional Sub-Assistant Engineers inside Ramna Store at 64 Park Avenew</option>
                                <option value=" Three unit Residence of divisional Sub-Assistant Engineers inside Ramna Store at 64 Park Avenew ">Three unit Residence of divisional Sub-Assistant Engineers inside Ramna Store at 64 Park Avenew</option>
                                <option value="Residence of divisional Sub-Assistant Engineers at 71 Circuit House Road."> Residence of divisional Sub-Assistant Engineers at 71 Circuit House Road</option>
                                <option value="Tin shed home of divisional Sub-Assistant Engineers at 71 Eskaton Garden Road (near Ladies Club)."> Tin shed home of divisional Sub-Assistant Engineers at 71 Eskaton Garden Road (near Ladies Club)</option>
                                <option value="Semi paka Tin shed home of divisional Sub-Assistant Engineers at Mohakhali"> Semi paka Tin shed home of divisional Sub-Assistant Engineers at Mohakhali </option>
                                <option value="Semi paka Tin shed home of divisional Sub-Assistant Engineers adjacent to the settlement court on the east side of the 1st 12 storey Govt. office building at Segunbagicha."> Semi paka Tin shed home of divisional Sub-Assistant Engineers adjacent to the settlement court on the east side of the 1st 12 storey Govt. office building at Segunbagicha.</option>
                                <option value="Semi paka Tin shed home of divisional Sub-Assistant Engineers located at store compound of Motijhil PWD Sub-Division-2."> Semi paka Tin shed home of divisional Sub-Assistant Engineers located at store compound of Motijhil PWD Sub-Division-2 </option>
                                <option value="Semi paka Tin shed home of divisional Sub-Assistant Engineers at Green road.">Semi paka Tin shed home of divisional Sub-Assistant Engineers at Green road</option>
                                <option value="Semi paka Tin shed home of divisional Sub-Assistant Engineers adjacent to Sobhanbagh garage.">Semi paka Tin shed home of divisional Sub-Assistant Engineers adjacent to Sobhanbagh garage.</option>
                                <option value="Residence of divisional Sub-Assistant Engineers built above Sobhanbagh Electric Sub-station.">Residence of divisional Sub-Assistant Engineers built above Sobhanbagh Electric Sub-station.</option>
                                <option value="Residence of divisional Sub-Assistant Engineers located at the premises of Elenbari Resource Division">Residence of divisional Sub-Assistant Engineers located at the premises of Elenbari Resource Division.</option>
                                <option value="Residence of divisional Sub-Assistant Engineers adjacent to Prime Minister Office at Tejgaon."> Residence of divisional Sub-Assistant Engineers adjacent to Prime Minister Office at Tejgaon</option>
                                <option value="Residence of divisional Sub-Assistant Engineers at Motijhil Commercial Area (behind Bangladesh Bank)"> Residence of divisional Sub-Assistant Engineers at Motijhil Commercial Area (behind Bangladesh Bank)</option>
                                <option value="Semi paka Tin shed home of divisional Sub-Assistant Engineers located at North Basabo."> Semi paka Tin shed home of divisional Sub-Assistant Engineers located at North Basabo.</option>
                                <option value="Residence of divisional Sub-Assistant Engineers at AgargaonTaltola."> Residence of divisional Sub-Assistant Engineers at AgargaonTaltola.</option>
                                <option value=" Divisional officers quarter no-1 located at Zigatola">Divisional officers quarter no-1 located at Zigatola</option>
                                <option value="Divisional officers quarter no-2located at Zigatola">Divisional officers quarter no-2 located at Zigatola</option>
                                <option value="Divisional officers quarter no-3 located at Zigatola ">Divisional officers quarter no-3 located at Zigatola</option>
                                <option value="Divisional officers quarter no-4 located at Zigatola">Divisional officers quarter no-4 located at Zigatola</option>
                                <option value="Divisional officers quarter no-4 located at Zigatola, newly built">Divisional officers quarter no-4 located at Zigatola, newly built</option>
                                <option value="Divisional officers quarter no-5 located at Zigatola(rest house)">Divisional officers quarter no-5 located at Zigatola(rest house)</option>
                                <option value="Divisional officers quarter no-6 located at Zigatola(rest house)">Divisional officers quarter no-6 located at Zigatola(rest house)</option>
                                <option value="Divisional officers quarter no-1 located at Dhanmondi, road no-1">Divisional officers quarter no-1 located at Dhanmondi, road no-1</option>
                                <option value="Divisional officers quarter no-2 located at Dhanmondi, road no-1">Divisional officers quarter no-2 located at Dhanmondi, road no-1</option>
                                <option value="Divisional officers quarter located at Dhanmondi, road no 23">Divisional officers quarter located at Dhanmondi, road no 23</option>
                                <option value="Divisional officers quarters no-24, located at Dhanmondi, road no-13 (new)">Divisional officers quarters no-24, located at Dhanmondi, road no-13 (new)</option>
                                <option value="Divisional officers quarters (Kolabagan) located at Mirpur Road ">Divisional officers quarters (Kolabagan) located at Mirpur Road </option>
                                <option value="Divisional officers quarters (adjacent to godown) located at khilgaon">Divisional officers quarters (adjacent to godown) located at khilgaon</option>
                                <option value="Divisional officers quarter no-1 located at khilgaon">Divisional officers quarter no-1 located at khilgaon</option>
                                <option value=" Divisional officers quarter no-2 located at khilgaon">Divisional officers quarter no-2 located at khilgaon</option>
                                <option value=" Divisional officers quarter no-3 located at khilgaon">Divisional officers quarter no-3 located at khilgaon</option>
                                <option value=" Divisional officers quarter no-4 located at khilgaon">Divisional officers quarter no-4 located at khilgaon</option>
                                <option value=" Divisional officers quarter no-5 located at khilgaon">Divisional officers quarter no-5 located at khilgaon</option>
                                <option value=" Divisional officers quarter no-6 located at khilgaon">Divisional officers quarter no-6 located at khilgaon</option>
                                <option value=" Divisional officers quarter no-7 located at khilgaon">Divisional officers quarter no-7 located at khilgaon</option>
                                <option value="Divisional officers quarter no-1 located at Azimpur">Divisional officers quarter no-1 located at Azimpur</option>
                                <option value="Divisional officers quarter no-2 located at Azimpur">Divisional officers quarter no-2 located at Azimpur</option>
                                <option value="Divisional officers quarter no-1 located at Mohakhali">Divisional officers quarter no-1 located at Mohakhali</option>
                                <option value="Divisional officers quarter no-2 located at Mohakhali">Divisional officers quarter no-2 located at Mohakhali</option>
                                <option value="Divisional officers quarter located at Agaergaon">Divisional officers quarter located at Agaergaon</option>
                                <option value="Divisional officers quarter located at Tejgaon">Divisional officers quarter located at Tejgaon</option>
                                <option value="Divisional officers quarter located at Rajarbagh">Divisional officers quarter located at Rajarbagh</option>
                                <option value="Divisional officers quarter above electric Sub-station at AgaergaonTaltola">Divisional officers quarter above electric Sub-station at AgaergaonTaltola</option>
                                <option value=" Divisional officers quarter located Sher-E-Bangla Nagar service compound">Divisional officers quarter located Sher-E-Bangla Nagar service compound</option>
                                <option value="Divisional officers quarter located at Elenbari">Divisional officers quarter located at Elenbari</option>
                                <option value="Divisional officers quarter above electric Sub-station at Greenroad">Divisional officers quarter above electric Sub-station at Greenroad</option>
                                <option value="Divisional officers quarter above Technical Training Centre, Mirpur">Divisional officers quarter above Technical Training Centre, Mirpur</option>
                                <option value="Divisional officers quarter above electric Sub-station at Baily Road">Divisional officers quarter above electric Sub-station at Baily Road</option>
                                <option value="Divisional officers quarter at 157 Pat, Kakrail (Behing Judges Complex)">Divisional officers quarter at 157 Pat, Kakrail (Behing Judges Complex)</option>
                                <option value="C-Type divisional staff quarter-1 at Zigatola">C-Type divisional staff quarter-1 at Zigatola</option>
                                <option value=" C-Type divisional staff quarter-2 at Zigatola">C-Type divisional staff quarter-2 at Zigatola</option>
                                <option value="Divisional staff quarter-6 at Zigatola">Divisional staff quarter-6 at Zigatola</option>
                                <option value=" Divisional staff quarter-7 at Zigatola">Divisional staff quarter-7 at Zigatola</option>
                                <option value=" Divisional staff quarter-9 at Zigatola">Divisional staff quarter-9 at Zigatola</option>
                                <option value=" Divisional staff quarterat Basabo">Divisional staff quarter atBasabo</option>
                                <option value="Divisional staff quarter Shanti Mahal at Khilgaon">Divisional staff quarter Shanti Mahal at Khilgaon</option>
                                <option value="Divisional staff quarter Chaya Building at Khilgaon">Divisional staff quarter Chaya Building at Khilgaon</option>
                                <option value="1 storey Divisional staff quarter located at store compound of Motijhil PWD Sub-division-2">1 storey Divisional staff quarter located at store compound of Motijhil PWD Sub-division-2</option>
                                <option value="Divisional staff quarter no-B-2 located above PWD Sub-division-1/2 at Rajarbagh">Divisional staff quarter no-B-2 located above PWD Sub-division-1/2 at Rajarbagh</option>
                                <option value="Divisional staff quarter no-B-2 located above PWD Sub-division-1/2 at RajarbaghB-Type">Divisional staff quarter no-B-2 located above PWD Sub-division-1/2 at RajarbaghB-Type </option>
                                <option value="Divisional staff quarter no-B-3 located above PWD Sub-division-1/2 at RajarbaghB-Type">Divisional staff quarter no-B-3 located above PWD Sub-division-1/2 at Rajarbagh B-Type </option>
                                <option value="Dormitory building no-1 located at the premises of PWD Sub-division-1/2 at Rajarbagh">Dormitory building no-1 located at the premises of PWD Sub-division-1/2 at Rajarbagh</option>
                                <option value="Dormitory building no-2 located at the premises of PWD Sub-division-1/2 at Rajarbagh">Dormitory building no-2 located at the premises of PWD Sub-division-1/2 at Rajarbagh</option>
                                <option value="Semi paka tin shed  residence  under Sher-E-Bangla Nagar PWD Division-3C-1 Type ">Semi paka tin shed  residence  under Sher-E-Bangla Nagar PWD Division-3C-1 Type </option>
                                <option value="Semi paka tin shed  residence  under Sher-E-Bangla Nagar PWD Division-3">Semi paka tin shed  residence  under Sher-E-Bangla Nagar PWD Division-3 </option>
                                <option value="Drivers quarter under Azimpur PWD Division ">Drivers quarter under Azimpur PWD Division</option>
                                <option value="Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 1250Sft)">Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 1250 Sft) </option>
                                <option value="Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 1000Sft) ">Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 1000Sft) </option>
                                <option value="Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 800Sft) ">Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 800Sft) </option>
                                <option value="Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 600Sft) ">Bangladesh National Parliament Secretariat located at Sher-E-Bangla Nagar( 600Sft) </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Date:</strong>
                            <input type="text" data-date-format="dd/mm/yyyy" id="pontyAsDate" value="{{ $application->ponty_as_date }}" name="ponty_as_date" class="form-control" placeholder="Get house on pointy as date">
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
                            <input type="file" name="signature_upload" class="form-control-file " id="exampleFormControlFile1">
                        </div>
                    </div>
                </div>
                <div class="row buttonArea">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <button type="reset" class="btn btn-primary resetButton">Reset</button>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <button type="submit" class="btn btn-primary previewButton">Re-submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('javascript')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script type="text/javascript">
     $('#dateOfJoining2').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        dateFormat: 'yy/mm/dd'
    });
    $('#dateOfJoining2').datepicker("setDate", new Date());


    $('#dateOfJoining').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        dateFormat: 'yy/mm/dd'
    });
    $('#dateOfJoining').datepicker("setDate", new Date());


    $('#date').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        dateFormat: 'yy/mm/dd'
    });
    $('#date').datepicker("setDate", new Date());


    $('#pontyAsDate').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        dateFormat: 'yy/mm/dd'
    });
    $('#pontyAsDate').datepicker("setDate", new Date());

    $('#date_of_loan').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        dateFormat: 'yy/mm/dd'
    });
    $('#date_of_loan').datepicker("setDate", new Date());


    $('#date_of_loan2').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        dateFormat: 'yy/mm/dd'
    });
    $('#date_of_loan2').datepicker("setDate", new Date());

        $(document).ready(function() {
            $('.first_select_one').select2();
            $('.select_area_dubule').select2();
            $('.js_edit_multiplee_three').select2();
        });

</script>
@stop









