@extends('layouts.app')

@section('title', 'Create Groups')

@section('content')

<form action="/groups" method="POST" style="width: 18rem">
  @csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" id="name"  name="name"  value="{{ old('name') }}">
  
    @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label>Description</label>
    <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
  
    @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection