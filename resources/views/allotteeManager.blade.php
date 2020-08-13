@extends('layouts.app')

@section('stylesheet')
   <link href="{{ asset('css/onlydashboard.css') }}" rel="stylesheet">
@stop

@section('content')


   
     

     <div class="row">
        <div class="col-md-12">
           <div class="card">
                <div class="card-header">
                     Allottee management
                    <!-- <a href="{{ route('applications.index') }}" class="all-application-link">View All</a> -->

                </div>
                <div class="card-body">
                  <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">House allocated list</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">House takeover List</a>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <table id="example7" class="display" style="width:100%">
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
                                            <p class="card-text">Reference Number: {{ $product->file_number }}</p>
                                            <p class="card-text">Designation: {{ $product->designation }}</p>
                                            <p class="card-text">Department Name: {{ $product->department_name }}</p>
                                            <p class="card-text">Get house on pointy as: {{ $product->pontyAsDatenewSelected }}</p>

                                        </div>
                                    </td>
                                    <td width="300px">
                                         <form action="{{ route('leave',$product->id) }}" method="GET" onSubmit="return confirm('Do you want to house takeout?') ">
                                              <button style="
    float: left;
    width: 70%;
" type="submit" class="btn btn-danger btn-block">House takeout</button> 
                                         </form>
                                        <form action="{{ route('applications.destroy',$product->id) }}" method="POST">
                                            <!-- <a class="btn btn-info" href="{{ route('applications.show',$product->id) }}">Show</a> -->

                                            <!-- <a class="btn btn-primary" href="{{ route('leave',$product->id) }}" >Leave from house</a> -->
                                            <a 
                                            style="
    float: right;
    wi
"
                                            class="btn btn-primary" href="{{ route('applications.edit',$product->id) }}">View</a>
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
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <table id="example7" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($peindingApplicationsTakeout as $product)
                                <tr>
                                    <td> 
                                       <div class="col-sm">
                                       <img src="{{URL::to('/')}}/images/{{ $product->upload_photo }}" class="card-img" alt="...">
                                       </div>
                                    </td>
                                    <td>
                                        <div class="card-body ">
                                            <p class="card-text">Name: {{ $product->name }}</p>
                                            <p class="card-text">Reference Number: {{ $product->file_number }}</p>
                                            <p class="card-text">Designation: {{ $product->designation }}</p>
                                            <p class="card-text">Department Name: {{ $product->department_name }}</p>

                                        </div>
                                    </td>
                                    <td width="300px">
                                         
                                        <form action="{{ route('applications.destroy',$product->id) }}" method="POST">
                                            <!-- <a class="btn btn-info" href="{{ route('applications.show',$product->id) }}">Show</a> -->

                                            <!-- <a class="btn btn-primary" href="{{ route('leave',$product->id) }}" >Leave from house</a> -->
                                            <a 
                                            style="
    float: right;
    wi
"
                                            class="btn btn-primary" href="{{ route('applications.edit',$product->id) }}">View</a>
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
            </div>
        </div>
     </div>
    

@endsection

@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <!-- <script src="{{ asset('js/dashboard.js') }}"></script> -->



     <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->

    <script type="text/javascript">
    //   google.charts.load('current', {'packages':['corechart']});
    //   google.charts.setOnLoadCallback(drawVisualization);

    //   function drawVisualization() {
    //     // Some raw data (not necessarily accurate)
    //     var data = google.visualization.arrayToDataTable([
    //       ['Day', 'Total', 'Solved', 'Pending', 'Rejected'],
    //       ['1', 165,938,522,998],
    //       ['2', 165,938,522,998],
    //       ['3', 165,938,522,998],
    //       ['4', 165,938,522,998],
    //       ['5', 165,938,522,998],
    //       ['6', 165,938,522,998],
    //       ['7', 165,938,522,998]
    //     ]);

    //     var options = {
    //       title : 'Monthly Coffee Production by Country',
    //        vAxis: {title: 'Cups'},
    //        hAxis: {title: 'Day'},
    //       seriesType: 'bars',
    //       series: {5: {type: 'line'}}        };

    //     var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    //     chart.draw(data, options);
    //   }










var ctx = document.getElementById("myChart").getContext("2d");
ctx.height = 400;
var data = {
  labels: ['1/6/2020','2/6/2020','3/6/2020','4/6/2020','5/6/2020','6/6/2020','7/6/2020'],
  datasets: [
  {
    label: "Totoal",
    backgroundColor: "#856404",
    data: [3, 7, 1,3,4,2,5]
  },
  {
    label: "Solved",
    backgroundColor: "#28a745",
    data: [3, 9, 4, 2,6,2,9]
  },

  {
    label: "Pending",
    backgroundColor: "#138496",
    data: [3, 5, 4, 2,5,2,6]
  },{
    label: "Rejected",
    backgroundColor: "#c82333",
    data: [7, 7, 8, 2,4,6,7]
  }

]
};

var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: data,
  options: {
    maintainAspectRatio: false,
    barValueSpacing: 10,
    scales: {
      yAxes: [{
        ticks: {
          min: 0,
        }
      }]
    }
  }
});

    </script>
@stop
