@extends ('layouts.app')
@section ('content')
    @if($post)
        <h1>{{$post->title}}</h1>
        <small>Tanggal: {{$post->created_at}}</small>
        <p>{{$post->deskripsi}}</p>
    @else
        <h1>Tidak ada data </h1>
    @endif

    @endsection        