<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col-15">
        <h1 class="mt-3">Daftar Sepatu</h1>
        <a href="/" type="submit" class="btn btn-primary">Kembali ke halaman Awal</a> 
        <a href="/comments" type="submit" class="btn btn-primary">Ke Daftar Comment</a> 
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
                <th scope="col">Jumlah Sepatu</th>
                <th scope="col">Alamat</th>
                <th scope="col">No telepon</th>
                <th scope="col">Service</th>
                <th scope="col">Aksi</th>
            </tr>                
            </thead>
            <tbody>
                @foreach($siswas as $siswa)
                <tr>
                <th scope="row">{{$siswa->id}}</th>
                    <td>{{$siswa->nama}}</td>
                    <td>{{$siswa->Nama_sepatu}}</td>
                    <TD>{{$siswa->alamat}}</TD>
                    <td>{{$siswa->no_telepon}}</td>
                    <td>{{$siswa->service}}</td>
                    
                    <td>
                        <a href="/siswas/{{$siswa->id}}/edit" type="submit" class="btn btn-primary">edit</a> 
                        <form action="/siswas/{{$siswa->id}}" method="post" class="d-inline">
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

        