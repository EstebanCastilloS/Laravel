<x-admin-layout>
    <h1>hola desde edit de Posts</h1>

    <form action="{{ route('admin.posts.update', $post) }}"
            method="POST">

        @csrf

        @method('PUT')

        <x-validation-errors class="mb-4" />

        <div class="mb-4">
            <x-label class="mb-2">
                Título del Artículo
            </x-label>
            <x-input
            name="title"
            value="{{ old('title', $post->title) }}"
            class="w-full"
            placeholder="Ingrese el nombre del artículo"/>
        </div>

        <div class="mb-4">
            <x-label class="mb-2">
                Contenido del Slug
            </x-label>
            <x-input
            name="slug"
            value="{{ old('slug', $post->slug) }}"
            class="w-full"
            placeholder="Ingrese el contenido del Slug"/>
        </div>

        <div class="mb-4">
            <x-label class="mb-2 ">
                Extracto del Artículo
            </x-label>
            <x-textarea name="excerpt" class="w-full" placeholder="Ingrese el extracto del artículo">
                {{ old('excerpt', $post->excerpt) }}
            </x-textarea>
        </div>


        <div class="mb-4">
            <x-label class="mb-2 ">
                Contenido del Artículo
            </x-label>
            <x-textarea name="body" class="w-full" placeholder="Ingrese el contenido del artículo"
                        row="12">
                {{ old('body', $post->body) }}
            </x-textarea>
        </div>

        <div class="mb-4">
            <x-label class="mb-2 ">

            </x-label>
            <x-select name="published" class="w-full">

                {{-- <option value="0">{{ $post->published }}</option> --}}
                @if($post->published == 0)
                    <option value="0">No Publicado</option>
                    <option value="1">Publicado</option>
                @else
                    <option value="1">Publicado</option>
                    <option value="0">No Publicado</option>
                @endif

            </x-select>
        </div>

        {{-- <div class="mb-4">
            <x-label class="mb-2 ">
                Estado del Artículo
            </x-label>
            <x-select name="published" class="w-full">
                @foreach ($post as $postPublished)
                    <option @selected(old('published', $postPublished->published) == $posts->id)
                        value="{{ $posts->id }}">
                        {{ $posts->published }}
                    </option>
                @endforeach
            </x-select>
        </div> --}}

        <div class="mb-4">
            <x-label class="mb-2 ">
                Categorías
            </x-label>
            <x-select name="category_id" class="w-full">
                @foreach ($categories as $category)
                    <option @selected(old('category_id', $post->category_id) == $category->id)
                        value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </x-select>
        </div>

        <div class="mb-4">
            <x-label class="mb-2 ">
                Usuarios
            </x-label>
            <x-select name="user_id" class="w-full" >
                @foreach ($users as $user)
                    <option @selected(old('user_id', $post->user_id) == $user->id)
                        value="{{ $user->id }}">
                        {{ $user->name }}
                    </option>
                @endforeach
            </x-select>
        </div>

        <div class="flex justify-end">

            <x-danger-button class="mr-2" onclick="deletePost()">
                Eliminar Artículo
            </x-danger-button>
            <x-button class="ml-4">
                Actualizar Artículo
            </x-button>
        </div>
    </form>

    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" id="formDelete">
        @csrf
        @method('DELETE')
    </form>

    @push('js')
        <script>
            function deletePost(){
                let form = document.getElementById('formDelete');
                form.submit();
            }
        </script>
    @endpush
</x-admin-layout>
