<x-layout>
     <x-slot:heading>
        <h2 class="text-2xl font-bold">Posts</h2>
    </x-slot:heading>

    <ul>
        @foreach ($posts as $post )
            <li>
                <a class="hover:text-blue-600" href="post/{{ $post['id'] }}">
                    <strong>{{ $post['title'] }}</strong>
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>
