@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Supplier</h1>
            <hr>
            <form action="{{ route('suppliers.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="usr" name="nama">
                </div>
				 <div class="form-group">
                    <label for="id_jilbab">Id jilbab:</label>
                    <input type="text" class="form-control" id="jilbab" name="id_jilbab">
                </div>
				  <div class="form-group">
                    <label for="warna">Harga Jilbab:</label>
                    <input type="text" class="form-control" id="harga_jilbab" name="harga_jilbab">
                </div>
				 <div class="form-group">
                    <label for="warna">Warna Jilbab:</label>
                    <input type="text" class="form-control" id="warna_jilbab" name="warna_jilbab">
                </div>
				<div class="form-group">
                    <label for="bahan">Bahan Jilbab:</label>
                    <input type="text" class="form-control" id="bahan_jilbab" name="bahan_jilbab">
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
