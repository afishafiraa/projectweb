  @extends('index')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Barang</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
    @if(Session::has('alert-success'))
        <div class="alert alert-success">
            <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
        </div>
    @endif

    <a style="float:right;padding:10px;" href="{{ route('barang.create') }}" class=" btn btn-sm btn-primary" >Tambah</a>
    <div class="container">
    
    <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Jilbab</th>
        <th>Harga</th>
        <th>Warna</th>
        <th>Stok</th>
        <th>Bahan</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @php $no=1; @endphp
      @foreach($data as $i=>$post)
      <tr>
        <td>{{$no++}}</td>
        <td>{{$post->nama_barang}}</td>
        <td>{{$post->harga}}</td>
        <td>{{$post->warna}}</td>
        <td>{{$post->stok}}</td>
        <td>{{$post->bahan}}</td>
        <td>
            <form action="{{ route('barang.destroy', $post->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{ route('barang.edit',$post->id) }}" class=" btn btn-sm btn-primary">Edit</a>
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