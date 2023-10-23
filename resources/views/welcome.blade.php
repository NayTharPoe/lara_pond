<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <form action="/" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">User Name</label>
            <input type="text" name="name" id="name">

            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <br>
        <div>
            <label for="image">Profile</label>
            <input type="file" name="image" id="image">

            @error('image')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <br>
        <button type="submit">submit</button>
    </form>
</body>

</html>