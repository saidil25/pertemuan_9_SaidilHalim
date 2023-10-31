@extends('auth.layouts')

@section('content')
<div class="flex justify-center">
    <h3 class="text-center text-3xl font-bold mt-8">Kirim Email</h3>
</div>
<div class="flex justify-center mt-8">
    <div class="w-full md:w-1/2 p-6">
        @if (session('status'))
        <div class="alert alert-primary" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('post-email') }}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
                <input type="text" name="name" id="name" placeholder="Nama" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email Tujuan</label>
                <input type="email" name="email" id="email" placeholder="Email Tujuan" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="subject" class="block text-gray-700 text-sm font-bold mb-2">Subjek</label>
                <input type="text" name="subject" id="subject" placeholder="Subjek" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="body" class="block text-gray-700 text-sm font-bold mb-2">Body Deskripsi</label>
                <textarea name="body" id="body" rows="5" placeholder="Body Deskripsi" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <div class="mb-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Kirim Email</button>
            </div>
        </form>
    </div>
</div>
@endsection
