@extends('layouts.app')

@section('content')
    <section class="py-24 bg-white">
        <div class="w-full max-w-7xl mx-auto px-4 md:px-8">
            <div class="main-data p-8 sm:p-14 bg-gray-50 rounded-3xl">
                <h2 class="text-center font-manrope font-semibold text-4xl text-black mb-16">Захиалгийн түүх</h2>
                <div class="grid grid-cols-8 pb-9">
                    <div class="col-span-8 lg:col-span-4">
                        <p class="font-medium text-lg leading-8 text-indigo-600">Бараа </p>
                    </div>
                    <div class="col-span-1 max-lg:hidden">
                        <p class="font-medium text-lg leading-8 text-gray-600 text-center">Барааны үнэ </p>
                    </div>
                    <div class="col-span-1 max-lg:hidden flex items-center justify-center">
                        <p class="font-medium text-lg leading-8 text-gray-600">Тоо ширхэг </p>
                    </div>
                    <div class="col-span-2 max-lg:hidden">
                        <p class="font-medium text-center text-lg leading-8 text-gray-500">Захиалсан огноо</p>
                    </div>
                </div>

                @forelse($orders as $order)
                    @foreach($order->cart->items as $item)
                        <div
                            class="box p-8 rounded-3xl bg-gray-100 grid grid-cols-8 mb-7 cursor-pointer transition-all duration-500 hover:bg-indigo-50 max-lg:max-w-xl max-lg:mx-auto">

                            <div class="col-span-8 sm:col-span-4 lg:col-span-1 sm:row-span-4 lg:row-span-1">
                                <img src="{{ Storage::url($item->product->image) }}" alt="earbuds image" class="max-lg:w-auto max-sm:mx-auto rounded-xl object-cover">
                            </div>
                            <div
                                class="col-span-8 sm:col-span-4 lg:col-span-3 flex h-full justify-center pl-4 flex-col max-lg:items-center">
                                <h5 class="font-manrope font-semibold text-2xl leading-9 text-black mb-1 whitespace-nowrap">
                                    {{ $item->product->name }}</h5>
                                <p class="font-normal text-base leading-7 text-gray-600 max-md:text-center">White</p>
                            </div>

                            <div class="col-span-8 sm:col-span-4 lg:col-span-1 flex items-center justify-center">
                                <p class="font-semibold text-xl leading-8 text-black">{{ $item->product->price }}</p>
                            </div>
                            <div class="col-span-8 sm:col-span-4 lg:col-span-1 flex items-center justify-center ">
                                <p class="font-semibold text-xl leading-8 text-indigo-600 text-center">{{ $item->quantity }}</p>
                            </div>
                            <div class="col-span-8 sm:col-span-4 lg:col-span-2 flex items-center justify-center ">
                                <p class="font-semibold text-xl leading-8 text-black">{{ $order->created_at }}</p>
                            </div>
                        </div>
                    @endforeach
                @empty
                    <h1>Захиалга байхгүй байна</h1>
                @endforelse


            </div>
        </div>
    </section>

@endsection
