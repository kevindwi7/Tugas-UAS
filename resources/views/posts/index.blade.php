@extends('layouts.app') 
@section('content')    
	<h1>Blog Posts</h1>        	
	@if(count($posts)>0)             
		@foreach ($posts as $post)                
		<div class="well">                
			<h3><a href="{{url('/post/'.$post->id)}}">
			{{$post->title}}</a></h3>                    
			<small>tanggal: 
			{{$post->created_at}}</small>                
		</div>               
		@endforeach         
	@else             
		<h3>Tidak ada data.</h3>        
	@endif 
@endsection