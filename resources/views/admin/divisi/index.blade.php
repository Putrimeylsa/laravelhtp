@extends('admin.layout.appadmin')

@section('content')
<h1 class="mt-4">Tables</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>
<div class="card mb-4">
    <div class="card-body">
        DataTables is a third-party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>.
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <!-- <i class="fas fa-table me-1"></i>
        DataTable Example -->
        <!-- membuat tombol mengarahkan ke file produk_form.php -->

        <a href="{{url('admin/divisi/create')}}" class="btn btn-primary btn-sm"> Tambah</a>

    </div>



    <div class="card-body">
        <table id="example">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @php
                $no = 1;
                @endphp

                @foreach($divisi as $d)
                <!-- $divisi mewakili variabel $divisi di dalam DivisiController as d-->

                <tr>
                    <td>{{$no}}</td>
                    <td>{{$d->nama}}</td>
                    <td>
                        <form action="#" method="POST">

                            <a class="btn btn-info btn-sm" href="{{url('admin/divisi/show/'.$d->id)}}">Detail</a>


                            <a class="btn btn-warning btn-sm" href="{{url('admin/divisi/edit/'.$d->id)}}">Ubah</a>

<!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$d->id}}">
  Hapus
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$d->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah anda yakin akan menghapus data?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a class="btn btn-danger" href="{{url('admin/divisi/delete/'.$d->id)}}" >Hapus</a>
      </div>
    </div>
  </div>
</div>
                        </form>
                    </td>
                </tr>
                @php 
                $no++;  
                @endphp
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection
