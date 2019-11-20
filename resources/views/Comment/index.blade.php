<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col-10">
        <h1 class="mt-3">Daftar Sepatu</h1>
        <a href="/" type="submit" class="btn btn-primary">Kembali ke halaman Awal</a> 
        <a href="/siswas" type="submit" class="btn btn-primary">Ke Daftar Sepatu</a> 
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status')}}
            </div>
        @endif
        
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Comment</th>
                <th scope="col">Aksi</th>
            
            </tr>                
            </thead>
            <tbody>
                @foreach($comments as $comment)
                <tr>
                <th scope="row">{{$comment->id}}</th>
                    <td>{{$comment->nama}}</td>
                    <td>{{$comment->email}}</td>
                    <TD>{{$comment->description}}</TD>
                   
                    
                    <td>
                        
                        <form action="/comments/{{$comment->id}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                        <button type="submit" class="btn btn-danger">delete</a>
                        </form> 
                    </td>
                    
                
            </tr>
                
            @endforeach
            </tbody>
            
        </div>
    </div>
    
</div>

        