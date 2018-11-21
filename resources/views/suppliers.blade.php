@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Table Supplier</h1>
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
                    <th>Nama</th>
                    <th>Id_jilbab</th>
                    <th>Harga Jilbab</th>
                    <th>Bahan Jilbab</th>
                    <th>Warna Jilbab</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $id = 1; @endphp
                @foreach($data as $d)
                    <tr>
                        <td>{{ $id++ }}</td>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->id_jilbab }}</td>
                        <td>{{ $d->harga_jilbab }}</td>
                        <td>{{ $d->warna_jilbab }}</td>
                        <td>{{ $d->bahan_jilbab }}</td>
                        <td>
                            <form action="{{ route('suppliers.destroy', $d->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('suppliers.edit',$d->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
