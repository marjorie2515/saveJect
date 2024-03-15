<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
</div>
<h1>Sign up</h1>
<form action="/signup" method="post">
@csrf
    <label for="">Name</label>
    <input type="name" name="name">
    @error('name')
    <span>{{$message}} </span>
    @enderror


    <label for="">Email</label>
    <input type="email" name="email">

    <label for="">Password</label>
    <input type="password" name="password">

    <label for="">Birthday</label>
    <input type="date" name="birthday">

    <button type="submit">create account</button>

</form>
