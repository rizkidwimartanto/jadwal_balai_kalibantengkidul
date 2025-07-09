@extends('user.template_dashboard.templateuser')
@section('content')
    <div class="flex-grow-1 p-4">
        <h3 class="mb-3">Tambah Kegiatan</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('balai-kelurahan.process_create_activity_user')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
                <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_kegiatan" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan" required>
            </div>
            <div class="mb-3">
                <label for="waktu_kegiatan" class="form-label">Waktu</label>
                <input type="time" class="form-control" id="waktu_kegiatan" name="waktu_kegiatan" required>
            </div>
            <div class="mb-3">
                <label for="penanggung_jawab" class="form-label">Nama Penanggung Jawab</label>
                <input type="text" class="form-control" id="penanggung_jawab" name="penanggung_jawab" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Kegiatan</button>
        </form>
    </div>
@endsection
