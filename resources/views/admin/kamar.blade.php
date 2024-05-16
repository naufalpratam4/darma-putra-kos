<script src="https://kit.fontawesome.com/edd6108211.js" crossorigin="anonymous"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('kamar') }}
        </h2>
    </x-slot>


    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end">
                <a href="/tambah-kamar"><button type="button"
                        class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        Tambah Kamar
                    </button></a>

            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nomor Kamar <a href=""><i class="fa-solid fa-sort ps-1"></i></a>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Luas Kamar

                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Harga Sewa

                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Fasilitas

                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Status

                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Aksi

                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kamar as $no => $item)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th class="px-6 py-4">
                                            {{ $no + 1 }}
                                        </th>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->nomor_kamar }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $item->luas_kamar }}
                                        </td>
                                        <td class="px-6 py-4">
                                            Rp. {{ $item->harga_Sewa }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->fasilitas }}
                                        </td>
                                        <td class="px-6 py-4">
                                            @if ($item->status == 'Tersedia')
                                                <span
                                                    class="bg-green-100 text-green-800 text-xs font-medium   px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ $item->status }}</span>
                                            @elseif ($item->status == 'Renovasi')
                                                <span
                                                    class="bg-red-100 red-red-800 text-xs font-medium   px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">{{ $item->status }}</span>
                                            @else
                                                <span
                                                    class="bg-blue-100 red-blue-800 text-xs font-medium   px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $item->status }}</span>
                                            @endif
                                        </td>


                                        <td class=" py-4 text-right">
                                            <div class="flex">
                                                <a href="{{ route('edit.kamar', $item->id) }}" class=""><button
                                                        type="button"
                                                        class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900"><i
                                                            class="fa-solid fa-pen"></i></button></a>
                                                <a href="">
                                                    <button type="button"
                                                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                </a>
                                            </div>

                                        </td>


                                    </tr>
                                @endforeach



                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
