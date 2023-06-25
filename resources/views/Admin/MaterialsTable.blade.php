@extends('Admin.Layouts.Main')
@section('AdminContent')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('materiCreate') }}" class="btn btn-dark " style="font-weight: bold">+ Tambah Data</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Mata pelajaran</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materials as $material)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $material->material_title }}
                            </td>
                            <td>{{ $material->Subject->subject }}</td>
                            <td class="d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="/materi-data/{{ $material->material_id }}" class="btn btn-primary">Detail</a>
                                    </div>
                                    <div class="col-4">
                                        <a href="{{ route('materiEdit', $material->material_id) }}" class="btn btn-warning">Ubah</a>
                                    </div>
                                    <div class="col-4">
                                        <a href="/materi-data/{{ $material->material_id }}/delete" class="btn btn-danger">Hapus</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
@endsection