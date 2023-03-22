@extends('layouts.app')
@section('title', 'Dashboard')
@section('sub-title', 'Dashboard')
@section('alert')
<script>
    window.alert('Selamat Datang');

</script>
@endsection

@section('content')
<div class="card-body" style="display: flex">
    @if(session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>

    @endif
    <div>
        {{ __('You are logged in!') }}

        <table class="table table-responsive" style="margin: 16px">
            <tr>
                <th>Username</th>
                <th>:</th>
                <td>{{ $user->username }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <th>:</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <th>:</th>
                <td>{{ $user->email }}</td>
            </tr>
        </table>
    </div>
    <div>
        <img src="https://img.freepik.com/premium-vector/concept-new-team-member_132971-313.jpg?w=1060"
            style="width: 640px; border-radius: 32px;">
    </div>
</div>
@endsection
