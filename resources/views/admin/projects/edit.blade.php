@extends('layouts.admin')
@section('content')
    <div class="container mt-2">
        <form method="POST" action="{{ route('admin.projects.update', ['project' => $project->id]) }}">
            <!--csrf per evitare errore 419 per autenticazione-->
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('project', $project->title)}}">
                
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{old('project', $project->description)}}">
            </div>

            <button type="submit" class="btn btn-warning">Modifica</button>
        </form>
    </div>
@endsection
