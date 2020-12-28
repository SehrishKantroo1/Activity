@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
  <br />
    <h3 class="display-5 text-center">Add New Student Details</h3>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      <br />
    @endif
      <form method="post" action="{{ route('students.store') }}">
          @csrf
          <div class="form-group">    
          <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              <label for="matric_no">Matric No</label>
              <input type="text" class="form-control" name="matric_no"/>
          </div>

          <div class="form-group">
          <label for="gender">Gender</label>
          <select name="gender" class="form-control">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          </select>
          </div>

          <div class="form-group">
              <label for="date_of_birth">Date of Birth</label>
              <input type="text" class="form-control" name="date_of_birth"/>
          </div>

          <div class="form-group">
              <label for="citizenship">Citizenship</label>
              <input type="text" class="form-control" name="citizenship"/>
          </div>

          <div class="form-group">
          <label for="marital_status">Marital Status</label>
          <select name="marital_status" class="form-control">
          <option value="Single">Single</option>
          <option value="Married">Married</option>
          </select>
          </div>

          <div class="form-group">
          <label for="religion">Religion</label>
          <select name="religion" class="form-control">
          <option value="Islam">Islam</option>
          <option value="Hinduism">Hinduism</option>
          <option value="Christianity">Christianity</option>
          <option value="Other">Other</option>
          </select>
          </div>

          <div class="form-group">
          <label for="active_status">Active Status</label>
          <select name="active_status" class="form-control">
          <option value="Active">Active</option>
          <option value="Inactive">Inactive</option>
          </select>
          </div>

          <div class="form-group">
              <label for="year_of_study">Year of Study</label>
              <input type="text" class="form-control" name="year_of_study"/>
          </div>

          <div class="form-group">
              <label for="id_no">Id No/Passport No</label>
              <input type="text" class="form-control" name="id_no"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="row justify-content-center">
          <a href="{{ route('students.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;                        
          <button type="submit" class="btn btn-primary text-center">Save Details</button>
          </div>
      </form>
  </div>
</div>
</div>
@endsection