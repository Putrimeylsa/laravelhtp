@extends('admin.layout.appadmin')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<br>
<br>
@foreach($divisi as $d)
<form method="POST" action="{{url('admin/divisi/update/')}}" enctype="multipart/form-data">
    {{csrf_field() }}
  <div class="form-group row">
    <input type="hidden" name="id" value="{{$d->id}}" /><br>
    <label for="text" class="col-4 col-form-label" >{{$d->nama}}</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="nama" type="text" class="form-control" value="{{$d->nama}}">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
@endforeach
@endsection