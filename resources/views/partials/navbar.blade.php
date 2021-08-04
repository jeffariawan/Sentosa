<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('article.index') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1">
                        @php
                            use App\Models\User;
                            //userSession
                            $userIdSession = session('userId');
                            $userSession = User::where('user_id', '=', $userIdSession)->first();
                            $usernameSession = '';
                            if ($userSession == null) {
                                $usernameSession = 'belum login';
                            } else {
                                $usernameSession =$userSession->username;
                            }
                            echo $usernameSession;
                        @endphp
                    </a>
                </li>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </ul>
        </div>
    </div>
</nav>
