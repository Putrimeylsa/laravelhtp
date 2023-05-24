@php
$nama = "Budi";
$nilai = "60.00";
@endphp
{{---sturktur kendali if--}}
<!-- Struktur kendali if -->
@if ($nilai >= 60)

@php $ket = "Lulus"; @endphp
@else
@php $ket = "Gagal"; @endphp
@endif
<p>siswa {{$nama}} dengan nilai {{$nilai}}</p>
<h1>dinyatakan {{$ket}}</h1>