@extends('layout.main')
@section('content')

<div class="row">
<form class="form-horizontal" action="{{route('blog.store')}}" method="post" accept-charset="utf-8">
			{!!$errors->has("title") ? '<div class="form-group has-error">' : '<div class="form-group">'!!}
				<label class="control-label" for"title">Titel</label>
				<input type="text" class="form-control" {{$errors->has("title") ? 'id="inputError"' : 'id="title"' }} 
					name="title" placeholder="Nachrichtentitel" value="{{Input::old('title')}}"/> 
					{!!$errors->has("title") ? '<label class="control-label" for="inputError">'. $errors->first("title").'</label>' : '' !!}
			</div>

			{!!$errors->has("content") ? '<div class="form-group has-error">' : '<div class="form-group">'!!}
			<label class="control-label" for"content">Nachricht</label>
			<textarea name="content" class="form-control countable" rows="4" placeholder="Geben Sie Ihre Nachricht ein..." {{$errors->has("content") ? 'id="inputError"' : 'id="content"' }}>{{Input::old('content')}}</textarea>
					{!!$errors->has("content") ? '<label class="control-label" for="inputError">'. $errors->first("content").'</label>' : '' !!}
			</div>
			
			<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
			
			<button type="submit" class="btn btn-default">Submit</button>
</form>


<div>
@stop