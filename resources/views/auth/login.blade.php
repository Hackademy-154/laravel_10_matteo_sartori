<x-layout>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <h2 class="fs-1 mb-2 text-center">Sign In</h2>
        <div class="d-flex justify-content-center mb-2">
            <i class="bi bi-facebook mx-2 fs-5"></i>
            <i class="bi bi-google mx-2 fs-5"></i>
            <i class="bi bi-twitter mx-2 fs-5"></i>
            <i class="bi bi-twitch mx-2 fs-5"></i>
        </div>
        <div class="d-flex flex-column">
            <label for="email ">Email:</label>
            <input type="email" name="email" class="my-1  p-1" />
        </div>
        <div class="d-flex flex-column">
            <label for="password ">Password</label>
            <input type="password" name="password" class="my-1 p-1" />
        </div>
        <div class="d-flex flex-column justify-content-center text-center mt-1">
            <a href="" class="fst-italic  cursor-pointer">Password dimenticata?</a>
            <span class="fst-italic">
                Non hai un account? <a href="{{ route('register') }}" class="fst-italic  cursor-pointer">Registrati</a>
            </span>

            <button type="submit" class="buttonCustom">Login</button>
        </div>
    </form>
</x-layout>
