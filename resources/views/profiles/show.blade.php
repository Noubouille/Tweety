<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img
            src="{{ $user->banner }}"
            alt=""
            class="mb-2 rounded-md"
            />

            <img
                src="{{ $user->avatar }}"
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left: 50%;"
                width="150"
            >
        </div>

    <div class="flex justify-between items-center mb-6">
        <div style="max-width: 270px">
            <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
            <h3 class="text-sm mb-2"> {{'@' . $user->username }}</h3>
            <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
        </div>

        <div class="flex">
            @can('edit', $user)
            <a href="{{ $user->path('edit') }}" class="rounded-full border border-gray-300 px-4 py-2 text-black text-xs mr-2">Edit Profile</a>
            @endcan
            @auth
            <x-follow-button :user="$user"></x-follow-button>
                @endauth
        </div>
    </div>

    <p class="text-sm">
        {{ $user->description }}
    </p>

    </header>

    @include('_timeline', [
        "tweets" => $tweets
    ])

    <div class="my-4">
        {{ $tweets->links() }}
    </div>
</x-app>
