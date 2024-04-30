<h1>Form Pendaftaran</h1>


<form action="{{ route('person.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Inputkan Nama Anda">

    <input type="Submit" value="Simpan"> class="btn btn-success m-3">
</form>
@endsection