@extends('layouts.admin')

@section('content')
    

<table class="table">
    <thead>
      <tr>
        <th scope="col">Titolo</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Azioni</th>

    
      </tr>
    </thead>
    <tbody>
        @foreach ($project as $proj)
      <tr>
        <th scope="row">{{$proj->title}}</th>
        <td>{{$proj->description}}</td>
        <td> 
          <a href="#" class="btn btn-primary m-2">Apri</a> 
          <a href="#" class="btn btn-warning m-2">Modifica</a> 

         <form action="{{route('admin.projects.destroy', ['project' => $project->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Cancella</button>
              
              
              </form>        
        </td>
      </tr>
      
    </tbody>
     @endforeach
  </table>

  @endsection