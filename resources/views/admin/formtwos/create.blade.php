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
              <li class="breadcrumb-item active"><a href="{{ route('admin.formones.index')}}">Back</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
@if($errors->any())
<div class="alert alert-danger">
@foreach($errors ->all() as $error)
<li>{{ $error }}</li>
@endforeach
</div>
@endif

   @if($message = Session::get('success'))
   <div class="alert alert-success" style="text-align:center;">
   <p>
   {{ $message}}
   </p>
   </div>
   @endif
   
      <div class="">
              <div class="btn btn-primary col-md-12" style="text-align:center;">
                <h3 class="card-title">Add form two students to database</h3>
              </div> 
            
       <form enctype="multipart/form-data" role="form" method="POST" action="{{ route('admin.formtwos.store')}}">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                  <input type="hidden" name="status" required value="Active" class="form-control">
                  <p for="">Admission Number</p>
                    <input type="text" name="id" required value="
                  <?php
                  echo(rand(100,10000));
                  ?>
                  " class="form-control" placeholder="Admission Number">
                  </div>
                  <div class="col-md-4">
                  <p for="">First Name</p>
                    <input type="text" name="fname" required class="form-control"  placeholder="First Name">
                  </div>
                  <div class="col-md-4">
                  <p for="">Last Name</p>
                    <input type="text" name="lname" required class="form-control"  placeholder="Last Name">
                    </div>
                </div>
                <div class="row">
                 
                  <div class="col-md-4">
                  <p for="">Mobile Number</p>
                    <input type="text" id="phone" placeholder="eg +254" name="phone" required  class="form-control">
                    </div>
                    <div class="col-md-4">
                    <p for="">Email</p>
                    <input type="text" name="email" required  class="form-control"  placeholder="Email">
                  </div>
                  <div class="col-md-4">
                    <p for="">KCPE or KCSE Marks</p>
                    <input type="text" name="KCPEKCSEmarks" required class="form-control"  placeholder="KCPE or KCSE Marks">
                    </div>
                </div>
  
                <div class="row">
                <div class="col-md-4">
                    <p for="">Form</p>
                    <select name="form" class="form-control">
                    <option>Form One</option>
                    <option>Form Two</option>
                    <option>Form Three</option>
                    <option>Form Four</option>
                    </select>
                   </div>
                  <div class="col-md-4">
                    <p for="">Stream</p>
                    <select name="stream" class="form-control">
                    <option>Stream 1</option>
                    <option>Stream 2</option>
                    <option>Stream 3</option>
                    <option>Stream 4</option>
                    <option>Stream 5</option>
                    <option>Stream 6</option>
                    </select>
                   </div>
                    <div class="col-md-4">
                    <p for="">Student's passport photo</p>
                    <input type="file" name="image" class="form-control" required  placeholder="Student's passport photo">
                    </div>
                </div>
                <hr>
                <p class="collapsible">Subjects</p>
                <div class="collap">
                <div class="row">
                 <div class="col-md-3">
                 <p for="">English</p>
                 <input type="checkbox" name="eng" value="English" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Kiswahili</p>
                 <input type="checkbox" name="kisw" value="Kiswahili" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Mathematics</p>
                 <input type="checkbox" name="math" value="Mathematics" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Biology</p>
                 <input type="checkbox" name="bio" value="Biology" class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Physics</p>
                 <input type="checkbox" name="phy" value="Physics" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Chemistry</p>
                 <input type="checkbox" name="chem" value="Chemistry" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">General Science</p>
                 <input type="checkbox" name="gen" value="General Science" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">History and Government</p>
                 <input type="checkbox" name="hist" value="History and Government" class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Geography</p>
                 <input type="checkbox" name="geo" value="Geography" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Christian Religious Education</p>
                 <input type="checkbox" name="cre" value="Christian Religious Education (CRE)" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Islamic Religious Education</p>
                 <input type="checkbox" name="ire" value="Islamic Religious Education (IRE)" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Home Science</p>
                 <input type="checkbox" name="hs" value="Home Science" class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Arty and Design</p>
                 <input type="checkbox" name="ad" value="Arty and Design" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Agriculture</p>
                 <input type="checkbox" name="agr" value="Agriculture" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Woodwork</p>
                 <input type="checkbox" name="ww" value="Woodwork" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Metalwork</p>
                 <input type="checkbox" name="mw" value="Metalwork" class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Building Construction</p>
                 <input type="checkbox" name="bc" value="Building Construction" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Power Mechanics</p>
                 <input type="checkbox" name="pm" value="Power Mechanics" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Electricity</p>
                 <input type="checkbox" name="ele" value="Electricity" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Drawing and Design</p>
                 <input type="checkbox" name="dd" value="Drawing and Design" class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Aviation Technology</p>
                 <input type="checkbox" name="at" value="Aviation Technology" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Computer studies</p>
                 <input type="checkbox" name="cs" value="Computer studies" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">French</p>
                 <input type="checkbox" name="french" value="French" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">German</p>
                 <input type="checkbox" name="german" value="German" class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Arabic</p>
                 <input type="checkbox" name="arabic" value="Arabic" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Kenya Sign Language (KSL)</p>
                 <input type="checkbox" name="ksl" value="Kenya Sign Language (KSL)" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Music</p>
                 <input type="checkbox" name="music" value="Music" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Business Studies</p>
                 <input type="checkbox" name="bs" value="Business Studies" class="form-control">
                 </div>
                </div></div>
                <hr>
                <p class="collapsible">Next of Kin One $ Two</p>
                <div class="collap" style="font-size: 15px;">
                <center><b>Next of Kin One</b></center>
                <div class="row">
                  <div class="col-md-4">
                  <p for="">First Name</p>
                    <input type="text" name="first_name" require="Required" class="form-control" placeholder="First Name">
                  </div>
                  <div class="col-md-4">
                  <p for="">last Name</p>
                    <input type="text" name="last_name" required class="form-control"  placeholder="last Name">
                  </div>
                  <div class="col-md-4">
                  <p for="">Mobile Number</p>
                    <input type="text" id="phone" placeholder="eg +254" name="cell" required class="form-control"  placeholder="Mobile Number">
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                  <p for="">Email</p>
                    <input type="text" name="kin_email" require="Required" class="form-control" placeholder="Email">
                  </div>
                  <div class="col-md-4">
                  <p for="">National ID</p>
                    <input type="text" name="nationalid" required class="form-control"  placeholder="National ID">
                  </div>
                  <div class="col-md-4">
                  <p for="">Relationship</p>
                    <input type="text" name="kin_relationship" required class="form-control"  placeholder="Relationship">
                    </div>
                </div>
                <center><b>Next of Kin Two </b></center>
                <div class="row">
                  <div class="col-md-4">
                  <p for="">First Name</p>
                    <input type="text" name="firstname" require="Required" class="form-control" placeholder="First Name">
                  </div>
                  <div class="col-md-4">
                  <p for="">last Name</p>
                    <input type="text" name="lastname" required class="form-control"  placeholder="last Name">
                  </div>
                  <div class="col-md-4">
                  <p for="">Mobile Number</p>
                    <input type="text" id="phone" placeholder="eg +254" name="kin_cell" required class="form-control"  placeholder="Mobile Number">
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                  <p for="">Email</p>
                    <input type="text" name="kinemail" require="Required" class="form-control" placeholder="Email">
                  </div>
                  <div class="col-md-4">
                  <p for="">National ID</p>
                    <input type="text" name="national_id" required class="form-control"  placeholder="National ID">
                  </div>
                  <div class="col-md-4">
                  <p for="">Relationship</p>
                    <input type="text" name="kinrelationship" required class="form-control"  placeholder="Relationship">
                    </div>
                </div>
                </div>
                <hr>
                <p class="collapsible">School Uniform</p>
                <div class="collap">
                 <center> <b>School Uniform</b></center>
                <div class="row">
                 
                 <div class="col-md-2">
                 <p for="">2 Sweaters</p>
                 <input type="checkbox" name="sweater" value="2 Sweaters" class="form-control">
                 </div>
                 <div class="col-md-2">
                 <p for="">2 Pair of Shoes</p>
                 <input type="checkbox" name="shoes" value="2 Pair of Shoes" class="form-control">
                 </div>
                 <div class="col-md-2">
                 <p for="">2 Pair of Socks</p>
                 <input type="checkbox" name="sock" value="2 Pair of Socks" class="form-control">
                 </div>
                 <div class="col-md-2">
                 <p for="">2 Shirts</p>
                 <input type="checkbox" name="shirt" value="2 Shirts" class="form-control">
                 </div>
                 <div class="col-md-2">
                 <p for="">2 T-Shirt</p>
                 <input type="checkbox" name="t_shirt" value="2 T-Shirt" class="form-control">
                 </div>
                 <div class="col-md-2">
                 <p for="">2 Jackets</p>
                 <input type="checkbox" name="jacket" value="2 Jackets" class="form-control">
                 </div>
                 <div class="col-md-2">
                 <p for="">2 Sport Uniforms</p>
                 <input type="checkbox" name="sport" value="2 Sport Uniforms" class="form-control">
                 </div>
                 <div class="col-md-2">
                 <p for="">2 Scout Uniforms</p>
                 <input type="checkbox" name="scout" value="2 Scout Uniforms" class="form-control">
                 </div>
                </div>
                </div>
                <hr>
                <p class="collapsible">Health Status of student</p>
                <div class="collap">
                <div class="row">
                  <div class="col-md-12">
                 <center> <p for="">What is your child health condition? </p></center>
                  
                  <textarea rows="4" name="health" style="width:100%" placeholder="Explain here..."></textarea>
                  </div>
                </div></div>
                <hr>
                <p class="collapsible">Accommodation (Dormitories)</p>
                <div class="collap">
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Dormitory East</p>
                 <input type="checkbox" name="east" value="Dormitory East" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Dormitory West</p>
                 <input type="checkbox" name="west" value="Dormitory West" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Dormitory South</p>
                 <input type="checkbox" name="south" value="Dormitory South" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Dormitory North</p>
                 <input type="checkbox" name="north" value="Dormitory North" class="form-control">
                 </div>
                </div></div>
                <hr>
                <p class="collapsible">Discipline</p>
                <div class="collap">
                <center> <p for="">Have you child been involved in any indiscipline case? </p></center>
                  
                  <textarea rows="4" name="discipline" style="width:100%" placeholder="Explain here..."></textarea>
                  </div>
                <hr>
                <p class="collapsible">Miscellaneous</p>
                <div class="content">
                </div>
                </div>
                </div>
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              </div> 
            </div>
            </div>
@endsection
