<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Application extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $connection = 'mysql2';
    protected $table = 'applications';
    protected $fillable = [
        'regulationUpload', 'allotmentLetterUpload', 'name', 'refrence_id', 'designation','fathers_name','mothers_name','date_of_joining','department_name','present_posting','upload_joining_letter','scale','present_salary','pay_including_special_pay_of_any','marital_status','mobile_number','spouse_name','number_of_family_members','any_house','legally_separated','date','upload_photo','loan','load_detail','date_of_loan','loan2','load_detail2','date_of_loan2','flat_allotted','accommodation_detail','areas_where_he_wants_to','ponty_as_date','pontyAsDatenew','pontyAsDatenew2','pontyAsDatenew3','pontyAsDatenewSelected','executive_engineer','superintending_engineer','action_by','approved_sectional_officer','approved_estate_officer','approved_executive_engineer','approved_superintendent_engineer','status','signature_upload','recommendation_sectional','recommendation_estate','recommendation_executive','recommendation_superintendent','recommendation_sectional_file','recommendation_estate_file','recommendation_executive_file','recommendation_superintendent_file','file_number'
    ];
}