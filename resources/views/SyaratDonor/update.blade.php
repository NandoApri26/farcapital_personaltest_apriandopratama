@extends('template.main')
@section('title', 'Update Persyaratan')

@section('content')
<div class="mt-40 mb-10 text-center font-poppins text-xl font-bold text-gray-500">
    <h1>Update Persyaratan</h1>
</div>
<div class="bg-gray-200 mt-120 p-5 w-[500px] mx-auto">

    <form method="POST" action="{{url('SyaratDonor/'. $syaratdonor->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="mb-6 ">
            <label for="persyaratan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Persyaratan</label>
            <textarea type="text" id="persyaratan" name="persyaratan" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[450px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Insert your Persyaratan" required>{{ $syaratdonor->persyaratan}}
            </textarea>
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>

        <a href="{{ url ('/SyaratDonor') }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                Back
            </span>
        </a>
    </form>

</div>
@endsection
