 <nav class="navbar navbar-expand-lg navbar-light ">
     <div class="container-fluid">
         <a class="navbar-brand" href="#">
             <img src="{{ URL::asset('assets/img/home1.png') }}" width="90" height="50"
                 class="d-inline-block align-top" alt="">
             Sentosa
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
             aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" href="{{ route('home') }}">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse " id="navbarNav">
             <ul class="navbar-nav ">
                 <li class="nav-item nav-resp-li">
                     <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                 </li>
                 @if (session('userId') != null)
                 <li class="nav-item nav-resp-li">
                     <a class="nav-link" href="{{ route('dashboard.index') }}">Dashboard</a>
                 </li>
                 @endif
                 <li class="nav-item nav-resp-li">
                     <a class="nav-link" href="{{ route('article.index') }}">Blog</a>
                 </li>
             </ul>

             <ul class="navbar-nav ml-auto">
                 <?php
                 use App\Models\User;
                 //userSession
                 $userIdSession = session('userId');
                 $userSession = User::where('user_id', '=', $userIdSession)->first();
                 $usernameSession = '';
                 if ($userSession == null) {
                 ?>
                 <li class="nav-item">
                     <a class="" href="{{ route('user.login') }}">Login</a>
                 </li>
                 <li>
                     <a href="{{ route('user.registrasi') }}">Registrasi</a>
                 </li>
                 <?php
                 }
                 else 
                 {
                     $usernameSession = $userSession->username;
                    ?>
                 <li>
                     <a href="{{ route('user.logout') }}">Sign out</a>
                 </li>
                 <?php }  ?>



             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>
             </li>
         </div>
     </div>
 </nav>
