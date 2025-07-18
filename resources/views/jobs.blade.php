<x-layout>
     <x-slot:heading>
        <h2 class="text-2xl font-bold">Job Listings</h2>
    </x-slot:heading>

    <div class="space-y-5">
        @foreach ($jobs as $job )
            <a class="block p-5 border-gray-100 rounded-2xl border-2 text-black" href="job/{{ $job['id'] }}">
                <div class="font-bold text-green-400">
                    <strong>{{ $job->employer->name }}</strong>
                </div>

                <div>
                    <strong>{{ $job['title'] }}</strong>: Pay {{ $job['salary'] }} Per month
                </div>
            </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>

</x-layout>
