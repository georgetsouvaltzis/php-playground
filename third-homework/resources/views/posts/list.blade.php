<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
</html>

<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Author Name</th>
        <th scope="col">Title</th>
        <th scope="col">Post</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($paginatedPosts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->author_name}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->post_text}}</td>
            <td><a href="{{route('showpost', ['id' => $post->id])}}" class="btn btn-primary">Edit</a> <br/>
                <a href="{{route('deletepost', ['id' => $post->id])}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
