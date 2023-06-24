@extends('Clients.Layouts.ClientMain')
@section('ClientContent')

<div id="indicators-carousel" class="relative w-full md:py-5" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden md:rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="{{ asset('/images/banner.jpg') }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-2.svg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-3.svg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-4.svg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-5.svg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
            data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
            data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button"
        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
<div class="row md:block hidden w-full h-full pb-4 bg-white rounded-xl ">
    <div class="p-4 grid grid-cols-2">
        <div>
            <h1 class="text-2xl font-bold">Program Studi</h1>
            <div class="w-full h-full grid grid-cols-2 gap-2 py-3">
                <div class="">
                    <img src="https://lms.smkn1ciamis.id/pluginfile.php/5497/course/overviewfiles/IPA.jpg"
                        class="rounded-lg border-2 shadow-md h-full" alt="">
                </div>
                <div>
                    <img src="https://www.immersa-lab.com/wp-content/uploads/2018/02/Mengenal-IPSIntrusion-Prevention-System-Network-Security_Featured-image.jpg"
                        class="h-full rounded-lg border-2 shadow-md" alt="">
                </div>
            </div>
        </div>
        <div class="">
            <div class="ml-4">
                <h1 class="text-2xl font-bold">Cari Materi</h1>
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="grid p-4 md:gap-5 grid-cols-2 gap-2 md:grid-cols-6 w-full">
            <div class="p-2 rounded-xl shadow-md w-full h-full flex items-center justify-start">
                <img src="{{ asset('images/icons.png') }}" alt="" class=" content-center rounded-full max-w-[50px]">
                <p class="ml-3">Mata Pelajaran</p>
            </div>
            @foreach ($subjects as $subject)
            <div class="p-2 rounded-xl shadow-md w-full h-full flex items-center justify-start">
                <img src="{{ asset('images/icons.png') }}" alt="" class=" content-center rounded-full max-w-[50px]">
                <p class="ml-3">{{ $subject->subject }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
<hr class="my-5 h-[2px] bg-gray-400">

<section class="recomendation">
    <h1 class="text-2xl font-bold ">Rekomendasi Materi</h1>
    <div class="grid grid-cols-4 py-2 gap-4">
        @foreach ($materials as $material)

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('/images/icons.png') }}" alt="" />
            </a>
            <div class="w-full px-5 py-2 text-white font-semi-bold bg-blue-500" style="border-radius: 0 0 65% 0">{{ $material->Subject->subject }}</div>
            <div class="px-5 py-2">
                <a href="#">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $material->material_title }}</h5>
                    <p class="text-gray-600">{{ $material->Teacher->teacher_name }}</p>
                </a>
            </div>
        </div>

        @endforeach
    </div>
</section>
<hr class="my-5 h-[2px] bg-gray-400">

<section class="Latest">
    <h1 class="text-2xl font-bold ">Materi Terbaru</h1>
    <div class="grid grid-cols-4 py-2 gap-4">
        @foreach ($materials as $material)

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('/images/icons.png') }}" alt="" />
            </a>
            <div class="w-full px-5 py-2 text-white font-semi-bold bg-blue-500" style="border-radius: 0 0 65% 0">{{ $material->Subject->subject }}</div>
            <div class="px-5 py-2">
                <a href="#">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $material->material_title }}</h5>
                    <p class="text-gray-600">{{ $material->Teacher->teacher_name }}</p>
                </a>
            </div>
        </div>

        @endforeach
    </div>
</section>

@push('Client-js')

@endpush
@endsection