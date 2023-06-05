@extends('layouts.admin')

@section('content')
<a class="btn btn-primary mb-3" href="{{ route('admin.projects.create') }}" role="button">New Project</a>

@if(session("message"))
<div class="alert alert-success" role="alert">
  <strong>{{ session("message") }}</strong>
</div>
@endif

<div class="table-responsive rounded overflow-hidden mb-3">
  <table class="table table-primary align-middle text-center mb-0">
    <thead>
      <tr class="align-middle">
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Repository URL</th>
        <th scope="col">Starting date</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($projects as $project)
      <tr>
        <td scope="row">{{ $project->id }}</td>
        <td scope="row">{{ $project->name }}</td>
        <td scope="row">{{ $project->repoUrl }}</td>
        <td scope="row">{{ $project->startingDate }}</td>
      </tr>
      @empty
      <tr>
        <td scope="row">No projects found</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection
