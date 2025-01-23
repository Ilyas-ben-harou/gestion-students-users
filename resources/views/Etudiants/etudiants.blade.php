<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" >
    <title>Document</title>
</head>
<body>
    <h1>Etudiants:</h1>
    <div class="row">
        @if (session()->has('succes'))
            <div class="alert alert-success" role="alert">
                {{ session('succes') }}
            </div>
        @endif
    </div>
    <table class="table w-full text-center">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>phone</th>
            <th>filiere</th>
            <th>Action</th>
        </tr>
        @foreach ($etudiants as $etudiant)
            <tr>
                <td>{{$etudiant['id']}}</td>
                <td>{{$etudiant['name']}}</td>
                <td>{{$etudiant['email']}}</td>
                <td>{{$etudiant['phone']}}</td>
                <td>{{$etudiant['filiere']}}</td>
                <td class="row">
                    <a class="btn btn-success col-auto mx-1" href={{route('etudiants.detail',$etudiant['id'])}}>detail</a>
                    <a class="btn btn-primary col-auto mx-1" href={{route('etudiants.edit',$etudiant['id'])}}>update</a>
                    <a class="btn btn-danger col-auto mx-1" href="{{ route('etudiants.delete', $etudiant->id) }}" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $etudiants->links() }}
    <div class="text-center">
        <a class="btn btn-primary"  aria-disabled="false" href="{{ route('etudiants.create')}}">Create student</a>
    </div>
    <a href="{{route('welcome')}}">back</a>
</body>
</html>