<?php


namespace App\Http\Controllers;


use App\Product;
use App\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;


class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // function __construct()
    // {
    //      $this->middleware('permission:application-list|application-create|application-edit|application-delete|application-pending|application-investigation|application-approved|application-handover|application-rejected', ['only' => ['index','show']]);
    //      $this->middleware('permission:application-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:application-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:application-delete', ['only' => ['destroy']]);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function totals(){
        $peindingApplications=Application::orderBy('created_at', 'DESC')->get();

        return view('application.totals',compact('peindingApplications'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    } 
    public function pending(){
        $peindingApplications=Application::where('status', '=', 1)->orderBy('created_at', 'DESC')->get();

        return view('application.pending',compact('peindingApplications'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    } 
    public function approved(){
        $peindingApplications=Application::where('status', '=', 3)->orderBy('created_at', 'DESC')->get();

        return view('application.approved',compact('peindingApplications'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    } 
    public function rejected(){
        $peindingApplications=Application::where('status', '=', 5)->orderBy('created_at', 'DESC')->get();

        return view('application.rejected',compact('peindingApplications'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    } 



    public function downloadPDF($id){
        $application = Application::find($id);

        $pdf = PDF::loadView('pdf', compact('application'));
        return $pdf->download('application.pdf');
    } 
    public function index()
    {
        $active_status="";

        if(Auth::user()->can('application-pending')){
            $active_status='application-pending';
        }elseif(Auth::user()->can('application-investigation')){
            $active_status='application-investigation';
        }elseif(Auth::user()->can('application-approved')){
            $active_status='application-approved';
        }elseif(Auth::user()->can('application-handover')){
            $active_status='application-handover';
        }elseif(Auth::user()->can('application-rejected')){
            $active_status='application-rejected';
        }else{
            $active_status='';
        }
        if(Auth::user()->roles[0]->name=='User'){
            $peindingApplications = Application::where('status', '=', 1)->where('action_by', '=', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
            $investigationApplications = Application::where('status', '=', 2)->where('action_by', '=', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
            $approvedApplications = Application::where('status', '=', 3)->where('action_by', '=', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
            $handoverApplications = Application::where('status', '=', 4)->where('action_by', '=', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
            $rejectedApplications = Application::where('status', '=', 5)->where('action_by', '=', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
            // return view('application.index',compact('peindingApplications','investigationApplications','approvedApplications','handoverApplications','rejectedApplications','active_status'))
            //     ->with('i', (request()->input('page', 1) - 1) * 5);
        }else{
            

            $peindingApplications = Application::where('status', '=', 1)->orderBy('created_at', 'DESC')->get();
            $investigationApplications = Application::where('status', '=', 2)->orderBy('created_at', 'DESC')->get();
            $approvedApplications = Application::where('status', '=', 3)->orderBy('created_at', 'DESC')->get();
            $handoverApplications = Application::where('status', '=', 4)->orderBy('created_at', 'DESC')->get();
            $rejectedApplications = Application::where('status', '=', 5)->orderBy('created_at', 'DESC')->get();

        }
        return view('application.index',compact('peindingApplications','investigationApplications','approvedApplications','handoverApplications','rejectedApplications','active_status'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('application.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request()->validate([
        //     'name' => 'required',
        //     'detail' => 'required',
        // ]);

        //dd($request->all());

        $application  = new Application ;
        $application->name = $request->name;
        $application->refrence_id = mt_rand( 1000000000, 9999999999 );
        $application->designation = $request->designation;
        $application->fathers_name = $request->fathers_name;
        $application->mothers_name = $request->mothers_name;
        $application->date_of_joining = $request->date_of_joining;
        $application->department_name = $request->department_name;
        $application->present_posting = $request->present_posting;

        if($request->hasFile('upload_joining_letter')){
          $upload_joining_letter = $request->file('upload_joining_letter');
          $upload_joining_letterFilename = time() . '.' . $upload_joining_letter->getClientOriginalExtension();
          $upload_joining_letter->move('images/', $upload_joining_letterFilename);
          $application->upload_joining_letter = $upload_joining_letterFilename;
        }

        $application->scale = $request->scale;
        $application->present_salary = $request->present_salary;
        $application->pay_including_special_pay_of_any = $request->pay_including_special_pay_of_any;
        $application->marital_status = $request->marital_status;
        $application->mobile_number = $request->mobile_number;
        $application->spouse_name = $request->spouse_name;
        $application->number_of_family_members = $request->number_of_family_members;
        $application->any_house = $request->any_house;
        $application->legally_separated = $request->legally_separated;
        $application->date = $request->date;

        if($request->hasFile('upload_photo')){
            $upload_photo = $request->file('upload_photo');
            $upload_photoFilename = time() . '.' . $upload_photo->getClientOriginalExtension();
            $upload_photo->move('images/', $upload_photoFilename);
            $application->upload_photo = $upload_photoFilename;
        }

        $application->loan = $request->loan;
        $application->load_detail = $request->load_detail;
        $application->date_of_loan = $request->date_of_loan;

        $application->loan2 = $request->loan2;
        $application->load_detail2 = $request->load_detail2;
        $application->date_of_loan2 = $request->date_of_loan2;
        
        $application->flat_allotted = $request->flat_allotted;
        $application->accommodation_detail = $request->accommodation_detail;
        $application->areas_where_he_wants_to = $request->areas_where_he_wants_to;
        $application->ponty_as_date = $request->ponty_as_date;

        if($request->hasFile('executive_engineer')){
            $executive_engineer = $request->file('executive_engineer');
            $executive_engineerFilename = time() . '.' . $executive_engineer->getClientOriginalExtension();
            $executive_engineer->move('images/', $executive_engineerFilename);
            $application->executive_engineer = $executive_engineerFilename;
        }


        if($request->hasFile('superintending_engineer')){
            $superintending_engineer = $request->file('superintending_engineer');
            $superintending_engineerFilename = time() . '.' . $superintending_engineer->getClientOriginalExtension();
            $superintending_engineer->move('images/', $superintending_engineerFilename);
            $application->superintending_engineer = $superintending_engineerFilename;
        }

        $application->status = 1;
        $application->action_by =Auth::user()->id;

        if($request->hasFile('signature_upload')){
            $signature_upload = $request->file('signature_upload');
            $signature_uploadFilename = time() . '.' . $signature_upload->getClientOriginalExtension();
            $signature_upload->move('images/', $signature_uploadFilename);
            $application->signature_upload = $signature_uploadFilename;
        }
        $application->save();


        //dd($request->all());



        //Product::create($request->all());


        return redirect()->route('applications.index')
                       ->with('success','Application created successfully.');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //return view('products.show',compact('product'));
         //dd($application);
         return view('application.show',compact('application'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {

        //dd($application);
        return view('application.edit',compact('application'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        //  request()->validate([
        //     'name' => 'required',
        //     'status' => 'required',
        // ]);

        // $this->validate($request,[
        //     'file_number'          => 'required|max:10|unique:applications'
        // ]);
        if($request->has('file_number')){
            $request->validate([
                'file_number' => 'required|max:10|unique:mysql2.applications'
            ]);
        }

        //  $sadas=Application::find($application->id);
        

        $napplication = Application::find($application->id);
       
        //dd($napplication);
        
        if($request->status=="approved"){
           if($application->status==3){
               if($request->has('approved_superintendent_engineer')){
                $napplication->status=$application->status+1;
               }else{
                $napplication->status=$application->status;
               }
            
           }else{
            $napplication->status=$application->status+1;
           }
            
            //$napplication->save();
        }else{
            //$napplication = Application::find($application->id);
            $napplication->status =5;
           
        }
        if($request->has('approved_superintendent_engineer')){
            $napplication->approved_superintendent_engineer=1;

            $napplication->recommendation_superintendent=$request->accommodation;

            if($request->hasFile('accommodation_file')){
                $superintending_engineer = $request->file('accommodation_file');
                $superintending_engineerFilename = time() . '.' . $superintending_engineer->getClientOriginalExtension();
                $superintending_engineer->move('images/', $superintending_engineerFilename);
                $napplication->recommendation_superintendent_file=$superintending_engineerFilename;
            }

            
        }
        if($request->has('approved_executive_engineer')){
            $napplication->approved_executive_engineer=1;

            $napplication->recommendation_executive=$request->accommodation;
            $napplication->pontyAsDatenewSelected=$request->pontyAsDatenewSelected;
            
            if($request->hasFile('accommodation_file')){
                $superintending_engineer = $request->file('accommodation_file');
                $superintending_engineerFilename = time() . '.' . $superintending_engineer->getClientOriginalExtension();
                $superintending_engineer->move('images/', $superintending_engineerFilename);
                $napplication->recommendation_executive_file=$superintending_engineerFilename;
            }
            
        }
        if($request->has('approved_estate_officer')){
            $napplication->approved_estate_officer=1;

            $napplication->recommendation_estate=$request->accommodation;
           
            if($request->hasFile('accommodation_file')){
                $superintending_engineer = $request->file('accommodation_file');
               
                $superintending_engineerFilename = time() . '.' . $superintending_engineer->getClientOriginalExtension();
               // dd($superintending_engineerFilename);
                $superintending_engineer->move('images/', $superintending_engineerFilename);
                $napplication->recommendation_estate_file=$superintending_engineerFilename;
            }
        }
        if($request->has('approved_sectional_officer')){
            $napplication->approved_sectional_officer=1;

            $napplication->recommendation_sectional=$request->accommodation;
            if($request->has('file_number')){
            $napplication->file_number=$request->file_number;
            }
           
            if($request->hasFile('accommodation_file')){
                $superintending_engineer = $request->file('accommodation_file');
                $superintending_engineerFilename = time() . '.' . $superintending_engineer->getClientOriginalExtension();
                $superintending_engineer->move('images/', $superintending_engineerFilename);
                $napplication->recommendation_sectional_file=$superintending_engineerFilename;
            }
        }
       
        $napplication->save();



        //$application->update($request->all());


         return redirect()->route('applications.index')
                   ->with('success','Application updated successfully');
    }


    public function updatee(Request $request, $id)
    {
       
        $application = Application::find($id);

       
        $application->name = $request->name;
        //$application->refrence_id = mt_rand( 1000000000, 9999999999 );
        $application->designation = $request->designation;
        $application->fathers_name = $request->fathers_name;
        $application->mothers_name = $request->mothers_name;
        $application->date_of_joining = $request->date_of_joining;
        $application->department_name = $request->department_name;
        $application->present_posting = $request->present_posting;

        if($request->hasFile('upload_joining_letter')){
          $upload_joining_letter = $request->file('upload_joining_letter');
          $upload_joining_letterFilename = time() . '.' . $upload_joining_letter->getClientOriginalExtension();
          $upload_joining_letter->move('images/', $upload_joining_letterFilename);
          $application->upload_joining_letter = $upload_joining_letterFilename;
        }

        $application->scale = $request->scale;
        $application->present_salary = $request->present_salary;

        $application->pay_including_special_pay_of_any = $request->pay_including_special_pay_of_any;
        $application->marital_status = $request->marital_status;
        $application->mobile_number = $request->mobile_number;
        $application->spouse_name = $request->spouse_name;
        $application->number_of_family_members = $request->number_of_family_members;
        $application->any_house = $request->any_house;
        $application->legally_separated = $request->legally_separated;
        $application->date = $request->date;

        if($request->hasFile('upload_photo')){
            $upload_photo = $request->file('upload_photo');
            $upload_photoFilename = time() . '.' . $upload_photo->getClientOriginalExtension();
            $upload_photo->move('images/', $upload_photoFilename);
            $application->upload_photo = $upload_photoFilename;
        }

        $application->loan = $request->loan;
        $application->load_detail = $request->load_detail;
        $application->date_of_loan = $request->date_of_loan;

        $application->loan2 = $request->loan2;
        $application->load_detail2 = $request->load_detail2;
        $application->date_of_loan2 = $request->date_of_loan2;


        $application->flat_allotted = $request->flat_allotted;
        $application->accommodation_detail = $request->accommodation_detail;
        $application->areas_where_he_wants_to = $request->areas_where_he_wants_to;
        $application->ponty_as_date = $request->ponty_as_date;
        $application->pontyAsDatenew = $request->pontyAsDatenew;

        if($request->hasFile('executive_engineer')){
            $executive_engineer = $request->file('executive_engineer');
            $executive_engineerFilename = time() . '.' . $executive_engineer->getClientOriginalExtension();
            $executive_engineer->move('images/', $executive_engineerFilename);
            $application->executive_engineer = $executive_engineerFilename;
        }


        if($request->hasFile('superintending_engineer')){
            $superintending_engineer = $request->file('superintending_engineer');
            $superintending_engineerFilename = time() . '.' . $superintending_engineer->getClientOriginalExtension();
            $superintending_engineer->move('images/', $superintending_engineerFilename);
            $application->superintending_engineer = $superintending_engineerFilename;
        }

        $status=5; 
        if($application->approved_sectional_officer){
            $status=2;
        }
        if($application->approved_estate_officer){
            $status=3;
        }
        if($application->approved_executive_engineer){
            $status=3;
        }
        if($application->approved_superintendent_engineer){
            $status=4;
        }
            
        
        $application->status = $status;


        $application->action_by = $application->action_by;

        if($request->hasFile('signature_upload')){
            $signature_upload = $request->file('signature_upload');
            $signature_uploadFilename = time() . '.' . $signature_upload->getClientOriginalExtension();
            $signature_upload->move('images/', $signature_uploadFilename);
            $application->signature_upload = $signature_uploadFilename;
        }
       
        $application->save();



        //$application->update($request->all());


         return redirect()->route('applications.index')
                   ->with('success','Application updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();


        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}