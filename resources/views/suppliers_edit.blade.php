@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Supplier</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('suppliers.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="usr" name="nama" value="{{ $datas->nama }}">
                </div>
                <div class="form-group">
                    <label for="id_jilbab">Id Jilbab:</label>
                    <input type="text" class="form-control" id="jilbab" name="id_jilbab" value="{{ $datas->id_jilbab }}">
                </div>
                <div class="form-group">
                    <label for="harga">Harga Jilbab:</label>
                     <input type="text" class="form-control" id="harga_jilbab" name="harga_jilbab" value="{{ $datas->harga_jilbab }}">
                </div>
                <div class="form-group">
                    <label for="warna">Warna Jilbab:</label>
                     <input type="text" class="form-control" id="warna_jilbab" name="warna_jilbab" value="{{ $datas->warna_jilbab }}">
                </div>
				 <div class="form-group">
                    <label for="bahan">Bahan Jilbab:</label>
                    <input type="text" class="form-control" id="bahan_jilbab" name="bahan_jilbab" value="{{ $datas->bahan_jilbab }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection