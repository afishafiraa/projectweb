@extends('index')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
        <section class="content-header">
            <h1>
                Data Barang
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Data Barang</li>
             </ol>
        </section>
        <hr>
            <!-- Remove This Before You Start -->
            <div class ="box">
                <div class ="box-header">
                    <h1 class="box-title">Edit Barang</h1>
                    <hr>
                </div>
            <div class = "box-body">
            @foreach($data as $datas)
            <form action="{{ route('barang.update',$datas->id) }}" method="post" encytype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
				<div class="form-group">
                    <label for="nama_barang">Nama Jilbab:</label>
                    <input type="text" class="form-control" id="usr" name="nama_barang" value="{{$datas-> nama_barang}}" >
                </div>
				<div class="form-group">
                    <label for="stok">Stok:</label>
                    <input type="number" class="form-control" id="usr" name="stok" value="{{$datas-> stok}}">
                </div>
				<div class="form-group">
                    <label for="warna">Warna:</label>
                    <input type="text" class="form-control" id="usr" name="warna" value="{{$datas-> warna}}">
                </div>
                <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="number" class="form-control" id="usr" name="harga" value="{{$datas-> harga}}">
                </div>
                <div class="form-group">
                    <label for="bahan">Bahan:</label>
                    <input type="text" class="form-control" id="usr" name="bahan" value="{{$datas-> bahan}}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
            </div>
        </div>
     </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection