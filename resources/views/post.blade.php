<x-layout>
    <x-slot:heading>
        <h2 class="text-2xl font-bold">{{ $post['title'] }}</h2>
    </x-slot:heading>

    <div class="w-2xl p-5 pt-64  bg-purple-500 text-green-500 bg-fixed bg-[url(https://images.unsplash.com/photo-1554629947-334ff61d85dc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&h=800&q=80)]">
        <h2 class="text-6xl font-bold">{{ $post['title'] }}</h2>
        <p class="text-xl font-bold mt-6">{{ $post['body'] }}</p>
    </div>
</x-layout>
