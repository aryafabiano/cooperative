<h1>Pendaftaran Pelanggan</h1>

<form action="{{ route('customer.store')}}" method="">
     @csrf

<label for="">Kode Pelanggan</label>
<input type="text" name="code" placeholder="Kode Pelanggan">
<br>

<label for="">Nama Pelanggan</label>
<input type="text" name="nama" placeholder="Nama Pelanggan">
<br>

<label for="">Telepon</label>
<input type="text" name="phone" placeholder="08xxxx">
<br>

<label for="">Alamat</label>
<textarea name="address" placeholder="Alamat" cols="30" rows="3"></textarea>
<br>

<input type="submit" value="Simpan">
</form>