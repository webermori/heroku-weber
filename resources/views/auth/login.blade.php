@extends('layouts/template')

@section('content')
<form method="POST" action="/auth/login">
	{!! csrf_field() !!}
	<p>Email: <input type="email" name="email" value="{{ old('email')}}"></p>
	<p>Senha: <input type="password" name="password" id="password"></p>
	<p>Email: <input type="checkbox" name="remember"> Lembrar Senha</p>
	<p><button type="submit">Login</button></p>
</form>
@endsection