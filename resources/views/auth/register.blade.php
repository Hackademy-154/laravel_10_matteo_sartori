<x-layout>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <h2 class="fs-1 mb-3 text-center">Sign Up</h2>
        <div class="d-flex justify-content-center">
            <i class="bi bi-facebook mx-2 fs-5"></i>
            <i class="bi bi-google mx-2 fs-5"></i>
            <i class="bi bi-twitter mx-2 fs-5"></i>
            <i class="bi bi-twitch mx-2 fs-5"></i>
        </div>
        <div class="d-flex flex-column">
            <label for="name">Name:</label>
            <input type="text" name="name" class="mb-2 p-1" />
        </div>
        <div class="d-flex flex-column">
            <label for="email">Email:</label>
            <input type="email" name="email" class="mb-2 p-1" />
        </div>
        <div class="d-flex flex-column">
            <label for="password">Password</label>
            <input type="password" name="password" class="mb-2 p-1" />
        </div>
        <div class="d-flex flex-column">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" class="mb-2 p-1" />
        </div>
        <div class="d-flex flex-column justify-content-center text-center mt-1">

            <span class="fst-italic">
                Sei già registrato? <a href="{{ route('login') }}" class="fst-italic  cursor-pointer">Login</a>
            </span>
            <button type="submit" class="buttonCustom">Register</button>
        </div>
    </form>
</x-layout>
