<div class="border border-gray-300 rounded-lg lg:mx-10 lg:mb-10">
    @forelse($tweets as $tweet)
        @include('_tweet')
    @empty
        <p class="p-4">No tweet yet. Create a new one!</p>
    @endforelse
</div>
