@section('footer')
    <footer class="bg-gray-900 text-white py-8 text-center text-sm">
        <p>&copy; {{ date('Y') }} {{ $homepage->hero_title ?? 'Company Profile' }}. All rights reserved.</p>
    </footer>
@endsection
