@extends('index')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Pemasukan</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('pemasukan.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="bahan_jilbab">Bahan jilbab</label>
                    <input type="text" class="form-control" id="bahan_jilbab" name="bahan_jilbab" value="{{ $datas->bahan_jilbab }}">
                </div>
               <div class="form-group">
                    <label for="warna_jilbab">Warna Jilbab:</label>
                     <input type="text" class="form-control" id="warna_jilbab" name="warna_jilbab" value="{{ $datas->warna_jilbab }}">
                </div>
                <div class="form-group">
                    <label for="harga_jilbab">Harga Jilbab:</label>
                     <input type="number" class="form-control" id="harga_jilbab" name="harga_jilbab" value="{{ $datas->harga_jilbab }}">
                </div>
				 <div class="form-group">
                    <label for="tgl_beli">Tanggal beli</label>
                    <input type="date" class="form-control" id="tgl_beli" name="tgl_beli" value="{{ $datas->tgl_beli }}">
                </div>
				 <div class="form-group">
                    <label for="id_supplier">Id Supplier</label>
                    <input type="text" class="form-control" id="id_supplier" name="id_supplier" value="{{ $datas->id_supplier }}">
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