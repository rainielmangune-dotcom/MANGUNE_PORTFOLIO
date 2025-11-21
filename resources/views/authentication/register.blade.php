@include('componets.header')
{!! Form::open(['route'=>'register','method'=>'post']) !!}
<p>Name</p>
{!! Form::text('name')!!}
<p>Email</p>
{!! Form::text('email')!!}
<p>password</p>
{!! Form::text('password')!!}
<p>password_confirmation</p>
{!! Form::text('password_confirmation')!!}

@include('components.footer')