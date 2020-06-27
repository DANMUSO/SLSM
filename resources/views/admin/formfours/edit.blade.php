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
              <li class="breadcrumb-item active"><a href="{{ route('admin.formfours.index')}}">Back</a></li>
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
       <form enctype="multipart/form-data" role="form" method="POST" action="{{ route('admin.formfours.update', $formfour->id)}}">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           {{ method_field('PATCH')}}
                <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                  <p for="">First Name</p>
                    <input type="text" name="fname" required value="{{$formfour->fname}}" class="form-control"  placeholder="First Name">
                  </div>
                  <div class="col-md-4">
                  <p for="">Last Name</p>
                    <input type="text" name="lname" required value="{{ $formfour->lname}}" class="form-control"  placeholder="Last Name">
                    </div>
                    
                  <div class="col-md-4">
                  <p for="">Mobile Number</p>
                    <input type="text" name="phone" required value="{{ $formfour->phone}}" class="form-control"  placeholder="Mobile">
                    </div>
                </div>
                <div class="row">
                 
                    <div class="col-md-4">
                    <p for="">Email</p>
                    <input type="text" name="email" required value="{{ $formfour->email}}"  class="form-control"  placeholder="Email">
                  </div>
                  <div class="col-md-4">
                    <p for="">KCPE or KCSE Marks</p>
                    <input type="text" name="KCPEKCSEmarks" value="{{ $formfour->KCPEKCSEmarks}}" required class="form-control"  placeholder="KCPE or KCSE Marks">
                    </div>
                    <div class="col-md-4">
                    <p for="">Form</p>
                    <select name="form" class="form-control">
                    <option>{{ $formfour->form}}</option>
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
                    <option>{{ $formfour->stream}}</option>
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
                    <img src="{{ URL::to('/') }}/images/{{$formfour -> image}}" class="img-thumbnail" width="75">
                    <input type="hidden" name="hidden_image" value="{{ $formfour->image}}"> </div>
                </div>
                <hr>
                <p class="collapsible">Subjects</p>
                <div class="collap">
                <div class="row">
                 <div class="col-md-3">
                 <p for="">English</p>
                 <input type="checkbox" name="eng" checked value="{{$formfour->eng}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Kiswahili</p>
                 <input type="checkbox" name="kisw" checked value="{{$formfour->kisw}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Mathematics</p>
                 {{ $formfour->math}}
                 <input type="checkbox" name="math" checked value="{{$formfour->math}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Biology</p>
                 <input type="checkbox" name="bio" checked value="{{$formfour->bio}}" class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Physics</p>
                 <input type="checkbox" name="phy" checked value="{{$formfour->phy}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Chemistry</p>
                 <input name="chem" type="checkbox"  checked value="{{$formfour->chem}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">General Science</p>
                 <input type="checkbox" name="gen" checked value="{{$formfour->gen}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">History and Government</p>
                 <input type="checkbox" name="hist" checked value="{{$formfour->hist}}"  class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Geography</p>
                 <input type="checkbox" name="geo" checked value="{{$formfour->geo}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Christian Religious Education</p>
                 <input type="checkbox" name="cre" checked value="{{$formfour->cre}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Islamic Religious Education</p>
                 <input type="checkbox" name="ire" checked value="{{$formfour->ire}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Home Science</p>
                 <input type="checkbox" name="hs" checked value="{{$formfour->hs}}"  class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Art and Design</p>
                 <input type="checkbox" name="ad" checked value="{{$formfour->ad}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Agriculture</p>
                 <input type="checkbox" name="agr" checked value="{{$formfour->agr}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Woodwork</p>
                 <input type="checkbox" name="ww" checked value="{{$formfour->ww}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Metalwork</p>
                 <input type="checkbox" name="mw" checked value="{{$formfour->mw}}"  class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Building Construction</p>
                 <input type="checkbox" name="bc" checked value="{{$formfour->bc}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Power Mechanics</p>
                 <input type="checkbox" name="pm" checked value="{{$formfour->pm}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Electricity</p>
                 <input type="checkbox" name="ele" checked value="{{$formfour->ele}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Drawing and Design</p>
                 <input type="checkbox" name="dd" checked value="{{$formfour->dd}}"  class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Aviation Technology</p>
                 <input type="checkbox" name="at" checked value="{{$formfour->at}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Computer studies</p>
                 <input type="checkbox" name="cs" checked value="{{$formfour->cs}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">French</p>
                 <input type="checkbox" name="french" checked value="{{$formfour->french}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">German</p>
                 <input type="checkbox" name="german" checked value="{{$formfour->german}}" class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Arabic</p>
                 <input type="checkbox" name="arabic" checked value="{{$formfour->arabic}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Kenya Sign Language (KSL)</p>
                 <input type="checkbox" name="ksl" checked value="{{$formfour->ksl}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Music</p>
                 <input type="checkbox" name="music" checked value="{{$formfour->music}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Business Studies</p>
                 <input type="checkbox" name="bs" checked value="{{$formfour->bs}}" class="form-control">
                 </div>
                </div></div>
                <hr>
                <p class="collapsible">Next of Kin One $ Two</p>
                <div class="collap" style="font-size: 15px;">
                <center><b>Next of Kin One</b></center>
                <div class="row">
                  <div class="col-md-4">
                  <p for="">First Name</p>
                    <input type="text" name="first_name" value="{{$formfour->first_name}}" required class="form-control">
                  </div>
                  <div class="col-md-4">
                  <p for="">last Name</p>
                    <input type="text" name="last_name" value="{{$formfour->last_name}}" required class="form-control">
                  </div>
                  <div class="col-md-4">
                  <p for="">Mobile Number</p>
                    <input type="text" name="cell" value="{{$formfour->cell}}" required class="form-control">
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                  <p for="">Email</p>
                    <input type="text" name="kin_email" value="{{$formfour->email}}" require="Required" class="form-control">
                  </div>
                  <div class="col-md-4">
                  <p for="">National ID</p>
                    <input type="text" name="nationalid" required class="form-control" value="{{$formfour->nationalid}}">
                  </div>
                  <div class="col-md-4">
                  <p for="">Relationship</p>
                    <input type="text" name="kin_relationship" value="{{$formfour->kin_relationship}}" required class="form-control">
                    </div>
                </div>
                <center><b>Next of Kin Two </b></center>
                <div class="row">
                  <div class="col-md-4">
                  <p for="">First Name</p>
                    <input type="text" name="firstname" required value="{{$formfour->firstname}}" class="form-control">
                  </div>
                  <div class="col-md-4">
                  <p for="">last Name</p>
                    <input type="text" name="lastname" value="{{$formfour->lastname}}" required class="form-control">
                  </div>
                  <div class="col-md-4">
                  <p for="">Mobile Number</p>
                    <input type="text" name="kin_cell" value="{{$formfour->kin_cell}}" required class="form-control">
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                  <p for="">Email</p>
                    <input type="text" name="kinemail" value="{{$formfour->kinemail}}" require="Required" class="form-control">
                  </div>
                  <div class="col-md-4">
                  <p for="">National ID</p>
                    <input type="text" name="national_id" value="{{$formfour->national_id}}" required class="form-control">
                  </div>
                  <div class="col-md-4">
                  <p for="">Relationship</p>
                    <input type="text" name="kinrelationship" value="{{$formfour->kinrelationship}}" required class="form-control">
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
                 <input type="checkbox" name="sweater" checked value="{{$formfour->sweater}}" class="form-control">
                 </div>
                 <div class="col-md-2">
                 <p for="">2 Pair of Shoes</p>
                 <input type="checkbox" name="shoes" checked value="{{$formfour->shoes}}" class="form-control">
                 </div>
                 <div class="col-md-2">
                 <p for="">2 Pair of Socks</p>
                 <input type="checkbox" name="sock" checked value="{{$formfour->sock}}" class="form-control">
                 </div>
                 <div class="col-md-2">
                 <p for="">2 Shirts</p>
                 <input type="checkbox" name="shirt" checked value="{{$formfour->shirt}}" class="form-control">
                 </div>
                 <div class="col-md-2">
                 <p for="">2 T-Shirt</p>
                 <input type="checkbox" name="t_shirt" checked value="{{$formfour->t_shirt}}" class="form-control">
                 </div>
                 <div class="col-md-2">
                 <p for="">2 Jackets</p>
                 <input type="checkbox" name="jacket" checked value="{{$formfour->jacket}}" class="form-control">
                 </div>
                 <div class="col-md-2">
                 <p for="">2 Sport Uniforms</p>
                 <input type="checkbox" name="sport" checked value="{{$formfour->sport}}" class="form-control">
                 </div>
                 <div class="col-md-2">
                 <p for="">2 Scout Uniforms</p>
                 <input type="checkbox" name="scout" checked value="{{$formfour->scout}}" class="form-control">
                 </div>
                </div>
                </div>
                <hr>
                <p class="collapsible">Health Status of student</p>
                <div class="collap">
                <div class="row">
                  <div class="col-md-12">
                 <center> <p for="">What is your child health condition? </p></center>
                  
                  <textarea rows="4" name="health" style="width:100%" value="Health" placeholder="{{$formfour->health}}"></textarea>
                  </div>
                </div></div>
                <hr>
                <p class="collapsible">Accommodation (Dormitories)</p>
                <div class="content">
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Dormitory East</p>
                 <input type="checkbox" name="east"  checked value="{{$formfour->east}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Dormitory West</p>
                 <input type="checkbox" name="west"  checked value="{{$formfour->west}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Dormitory South</p>
                 <input type="checkbox" name="south"  checked value="{{$formfour->south}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Dormitory North</p>
                 <input type="checkbox" name="north"  checked value="{{$formfour->north}}" class="form-control">
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
