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
              <li class="breadcrumb-item active"><a href="{{ route('admin.formthrees.index')}}">Back</a></li>
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
                <img src="{{ URL::to('/') }}/images/{{ $formthree -> image}}" class="img-thumbnail" width="250">
                </div>

               

                

                <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
               <strong> Name: {{  $formthree->fname}} &nbsp{{  $formthree->lname}}</strong>
                  </li>
                  <li class="list-group-item">
                  <strong> Admission Numer: {{  $formthree->id}}</strong>
                  </li>
                  <li class="list-group-item">
                  <strong>KCPE or KCSE Marks: {{  $formthree->KCPEKCSEmarks}}</strong> 
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
               <strong> Parent or Guardian Name: {{  $formthree->guardian}} &nbsp{{  $formthree->lname}}</strong>
                  </li>
                 
                </ul>
                </div>
                <div class="col-md-6">
                      <ul class="list-group list-group-unbordered mb-3">
                 
                  <li class="list-group-item">
                  <strong>Mobile No: {{  $formthree->phone}}</strong>
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
               <strong> {{  $formthree->eng}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formthree->bio}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formthree->geo}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formthree->ire}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formthree->ww}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formthree->dd}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formthree->german}}</strong>
                  </li>
                 
                </ul>
                </div>
                <div class="col-md-3">
                      <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
               <strong> {{ $formthree->kisw}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{ $formthree->phy}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{ $formthree->geo}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{ $formthree->gen}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formthree->mw}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formthree->at}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formthree->arabic}}</strong>
                  </li>
                </ul>
                </div>
                <div class="col-md-3">
                      <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
               <strong>{{  $formthree->math}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong>{{  $formthree->agr}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong>{{  $formthree->hist}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong>{{  $formthree->hs}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formthree->bc}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formthree->cs}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formthree->ksl}}</strong>
                  </li>
                </ul>
                </div>
                <div class="col-md-3">
                      <ul class="list-group list-group-unbordered mb-3">
                 
                  <li class="list-group-item">
                  <strong>{{  $formthree->chem}}</strong>
                  </li>
                  <li class="list-group-item">
                  <strong>{{  $formthree->bs}}</strong>
                  </li>
                  <li class="list-group-item">
                  <strong>{{  $formthree->cre}}</strong>
                  </li>
                  <li class="list-group-item">
                  <strong>{{  $formthree->ad}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formthree->ele}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formthree->fench}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formthree->music}}</strong>
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
                   {{ $formthree->health}}
                   </div>
                   <div class="col-md-4"><label> Student's Discipline</label>
                   <hr>
                   {{$formthree ->discipline}}
                   </div>
                   <div class="col-md-4"><label>Accommodation(Dormitory)</label>
                   <hr>
                   {{$formthree ->east}}
                   {{$formthree ->west}}
                   {{$formthree ->north}}

                   {{$formthree ->south}}
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
                   {{$formthree ->sweater}}
                   </div>
                   <div class="col-md-4">
                   <hr>
                   {{$formthree ->shoes}}
                   </div>
                   <div class="col-md-4">
                   <hr>
                   {{$formthree ->sock}}
                   </div>
                   <div class="col-md-4">
                   <hr>
                   {{$formthree ->shirt}}
                   </div>
                   <div class="col-md-4">
                   <hr>
                   {{$formthree ->t_shirt}}
                   </div>
                   <div class="col-md-4">
                   <hr>
                   {{$formthree ->jacket}}
                   </div>
                   <div class="col-md-4">
                   <hr>
                   {{$formthree ->scout}}
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
                      
                       <td>{{$formthree -> first_name}}</td>
                      
                      <td>{{$formthree -> last_name}}</td>
                      <td>{{$formthree -> cell}}</td>
                      <td>{{$formthree -> kin_email}}</td>
                      <td>{{$formthree -> nationalid}}</td>
                      <td>{{$formthree -> kin_relationship}}</td>
                     
                    
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
                    
                       <td>{{$formthree -> firstname}}</td>
                      
                      <td>{{$formthree -> lastname}}</td>
                      <td>{{$formthree -> kin_cell}}</td>
                      <td>{{$formthree -> kinemail}}</td>
                      <td>{{$formthree -> national_id}}</td>
                      <td>{{$formthree -> kinrelationship}}</td>
                    
                     
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
                      $d=$formthree->id;
                      $sum = mysqli_query($con,"SELECT SUM(amount) FROM formthreefees where id='$d'");
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
