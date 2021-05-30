<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <a href="{{ route('profile', $tweet->user->username) }}">
        <div class="mr-4 flex-shrink-0">
        <img class="rounded-full mr-2" width="50" height="50" src="{{ $tweet->user->avatar }}" alt="">
    </div>
    </a>
    <div>
        <a href="{{ route('profile', $tweet->user->username) }}">
            <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
        </a>
        <p class="text-sm mb-4">{{ $tweet->body }}</p>

        <x-likes-button :tweet="$tweet"/>

    </div>
</div>
