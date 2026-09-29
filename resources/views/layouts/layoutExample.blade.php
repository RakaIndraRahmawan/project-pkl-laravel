@extends('layouts.apps')

@section('title', ($setting->company_name ?? 'Company Profile') . ' - Beranda')

@section('style')
    <style>
        .classExample {
            background-color: white;
        }
    </style>
@endsection

@section('content')
    <section class='classExample'>
        <p>Example</p>
    </section>
@endsection

@section('script')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true, // Animasi hanya berjalan 1 kali
            duration: 800, // Durasi animasi (ms)
            easing: 'ease-out-cubic',
        });
    </script>
@endsection