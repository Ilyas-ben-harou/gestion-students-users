<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">MyWebsite</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{route('welcome')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('etudiants.etudiants')}}">List d'étudiants</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('users.users')}}">List users</a></li>
                @guest
                    <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>
                @endguest
                @auth
                    <div class="dropdown float-end">
                        <button class="btn btn-primary dropdown-toggle px-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{Auth::user()->name}}
                        </button>
                        <ul class="dropdown-menu shadow bg-none ">
                            <li><button class="dropdown-item hover:bg-gray-100" href="#">Action</button></li>
                            <li class="">
                                <a class="dropdown-item text-danger hover:bg-gray-100 btn" href="{{ route('logout')}}">log-out</a>
                            </li>
                            
                        </ul>
                    </div>
                @endauth
                
            </ul>
        </div>
    </div>
</nav>