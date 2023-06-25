@extends('Admin.Layouts.Main')
@section('AdminContent')

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Tambah Materi
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ isset($material) ? route('materialUpdate', $material->material_id) : route('materiStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul Materi</label>
                        <input type="text" value="{{ isset($material) ? $material->material_title : old('material_title') }}" name="material_title" class="form-control" id="exampleInputEmail1" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectRounded0">Mata pelajaran</label>
                        <select name="subject" class="custom-select rounded-0" id="exampleSelectRounded0">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->subject_id }}">{{ $subject->subject }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Cover Materi</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="material_cover" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Pilih gambar</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" >Upload</span>
                          </div>
                        </div>
                    </div>
                    <label for="exampleInputFile">Isi materi <code>Jangan di isi kalau mau auto generate</code></label>
                    <textarea id="summernote" name="material_content">
                        {!! isset($material) ? $material->material_content : old('material_content') !!}
                    </textarea>
                    <button class="btn btn-primary" type="submit">Buat</button>
                </form>
            </div>
            <div class="card-footer">
                
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>


@endsection