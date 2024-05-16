<script src="https://kit.fontawesome.com/edd6108211.js" crossorigin="anonymous"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Penghuni') }}
        </h2>
    </x-slot>


    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-start">
                <a href="/penghuni"><button type="button"
                        class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        Kembali
                    </button></a>

            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('add.penghuni') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="grid md:grid-cols-2 gap-5">

                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Nama
                                    Penghuni</label>
                                <select id="countries" name="nama_lengkap"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Pilih Penghuni</option>

                                    @foreach ($calonPenghuni as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_lengkap }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-5">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="user_avatar">Bukti Pembayaran</label>
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="file"
                                    name="bukti_pembayaran">
                            </div>
                        </div>




                        <div class="grid md:grid-cols-2 gap-5">
                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                    Masuk</label>

                                <div class="relative ">
                                    <div
                                        class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    </div>
                                    <input type="date" id="tanggal" name="tgl_masuk" required
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>

                            </div>
                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                    Keluar</label>
                                <div class="relative">
                                    <div
                                        class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    </div>
                                    <input type="date" id="tanggal" name="tgl_keluar" required
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-5">
                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kamar</label>
                                <select id="kamar" name="kamar_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected value="">Pilih Kamar</option>
                                    @foreach ($kamar as $item)
                                        <option value="{{ $item->id }}">{{ $item->nomor_kamar }}</option>
                                    @endforeach


                                </select>
                            </div>
                            <div class="mb-5">
                                <label for="base-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pembayaran</label>
                                <select id="countries" name="pembayaran"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Pilih Pembayaran</option>
                                    <option value="BRI">BRI</option>
                                    <option value="Mandiri">Mandiri</option>

                                </select>
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Simpan</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src="../path/to/flowbite/dist/datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</x-app-layout>
