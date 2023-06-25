@extends('Admin.Layouts.Main')
@section('AdminContent')

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <!-- /.card-header -->
            <div class="card-body">
                <h3 class="text-center">
                    {{ $material->material_title }}
                </h3>
                <div class="d-flex justify-content-center">
                    <img src="{{ !$material->material_cover ? asset('web_images/banner.jpg') : asset($material->material_cover) }}" alt="{{ $material->material_cover }}" class="" style="width: 500px;">
                </div>
                <p class="mt-4">{!! $material->material_content !!}</p>
            </div>
            <div class="card-footer">
                
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>


@endsection