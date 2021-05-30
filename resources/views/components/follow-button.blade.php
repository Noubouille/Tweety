@if(current_user()->isNot($user))
    <form method="POST" action="/profiles/{{ $user->username }}/follow">
        @csrf
        <button type="submit" class="bg-blue-500 rounded-full shadow px-4 py-2 text-white text-xs">
            {{ current_user()->isFollowing($user) ? "Unfollow" : 'Follow'}}
        </button>
    </form>
@endif
