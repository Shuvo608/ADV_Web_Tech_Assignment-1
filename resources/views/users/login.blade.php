@extends('layouts.logoutlay')
@section('content')
<br>
<br>
<br>
<form action ="{{route('users.login.submit')}}" method="post" allign="justified">
{{@csrf_field()}}

Email: <input type = "text" value = "{{old('email')}}" name ="email"></br>
@error('email')
        <span class="text-danger">{{$message}}</span><br>
@enderror
Password: <input type="password" name="password"></br>

@error('password')
        <span class="text-danger">{{$message}}</span><br>
@enderror

</br>
<input type="submit" value="Login">
</form>
@endsection