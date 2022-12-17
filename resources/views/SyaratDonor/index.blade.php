@extends('template.main')
@section('title', 'Persyaratan Donor')

@section('content')
    <div class="container">
        <h2 class="text-center text-[35px] text-gray-500 font-poppins mt-20 py-20">Persyaratan Donor</h2>
        <a href="{{ url ('/SyaratDonor/create') }}" class="font-semibold font-poppins text-lg bg-green-400 hover:bg-green-600 text-white p-2 rounded-lg">Tambah data</a>
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-10 my-24">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs  text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            NO
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Persyaratan
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($syaratdonor as $item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="py-4 px-6">
                                {{ $item->persyaratan }}
                            </td>
                            <td class="py-4 px-6 flex gap-5 text-base">
                                {{-- <a href="{{ url('/SyaratDonor/' . $item->id . '/detail') }}"
                                    ><span class="fa-fw select-all fas text-blue-600"></span>
                                </a> --}}
                                <a href="{{ url('/SyaratDonor/' . $item->id . '/edit')}}"><span
                                        class="fa-fw select-all fas text-green-500"></span>
                                </a>
                                <form method="POST"
                                    action="{{ url('/SyaratDonor/' . $item->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"><span
                                            class="fa-fw select-all fas text-red-600"></span></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection