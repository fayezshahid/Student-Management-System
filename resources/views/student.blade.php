<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Student Management System</title>
</head>
<body>
  @include('navbar')  
  <div class="row header-container justify-content-center">
    <div class="header">
      <h1>Students Management System</h1>
    </div>
  </div>

  @if($layout == 'index')
    <div class="container-fluid mt-4">
      <div class="container-fluid mt-4">
        <div class="row justify-content-center">
          <section class="col-md-7">
            @include('studentslist')
          </section>
        </div>
      </div>
    </div>
  @elseif($layout == 'create')
    <div class="container-fluid mt-4">
      <div class="row">
        <section class="col-md-7">
          @include('studentslist')
        </section>
        <section class="col-md-5">

        <div class="card mb-3">
          <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

            <form action="{{ url('/store') }}" method="post">
              @csrf 
              <div class="form-group">
                <label>CNE</label>
                <input name="cne" type="text" class="form-control" placeholder="Enter CNE">
              </div>
              <div class="form-group">
                <label>First Name</label>
                <input name="firstName" type="text" class="form-control" placeholder="Enter First Name">
              </div>
              <div class="form-group">
                <label>Last Name</label>
                <input name="lastName" type="text" class="form-control" placeholder="Enter Last Name">
              </div>
              <div class="form-group">
                <label>Age</label>
                <input name="age" type="string" class="form-control" placeholder="Enter Age">
              </div>
              <div class="form-group">
                <label>Speciality</label>
                <input name="speciality" type="text" class="form-control" placeholder="Enter Speciality">
              </div>
              <input type="submit" class="btn btn-info" value="Save">
              <input type="reset" class="btn btn-warning" value="Reset">
            </form>

          </div>
        </div>
          
        </section>
      </div>
    </div>
  @elseif($layout == 'show')
  <div class="container-fluid mt-4">
    <div class="row">
      <section class="col-md-7">
        @include('studentslist')
      </section>
      <section class="col-md-5"></section>
    </div>
    </div>
  @elseif($layout == 'edit')
  <div class="container-fluid mt-4">
    <div class="row">
      <section class="col-md-7">
        @include('studentslist')
      </section>
      <section class="col-md-5">

      <div class="card mb-3">
        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>

          <form action="{{ url('/update/'.$student->id) }}" method="post">
              @csrf 
              <div class="form-group">
                <label>CNE</label>
                <input value="{{ $student->cne }}" name="cne" type="text" class="form-control" placeholder="Enter CNE">
              </div>
              <div class="form-group">
                <label>First Name</label>
                <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control" placeholder="Enter First Name">
              </div>
              <div class="form-group">
                <label>Last Name</label>
                <input value="{{ $student->lastName }}" name="lastName" type="text" class="form-control" placeholder="Enter Last Name">
              </div>
              <div class="form-group">
                <label>Age</label>
                <input value="{{ $student->age }}" name="age" type="string" class="form-control" placeholder="Enter Age">
              </div>
              <div class="form-group">
                <label>Speciality</label>
                <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control" placeholder="Enter Speciality">
              </div>
              <input type="submit" class="btn btn-info" value="Update">
              <input type="reset" class="btn btn-warning" value="Reset">
          </form>

        </div>
      </div>
        
      </section>
    </div>
    </div>
  @endif

<footer></footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>