@extends('layouts.app')

@section('title', 'Create Friends')

@section('content')

<form action="/friends" method="POST" style="width: 18rem">
  @csrf
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" id="nama"  name="nama"  value="{{ old('nama') }}">
  
    @error('nama')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label>No Telpon</label>
    <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="{{ old('no_tlp') }}">
  
    @error('no_tlp')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label>Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}">
  
    @error('alamat')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection