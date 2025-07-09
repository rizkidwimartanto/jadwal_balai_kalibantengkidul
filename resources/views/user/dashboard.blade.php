@extends('user.template_dashboard.templateuser')
@section('content')
    <div class="flex-grow-1 p-4">
        <h3 class="mb-3">Dashboard</h3>
        <div class="alert alert-danger" role="alert">
            Selamat datang di dashboard Balai Kelurahan Kalibanteng Kidul! Di sini Anda dapat mengelola kegiatan
            dan informasi terkait balai kelurahan.
        </div>
        <a href="{{ route('balai-kelurahan.create_activity_user') }}" class="btn btn-primary mb-3">Tambah Kegiatan</a>
        <table class="table table-bordered table-hover">
            <thead class="table-danger">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kegiatan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Nama Penanggung Jawab</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($data_kegiatan as $kegiatan)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $kegiatan->nama_kegiatan }}</td>
                        <td>{{ $kegiatan->tanggal_kegiatan }}</td>
                        <td>{{ $kegiatan->waktu_kegiatan }}</td>
                        <td>{{ $kegiatan->penanggung_jawab }}</td>
                        <td>
                            <a href="{{ route('balai-kelurahan.edit', $kegiatan->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('balai-kelurahan.destroy', $kegiatan->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
