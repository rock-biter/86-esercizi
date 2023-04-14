<header class="main-header">
  <div class="container">
    <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="">
    {{-- <img src="/logo.png" alt=""> --}}
    {{-- <img src="../../img/logo.png" alt=""> questo path relativo non non viene processato in blade--}}
  </div>
  <ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('pastas.index') }}">Paste</a></li>
    <li><a href="{{ route('contacts') }}">Contatti</a></li>
    <li><a href="#">Shop</a></li>
  </ul>
</header>