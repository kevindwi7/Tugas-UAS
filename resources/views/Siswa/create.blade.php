<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-3">Form Booking Cuci Sepatu</h1>
        <form method="post" action="/Siswa">
        @csrf
         <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
             placeholder="Masukkan Nama" name="nama" >
             @error('nama')<div class="invalid-feedback">{{$message}}</div>@enderror
        </div>

  <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
             placeholder="*Alamat lengkap, RT/RW, Kode Pos" name="alamat">
             @error('alamat')<div class="invalid-feedback">{{$message}}</div>@enderror
  </div>

  <div class="form-group">
            <label for="no_telepon">No telepon</label>
            <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon"
             placeholder="Masukkan Nomer Telepon" name="no_telepon">
             @error('no_telepon')<div class="invalid-feedback">{{$message}}</div>@enderror
  </div>

  <div class="form-group">
  <label for="Nama_sepatu">Jumlah Sepatu (*max. 5)</label>
    <select class="form-control" name="Nama_sepatu" id="Nama_sepatu">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>

<label for="Services">Services</label>
<div class="form-group">
  <select class="form-control" name="service" id="service">
    @foreach($service as $srv)
      <option value="{{$srv->service_name}}">
        {{$srv->service_name}}
      </option>
    @endforeach
  </select>
</div>

 <br>
  <button type="submit" class="btn btn-primary">Booking Cucian</button>
</form>
        </div>
    </div>
</div>