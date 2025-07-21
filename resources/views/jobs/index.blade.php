<x-layout>
     <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="space-y-5">
        @foreach ($jobs as $job )
            <a class="block p-5 border-gray-100 rounded-2xl border-2 text-black" href="job/{{ $job['id'] }}">
                <div>
                    <p class="font-bold">{{ $job->employer->name }}</p>
                </div>

                <div>
                    <span class="text-green-400 font-bold">{{ $job['title'] }}</span>: Pay {{ $job['salary'] }} Per month
                </div>
            </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>

</x-layout>
