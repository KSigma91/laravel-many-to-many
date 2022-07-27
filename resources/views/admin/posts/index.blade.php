@extends('admin.layouts.base')

@section('mainContent')
    <h2>
        Posts
    </h2>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Slug</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->title }}</td>
                    <td class="btn btn-primary">
                        <a href="{{ route('admin.posts.show', ['post' => $post]) }}">View</a>
                    </td>
                    <td class="btn btn-success">
                        <a href="{{ route('admin.posts.edit', ['post' => $post]) }}">Edit</a>
                    </td>
                    <td>
                        <button class="btn btn-danger">
                            Remove
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
@endsection
