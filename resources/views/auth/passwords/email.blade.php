<x-master>
<div class="container mx-auto flex justify-center">
    <div class="py-12 px-8 bg-gradient-to-br from-blue-100 to-gray-300 border border-gray-300 rounded-lg">

                <h1 class="text-xl font-bold text-gray-700 mb-2">Reset your password</h1>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

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

                                   autofocus

                                   required
                            >

                            @error('email')

                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror

                        </div>

                        <button type="submit"
                                class="mb-2 bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">

                            Send password reset link

                        </button>
                    </form>
    </div>
</div>
</x-master>
