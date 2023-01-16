@extends('layouts.admin')

@section('content')

@if($project->cover_image)
<img width="140" src="{{asset('storage/' . $project->cover_image)}}" alt="">
@else
<div class="placeholder p-5 bg-secondary d-flex align-items-center justify-content-center" style="width:100px">Placeholder</div>
@endif

<h1>{{$project->title}}</h1>
<h3>{{$project->slug}}</h3>
<div class="content">
    {{$project->body}}
</div>

@endsection