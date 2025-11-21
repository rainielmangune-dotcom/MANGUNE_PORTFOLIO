@include('componets.header')
    @if ($errors->any())
    <div style="color: red" >
        @foreach ($errors->all() as $error)
            <p>{{ $erorrs}} </p>
            
        @endforeach
    </div>

    @endif
    <form action = " {{route('register') }}"   method="POST"> 
     @csrf   
<p>Name</p>
        <input type="text" name="name">
<p>Email</p>
    <input type="email" name="email">
<p>password</p>
    <input type="password" name="password">
<p>Confirm password</p> 
    <input type="password" name="password_confirmation">
    <input type="submit">

    </form>
@include('components.footer')
