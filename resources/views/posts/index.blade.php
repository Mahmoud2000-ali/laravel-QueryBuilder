<h1>All Posts From Database</h1>
<html>
    <head>
        <title>All Posts</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    </head>
    <body>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">body</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
              <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>

                    <a class="btn btn-primary" href="{{ route('post.edit',$post->id) }}" role="button">Eidt</a>
                    <a class="btn btn-danger" href="{{ route('post.delete',$post->id) }}" role="button">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <a class="btn btn-danger" href="{{ route('post.delete.all') }}" role="button">Delete All</a><br><br>
          <a class="btn btn-danger" href="{{ route('post.delete.all.truncate') }}" role="button">Delete All TrunCate</a>
    </body>
</html>
