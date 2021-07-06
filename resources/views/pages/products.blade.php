@extends('layouts.app')

@section('header')
    <h1 class="text-5xl" style="font-family: Rockwell;">Products</h1>
    <div class="pb-4">View &amp; Update Your Products</div>
@endsection

@section('breadcrumbs')
    <div class="flex items-center">
        <div><a href="/">Home</a></div>
        <div class="px-3">></div>
        <div class="font-bold">Products</div>
    </div>
@endsection

@section('content')
    @php
    $items = [
        ['Collards', false], //
        ['Mustard Greens', false],
        ['Kale', true],
    ];
    @endphp
    <div class="flex justify-between text-center">
        @foreach ($items as $item)
            <div class="flex flex-wrap justify-center">
                <div class="mb-4" @click="toggleItem('{{ $item[0] }}')">
                    <div style="width: 6rem; padding-top: 100%" class="bg-gray-300 rounded-full"></div>
                    <div v-if="selectedItems.includes('{{ $item[0] }}')" class="absolute top-0 right-0 -m-4">
                        <div class="text-white bg-green-500 rounded-full shadow-lg" style="width: 4rem; padding-top: 100%">
                            <div
                                class="absolute top-0 left-0 flex flex-col items-center justify-center w-full h-full text-3xl">
                                <i class="absolute material-icons-outlined">check</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full">{{ $item[0] }}</div>
            </div>
        @endforeach
    </div>
    <div class="flex justify-center pt-8">
        <div>
            <x-btn href="products/view" dark="true" text="Edit"></x-btn>
        </div>
    </div>
@endsection
