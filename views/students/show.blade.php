@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <br />
        <h3 class="display-5 text-center">Student Details</h3>
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
        <div class="form-group">    
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $students->name }}" readonly/>
          </div>

          <div class="form-group">
              <label for="matric_no">Matric No</label>
              <input type="text" class="form-control" name="matric_no" value="{{ $students->matric_no }}" readonly/>
          </div>

          <div class="form-group">
          <label for="gender">Marital Status</label>
          <select name="gender" class="form-control" value = "{{ $students->gender }}" readonly>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          </select>
          </div>

          <div class="form-group">
              <label for="date_of_birth">Date of Birth</label>
              <input type="text" class="form-control" name="date_of_birth" value="{{ $students->date_of_birth }}" readonly/>
          </div>

          <div class="form-group">
              <label for="citizenship">Citizenship</label>
              <input type="text" class="form-control" name="citizenship" value="{{ $students->citizenship }}" readonly/>
          </div>


          <div class="form-group">
          <label for="marital_status">Marital Status</label>
          <select name="marital_status" class="form-control" value = "{{ $students->marital_status }}" readonly>
          <option value="Single" readonly>Single</option>
          <option value="Married" readonly>Married</option>
          </select>
          </div>
         
          <div class="form-group">
          <label for="religion">Religion</label>
          <select name="religion" class="form-control" value = "{{ $students->religion }}" readonly>
          <option value="Islam" readonly>Islam</option>
          <option value="Hinduism" readonly>Hinduism</option>
          <option value="Christianity" readonly>Christianity</option>
          <option value="Other" readonly>Other</option>
          </select>
          </div>
        

          <div class="form-group">
          <label for="active_status">Active Status</label>
          <select name="active_status" class="form-control" value = "{{ $students->active_status }}" readonly>
          <option value="Active" readonly>Active</option>
          <option value="Inactive" readonly>Inactive</option>
          </select>
          </div>

          <div class="form-group">
              <label for="year_of_study">Year of Study</label>
              <input type="text" class="form-control" name="year_of_study" value="{{ $students->year_of_study }}" readonly/>
          </div>

          <div class="form-group">
              <label for="id_no">Id No/Passport No</label>
              <input type="text" class="form-control" name="id_no" value="{{ $students->id_no }}" readonly/>
          </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $student->email }}" readonly>
            </div>
            </form>
            <div class="text-center">
            <a href="{{ route('students.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;    
            </div>
    </div>
</div>
@endsection