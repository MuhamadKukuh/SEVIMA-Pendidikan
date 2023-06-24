<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Sekolah | Register</title>
</head>

<body class="bg-gray-100">
    <section class="h-screen">
        <div class="flex h-full justify-center items-center mt-[50px]">
            <div
                class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                <form class="space-y-6" action="{{ route('registerProccess') }}" method="POST">
                    @csrf
                    <div class="flex justify-center">
                        <h5 class="text-2xl font-bold py-4 text-gray-900  dark:text-white">Daftar</h5>
                    </div>
                    <div class="my-4">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Lengkap</label>
                        <input type="text" name="full_name" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 @error('email') is-invalid @enderror dark:placeholder-gray-400 dark:text-white"
                            placeholder="Nama lengkap" required>
                        @error('email')
                        <small class="text-red-600">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="my-4">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIS</label>
                        <input type="number" name="nis" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 @error('nis') is-invalid @enderror dark:placeholder-gray-400 dark:text-white"
                            placeholder="" required>
                        @error('nis')
                        <small class="text-red-600">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="my-4">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor telp</label>
                        <input type="number" name="phone_number" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 @error('phone_number') is-invalid @enderror dark:placeholder-gray-400 dark:text-white"
                            placeholder="" required>
                        @error('phone_number')
                        <small class="text-red-600">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="my-4">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIK</label>
                        <input type="number" name="nik" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 @error('nik') is-invalid @enderror dark:placeholder-gray-400 dark:text-white"
                            placeholder="" required>
                        @error('nik')
                        <small class="text-red-600">{{ $message }}</small>
                        @enderror
                    </div>
                    
                    <div class="my-4">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        <input type="text" name="address" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 @error('address') is-invalid @enderror dark:placeholder-gray-400 dark:text-white"
                            placeholder="Alamat" required>
                        @error('address')
                        <small class="text-red-600">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-5 grid grid-cols-2 gap-2">
                        <div>
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
                                option</label>
                            <select name="class" id="countries"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($class as $cl)
                                    <option value="{{ $cl->class_id }}">{{ $cl->class }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
                                option</label>
                            <select name="program" id="countries"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($prodies as $prody)
                                    <option value="{{ $prody->program_id }}">{{ $prody->program }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="my-4">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 @error('email') is-invalid @enderror dark:placeholder-gray-400 dark:text-white"
                            placeholder="name@company.com" required>
                        @error('email')
                        <small class="text-red-600">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata
                            sandi</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required>
                    </div>

                    <div class="mb-5">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ulangi Kata
                            sandi</label>
                        <input type="password" name="password_confirmation" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required>
                    </div>

                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login
                        to your account</button>
                    <div class="text-sm py-2 font-medium text-gray-500 dark:text-gray-300">
                        belum memiliki Akun? <a href="{{ route('registerIndex') }}"
                            class="text-blue-600 hover:underline dark:text-blue-500">Daftar</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>

</html>