<div class="bg-gray-200 border border-gray-300 rounded-lg py-4 px-6">
<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
        @forelse(auth()->user()->follows as $user)
    <li class="{{ $loop->last ? '' : "mb-4" }}">
        <div>
            <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                <img class="rounded-full mr-2" width="40" height="40" src="{{ $user->avatar }}" alt="">
                {{ $user->name }}
            </a>
        </div>
    </li>
    @empty
            <li>No friends yet. Follow some friends to display them here.</li>
    @endforelse
</ul>
</div>
