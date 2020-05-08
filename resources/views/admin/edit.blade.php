@extends('layouts.admin')
@section('content')
    @include('partials.errors')
    <div class="row">
      <div class="col-md-12">
        <form action="{{route('admin.update')}}" method="post">
          <div class="form-group">
            <label for="InputTitle">Title</label>
            <input type="text" class="form-control" id="InputTitle" name="title" value={{$post['title']}}>
          </div>
          <div class="form-group">
            <label for="InputContent">Content</label>
            <input type="text" class="form-control" id="InputContent" name="content" value={{$post['content']}}>
          </div>
          <input type="hidden" name="id" value="{{ $postId }}">
          @csrf
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
@endsection