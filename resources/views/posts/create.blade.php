<h1>Create New Posts</h1>

<form method="post" action="{{ route('post.insert') }}">
    {{-- to decription information --}}
    @csrf
    <input type="text" name="title" placeholder="Enter title"><br><br>
    <input type="text" name="body" placeholder="Enter body"><br><br>
    <button type="submit" name="">Submit</button>
</form>
