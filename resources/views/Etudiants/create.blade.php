<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body style="background-color: rgb(188, 184, 184)" class="p-4">
    <div class="container w-50 m-auto border p-4 bg-white">
        <h1 class="">Ajouter student</h1>
        <form class="row g-3 " action="{{ route('etudiants.store')}}" method="post">
            @csrf
            <div class="col-md-12">
                <label for="name" class="form-label">Name :</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="your name" >
            </div>
            <div class="col-md-12">
                <label for="email" class="form-label">Email :</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="exemple@gmail.com" >
            </div>
            <div class="col-md-12">
                <label for="phone" class="form-label">Phone :</label>
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="(+212 6 11 11 11 11 )" >
            </div>
            <div class="col-md-12">
                <label for="address" class="form-label">Address :</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="8030 Angus Cliff South Destiny, AK 00437" >
            </div>
            <div class="col-md-12">
                <label for="filiere" class="form-label">Filiere :</label>
                <input type="text" class="form-control" name="filiere" id="filiere" placeholder="your filiere" >
            </div>
            
            <div class="col-12 d-grid">
                <button class="btn btn-primary" type="submit">Ajouter</button>
            </div>
        </form>
    </div>
</body>

</html>
