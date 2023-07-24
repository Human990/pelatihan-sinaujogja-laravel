<h1>DAFTAR INFORMASI</h1>

<h2>Kode : {{ $kode }}</h2>
<h2>Lokasi : {{ $lokasi }}</h2>
<br>
<h1>DAFTAR DIVISI</h1>
@foreach ($divisi as $item)
    ID : {{ $item->id }} <br>
    NAMA : {{ $item->nama }} <br><br>
@endforeach
