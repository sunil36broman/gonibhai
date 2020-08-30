<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <style>
  
  table{border-collapse: collapse}

    table, table td,table th {
    border: solid black;
    }
    table {
    border-width: 1px 1px 1px 1px;
    }
    table td,table th {
    border-width: 1px 1px 1px 1px;
    }
    table{
       
        width:100% !important;
       
    }
    table th.super_header{
        text-align:center;
    }
    table th{
        float:left;
        text-align:left;
      
       
    }
    table tr{
      
      
     
    }
    table td{
        float:left;
        text-align:left;
       
        
    }
   
    .header{
       background-color:#683091;
       color:#fff;
    }
    
</style>
  <body>
  <table class="table table-borderless">

<tbody style="text-align: right;">
     <tr>
         <th colspan="2" class="super_header">
           <3>Application for government accommodation under the PWD Dhaka</h3>
         </th>
     </tr>
    <tr class="header">
        <th scope="row" width="50%">Title</th>
        <td width="50%">Details</td>
    </tr>
    <tr>
        <th scope="row" width="50%">Name</th>
        <td width="50%">{{ $application->name }}</td>
    </tr>
    <tr>
        <th scope="row" width="50%">Designation</th>
        <td width="50%">{{ $application->designation }}</td>
    </tr>
    <tr>
        <th scope="row" width="50%">Father's Name</th>
        <td width="50%">{{ $application->fathers_name }}</td>
    </tr>
    <tr>
        <th scope="row" width="50%">Mother's Name</th>
        <td width="50%">{{ $application->mothers_name }}</td>
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
        <th scope="row" width="50%">Department Name</th>
        <td width="50%">{{ $application->department_name }}</td>
    </tr>
    <tr>
        <th scope="row" width="50%">Present posting</th>
        <td width="50%">{{ $application->present_posting }}</td>
    </tr>
    <tr>
        <th scope="row" width="50%">Scale</th>
        <td width="50%">{{ $application->scale }}</td>
    </tr>
    <tr>
        <th scope="row" width="50%">Pay including special pay of any</th>
        <td width="50%">{{ $application->pay_including_special_pay_of_any }}</td>
    </tr>
    <tr>
        <th scope="row" width="50%">Marital Status</th>
        <td width="50%">{{ $application->marital_status }}</td>
    </tr>
    <tr>
        <th scope="row" width="50%">Mobile number</th>
        <td width="50%">{{ $application->mobile_number }}</td>
    </tr>
    <tr>
        <th scope="row" width="50%">Spouse Name</th>
        <td width="50%">{{ $application->spouse_name }}</td>
    </tr>
    <tr>
        <th scope="row" width="50%">Number of Family Member's</th>
        <td width="50%">{{ $application->number_of_family_members }}</td>
    </tr>
    <tr>
        <th scope="row" width="50%">Whether any house/house at Dhaka Narayangonj is/are owned by</th>
        <td width="50%">{{ $application->any_house }}</td>
    </tr>
    <tr>
        <th scope="row" width="50%">Legally Separated</th>
        <td width="50%">{{ $application->legally_separated }}</td>
    </tr>
    <tr>
        <th scope="row" width="50%">Date</th>
        <td width="50%">{{ $application->date }}</td>
    </tr>

    <tr>
        <th scope="row" width="50%">Please Describe here</th>
        <td width="50%">{{ $application->load_detail }}</td>
    </tr>


    <tr>
        <th scope="row" width="50%">Areas where he wants to</th>
        <td width="50%">{{ $application->areas_where_he_wants_to }}</td>
    </tr>
    <tr>
        <th scope="row" width="50%">Get house on pointy as</th>
        <td width="50%">{{ $application->pontyAsDatenewSelected }}</td>
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
   
   



</tbody>
</table>
  </body>
</html>