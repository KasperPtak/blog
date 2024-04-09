<!DOCTYPE html>
<html>

<head>
    @vite('resources/css/app.css')
    <title>Posts</title>
</head>

<body>
    <ul class="m-4">
        @foreach($posts as $post)
        <li class="bg-gray-100 rounded-lg shadow-md p-4 mb-4">
            <h2 class="text-xl font-semibold mb-2">{{ $post->title }}</h2>
            <p class="text-gray-700 mb-2">{{ $post->content }}</p>
            <p class="text-gray-500">Posted on: {{ $post->created_at }}</p>
            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="mt-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>

    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">Create a New Post</h2>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
                <input type="text" id="title" name="title" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('title') border-red-500 @enderror">
                @error('title')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-bold mb-2">Content:</label>
                <textarea id="content" name="content" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('content') border-red-500 @enderror"></textarea>
                @error('content')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Create Post</button>
        </form>
    </div>

</body>

</html>