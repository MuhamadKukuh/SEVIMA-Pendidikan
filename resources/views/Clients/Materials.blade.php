@extends('Clients.Layouts.ClientMain')
@section('ClientContent')
<div class="pt-10">
    <form action="">   
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Cari Judul</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input value="{{ isset($_GET['search']) ? $_GET['search'] : '' }}" name="search" type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Judul">
            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
        </div>
    </form>
</div>

<section class="my-5 p-5 bg-white rounded-lg shadow-lg border-none">
    <form action="" method="get">
        <div class="grid grid-cols-4 gap-4">
            <div>
                <select id="countries" name="prodi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($prodi as $item)
                        <option value="{{ $item->program }}" {{ isset($_GET['prodi']) && $item->program == $_GET['prodi'] ? 'selected' : ''  }}>{{ $item->program }}</option>  
                    @endforeach
                </select>
            </div>
            <div>
                <select id="countries" name="mp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Mata pelajaran</option>
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->subject }}" {{ isset($_GET['mp']) && $_GET['mp'] == $subject->subject ? 'selected' : ''}}>{{ $subject->subject }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <select id="countries" name="order" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="Terbaru">Terbaru</option>
                    <option value="Terlama">Terlama</option>
                </select>
            </div>
            <div>
                <button class="w-full bg-blue-500 hover:bg-blue-700 py-2 font-semibold text-center text-white rounded-lg">Filter</button>
            </div>
        </div>
    </form>
</section>

<section class="Latest mb-14">
    <div class="grid grid-cols-4 py-2 gap-4">
        @foreach ($materials as $material)

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ route('showMaterial', $material->material_title) }}">
                <img class="rounded-t-lg" src="{{ !$material->material_cover ? asset('/web_images/icons.png') : asset($material->material_cover) }}" alt="" />
                <div class="w-full px-5 py-2 text-white font-semi-bold bg-blue-500" style="border-radius: 0 0 65% 0">{{ $material->Subject->subject }}</div>
                <div class="px-5 py-2">
                    <a href="#">
                        <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $material->material_title }}</h5>
                        <p class="text-gray-600">{{ $material->Teacher->teacher_name }}</p>
                    </a>
                </div>
            </a>
        </div>

        @endforeach
    </div>
    {{ $materials->links() }}
</section>

@endsection