@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">编辑 Article</div>

        <div class="panel-body">

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ URL('admin/article/'.$article->id) }}" method="POST">
            <input name="_method" type="hidden" value="PUT">
            {!! csrf_field() !!}
            <input type="text" name="title" class="form-control" required="required" value="{{ $article->title }}">
            <br>
            <textarea name="body" rows="10" class="form-control" required="required">{{ $article->body }}</textarea>
            <br>
            <button class="btn btn-lg btn-info">编辑 Article</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection