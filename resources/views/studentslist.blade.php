<div class="card mb-3">
  <img class="p-3" src="https://giveme-5.org/wp-content/uploads/2019/11/modern-education-system.jpg" alt="">
  <div class="card-body">
    <h5 class="card-title">List of students</h5>
    <p class="card-text">You can find all information about the students in the system</p>
  
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">CNE</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Age</th>
          <th scope="col">Speciality</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody>
      @foreach($students as $student)
        <tr>
          <td>{{ $student->cne }}</td>
          <td>{{ $student->firstName }}</td>
          <td>{{ $student->lastName }}</td>
          <td>{{ $student->age }}</td>
          <td>{{ $student->speciality }}</td>
          <td>
            <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <a href="{{ url('/destroy/'.$student->id) }}" class="btn btn-sm btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </div>
</div>
  
  