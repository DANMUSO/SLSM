@extends('layouts.admin')
@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
              <li class="breadcrumb-item active"><a href="{{ route('admin.staffs.index')}}">Back</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                <img src="{{ URL::to('/') }}/images/{{ $staff -> image}}" class="img-thumbnail" width="250">
                <h3>staff's Details</h3>
                </div>

               

                

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
               <strong> Name: {{  $staff->fname}} &nbsp{{  $staff->lname}}</strong>
                  </li>
                  <li class="list-group-item">
                  <strong> staff Number: {{  $staff->id}}</strong>
                  </li>
                  <li class="list-group-item">
                  <strong>Mobile No: {{  $staff->phone}}</strong> 
                  </li>
                    </ul>
                <a href="#" class="btn btn-primary btn-block"><b></b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
           
            <!-- /.card -->
          </div>
          <!-- /.col -->


          
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                  <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Bio Data</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Bank Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="#award" data-toggle="tab">Comapany Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="#leaves" data-toggle="tab">Number of Leaves</a></li>
                  <li class="nav-item"><a class="nav-link" href="#salary" data-toggle="tab">Salary transactions</a></li>
                  </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                      <img src="{{ URL::to('/') }}/images/{{ $staff -> image}}" class="img-thumbnail" width="250">
                      <span class="username"> </span>
                      </div>
                      <!-- /.user-block -->
                      <div class="row" style="color:black">
                      <div class="col-md-6">
                      <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                      <strong> staff Email: {{  $staff->email}}</strong>
                      </li>
                      <li class="list-group-item">
                      <strong> Gender: {{  $staff->gender}}</strong>
                      </li>
                 
                      </ul>
                      </div>
                      <div class="col-md-6">
                      <ul class="list-group list-group-unbordered mb-3">
                 
                      <li class="list-group-item">
                      <strong> Date of Birth: {{  $staff->birth}}</strong>
                      </li>
                      <li class="list-group-item">
                      <strong>Nationality: {{  $staff->nationality}}</strong>
                      </li>
                 
                      </ul>
                      </div>
                      </div>
                      </div>
                    <!-- /.post -->

                    <!-- Post -->
                  
                    <!-- /.post -->

                    <!-- Post -->
                  
                    <!-- /.post -->
                  </div>
                  <div class="tab-pane" id="award">
                    <!-- The timeline -->
                    <div class="">
                     
                      <div>
                      <div style="overflow-x:auto;">
                      <table id="example" class="table display nowrap">
                      <thead>
                      <tr>
                      <th>ID</th>
                      <th>Image</th>
                      <th>Award Category</th>
                      <th>Rewarded Date</th>
                      <th>Created Date</th></tr>
                      </thead>
                      <tbody id="myTable">
                     @foreach($bank as $company)
                     <tr>
                      <td>{{ $company -> id}}</td>
                      <td>{{ $company -> department}}</td>
                      <td>{{ $company -> designation}}</td>
                      <td>{{ $company -> joindate}}</td>
                      
                    
                      </tr>
                      @endforeach
                      
                      </tbody>
                      </table>
                   </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                    
                      <!-- /.timeline-label -->
                    
                      <!-- END timeline item -->
                     
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="salary">
                    <!-- The timeline -->
                    <div class="">
                     
                      <div>
                       
                        <div class="timeline-item">
                        
                          <div class="timeline-body">
                          <table id="example" class="table display nowrap">
                      <thead>
                      <tr>
                      <th>ID</th>
                      <th>Image</th>
                      <th>Award Category</th>
                      <th>Rewarded Date</th>
                      <th>Created Date</th></tr>
                      </thead>
                      <tbody id="myTable">
                     @foreach($bank as $company)
                     <tr>
                      <td>{{ $company -> id}}</td>
                      <td>{{ $company -> department}}</td>
                      <td>{{ $company -> designation}}</td>
                      <td>{{ $company -> joindate}}</td>
                      
                      <td>{{ $company -> joindate}}</td>
                      </tr>
                      @endforeach
                      
                      </tbody>
                      </table>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                    
                      <!-- /.timeline-label -->
                    
                      <!-- END timeline item -->
                      <div>
                        
                      </div>
                    </div>
                  </div>

                  

                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                     
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                        
                          <div class="timeline-body">
                            doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                    
                      <!-- /.timeline-label -->
                    
                      <!-- END timeline item -->
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane" id="leaves">
                    <!-- The timeline -->
                    <div class="">
                     
                      <div>
                        <div class="timeline-item">
                        
                          <div>
                          <table id="example" class="table display nowrap">
                      <thead>
                      <tr>
                      <th>Type of Leave</th>
                      <th>Purpose of leave</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Status</th></tr>
                      </thead>
                      <tbody id="myTable">
                     @foreach($staffs as $s)
                     <tr>
                      <td>{{ $s -> typeleave}}</td>
                      <td>{{ $s -> purpose}}</td>
                      <td>{{ $s -> start_date}}</td>
                      <td>{{ $s -> end_date}}</td>
                      <td>Approved</td>
                      
                      </tr>
                      @endforeach
                      
                      </tbody>
                      </table>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                    
                      <!-- /.timeline-label -->
                    
                      <!-- END timeline item -->
                      <div>
                   
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                  <div class="col-lg-12 bg-light rounded my-2 py-2" style="overflow-x:auto;">
                  <table id="example" class="table table-striped table-bordered table-hover">
                  <thead>
                  <tr>
                  <th>Account Holder</th>
                  <th>Account</th>
                  
                  <th>Bank</th>
                  <th>Branch</th>
                  </tr>
                  </thead>
                  <tbody id="myTable">
                  @foreach($bank as $c)
                  <tr>
                  <td>{{ $c->accountholder}}</td>
                
                  <td>{{ $c->account}}</td> 
                  
                  <td>{{ $c->bank}}</td> 
                  <td>{{ $c->branch}}</td>  
                  
                  </tr>
                  @endforeach
                  </tbody>
                  
                  </table>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
