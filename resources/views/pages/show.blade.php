@extends('layouts.apps')

@section('title', $page->title)

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('content')
    <div class="max-w-4xl mx-auto px-4 py-12">
        <a href="{{ route('home') }}" class="text-blue-600 font-semibold mb-6 inline-block">&larr; Kembali ke Beranda</a>

        <p class="text-blue-500 text-sm font-medium tracking-wide mb-3">{{ ucfirst($page->tag) }}</p>
        <h1 class="text-4xl font-extrabold mb-4">{{ ucfirst($page->title) }}</h1>
        <p class="text-gray-500 italic mb-6">{{ $page->desc }}</p>

        @if($page->image)
            <img src="{{ asset('storage/' . $page->image) }}" alt="{{ $page->title }}" class="w-full h-80 object-cover rounded-xl shadow mb-8">
        @endif

        <div class="prose max-w-none text-gray-700 leading-relaxed whitespace-pre-line">
            {!! $page->content !!}
            </br>
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

