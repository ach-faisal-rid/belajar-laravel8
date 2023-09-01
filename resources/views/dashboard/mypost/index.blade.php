@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">my posts</h1>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">no</th>
          <th scope="col">title</th>
          <th scope="col">category</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($posts as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->id }}" class="badge bg-info">
                <span data-feather="eye"></span>
            </a>
            <a href="" class="badge bg-warning">
                <span data-feather="edit"></span>
            </a>
            <a href="" class="badge bg-danger">
                <span data-feather="alert-triangle"></span>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
