<x-layout>
    <x-slot:heading>
        <h2 class="text-2xl font-bold">{{ $job['title'] }}</h2>
    </x-slot:heading>

    <div class="w-1/5 p-5 border-2 rounded-2xl border-green-400 text-center">
        <h4 class="text-xl font-bold">{{ $job['title'] }}</h4>
        <h4 class="text-4xl font-bold">{{ $job['salary'] }}</h4>
    </div>
</x-layout>
