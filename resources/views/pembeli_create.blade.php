@extends('index')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <section class="content-header">
            <h1>
                Data Pembeli
            </h1>
            <ol class="breadcrumb">
                <li><a href="/index"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Data Pembeli</li>
             </ol>
        </section>
        <hr>
        <div class="box">
            <div class="box-header">
                <h1 class="box-title">Tambah Pembeli</h1>
                <hr>
            </div>

            <div class ="box-body">
            <form action="{{ route('pembeli.store') }}" method="post" encytype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama_pembeli">Nama Pembeli:</label>
                    <input type="text" class="form-control" id="usr" name="nama_pembeli">
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" class="form-control" id="usr" name="alamat">
                </div>
                <div class="form-group">
                    <label for="jumlah_barang">Jumlah Barang:</label>
                    <input type="number" class="form-control" id="usr" name="jumlah_barang">
                </div>              
				<div class="form-group">
                    <label for="warna">Warna:</label>
                    <input type="text" class="form-control" id="usr" name="warna">
                </div>
				<div class="form-group">
                    <label for="bahan">Bahan:</label>
                    <input type="text" class="form-control" id="usr" name="bahan">
                </div>
				<div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="number" class="form-control" id="usr" name="harga">
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