<x-admin-layout>
    <h1>hola desde index de Posts</h1>

    <ul class="space-y-8">

        @foreach ($posts as $post)
            <li class="grid grid-cols-2 gap-4">
                <div class="div">
                    <img class="aspect-[16/9] object-cover object-center" src="{{ ($post->image_path) }}"
                        alt="">
                </div>
                <div class="div">
                    <h1 class="text-xl font-semibold">{{ $post->title }}</h1>
                    <hr class="mt-1 mb-2">
                    <span @class([
                        'bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300' => $post->published,
                        'bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300' => !$post->published,
                    ])
                    >{{ $post->published ? 'Publicado' : 'No Publicado' }}</span>
                    <p class="text-gray-700 mt-2">
                        {{ $post->excerpt }}
                    </p>

                    <div class="flex justify-end mt-4">
                        <a  href="{{ route('admin.posts.edit', $post) }}" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Editar</a >
                    </div>
                </div>

            </li>
        @endforeach
    </ul>

    <div class="mt-4">
        {{ $posts->links() }}
    </div>
</x-admin-layout>
