@extends('index')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
        <section class="content-header">
            <h1>
                Data Supplier
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Data Supplier</li>
             </ol>
        </section>
        <hr>
            <!-- Remove This Before You Start -->
            <div class ="box">
                <div class ="box-header">
                    <h1 class="box-title">Tambah Supplier</h1>
                    <hr>
                </div>

            <div class = "box-body">
            <form action="{{ route('suplier.store') }}" method="post" encytype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama_suplier">Nama Suplier:</label>
                    <input type="text" class="form-control" id="usr" name="nama_suplier">
                </div>
				<div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
				<div class="form-group">
                    <label for="nohp">No Hp:</label>
                    <input type="number" class="form-control" id="nohp" name="nohp">
                </div>
				  <div class="form-group">
                    <label for="warna">Warna Jilbab:</label>
                    <input type="text" class="form-control" id="warna" name="warna">
                </div>
				 <div class="form-group">
                    <label for="harga">Harga Jilbab:</label>
                    <input type="number" class="form-control" id="harga" name="harga">
                </div>
				<div class="form-group">
                    <label for="bahan">Bahan Jilbab:</label>
                    <input type="text" class="form-control" id="bahan" name="bahan">
                </div>
				<div class="form-group">
                    <label for="jumlah_barang">Jumlah Barang:</label>
                    <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        </div>
    </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
