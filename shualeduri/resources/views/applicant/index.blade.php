<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($applicantsData as $applicant)
    <tr>
        <th scope="row">{{$applicant->id}}</th>
        <td>{{$applicant->name}}</td>
        <td>{{$applicant->surname}}</td>
        <td>
            <a href="{{route('show',['id' => $applicant->id])}}" class="btn btn-primary">Edit</a>
            @if($applicant->is_hired)
            <a href="{{route('isHiredUpdate', ['id' => $applicant->id])}}" class="btn btn-success">Hired</a>
            @else
            <a href="{{route('isHiredUpdate', ['id' => $applicant->id])}}" class="btn btn-warning">Not Hired</a>
            @endif
            <a href="{{route('delete', ['id' => $applicant->id])}}" class="btn btn-danger">Delete</a>
        </td>
        </tr>
    @endforeach
    </tbody>
</table>
