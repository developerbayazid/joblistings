<x-layout>
    <x-slot:heading>
        {{ $job->title }}
    </x-slot:heading>

    <div class="w-1/5 p-5 border-2 rounded-2xl border-green-400 text-center">
        <h4 class="text-xl font-bold">{{ $job->title }}</h4>
        <h4 class="text-4xl font-bold">{{ $job->salary }}</h4>
        @can('edit', $job)
            <div class="mt-8">
                <x-button href="{{ $job->id }}/edit">Edit Job</x-button>
            </div>
        @endcan
    </div>
</x-layout>
