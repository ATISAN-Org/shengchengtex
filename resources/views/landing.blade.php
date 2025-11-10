@extends('layouts.app')

@section('title', 'Shengcheng Textile')

@section('content')
    @include('components.banner')

    <section id="about">
        @include('components.about')
    </section>

    <section id="products">
        @include('components.products-preview', ['products' => $products, 'categories' => $categories])
    </section>

    <section id="clients">
        @include('components.clients', ['clients' => $clients])
    </section>

    <section id="contact">
        @include('components.contact')
    </section>




@endsection