<x-master>
<div class="container mx-auto flex justify-center">
    <div class="py-12 px-8  bg-gradient-to-br from-blue-100 to-gray-300 border border-gray-300 rounded-lg">
        <div class="col-md-8">
            <div class="card">
                <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-6">

                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="username">

                                Username

                            </label>

                            <input class="border border-gray-400 p-2 w-full"

                                   type="text"

                                   name="username"

                                   id="username"

                                   autocomplete="username"

                                   value="{{ old('username') }}"

                                   required
                            >

                            @error('username')

                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror

                        </div>

                        <div class="mb-6">

                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="name">

                                Name

                            </label>

                            <input class="border border-gray-400 p-2 w-full"

                                   type="text"

                                   name="name"

                                   id="name"

                                   autocomplete="name"

                                   value="{{ old('name') }}"

                                   required
                            >

                            @error('name')

                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror

                        </div>

                        <div class="mb-6">

                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="username">

                                Email Address

                            </label>

                            <input class="border border-gray-400 p-2 w-full"

                                   type="email"

                                   name="email"

                                   id="email"

                                   autocomplete="email"

                                   value="{{ old('email') }}"

                                   required
                            >

                            @error('email')

                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror

                        </div>

                        <div class="mb-6">

                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="username">

                                Password

                            </label>

                            <input class="border border-gray-400 p-2 w-full"

                                   type="password"

                                   name="password"

                                   id="password"

                                   required
                            >

                            @error('password')

                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror

                        </div>

                        <div class="mb-6">

                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                   for="password-confirm">

                                Confirm Password

                            </label>

                            <input class="border border-gray-400 p-2 w-full"

                                   type="password"

                                   name="password_confirmation"

                                   id="password-confirm"

                                   required
                            >

                            @error('password')

                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror

                        </div>

                        <button type="submit"
                                class="mb-2 bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">

                            Create an account

                        </button>
                        <br>
                        <a href="{{ route('login') }}" class="text-xs text-gray-700 hover:underline">Already have an account ?</a>
                    </form>
            </div>
        </div>
    </div>
</div>
</x-master>
