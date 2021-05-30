<div class="lg:flex-1 mx-10">
    <div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
        <form method="POST" action="/tweets">
            @csrf
                    <textarea
                        name="body"
                        class="w-full resize-none"
                        placeholder="What's up doc?"
                        required
                        autofocus
                    ></textarea>
            <hr class="my-4">
            <footer class="flex justify-between">
                <img class="rounded-full mr-2" width="50" height="50" src="{{ current_user()->avatar }}" alt="">
                <button class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow px-4 text-sm text-white" type="submit">Tweet-a-roo!</button>
            </footer>
        </form>

        @error('body')
            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
        @enderror
    </div>
</div>
