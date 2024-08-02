
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>{{ $project->id }}</h1>
            <h2>{{ $project->title }}</h2>
            <h3>{{ $project->author }}</h3>
            <div class="image d-flex justify-content-center">
                <img src="{{ $project->image }}" alt="{{ $project->title }}" class="img-fluid">
            </div>
            <h4>{{ $project->date }}</h4>
            <p>
                {{ $project->content }}
            </p>
        </div>
    </div>
</div>
@endsection
