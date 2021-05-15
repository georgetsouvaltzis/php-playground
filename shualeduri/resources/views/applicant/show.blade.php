<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


<form method="post" action="{{route('edit', ['id' => $foundApplicant->id])}}">
    @csrf
    @method('POST')
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text"
               class="form-control"
               name="name"
               value="{{$foundApplicant->name}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Surname</label>
        <input type="text"
               class="form-control"
               name="surname"
               value="{{$foundApplicant->surname}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Experience years</label>
        <input type="number"
               class="form-control"
               name="experience_years"
               value="{{$foundApplicant->experience_years}}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
