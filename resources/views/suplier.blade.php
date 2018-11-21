  @extends('index')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Suplier
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Suplier</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <h1>Data Supplier</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Suplier</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Warna Jilbab</th>
                    <th>Harga Jilbab</th>
                    <th>Bahan Jilbab</th>
                    <th>Jumlah Barang</th>
                    <th colspan="2">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $id = 1; @endphp
                @foreach($data as $d)
                    <tr>
                        <td>{{ $id++ }}</td>
                        <td>{{ $d->nama_suplier }}</td>
                        <td>{{ $d->alamat }}</td>
                        <td>{{ $d->nohp }}</td>
                        <td>{{ $d->warna }}</td>
                        <td>{{ $d->harga }}</td>
                        <td>{{ $d->bahan }}</td>
                        <td>{{ $d->jumlah_barang }}</td>
                        <td>
                            <form action="{{ route('suplier.destroy', $d->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('suplier.edit',$d->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>









    <!-- End Section before end -->
    </section>
    <!-- /.content -->
  </div>
@endsection