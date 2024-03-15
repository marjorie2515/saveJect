<X-layout>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <h1 class="text-3x1">Sign up</h1>
    <form action="Login" method="POST">
    @csrf


        <div>
            <x-input rex="email" titulo="Email" tipo="text"/>
        </div>

        <div>
            <x-input rex="password" titulo="Password :)" tipo="password"/>
        </div>
            <button type="submit">Log In</button>
    </form>
</X-layout>
