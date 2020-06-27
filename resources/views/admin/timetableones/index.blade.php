@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h6 class="m-0 text-dark">Students</h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Students</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
<div class="card card-primary card-outline">
              <div class="card-body box-profile">
              <div class="row">
              
                <div style="overflow-x:auto;" class="col-md-12">
                <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item btn btn-info"><a class="nav-link" href="#activity" data-toggle="tab" style="color:white"><strong>FORM ONE TIME TABLE</strong></a></li>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <li class="nav-item btn btn-primary"><a class="nav-link" href="#timeline" data-toggle="tab" style="color:white"><strong>FORM TWO TIME TABLE</strong></a></li>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <li class="nav-item btn btn-success"><a class="nav-link" href="#settings" data-toggle="tab" style="color:white"><strong>FORM THREE TIME TABLE</strong></a></li>
                 
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <li class="nav-item btn btn-warning"><a class="nav-link" href="#parent" data-toggle="tab" style="color:white"><strong>FORM FOUR TIME TABLE</strong></a></li>
                  
                 </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                <button>Add Lesson</button>
                  <div class="active tab-pane" id="activity">
                  <label>FORM ONE TIME TABLE</label>
                    <div style="overflow-x:auto;">
                    <table>
                     
                     <tr style="background-color:#33e6ff;">
                       <th>TIME</th>
                       <th>8:00AM-8:45AM</th>
                       <th>8:45AM-9:30AM</th>
                       <th rowspan="6">9:30AM-9:45AM SHORT BREAK</th>
                       <th>9:45AM-10:30AM</th>
                       <th>10:30AM-11:15AM</th>
                       <th rowspan="6">11:15AM-11:40AM LONG BREAK</th>
                       <th>11:40AM-12:25PM</th>
                       <th>12:25AM-1:10AM</th>
                       <th rowspan="6">1:10PM-2:00PM LUNCH</th>
                       <th>2:00PM-2:45PM</th>
                       <th>2:45PM-3:30PM</th>
                       <th>3:30PM-4:15PM</th>
                       <th rowspan="6">4:15PM-5:00PM GAMES</th>
                     </tr>
                   </table>
                    <script>

                    $('#example').DataTable( {
                        dom: 'Bfrtip',
                        buttons: [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ]
                    } );
                  </script>
                  </div>
                 
                  </div>
                  <!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">
                    <label>FORM TWO TIME TABLE</label>
                    <div style="overflow-x:auto;">
                    <table>
                     
                     <tr style="background-color:#33e6ff;">
                       <th>TIME</th>
                       <th>8:00AM-8:45AM</th>
                       <th>8:45AM-9:30AM</th>
                       <th rowspan="6">9:30AM-9:45AM SHORT BREAK</th>
                       <th>9:45AM-10:30AM</th>
                       <th>10:30AM-11:15AM</th>
                       <th rowspan="6">11:15AM-11:40AM LONG BREAK</th>
                       <th>11:40AM-12:25PM</th>
                       <th>12:25AM-1:10AM</th>
                       <th rowspan="6">1:10PM-2:00PM LUNCH</th>
                       <th>2:00PM-2:45PM</th>
                       <th>2:45PM-3:30PM</th>
                       <th>3:30PM-4:15PM</th>
                       <th rowspan="6">4:15PM-5:00PM GAMES</th>
                     </tr>
                    
                     <tr>
                       <td>January</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                     </tr>
                      
                   </table>
                    <script>

                    $('#example').DataTable( {
                        dom: 'Bfrtip',
                        buttons: [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ]
                    } );
                  </script>
                  </div>
                 
                  </div>

                  <div class="tab-pane" id="others">
                  <table>
                     
                     <tr style="background-color:#33e6ff;">
                       <th>TIME</th>
                       <th>8:00AM-8:45AM</th>
                       <th>8:45AM-9:30AM</th>
                       <th rowspan="6">9:30AM-9:45AM SHORT BREAK</th>
                       <th>9:45AM-10:30AM</th>
                       <th>10:30AM-11:15AM</th>
                       <th rowspan="6">11:15AM-11:40AM LONG BREAK</th>
                       <th>11:40AM-12:25PM</th>
                       <th>12:25AM-1:10AM</th>
                       <th rowspan="6">1:10PM-2:00PM LUNCH</th>
                       <th>2:00PM-2:45PM</th>
                       <th>2:45PM-3:30PM</th>
                       <th>3:30PM-4:15PM</th>
                       <th rowspan="6">4:15PM-5:00PM GAMES</th>
                     </tr>
                    
                     <tr>
                       <td>January</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                     </tr>
                     
                   </table>
                   </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="parent">
                  <label>FORM FOUR TIME TABLE</label>
                    <div style="overflow-x:auto;">
                    <table>
                     
                     <tr style="background-color:#33e6ff;">
                       <th>TIME</th>
                       <th>8:00AM-8:45AM</th>
                       <th>8:45AM-9:30AM</th>
                       <th rowspan="6">9:30AM-9:45AM SHORT BREAK</th>
                       <th>9:45AM-10:30AM</th>
                       <th>10:30AM-11:15AM</th>
                       <th rowspan="6">11:15AM-11:40AM LONG BREAK</th>
                       <th>11:40AM-12:25PM</th>
                       <th>12:25AM-1:10AM</th>
                       <th rowspan="6">1:10PM-2:00PM LUNCH</th>
                       <th>2:00PM-2:45PM</th>
                       <th>2:45PM-3:30PM</th>
                       <th>3:30PM-4:15PM</th>
                       <th rowspan="6">4:15PM-5:00PM GAMES</th>
                     </tr>
                    
                     <tr>
                       <td>January</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                     </tr>
                     
                   </table>
                  </div>
                  <hr>
                  
                 
                  </div>
                  <div class="tab-pane" id="settings">
                  
                  <div class="row">
                  <div class="col-md-4"></div></div>
                  <label>FORM THREE TIME TABLE</label>
                  
                      <div style="overflow-x:auto;">
                      <table>
                     
                     <tr style="background-color:#33e6ff;">
                       <th>TIME</th>
                       <th>8:00AM-8:45AM</th>
                       <th>8:45AM-9:30AM</th>
                       <th rowspan="6">9:30AM-9:45AM SHORT BREAK</th>
                       <th>9:45AM-10:30AM</th>
                       <th>10:30AM-11:15AM</th>
                       <th rowspan="6">11:15AM-11:40AM LONG BREAK</th>
                       <th>11:40AM-12:25PM</th>
                       <th>12:25AM-1:10AM</th>
                       <th rowspan="6">1:10PM-2:00PM LUNCH</th>
                       <th>2:00PM-2:45PM</th>
                       <th>2:45PM-3:30PM</th>
                       <th>3:30PM-4:15PM</th>
                       <th rowspan="6">4:15PM-5:00PM GAMES</th>
                     </tr>
                    
                     <tr>
                       <td>January</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                       <td>$100</td>
                     </tr>
                     
                   </table>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
                
               </div>
               </div>
               
              </div>
              <!-- /.card-body -->
            </div>
           
     
     </div>

@endsection
