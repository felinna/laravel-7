@extends('layouts.app')

@section('title', 'show')

@section('content')
<div class="class card mt-2" style="width: 20rem;">
    <div class="card-body">
        <h5>Nama Teman : {{ $friend['nama'] }}</h5>
        <h5>No. Telpon : {{ $friend['no_tlp'] }}</h5>
        <h5>Alamat : {{ $friend['alamat'] }}</h5>
    </div>
    
</div>
@endsection
