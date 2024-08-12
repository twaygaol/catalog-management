@extends('layouts.app')
@include('layouts.header')
@include('layouts.slider')

    @section('content')
    <div class="container mx-auto mt-8 p-6 bg-white rounded-lg shadow-lg">
        <div class="flex flex-col md:flex-row">
            <!-- Gambar Produk -->
            <div class="w-full md:w-1/2">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-auto rounded-lg object-cover">
            </div>

            <!-- Detail Produk -->
            <div class="w-full md:w-1/2 md:ml-8 mt-6 md:mt-0">
                <h1 class="text-4xl font-bold text-gray-800">{{ $product->name }}</h1>
                <p class="text-2xl text-red-600 mt-4">IDR {{ number_format($product->price, 0, ',', '.') }}</p>
                <p class="text-gray-700 mt-4 leading-relaxed">{{ $product->description }}</p>

                <!-- Detail tambahan -->
                <div class="mt-6">
                    <p class="text-sm text-gray-600"><span class="font-semibold">Kategori:</span> {{ $product->category->name }}</p>
                    <!-- <p class="text-sm text-gray-600 mt-2"><span class="font-semibold">Untuk:</span> {{ ucfirst($product->gender) }}</p> -->
                </div>

                <!-- Tombol Beli -->
                <div class="mt-6">
                    <a 
                        href="https://api.whatsapp.com/send?phone=6285761088663&text=Halo, saya tertarik untuk membeli produk {{ $product->name }} dengan harga IDR.{{ $product->price }}." 
                        target="_blank" 
                        class="mt-8 bg-green-500 text-white px-6 py-3 rounded-lg shadow hover:bg-green-600 transition duration-300 ease-in-out">
                        whatsapp
                    </a>
                </div>

            </div>
        </div>
    </div>

    @section('content')