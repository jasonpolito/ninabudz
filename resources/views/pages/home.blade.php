@extends('layouts.app')

@section('header')
    <div class="pb-4">TODAY, {{ now()->format('F jS, Y') }}</div>
    <h1 class="text-5xl" style="font-family: Rockwell;">Welcome</h1>
@endsection

@section('content')
    <div>
        <x-btn text="Products" href="products" icon="format_list_bulleted" />
        <x-btn text="Orders" icon="shopping_cart" />
    </div>
@endsection
