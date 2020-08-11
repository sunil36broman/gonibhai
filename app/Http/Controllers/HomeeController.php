<?php

namespace App\Http\Controllers;

use App\Product;
use App\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;

class HomeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //    // $this->middleware('auth');
    //     return view('home');
    // }

    public function homee()
    {
        return view('welcome');
    }

    public function application()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // request()->validate([
        //     'name' => 'required',
        //     'detail' => 'required',
        // ]);

        // $this->validate($request, [
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|same:confirm-password'
            
        // ]);
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password'
        ]);

        //dd($request->all());
        // $input = $request->all();
        // $input['password'] = Hash::make($input['password']);

        $user  = new User;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
       // $user->save();
        


        if ($user->save()){

     
            $user->assignRole(["User" => "User"]);
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
            $application->pontyAsDatenew = $request->pontyAsDatenew;
            $application->pontyAsDatenew2 = $request->pontyAsDatenew2;
            $application->pontyAsDatenew3 = $request->pontyAsDatenew3;

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
            $application->action_by =$user->id;

            if($request->hasFile('signature_upload')){
                $signature_upload = $request->file('signature_upload');
                $signature_uploadFilename = time() . '.' . $signature_upload->getClientOriginalExtension();
                $signature_upload->move('images/', $signature_uploadFilename);
                $application->signature_upload = $signature_uploadFilename;
            }
            $application->save();

       }


        //dd($request->all());



        //Product::create($request->all());


        return redirect()->route('homee')
                       ->with('success','Application created successfully.');

    }


    
}
