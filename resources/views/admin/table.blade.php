@extends("layouts.app")

@section("content")

<div class="container">
    <form method="post" action="{{ route("admin.post.index") }}">
        @csrf

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                @php
                    $i = 0;
                @endphp

                @foreach ($posts as $post)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>

                <td>
                    <a href="{{  route('admin.post.edit', $post->id) }}" class="btn btn-primary">edit</a>
                    <a href="{{  route('admin.post.delete', $post->id)  }}" class="btn btn-danger">delete</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </form>
</div>

@endsection
