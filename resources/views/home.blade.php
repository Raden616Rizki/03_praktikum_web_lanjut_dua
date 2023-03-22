@extends('layouts.app')
@section('title', 'Dashboard')
@section('sub-title', 'Dashboard')
@section('alert')
    <script>
        window.alert('Selamat Datang');
    </script>
@endsection

@section('nav-logout')
<li class="nav-item d-none d-sm-inline-block">
    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-from').submit();">
        {{ __('logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}"method="POST" class="d-none">
      @csrf
    </form>
  </li>
@endsection

@section('content')
<div class="card-body">
    @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>

        @endif
        {{ __('You are logged in!') }}

        <table class="table table-responsive">
            <tr><th>Username</th><th>:</th><td>{{ $user->username }}</td></tr>
            <tr><th>Name</th><th>:</th><td>{{ $user->name }}</td>    </tr>
            <tr><th>Email</th><th>:</th><td>{{ $user->email }}</td></tr>
        </table>
</div>
@endsection
