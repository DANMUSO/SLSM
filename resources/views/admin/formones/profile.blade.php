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
              <li class="breadcrumb-item active"><a href="{{ route('admin.formones.index')}}">Back</a></li>
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
                <img src="{{ URL::to('/') }}/images/{{ $formone -> image}}" class="img-thumbnail" width="250">
                </div>

               

                

                <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
               <strong> Name: {{  $formone->fname}} &nbsp{{  $formone->lname}}</strong>
                  </li>
                  <li class="list-group-item">
                  <strong> Admission Numer: {{  $formone->id}}</strong>
                  </li>
                  <li class="list-group-item">
                  <strong>KCPE or KCSE Marks: {{  $formone->KCPEKCSEmarks}}</strong> 
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
               <strong> Parent or Guardian Name: {{  $formone->guardian}} &nbsp{{  $formone->lname}}</strong>
                  </li>
                 
                </ul>
                </div>
                <div class="col-md-6">
                      <ul class="list-group list-group-unbordered mb-3">
                 
                  <li class="list-group-item">
                  <strong>Mobile No: {{  $formone->phone}}</strong>
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
               <strong> {{  $formone->eng}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formone->bio}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formone->geo}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formone->ire}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formone->ww}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formone->dd}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formone->german}}</strong>
                  </li>
                 
                </ul>
                </div>
                <div class="col-md-3">
                      <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
               <strong> {{ $formone->kisw}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{ $formone->phy}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{ $formone->geo}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{ $formone->gen}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formone->mw}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formone->at}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formone->arabic}}</strong>
                  </li>
                </ul>
                </div>
                <div class="col-md-3">
                      <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
               <strong>{{  $formone->math}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong>{{  $formone->agr}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong>{{  $formone->hist}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong>{{  $formone->hs}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formone->bc}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formone->cs}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formone->ksl}}</strong>
                  </li>
                </ul>
                </div>
                <div class="col-md-3">
                      <ul class="list-group list-group-unbordered mb-3">
                 
                  <li class="list-group-item">
                  <strong>{{  $formone->chem}}</strong>
                  </li>
                  <li class="list-group-item">
                  <strong>{{  $formone->bs}}</strong>
                  </li>
                  <li class="list-group-item">
                  <strong>{{  $formone->cre}}</strong>
                  </li>
                  <li class="list-group-item">
                  <strong>{{  $formone->ad}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formone->ele}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formone->fench}}</strong>
                  </li>
                  <li class="list-group-item">
               <strong> {{  $formone->music}}</strong>
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
                   {{ $formone->health}}
                   </div>
                   <div class="col-md-4"><label> Student's Discipline</label>
                   <hr>
                   {{$formone ->discipline}}
                   </div>
                   <div class="col-md-4"><label>Accommodation(Dormitory)</label>
                   <hr>
                   {{$formone ->east}}
                   {{$formone ->west}}
                   {{$formone ->north}}

                   {{$formone ->south}}
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
                   {{$formone ->sweater}}
                   </div>
                   <div class="col-md-4">
                   <hr>
                   {{$formone ->shoes}}
                   </div>
                   <div class="col-md-4">
                   <hr>
                   {{$formone ->sock}}
                   </div>
                   <div class="col-md-4">
                   <hr>
                   {{$formone ->shirt}}
                   </div>
                   <div class="col-md-4">
                   <hr>
                   {{$formone ->t_shirt}}
                   </div>
                   <div class="col-md-4">
                   <hr>
                   {{$formone ->jacket}}
                   </div>
                   <div class="col-md-4">
                   <hr>
                   {{$formone ->scout}}
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
                      
                       <td>{{$formone -> first_name}}</td>
                      
                      <td>{{$formone -> last_name}}</td>
                      <td>{{$formone -> cell}}</td>
                      <td>{{$formone -> kin_email}}</td>
                      <td>{{$formone -> nationalid}}</td>
                      <td>{{$formone -> kin_relationship}}</td>
                     
                    
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
                    
                       <td>{{$formone -> firstname}}</td>
                      
                      <td>{{$formone -> lastname}}</td>
                      <td>{{$formone -> kin_cell}}</td>
                      <td>{{$formone -> kinemail}}</td>
                      <td>{{$formone -> national_id}}</td>
                      <td>{{$formone -> kinrelationship}}</td>
                    
                     
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
    
                  
                                 <div class="container">
                  <div class="row justify-content-center">
                  <div class="col-lg-12 bg-light rounded my-2 py-2" style="overflow-x:auto;">
                  
                  <table id="example" class="display nowrap">
                  
                 <thead style="background-color:#33e6ff;">
                  <tr>
                  <th>Student's No</th>
                  <th>Ref No</th>
                                 
                  <th>Paid Amount</th>
                  <th>Total Amount</th>
                  <th>Balance</th>
                  <th>Date</th>
                  </tr>
                  </thead>
                  <tbody id="myTable">
                  
                   @foreach($fees as $c)
                    <tr>
                    <td>{{$c -> id}}</td>
                      
                     <td>{{$c -> receiptno}}</td>
                     <td>{{$c -> amount}}</td>
                     <td></td>
                     <td></td>
                     <td></td>  
   
                     </tr>
                     @endforeach
                    </tbody>
                  
                     <tr>
                     <?php
                      $con = mysqli_connect("localhost","root","","serp");
                      
                      $sum = mysqli_query($con,"SELECT SUM(amount) FROM formonefees WHERE id='43434455'");
                      while ($f=mysqli_fetch_assoc($sum))
                      {
                         $paidamount=$f['SUM(amount)'];
                       ?>
                      
                       
                     <td colspan="2">Total Amount</td>
                      <td><?php echo $f['SUM(amount)'].' '.'KES';?></td>
                    
                      
                      
                       <?php }

                      ?>
                      <?php
                      $con = mysqli_connect("localhost","root","","serp");
                      
                      $sum = mysqli_query($con,"SELECT SUM(amount) FROM feesettings WHERE form='Form One'");
                      while ($fee=mysqli_fetch_assoc($sum))
                      {
                         $amount=$fee['SUM(amount)'];
                       ?>
                      
                       
                 
                      <td><?php echo $fee['SUM(amount)'].' '.'KES';?></td>
                       <td><?php 
                       $balance = $amount-$paidamount;
                        echo $balance;
                       ?></td>
                      
                      
                       <?php }

                      ?>
                      </tr>
                     </table>
                     </div></div></div>
   
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
