<h1>Eidt New Posts</h1>

<form method="post" action="{{ route('post.update',$post->id) }}">
    {{-- to decription information --}}
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $post->title }}" /><br><br>
    <input type="text" name="body" value="{{ $post->body }}"><br><br>
    <button type="submit" name="">Edit</button>
</form>
