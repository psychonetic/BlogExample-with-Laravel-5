@extends('layout.main')
@section('content')

@foreach($entries as  $entry)
<div class="row">
  <div class="col-lg-8">
    <div class="row">
      <div class="col-lg-12">
        <h3>{{$entry->title}}</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">      
       <p>
          {{$entry->content}}
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <span class="glyphicon glyphicon-user"></span> von StaticUser
        | <span class="glyphicon glyphicon-calendar"></span> {{$entry->present()->createdAt}}
      </div>
    </div>
  </div>
</div>
@endforeach
@stop