@include('partials.header')
<header class="w-screen mx-auto">
    <a href="#">
        <h1 class="text-4xl p-2 text-white text-center">Student Admin Register</h1>
    </a>
</header>
<main class="bg-white rounded-lg max-w-lg mx-auto shadow-2xl p-4">
    <section>
        <h3 class="font-bold text-2xl">Welcome to Student System</h3>
        <p class="text-gray-500 pt-2"> Sign in to your account <a href="/login" class="text-teal-400">here</a> </p>

    </section>
    <section class="mt-10">
        <form action="/store" method="POST" class="flex flex-col">
            @csrf
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="name" class="block text-gray-700 text-sm  font-bold mb-2 ml-3">
                    Name
                </label>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-500 px-5">
                @error('name')
                    <p class="text-red-500 text-xs mt-2 p-1">
                        {{ $message }}
                    </p>
                @enderror

            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="email" class="block text-gray-700 text-sm  font-bold mb-2 ml-3">
                    Email
                </label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-500 px-5">
                @error('email')
                    <p class="text-red-500 text-xs mt-2 p-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="password" class="block text-gray-700 text-sm  font-bold mb-2 ml-3">
                    Password
                </label>
                <input type="password" name="password"
                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-500 px-5">
                @error('password')
                    <p class="text-red-500 text-xs mt-2 p-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="password_confirmation" class="block text-gray-700 text-sm  font-bold mb-2 ml-3">
                    Confirm Password
                </label>
                <input type="password" name="password_confirmation"
                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-500 px-5">
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-2 p-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <button type="submit"
                class="bg-purple-500 hover:bg-purple-600 text-white font-bold rounded py-2 hover:shadow-lg transition 
                duration-300 ">Sign
                Up</button>

        </form>
    </section>
</main>

@include('partials.footer')
