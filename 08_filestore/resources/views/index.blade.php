<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('create') }}">Create</a>

    @forelse ($infos as $info)
        <li>
            {{ $info->name }}  {{ $info->file_uri }}
        </li>
    @empty
        <h3>No data</h3>
    @endforelse
</body>
</html>
