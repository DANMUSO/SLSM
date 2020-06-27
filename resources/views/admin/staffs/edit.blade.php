@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h6 class="m-0 text-dark">staffs</h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">staffs</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add staffs to database</h3>
              </div> 
       <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('admin.staffs.store')}}">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           {{ method_field('PATCH')}}
           <center><p>Personal Details</p></center>
           <hr>
                <div class="card-body">
                <div class="row">
                 
                  <div class="col-md-4">
                  <p for="">First Name</p>
                    <input type="text" name="fname" value="{{$staff->fname}}" required class="form-control"  placeholder="First Name">
                  </div>
                  <div class="col-md-4">
                  <p for="">Last Name</p>
                    <input type="text" name="lname" value="{{$staff->lname}}" required class="form-control"  placeholder="Last Name">
                    </div>
                  
                  <div class="col-md-4">
                  <p for="">Mobile Number</p>
                    <input type="text" name="phone" value="{{$staff->phone}}" required class="form-control"  placeholder="Mobile Number">
                    </div>
                    <div class="col-md-4">
                    <p for="">Email</p>
                    <input type="text" name="email" value="{{$staff->email}}" required class="form-control"  placeholder="Email">
                    </div>
                  <div class="col-md-4">
                    <p for="">National ID</p>
                    <input type="text" name="rank" value="{{$staff->rank}}" required class="form-control"  placeholder="National ID">
                  </div>
                  <div class="col-md-4">
                    <p for="">Gender</p>
                    <select type="text" name="gender" value="{{$staff->gender}}" required class="form-control">
                    <option>Male</option>
                    <option>Female</option>
                    </select>
                    </div>
                    <div class="col-md-4">
                    <p for="">Date of Birth</p>
                    <input type="date" name="birth" value="{{$staff->birth}}" required class="form-control"  placeholder="Date of Birth">
                    
                    </div>
                    <div class="col-md-4">
                    <p for="">Nationality</p>
                    <input type="text" name="nationality" value="{{$staff->nationality}}" required class="form-control"  placeholder="Nationality">
                    </div>
                    <div class="col-md-4">
                    <label for="">Student's passport photo</label>
                    <input type="file" name="image" class="form-control">
                    <img src="{{ URL::to('/') }}/images/{{$staff -> image}}" class="img-thumbnail" width="75">
                    <input type="hidden" name="hidden_image" value="{{ $staff->image}}"> </div>
                    </div>
                    </div>
                    <hr>
                    <center><p>Bank Account Details</p></center>
                    <hr>
                    <div class="row">
                    <div class="col-md-3">
                    <p for="">Account Holder Name</p>
                    <input type="text" name="accountholder" value="{{$staff->accountholder}}" required class="form-control"  placeholder="Account Holder Name">
                    </div>
                    <div class="col-md-3">
                    <p for="">Account Number</p>
                    <input type="text" name="account" value="{{$staff->account}}" required class="form-control"  placeholder="Account Number">
                    </div>
                    <div class="col-md-3">
                    <p for="">Bank Name</p>
                    <input type="text" name="bank" value="{{$staff->bank}}" required class="form-control"  placeholder="Bank Name">
                    </div>
                    <div class="col-md-3">
                    <p for="">Branch</p>
                    <input type="text" name="branch" value="{{$staff->branch}}" required class="form-control"  placeholder="Branch">
                    </div>
                    </div>
                    <hr>
                    <center><p>Company Details</p></center>
                    <hr>
                    <div class="row">
                    <div class="col-md-3">
                    <p for="">Staff Number</p>
                    <input type="text" name="id" value="{{$staff->id}}" required class="form-control" value="
                  <?php
                  echo(rand(10000,15000));
                  ?>
                  ">
                    </div>
                    <div class="col-md-3">
                    <p for="">Department</p>
                    <select name="department" class="form-control">
                    <option>{{$staff->department}}</option>
                    <option>Games Department</option>
                    <option>Careers Department</option>
                    <option>Academics Department</option>
                    <option>Humanities Department</option>
                    <option>Science Department</option>
                    <option>Guidance & Counselling Department</option>
                    <option>Technical & Creative Art Department</option>
                    <option>ICT Department</option>
                    <option>Protocol Department</option>
                    </select>
                    </div>
                    <div class="col-md-3">
                    <p for="">Designation</p>
                    <input type="text" name="designation" value="{{$staff->designation}}" required class="form-control"  placeholder="Designation">
                    
                    </div>
                    <div class="col-md-3">
                    <p for="">Date of Joining</p>
                    <input type="date" name="joindate" value="{{$staff->joindate}}" required class="form-control"  placeholder="Date of Joining">
                    </div>
                    </div>
                    <hr>
                    <center><p>Financial Details</p></center>
                    <hr>
                    <div class="row">
                    <div class="col-md-3">
                    <p for="">Basic Salary</p>
                    <input type="text" name="basic" value="{{$staff->basic}}" required class="form-control"  placeholder="Basic Salary">
                    </div>
                    <div class="col-md-3">
                    <p for="">Transport Allowance</p>
                    <input type="text" name="transport" value="{{$staff->transport}}" required class="form-control"  placeholder="Transport Allowance">
                    </div>
                    <div class="col-md-3">
                    <p for="">Medical Allowance</p>
                    <input type="text" name="medical" value="{{$staff->medical}}" required class="form-control"  placeholder="Medical Allowance">
                    </div>
                <div class="col-md-3">
                    <p for="">House Allowance</p>
                    <input type="text" name="house" value="{{$staff->house}}" required class="form-control"  placeholder="House Allowance">
                    </div>
                    <div class="col-md-4">
                    <p for="">NSSF NO</p>
                    <input type="text" name="nssf" value="{{$staff->nssf}}" required class="form-control"  placeholder="NSSF Amount">
                    </div>
                    <div class="col-md-4">
                    <p for="">NHIF NO</p>
                    <input type="text" name="nhif" value="{{$staff->nhif}}" required class="form-control"  placeholder="NHIF Amount">
                    </div>
                    <div class="col-md-4">
                    <p for="">County</p>
                    <select type="text" name="county" required class="form-control">
                      <option>{{$staff->county}}</option>
                   <option> 1 Mombasa County</option>
                   <option> 2 Kwale County</option>
                   <option>3 Kilifi County</option>
                   <option>4 Tana River County</option> 
                   <option>5 Lamu County </option>
                   <option>6 Taita Taveta County </option>
                   <option>7 Garissa County </option> 
                   <option>8 Wajir County </option>
                   <option> 9 Mandera County </option> 
                   <option>10 Marsabit County</option> 
                   <option>11 Isiolo County</option> 
                   <option>12 Meru County</option>
                   <option> 13 Tharaka Nithi County</option> 
                   <option>14 Embu County</option>
                   <option> 15 Kitui County </option> 
                   <option>16 Machakos County</option> 
                   <option>17 Makueni county</option> 
                   <option>18 Nyandarua County </option> 
                   <option>19 Nyeri County </option>
                   <option> 20 Kirinyaga County </option>
                   <option> 21 Murang'a County </option>
                   <option> 22 Kiambu County </option>
                   <option> 23 Turkana County </option>
                   <option> 24 West Pokot County </option>
                   <option> 25 Samburu County </option> 
                   <option>26 Uasin Gishu County</option> 
                   <option>27 Trans-Nzoia County</option> 
                   <option>28 Elgeyo-Marakwet County</option>
                   <option> 29 Nandi County</option>
                   <option> 30 Baringo County</option> 
                   <option>31 Laikipia County</option> 
                   <option>32 Nakuru County</option>
                   <option> 33 Narok County </option> 
                   <option>34 Kajiado County </option>
                   <option>35 Kericho County </option>
                   <option> 36 Bomet County </option>
                   <option> 37 Kakamega County </option>
                   <option> 38 Vihiga County </option>
                   <option> 39 Bungoma County </option>
                   <option> 40 Busia County </option>
                   <option>41 Siaya County </option>
                   <option> 42 Kisumu County </option>
                   <option> 43 Homa Bay County </option> 
                   <option>44 Migori County</option> 
                   <option>45 Kisii County</option> 
                   <option>46 Nyamira County</option> 
                   <option>47 Nairobi County</option>

                    </select>
                    </div>
                  </div>
               
                <!-- /.card-body -->
<br>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              </div></div></div>

@endsection
