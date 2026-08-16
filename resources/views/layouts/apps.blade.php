<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', $homepage->hero_title ?? 'Company Profile')</title>

    <!-- Google Fonts: Inter & Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS & Alpine.js -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, .font-heading { font-family: 'Montserrat', sans-serif; }

        /* Smooth Gradient Background Hero */
        .hero-gradient {
            background: linear-gradient(115deg, #2563eb 0%, #3b82f6 35%, #4f46e5 70%, #6366f1 100%);
        }

        /* Glassmorphism Badge */
        .glass-badge {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.25);
        }

        /* Glassmorphism Button */
        .btn-glass {
            background: rgba(255, 255, 255, 0.18);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .btn-glass:hover {
            background: rgba(255, 255, 255, 0.28);
        }

        /* Floating Badge Design */
        .floating-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.2);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col bg-slate-50 text-slate-800 antialiased">
    @yield('navbar')

    <main class="flex-grow pt-8">
        @yield('content')
    </main>

    @yield('footer')
</body>