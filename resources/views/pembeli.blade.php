  @extends('index')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pembeli
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Pembeli</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
    <div class="container">
    <table class="table table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pembeli</th>
                    <th>Alamat</th>
                    <th>Jumlah Barang</th>
                    <th>Warna</th>
                    <th>Bahan</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                @php $id = 1; @endphp
                @foreach($data as $d)
                    <tr>
                        <td>{{ $id++ }}</td>
                        <td>{{ $d->nama_pembeli }}</td> 
                        <td>{{ $d->alamat }}</td>
                        <td>{{ $d->jumlah_barang }}</td>
                        <td>{{ $d->warna }}</td>
                        <td>{{ $d->bahan }}</td>
                        <td>{{ $d->harga }}</td>
                        <td>{{ $d->total }}</td>
                        <td>
                            <form action="{{ route('pembeli.destroy', $d->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('pembeli.edit',$d->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
    <!-- End Section before end -->
    </section>
    <!-- /.content -->
  </div>
@endsection