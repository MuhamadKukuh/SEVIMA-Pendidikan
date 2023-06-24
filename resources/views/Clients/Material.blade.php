@extends('Clients.Layouts.ClientMain')
@section('ClientContent')

<div class="py-5">
    <h1 class="text-3xl text-center font-bold">
        {{ $material->material_title }}
    </h1>
</div>

<section class="py-4">
    <img src="{{ asset('/images/banner.jpg') }}" class="" alt="">
    <h4 class="text-">Di buat oleh {{ $material->Teacher->teacher_name }}</h4>
    <p class="w-full font-light">
        {!! $material->material_content !!}
    </p>
</section>


@endsection