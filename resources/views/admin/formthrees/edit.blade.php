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
              <li class="breadcrumb-item active"><a href="{{ route('admin.formthrees.index')}}">Back</a></li>
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
       <form enctype="multipart/form-data" role="form" method="POST" action="{{ route('admin.formthrees.update', $formthree->id)}}">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           {{ method_field('PATCH')}}
                <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                  <p for="">First Name</p>
                    <input type="text" name="fname" required value="{{$formthree->fname}}" class="form-control"  placeholder="First Name">
                  </div>
                  <div class="col-md-4">
                  <p for="">Last Name</p>
                    <input type="text" name="lname" required value="{{ $formthree->lname}}" class="form-control"  placeholder="Last Name">
                    </div>
                    
                  <div class="col-md-4">
                  <p for="">Mobile Number</p>
                    <input type="text" name="phone" required value="{{ $formthree->phone}}" class="form-control"  placeholder="Mobile">
                    </div>
                </div>
                <div class="row">
                 
                    <div class="col-md-4">
                    <p for="">Email</p>
                    <input type="text" name="email" required value="{{ $formthree->email}}"  class="form-control"  placeholder="Email">
                  </div>
                  <div class="col-md-4">
                    <p for="">KCPE or KCSE Marks</p>
                    <input type="text" name="KCPEKCSEmarks" value="{{ $formthree->KCPEKCSEmarks}}" required class="form-control"  placeholder="KCPE or KCSE Marks">
                    </div>
                    <div class="col-md-4">
                    <p for="">Form</p>
                    <select name="form" class="form-control">
                    <option>{{ $formthree->form}}</option>
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
                    <option>{{ $formthree->stream}}</option>
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
                    <img src="{{ URL::to('/') }}/images/{{$formthree -> image}}" class="img-thumbnail" width="75">
                    <input type="hidden" name="hidden_image" value="{{ $formthree->image}}"> </div>
                </div>
                <hr>
                <p class="collapsible">Subjects</p>
                <div class="collap">
                <div class="row">
                 <div class="col-md-3">
                 <p for="">English</p>
                 <input type="checkbox" name="eng" checked value="{{$formthree->eng}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Kiswahili</p>
                 <input type="checkbox" name="kisw" checked value="{{$formthree->kisw}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Mathematics</p>
                 {{ $formthree->math}}
                 <input type="checkbox" name="math" checked value="{{$formthree->math}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Biology</p>
                 <input type="checkbox" name="bio" checked value="{{$formthree->bio}}" class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Physics</p>
                 <input type="checkbox" name="phy" checked value="{{$formthree->phy}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Chemistry</p>
                 <input name="chem" type="checkbox"  checked value="{{$formthree->chem}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">General Science</p>
                 <input type="checkbox" name="gen" checked value="{{$formthree->gen}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">History and Government</p>
                 <input type="checkbox" name="hist" checked value="{{$formthree->hist}}"  class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Geography</p>
                 <input type="checkbox" name="geo" checked value="{{$formthree->geo}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Christian Religious Education</p>
                 <input type="checkbox" name="cre" checked value="{{$formthree->cre}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Islamic Religious Education</p>
                 <input type="checkbox" name="ire" checked value="{{$formthree->ire}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Home Science</p>
                 <input type="checkbox" name="hs" checked value="{{$formthree->hs}}"  class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Art and Design</p>
                 <input type="checkbox" name="ad" checked value="{{$formthree->ad}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Agriculture</p>
                 <input type="checkbox" name="agr" checked value="{{$formthree->agr}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Woodwork</p>
                 <input type="checkbox" name="ww" checked value="{{$formthree->ww}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Metalwork</p>
                 <input type="checkbox" name="mw" checked value="{{$formthree->mw}}"  class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Building Construction</p>
                 <input type="checkbox" name="bc" checked value="{{$formthree->bc}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Power Mechanics</p>
                 <input type="checkbox" name="pm" checked value="{{$formthree->pm}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Electricity</p>
                 <input type="checkbox" name="ele" checked value="{{$formthree->ele}}"  class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Drawing and Design</p>
                 <input type="checkbox" name="dd" checked value="{{$formthree->dd}}"  class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Aviation Technology</p>
                 <input type="checkbox" name="at" checked value="{{$formthree->at}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Computer studies</p>
                 <input type="checkbox" name="cs" checked value="{{$formthree->cs}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">French</p>
                 <input type="checkbox" name="french" checked value="{{$formthree->french}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">German</p>
                 <input type="checkbox" name="german" checked value="{{$formthree->german}}" class="form-control">
                 </div>
                </div>
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Arabic</p>
                 <input type="checkbox" name="arabic" checked value="{{$formthree->arabic}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Kenya Sign Language (KSL)</p>
                 <input type="checkbox" name="ksl" checked value="{{$formthree->ksl}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Music</p>
                 <input type="checkbox" name="music" checked value="{{$formthree->music}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Business Studies</p>
                 <input type="checkbox" name="bs" checked value="{{$formthree->bs}}" class="form-control">
                 </div>
                </div></div>
                <hr>
                <p class="collapsible">Next of Kin One $ Two</p>
                <div class="collap" style="font-size: 15px;">
                <center><b>Next of Kin One</b></center>
                <div class="row">
                  <div class="col-md-4">
                  <p for="">First Name</p>
                    <input type="text" name="first_name" value="{{$formthree->first_name}}" required class="form-control">
                  </div>
                  <div class="col-md-4">
                  <p for="">last Name</p>
                    <input type="text" name="last_name" value="{{$formthree->last_name}}" required class="form-control">
                  </div>
                  <div class="col-md-4">
                  <p for="">Mobile Number</p>
                    <input type="text" name="cell" value="{{$formthree->cell}}" required class="form-control">
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                  <p for="">Email</p>
                    <input type="text" name="kin_email" value="{{$formthree->email}}" require="Required" class="form-control">
                  </div>
                  <div class="col-md-4">
                  <p for="">National ID</p>
                    <input type="text" name="nationalid" required class="form-control" value="{{$formthree->nationalid}}">
                  </div>
                  <div class="col-md-4">
                  <p for="">Relationship</p>
                    <input type="text" name="kin_relationship" value="{{$formthree->kin_relationship}}" required class="form-control">
                    </div>
                </div>
                <center><b>Next of Kin Two </b></center>
                <div class="row">
                  <div class="col-md-4">
                  <p for="">First Name</p>
                    <input type="text" name="firstname" required value="{{$formthree->firstname}}" class="form-control">
                  </div>
                  <div class="col-md-4">
                  <p for="">last Name</p>
                    <input type="text" name="lastname" value="{{$formthree->lastname}}" required class="form-control">
                  </div>
                  <div class="col-md-4">
                  <p for="">Mobile Number</p>
                    <input type="text" name="kin_cell" value="{{$formthree->kin_cell}}" required class="form-control">
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                  <p for="">Email</p>
                    <input type="text" name="kinemail" value="{{$formthree->kinemail}}" require="Required" class="form-control">
                  </div>
                  <div class="col-md-4">
                  <p for="">National ID</p>
                    <input type="text" name="national_id" value="{{$formthree->national_id}}" required class="form-control">
                  </div>
                  <div class="col-md-4">
                  <p for="">Relationship</p>
                    <input type="text" name="kinrelationship" value="{{$formthree->kinrelationship}}" required class="form-control">
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
                 <input type="checkbox" name="sweater" checked value="{{$formthree->sweater}}" class="form-control">
                 </div>
                 <div class="col-md-2">
                 <p for="">2 Pair of Shoes</p>
                 <input type="checkbox" name="shoes" checked value="{{$formthree->shoes}}" class="form-control">
                 </div>
                 <div class="col-md-2">
                 <p for="">2 Pair of Socks</p>
                 <input type="checkbox" name="sock" checked value="{{$formthree->sock}}" class="form-control">
                 </div>
                 <div class="col-md-2">
                 <p for="">2 Shirts</p>
                 <input type="checkbox" name="shirt" checked value="{{$formthree->shirt}}" class="form-control">
                 </div>
                 <div class="col-md-2">
                 <p for="">2 T-Shirt</p>
                 <input type="checkbox" name="t_shirt" checked value="{{$formthree->t_shirt}}" class="form-control">
                 </div>
                 <div class="col-md-2">
                 <p for="">2 Jackets</p>
                 <input type="checkbox" name="jacket" checked value="{{$formthree->jacket}}" class="form-control">
                 </div>
                 <div class="col-md-2">
                 <p for="">2 Sport Uniforms</p>
                 <input type="checkbox" name="sport" checked value="{{$formthree->sport}}" class="form-control">
                 </div>
                 <div class="col-md-2">
                 <p for="">2 Scout Uniforms</p>
                 <input type="checkbox" name="scout" checked value="{{$formthree->scout}}" class="form-control">
                 </div>
                </div>
                </div>
                <hr>
                <p class="collapsible">Health Status of student</p>
                <div class="collap">
                <div class="row">
                  <div class="col-md-12">
                 <center> <p for="">What is your child health condition? </p></center>
                  
                  <textarea rows="4" name="health" style="width:100%" value="Health" placeholder="{{$formthree->health}}"></textarea>
                  </div>
                </div></div>
                <hr>
                <p class="collapsible">Accommodation (Dormitories)</p>
                <div class="content">
                <div class="row">
                 
                 <div class="col-md-3">
                 <p for="">Dormitory East</p>
                 <input type="checkbox" name="east"  checked value="{{$formthree->east}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Dormitory West</p>
                 <input type="checkbox" name="west"  checked value="{{$formthree->west}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Dormitory South</p>
                 <input type="checkbox" name="south"  checked value="{{$formthree->south}}" class="form-control">
                 </div>
                 <div class="col-md-3">
                 <p for="">Dormitory North</p>
                 <input type="checkbox" name="north"  checked value="{{$formthree->north}}" class="form-control">
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
