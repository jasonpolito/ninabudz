@extends('layouts.app')

@section('header')
    <h1 class="text-5xl" style="font-family: Rockwell;">Products</h1>
    <div class="pb-4">View &amp; Update Your Products</div>
@endsection

@section('breadcrumbs')
    <div class="flex items-center">
        <div><a href="/">Home</a></div>
        <div class="px-3">></div>
        <div><a href="/products">Products</a></div>
        <div class="px-3">></div>
        <div class="font-bold">Edit Product</div>
    </div>
@endsection

@section('content')
    @php
    $items = [
        ['Collards', false], //
    ];
    @endphp
    <div class="flex items-center mb-6">
        @foreach ($items as $item)
            <div>
                <div style="width: 6rem; padding-top: 100%" class="bg-gray-300 rounded-full"></div>
            </div>
            <div class="w-full pl-8">
                <div class="text-4xl ">{{ $item[0] }}</div>
            </div>
        @endforeach
    </div>
    @php
    $items = [
        ['Unit type', 'Heads'], //
        ['Number of units', '8'],
        ['Price per unit', '$2.99'],
    ];
    @endphp
    @foreach ($items as $item)
        <div>
            <div>{{ $item[0] }}</div>
            <div><input type="text"
                    class="w-full px-6 pt-4 pb-2 mt-2 mb-6 text-3xl text-green-800 border-4 border-green-800 rounded"
                    value="{{ $item[1] }}"></div>
        </div>
    @endforeach


    <div class="flex justify-center pt-8">
        <div>
            <x-btn href="products" dark="true" text="Confirm"></x-btn>
        </div>
    </div>
@endsection
