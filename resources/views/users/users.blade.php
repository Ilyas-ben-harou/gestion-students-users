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
    <h1>users :</h1>
    {{-- {{dd($users)}} --}}
    <table class="table w-full text-center">
        <tr>
            <th class="text-primary">ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>actions</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
                <td>
                    <a href={{route('user.detail',$user['id'])}}>detail</a>
                </td>
            </tr>
        @endforeach
    </table>
    <span>
        {{ $users->links() }}
    </span>
    
    <a href="{{route('welcome')}}">back</a>

</body>
</html>