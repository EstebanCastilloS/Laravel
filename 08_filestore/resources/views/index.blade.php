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
            <img src="{{ asset('storage/uploads/'.$info->file_uri) }}" alt="{{ $info->name }}" width="100px" />
        </li>
    @empty
        <h3>No data</h3>
    @endforelse
</body>
</html>
