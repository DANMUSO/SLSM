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
              <li class="breadcrumb-item active"><a href="{{ route('admin.formfours.index')}}">Back</a></li>
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
                <img src="{{ URL::to('/') }}/images/{{ $formfour -> image}}" class="img-thumbnail" width="250">
                </div>

               

                

                <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
               <strong> Name: {{  $formfour->fname}} &nbsp{{  $formfour->lname}}</strong>
                  </li>
                  <li class="list-group-item">
                  <strong> Admission Numer: {{  $formfour->id}}</strong>
                  </li>
                  <li class="list-group-item">
                  <strong>KCPE or KCSE Marks: {{  $formfour->KCPEKCSEmarks}}</strong> 
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
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab"><strong>Bio Data</strong></a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab"><strong>Provision Performance</strong></a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab"><strong>Fees Transaction</strong></a></li>
                  <li class="nav-item"><a class="nav-link" href="#parent" data-toggle="tab"><strong>Next of Kin</strong></a></li>
                  <li class="nav-item"><a class="nav-link" href="#others" data-toggle="tab"><strong>Miscellaneous</strong></a></li>
                  </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                    
                      <!-- /.user-block -->
                    
                      <hr>
                <center><b>Parent or Guardian Details</b></center>
                <hr>
                   <div class="row">
                   <div class="col-md-6">
                      <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
               <strong> Parent or Guardian Name: {{  $formfour->guardian}} &nbsp{{  $formfour->lname}}</strong>
                  </li>
                 
                </ul>
                </div>
                <div class="col-md-6">
                      <ul class="list-group list-group-unbordered mb-3">
                 
                  <li class="list-group-item">
                  <strong>Mobile No: {{  $formfour->phone}}</strong>
                  </li>
                 
                </ul>
                </div>
                </div>
                <hr>
                <center><label>Subjects</label></center>
                <hr>
                
                
                <div class="row">
                   <div class="col-md-3">
                      <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
               <strong> {{  $formfour->eng}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formfour->bio}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formfour->geo}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formfour->ire}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formfour->ww}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formfour->dd}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formfour->german}}</strong>
                  </li>
                 
                </ul>
                </div>
                <div class="col-md-3">
                      <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
               <strong> {{ $formfour->kisw}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{ $formfour->phy}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{ $formfour->geo}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{ $formfour->gen}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formfour->mw}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formfour->at}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formfour->arabic}}</strong>
                  </li>
                </ul>
                </div>
                <div class="col-md-3">
                      <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
               <strong>{{  $formfour->math}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong>{{  $formfour->agr}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong>{{  $formfour->hist}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong>{{  $formfour->hs}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formfour->bc}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formfour->cs}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formfour->ksl}}</strong>
                  </li>
                </ul>
                </div>
                <div class="col-md-3">
                      <ul class="list-group list-group-unbordered mb-3">
                 
                  <li class="list-group-item">
                  <strong>{{  $formfour->chem}}</strong>
                  </li>
                  <li class="list-group-item">
                  <strong>{{  $formfour->bs}}</strong>
                  </li>
                  <li class="list-group-item">
                  <strong>{{  $formfour->cre}}</strong>
                  </li>
                  <li class="list-group-item">
                  <strong>{{  $formfour->ad}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formfour->ele}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formfour->fench}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formfour->music}}</strong>
                  </li>
                </ul>
                </div>
                </div></div>
                    <!-- /.post -->

                    <!-- Post -->
                  
                    <!-- /.post -->

                    <!-- Post -->
                  
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <label> Performance</label>
                    <div style="overflow-x:auto;">
                    <table id="example" class="display nowrap">
                    <thead style="background-color:#33e6ff;">
                    <tr>
                      <th>MGRD</th>
                      <th>Position</th>
                      <th>C/Position</th>
                      <th>Eng</th>
                      <th>Kisw</th>
                      <th>Math</th>
                      <th>Chem</th>
                      <th>Bio</th>
                      <th>Phy</th>
                      <th>Agr</th>
                      <th>BS</th>
                      <th>Geo</th>
                      <th>CRE</th>
                      <th>Comp</th>
                      <th>Marks</th>
                      <th>Points</th>
                      <th>Date</th>
                      
			
                          </tr>
                      </thead>
                      <tbody id="myTable">
                     
                       <tr>
                       @foreach($performs as $c)
                       <td>{{$c -> mgrd}}</td>
                      
                      <td>{{$c -> position}}</td>
                      <td>{{$c -> clsp}}</td>
                      <td>{{$c -> eng}}</td>
                      <td>{{$c -> kisw}}</td>
                      <td>{{$c -> math}}</td>
                      <td>{{$c -> chem}}</td>
                      <td>{{$c -> phy}}</td>
                      <td>{{$c -> bio}}</td>
                      <td>{{$c -> agr}}</td>
                      <td>{{$c -> bs}}</td>
                      <td>{{$c -> geo}}</td>
                      <td>{{$c -> cre}}</td>
                      <td>{{$c -> cs}}</td>
                      <td>{{$c -> marks}}</td>
                      <td>{{$c -> point}}</td>
                      <td>{{$c -> created_at}}</td>
                      @endforeach
                      </tr>
                     
       
        
                   </tbody>
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
                    
                   <div class="row">
                   <div class="col-md-4"><label> Health Status</label>
                   <hr>
                   {{ $formfour->health}}
                   </div>
                   <div class="col-md-4"><label> Student's Discipline</label>
                   <hr>
                   {{$formfour ->discipline}}
                   </div>
                   <div class="col-md-4"><label>Accommodation(Dormitory)</label>
                   <hr>
                   {{$formfour ->east}}
                   {{$formfour ->west}}
                   {{$formfour ->north}}

                   {{$formfour ->south}}
                   </div>
                  
                   </div>
                   <hr>
                   <div class="row">
                 
                   <div class="col-md-12">
                   <center><label>School Uniform</label></center>
                   <hr>
                   </div>
                   <div class="col-md-4">
                   <hr>
                   {{$formfour ->sweater}}
                   </div>
                   <div class="col-md-4">
                   <hr>
                   {{$formfour ->shoes}}
                   </div>
                   <div class="col-md-4">
                   <hr>
                   {{$formfour ->sock}}
                   </div>
                   <div class="col-md-4">
                   <hr>
                   {{$formfour ->shirt}}
                   </div>
                   <div class="col-md-4">
                   <hr>
                   {{$formfour ->t_shirt}}
                   </div>
                   <div class="col-md-4">
                   <hr>
                   {{$formfour ->jacket}}
                   </div>
                   <div class="col-md-4">
                   <hr>
                   {{$formfour ->scout}}
                   </div>
                   </div>
                   </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="parent">
                    <label>Next of Kin One</label>
                    <div style="overflow-x:auto;">
                    <table id="example" class="display nowrap">
                    <thead style="background-color:#33e6ff;">
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Mobile Number</th>
                      <th>Email</th>
                      <th>national ID</th>
                      <th>Relationship</th>
                     </tr>
                      </thead>
                      <tbody id="myTable">
                     
                       <tr>
                      
                       <td>{{$formfour -> first_name}}</td>
                      
                      <td>{{$formfour -> last_name}}</td>
                      <td>{{$formfour -> cell}}</td>
                      <td>{{$formfour -> kin_email}}</td>
                      <td>{{$formfour -> nationalid}}</td>
                      <td>{{$formfour -> kin_relationship}}</td>
                     
                    
                      </tr>
                     
       
        
                   </tbody>
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
                  <hr>
                  <label>Next of Kin Two</label>
                    <div style="overflow-x:auto;">
                    <table id="example" class="display nowrap">
                    <thead style="background-color:#33e6ff;">
                    <tr>
                    <th>First Name</th>
                      <th>Last Name</th>
                      <th>Mobile Number</th>
                      <th>Email</th>
                      <th>national ID</th>
                      <th>Relationship</th>
                     </tr>
                      </thead>
                      <tbody id="myTable">
                     
                       <tr>
                    
                       <td>{{$formfour -> firstname}}</td>
                      
                      <td>{{$formfour -> lastname}}</td>
                      <td>{{$formfour -> kin_cell}}</td>
                      <td>{{$formfour -> kinemail}}</td>
                      <td>{{$formfour -> national_id}}</td>
                      <td>{{$formfour -> kinrelationship}}</td>
                    
                     
                      </tr>
                     
       
        
                   </tbody>
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
                  <div class="tab-pane" id="settings">
                  <div class="row"><div class="col-md-6"><h6>&nbsp&nbsp Recent fees payment transactions</h6></div>
                  <div class="col-md-4"></div></div>
    
                  
                      <div style="overflow-x:auto;">
                      <table id="example" class="table display nowrap">
                      <thead style="background-color:#33e6ff;">
                      <tr>
                      <th>Date</th>
                      <th>Bank</th>
                      <th>Receipt Number</th>
                      <th>Amount</th></tr>
                      </thead>
                      <tbody id="myTable">
                      
                     @foreach ($fees as $f)
                     <tr>
                      <td>{{ $f -> created_at}}</td>
                      <td>{{ $f -> bank}}</td>
                      <td>{{ $f -> receiptno}}</td>
                      <td>{{ $f -> amount}}</td>
                      </tr>
                      @endforeach
                     
                      
                      <?php
                      $con = mysqli_connect("localhost","root","","serp");
                      $d=$formfour->id;
                      $sum = mysqli_query($con,"SELECT SUM(amount) FROM formfourfees where id='$d'");
                      while ($fee=mysqli_fetch_assoc($sum))
                      {
                         $amount=$fee['SUM(amount)'];
                       ?>
                      
                       <tr>
                     <td colspan="3">Total Amount</td>
                      <td><?php echo $fee['SUM(amount)'].' '.'KES';?></td>
                    
                      
                      </tr>
                       <?php }

                      ?>
                      
       
        
                      </tbody>
                      </table>
                     <script>

                    $('#example').DataTable( {
                        dom: 'Bfrtip',
                        buttons: [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ]
                    } );
                     </script></div>
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
