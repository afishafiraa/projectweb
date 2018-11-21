@extends('index')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Pemasukan</h1>
            <hr>
            <form action="{{ route('pemasukan.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="tgl_jual">Tanggal Penjualan:</label>
                    <input type="date" class="form-control" id="tgl_jual" name="tgl_jual">
                </div>
                <div class="form-group">
                    <label for="harga">Harga Jilbab:</label>
                    <input type="number" class="form-control" id="harga" name="harga">
                </div>
				<div class="form-group">
                    <label for="warna">Warna Jilbab:</label>
                    <input type="text" class="form-control" id="warna" name="warna">
                </div>
				  <div class="form-group">
                    <label for="bahan">Bahan Jilbab:</label>
                    <input type="text" class="form-control" id="bahan" name="bahan">
                </div>
				<div class="form-group">
                    <label for="pemasukan">Pemasukan:</label>
                    <input type="number" class="form-control" id="pemasukan" name="pemasukan">
                </div>
				<div class="form-group">
                    <label for="pengeluaran">Pengeluaran:</label>
                    <input type="number" class="form-control" id="pengeluaran" name="pengeluaran">
                </div>
				<div class="form-group">
                    <label for="total">Total:</label>
                    <input type="number" class="form-control" id="total" name="total">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
