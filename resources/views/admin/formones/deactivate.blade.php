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
                <h3 class="card-title">Add forn one students to database</h3>
              </div> 
       <form enctype="multipart/form-data" role="form" method="POST" action="{{ route('admin.formones.update', $formone->id)}}">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           {{ method_field('PATCH')}}
                <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                  <p for="">First Name</p>
                    <input type="text" name="fname" required value="{{$formone->fname}}" class="form-control"  placeholder="First Name">
                  </div>
                  <div class="col-md-4">
                  <p for="">Last Name</p>
                    <input type="text" name="lname" required value="{{ $formone->lname}}" class="form-control"  placeholder="Last Name">
                    </div>
                    
                  <div class="col-md-4">
                  <p for="">Mobile Number</p>
                    <input type="text" name="phone" required value="{{ $formone->phone}}" class="form-control"  placeholder="Mobile">
                    </div>
                </div>
                <div class="row">
                 
                    <div class="col-md-4">
                    <p for="">Email</p>
                    <input type="text" name="email" required value="{{ $formone->email}}"  class="form-control"  placeholder="Email">
                  </div>
                  <div class="col-md-4">
                    <p for="">KCPE or KCSE Marks</p>
                    <input type="text" name="KCPEKCSEmarks" value="{{ $formone->KCPEKCSEmarks}}" required class="form-control"  placeholder="KCPE or KCSE Marks">
                    </div>
                    <div class="col-md-4">
                    <p for="">Form</p>
                    <select name="form" class="form-control">
                    <option>{{ $formone->form}}</option>
                    <option>Form One</option>
                    <option>Form Two</option>
                    <option>Form Three</option>
                    <option>Form Four</option>
                    </select>
                   </div>
                </div>
  
                <div class="row">
                
                  <div class="col-md-4">
                    <p for="">Stream</p>
                    <select name="stream" class="form-control">
                    <option>{{ $formone->stream}}</option>
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
                    <input type="file" name="image" class="form-control"  placeholder="Student's passport photo">
                    <img src="{{ URL::to('/') }}/images/{{$formone -> image}}" class="img-thumbnail" width="75">
                    <input type="hidden" name="hidden_image" value="{{ $formone->image}}"> </div>
                </div>
                <hr>
                <p class="collapsible">Subjects</p>
                <div class="collap">
                <div class="row">
                 <div class="col-md-3">
                 <p for="">English</p>
                 <input type="checkbox" name="eng" checked value="{{$formone->eng}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Kiswahili</p>
                 <input type="checkbox" name="kisw" checked value="{{$formone->kisw}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Mathematics</p>
                 {{ $formone->math}}
                 <input type="checkbox" name="math" checked value="{{$formone->math}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Biology</p>
                 <input type="checkbox" name="bio" checked value="{{$formone->bio}}" class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Physics</p>
                 <input type="checkbox" name="phy" checked value="{{$formone->phy}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Chemistry</p>
                 <input type="checkbox" name="chem" checked value="{{$formone->chem}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">General Science</p>
                 <input type="checkbox" name="gen" checked value="{{$formone->gen}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">History and Government</p>
                 <input type="checkbox" name="hist" checked value="{{$formone->hist}}"  class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Geography</p>
                 <input type="checkbox" name="geo" checked value="{{$formone->geo}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Christian Religious Education</p>
                 <input type="checkbox" name="cre" checked value="{{$formone->cre}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Islamic Religious Education</p>
                 <input type="checkbox" name="ire" checked value="{{$formone->ire}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Home Science</p>
                 <input type="checkbox" name="hs" checked value="{{$formone->hs}}"  class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Art and Design</p>
                 <input type="checkbox" name="ad" checked value="{{$formone->ad}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Agriculture</p>
                 <input type="checkbox" name="agr" checked value="{{$formone->agr}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Woodwork</p>
                 <input type="checkbox" name="ww" checked value="{{$formone->ww}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Metalwork</p>
                 <input type="checkbox" name="mw" checked value="{{$formone->mw}}"  class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Building Construction</p>
                 <input type="checkbox" name="bc" checked value="{{$formone->bc}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Power Mechanics</p>
                 <input type="checkbox" name="pm" checked value="{{$formone->pm}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Electricity</p>
                 <input type="checkbox" name="ele" checked value="{{$formone->ele}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Drawing and Design</p>
                 <input type="checkbox" name="dd" checked value="{{$formone->dd}}"  class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Aviation Technology</p>
                 <input type="checkbox" name="at" checked value="{{$formone->at}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Computer studies</p>
                 <input type="checkbox" name="cs" checked value="{{$formone->cs}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">French</p>
                 <input type="checkbox" name="french" checked value="{{$formone->french}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">German</p>
                 <input type="checkbox" name="german" checked value="{{$formone->german}}" class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Arabic</p>
                 <input type="checkbox" name="arabic" checked value="{{$formone->arabic}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Kenya Sign Language (KSL)</p>
                 <input type="checkbox" name="ksl" checked value="{{$formone->ksl}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Music</p>
                 <input type="checkbox" name="music" checked value="{{$formone->music}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Business Studies</p>
                 <input type="checkbox" name="bs" checked value="{{$formone->bs}}" class="form-control">
                 </div>
                </div></div>
                <hr>
                <p class="collapsible">Next of Kin One $ Two</p>
                <div class="collap" style="font-size: 15px;">
                <center><b>Next of Kin One</b></center>
                <div class="row">
                  <div class="col-md-4">
                  <p for="">First Name</p>
                    <input type="text" name="first_name" value="{{$formone->first_name}}" required class="form-control">
                  </div>
                  <div class="col-md-4">
                  <p for="">last Name</p>
                    <input type="text" name="last_name" value="{{$formone->last_name}}" required class="form-control">
                  </div>
                  <div class="col-md-4">
                  <p for="">Mobile Number</p>
                    <input type="text" name="cell" value="{{$formone->cell}}" required class="form-control">
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                  <p for="">Email</p>
                    <input type="text" name="kin_email" value="{{$formone->email}}" require="Required" class="form-control">
                  </div>
                  <div class="col-md-4">
                  <p for="">National ID</p>
                    <input type="text" name="nationalid" required class="form-control" value="{{$formone->nationalid}}">
                  </div>
                  <div class="col-md-4">
                  <p for="">Relationship</p>
                    <input type="text" name="kin_relationship" value="{{$formone->kin_relationship}}" required class="form-control">
                    </div>
                </div>
                <center><b>Next of Kin Two </b></center>
                <div class="row">
                  <div class="col-md-4">
                  <p for="">First Name</p>
                    <input type="text" name="firstname" required value="{{$formone->firstname}}" class="form-control">
                  </div>
                  <div class="col-md-4">
                  <p for="">last Name</p>
                    <input type="text" name="lastname" value="{{$formone->lastname}}" required class="form-control">
                  </div>
                  <div class="col-md-4">
                  <p for="">Mobile Number</p>
                    <input type="text" name="kin_cell" value="{{$formone->kin_cell}}" required class="form-control">
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                  <p for="">Email</p>
                    <input type="text" name="kinemail" value="{{$formone->kinemail}}" require="Required" class="form-control">
                  </div>
                  <div class="col-md-4">
                  <p for="">National ID</p>
                    <input type="text" name="national_id" value="{{$formone->national_id}}" required class="form-control">
                  </div>
                  <div class="col-md-4">
                  <p for="">Relationship</p>
                    <input type="text" name="kinrelationship" value="{{$formone->kinrelationship}}" required class="form-control">
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
                 <input type="checkbox" name="sweater" value="2 Sweater" class="form-control">
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
                  
                  <textarea rows="4" name="health" style="width:100%" value="Health" placeholder="{{$formone->health}}"></textarea>
                  </div>
                </div></div>
                <hr>
                <p class="collapsible">Accommodation (Dormitories)</p>
                <div class="content">
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
                 <input type="checkbox" name="south" value="Dormitory West" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Dormitory North</p>
                 <input type="checkbox" name="north" value="Dormitory West" class="form-control">
                 </div>
                </div></div>
                <hr>
                <p class="collapsible">Discipline</p>
                <div class="collap">
                <center> <p for="">Have you child been involved in any indiscipline case? </p></center>
                  
                  <textarea rows="4" name="discipline" style="width:100%" value="Discipline"></textarea>
                  </div>
                <hr>
                <p class="collapsible">Miscellaneous</p>
                <div class="collap">
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
