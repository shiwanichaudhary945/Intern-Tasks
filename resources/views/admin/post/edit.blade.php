@extends("layouts.app")

@section("content")
<div class= "container">
    @if(Session::has("success"))
    <div class="alert alert-success">
        {{Session::get("success")}}
    </div>
    @endif

<form method="post" action="{{ route("admin.post.update")}}">
    @csrf
    <input type="hidden" name="post_id" value="{{$posts->id}}" id="">
  <div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="title" value="{{$posts->title}}">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputText" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="description">{{$posts->description}}</textarea>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
