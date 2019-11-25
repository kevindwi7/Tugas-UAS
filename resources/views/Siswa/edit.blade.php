<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div class="container">
    <div class="row">
        <div class="col-10">
        <h1 class="mt-3">Form Ubah Booking Cuci Sepatu</h1>
        <form method="post" action="/siswas/{{$siswas->id}}">
        @method('patch')
        @csrf
         <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
             placeholder="Masukkan Nama" name="nama" value="{{$siswas->nama}}" >
             @error('nama')<div class="invalid-feedback">{{$message}}</div>@enderror
  </div>
  <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
             placeholder="Masukkan Alamat" name="alamat" value="{{$siswas->alamat}}">
             @error('alamat')<div class="invalid-feedback">{{$message}}</div>@enderror
  </div>
  <div class="form-group">
            <label for="no_telepon">No telepon</label>
            <input type="text" class="form-control" id="no_telepon"
             placeholder="Masukkan Nomer Telepon" name="no_telepon" value="{{$siswas->no_telepon}}">
  </div>
  <div class="form-group">
            <label for="Nama_sepatu">Jumlah Sepatu</label>
            <select class="form-control" name="Nama_sepatu" id="Nama_sepatu"  value="{{$siswas->Nama_sepatu}}">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <label for="exampleRadios">Services</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="service" id="service" value=" Regular Treatment" checked>
  <label class="form-check-label" for="exampleRadios1">
    Regular Treatment
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="service" id="service" value="Premium Treatment">
  <label class="form-check-label" for="exampleRadios2">
    Premium Treatment
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="service" id="service" value=" Boost Material treatment(inc unyellowing boost)" >
  <label class="form-check-label" for="exampleRadios3">
    Boost Material treatment(inc unyellowing boost)
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="service" id="service" value=" Regular Unyellowing(not boost material)" >
  <label class="form-check-label" for="exampleRadios3">
    Regular Unyellowing(not boost material)
  </label>
</div>
  
  <button type="submit" class="btn btn-primary">Ubah Data</button>
</form>
        </div>
    </div>
</div>