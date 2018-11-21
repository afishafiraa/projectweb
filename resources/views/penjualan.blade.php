  @extends('index')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Penjualan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Penjualan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <h1>Table Pemasukan</h1>
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
                    <th>Tanggal Jual</th>
                    <th>Harga</th>
                    <th>Warna</th>
                    <th>Bahan</th>
                    <th>Pemasukan</th>
                    <th>Pengeluaran</th>
                    <th>Total</th>
                    <th colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                @php $id = 1; @endphp
                @foreach($data as $d)
                    <tr>
                        <td>{{ $id++ }}</td>
                        <td>{{ $d->tgl_jual }}</td>
                        <td>{{ $d->harga }}</td>
                        <td>{{ $d->warna}}</td>
                        <td>{{ $d->bahan }}</td>
                        <td>{{ $d->pemasukan }}</td>
                        <td>{{ $d->pengeluaran }}</td>
                        <td>{{ $d->total }}</td>
                        <td>
                            <form action="{{ route('pemasukan.destroy', $d->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('pemasukan.edit',$d->id) }}" class=" btn btn-sm btn-primary">Edit</a>
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