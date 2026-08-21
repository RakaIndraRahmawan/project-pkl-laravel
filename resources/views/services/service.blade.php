<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Layanan - Company Profile</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            color: #0f172a;
            background: #f8fafc;
        }

        /* ================= NAVBAR ================= */

        .navbar {
            height: 78px;
            background: #0f172a;
            border-bottom: 1px solid rgba(255,255,255,0.08);

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 11%;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;

            color: white;
            text-decoration: none;
            font-size: 22px;
            font-weight: 700;
        }

        .logo-box {
            width: 46px;
            height: 46px;

            border-radius: 14px;

            background: linear-gradient(
                135deg,
                #315bea,
                #4f46e5
            );

            display: flex;
            align-items: center;
            justify-content: center;

            color: white;
            font-size: 18px;
            font-weight: bold;

            box-shadow: 0 8px 20px rgba(49,91,234,0.3);
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 42px;
        }

        .nav-menu a {
            color: #cbd5e1;
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;

            transition: 0.3s;
        }

        .nav-menu a:hover,
        .nav-menu a.active {
            color: #60a5fa;
        }

        .login-btn {
            padding: 11px 24px;

            border-radius: 25px;

            border: 1px solid #475569;
            background: rgba(255,255,255,0.06);

            color: white !important;

            transition: 0.3s;
        }

        .login-btn:hover {
            background: #2563eb;
            border-color: #2563eb;
        }

        /* ================= HERO ================= */

        .hero {
            position: relative;

            min-height: 530px;

            display: flex;
            align-items: center;
            justify-content: center;

            text-align: center;

            overflow: hidden;

            background:
                radial-gradient(
                    circle at 50% 20%,
                    rgba(37,99,235,0.18),
                    transparent 35%
                ),
                linear-gradient(
                    135deg,
                    #020617,
                    #030b25,
                    #06112d
                );
        }

        /* Grid background */

        .hero::before {
            content: "";

            position: absolute;
            inset: 0;

            background-image:
                linear-gradient(
                    rgba(255,255,255,0.025) 1px,
                    transparent 1px
                ),
                linear-gradient(
                    90deg,
                    rgba(255,255,255,0.025) 1px,
                    transparent 1px
                );

            background-size: 50px 50px;

            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 2;

            max-width: 900px;
            padding: 50px 20px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 9px;

            padding: 12px 22px;

            border-radius: 30px;

            background: rgba(30,41,59,0.65);
            border: 1px solid rgba(148,163,184,0.25);

            color: #93c5fd;

            font-size: 16px;
            font-weight: 600;

            margin-bottom: 28px;

            backdrop-filter: blur(10px);
        }

        .badge-dot {
            width: 10px;
            height: 10px;

            background: #34d399;

            border-radius: 50%;

            box-shadow: 0 0 12px #34d399;
        }

        .hero h1 {
            font-size: clamp(55px, 7vw, 92px);

            line-height: 1;

            font-weight: 800;

            color: white;

            margin-bottom: 25px;
        }

        .hero h1 span {
            background: linear-gradient(
                90deg,
                #60a5fa,
                #6366f1
            );

            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            max-width: 760px;

            margin: auto;

            color: #cbd5e1;

            font-size: 18px;

            line-height: 1.7;
        }

        /* Decorative dots */

        .dot {
            position: absolute;

            width: 9px;
            height: 9px;

            border-radius: 50%;

            background: #60a5fa;

            box-shadow: 0 0 15px rgba(96,165,250,0.8);
        }

        .dot-1 {
            left: 12%;
            top: 22%;
        }

        .dot-2 {
            right: 15%;
            top: 38%;

            background: #818cf8;
        }

        .dot-3 {
            left: 20%;
            bottom: 18%;

            background: #34d399;

            box-shadow: 0 0 15px rgba(52,211,153,0.8);
        }

        /* ================= SERVICES ================= */

        .services {
            padding: 90px 11%;

            background: #f8fafc;
        }

        .section-header {
            text-align: center;

            max-width: 750px;

            margin: 0 auto 55px;
        }

        .section-header h2 {
            font-size: 42px;

            color: #0f172a;

            margin-bottom: 15px;
        }

        .section-header h2 span {
            color: #2563eb;
        }

        .section-header p {
            color: #64748b;

            font-size: 17px;

            line-height: 1.7;
        }

        .service-grid {
            max-width: 1200px;

            margin: auto;

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 24px;
        }

        .service-card {
            position: relative;

            padding: 32px;

            background: white;

            border: 1px solid #e2e8f0;

            border-radius: 20px;

            box-shadow: 0 8px 25px rgba(15,23,42,0.05);

            transition: 0.3s ease;

            overflow: hidden;
        }

        .service-card::before {
            content: "";

            position: absolute;

            top: 0;
            left: 0;

            width: 100%;
            height: 4px;

            background: linear-gradient(
                90deg,
                #2563eb,
                #6366f1
            );

            transform: scaleX(0);

            transform-origin: left;

            transition: 0.3s;
        }

        .service-card:hover {
            transform: translateY(-8px);

            border-color: #bfdbfe;

            box-shadow: 0 18px 40px rgba(37,99,235,0.12);
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-icon {
            width: 58px;
            height: 58px;

            border-radius: 16px;

            background: #eff6ff;

            color: #2563eb;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 26px;

            margin-bottom: 23px;
        }

        .service-card h3 {
            font-size: 21px;

            margin-bottom: 12px;

            color: #0f172a;
        }

        .service-card p {
            color: #64748b;

            font-size: 15px;

            line-height: 1.7;

            margin-bottom: 20px;
        }

        .service-link {
            color: #2563eb;

            text-decoration: none;

            font-weight: 600;

            font-size: 14px;
        }

        .service-link:hover {
            color: #1d4ed8;
        }

        /* ================= CTA ================= */

        .cta {
            padding: 85px 20px;

            text-align: center;

            background: white;

            border-top: 1px solid #e2e8f0;
        }

        .cta h2 {
            font-size: 32px;

            color: #0f172a;

            margin-bottom: 14px;
        }

        .cta p {
            color: #64748b;

            font-size: 17px;

            margin-bottom: 28px;
        }

        .cta-button {
            display: inline-block;

            padding: 13px 27px;

            color: white;

            background: #2563eb;

            border-radius: 9px;

            text-decoration: none;

            font-weight: 600;

            transition: 0.3s;
        }

        .cta-button:hover {
            background: #1d4ed8;

            transform: translateY(-2px);
        }

        /* ================= FOOTER ================= */

        footer {
            height: 72px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #0f172a;

            color: #94a3b8;

            font-size: 14px;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 1000px) {

            .navbar {
                padding: 0 5%;
            }

            .service-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .nav-menu {
                gap: 20px;
            }
        }

        @media (max-width: 700px) {

            .navbar {
                height: auto;

                padding: 15px 5%;

                flex-wrap: wrap;

                gap: 15px;
            }

            .nav-menu {
                width: 100%;

                justify-content: center;

                flex-wrap: wrap;

                gap: 15px;
            }

            .hero {
                min-height: 500px;
            }

            .hero h1 {
                font-size: 52px;
            }

            .hero p {
                font-size: 16px;
            }

            .services {
                padding: 65px 5%;
            }

            .section-header h2 {
                font-size: 34px;
            }

            .service-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- ================= NAVBAR ================= -->

    <nav class="navbar">

        <a href="{{ url('/') }}" class="logo">
            <div class="logo-box">
                CP
            </div>

            CompanyProfile
        </a>

        <div class="nav-menu">

            <a href="{{ url('/') }}">
                Home
            </a>

            <a href="{{ route('tentang') }}">
                Tentang Kami
            </a>

            <a href="{{ route('layanan') }}" class="active">
                Layanan
            </a>

            <a href="{{ route('portfolio') }}">
                Portfolio
            </a>

            <a href="{{ route('kontak') }}">
                Kontak
            </a>

            <a href="{{ route('login') }}" class="login-btn">
                Login Admin
            </a>

        </div>

    </nav>


    <!-- ================= HERO ================= -->

    <section class="hero">

        <div class="dot dot-1"></div>
        <div class="dot dot-2"></div>
        <div class="dot dot-3"></div>

        <div class="hero-content">

            <div class="badge">
                <span class="badge-dot"></span>

                Solusi Digital
            </div>

            <h1>
                <span>Layanan</span> Kami
            </h1>

            <p>
                Kami menyediakan berbagai layanan digital profesional
                untuk membantu bisnis Anda berkembang, tampil lebih modern,
                dan memberikan pengalaman terbaik bagi pelanggan.
            </p>

        </div>

    </section>


    <!-- ================= SERVICES ================= -->

    <section class="services">

        <div class="section-header">

            <h2>
                Apa yang <span>Kami Tawarkan?</span>
            </h2>

            <p>
                Solusi digital yang dirancang untuk membantu kebutuhan
                bisnis Anda dengan teknologi modern dan hasil yang berkualitas.
            </p>

        </div>


        <div class="service-grid">

            <!-- Service 1 -->

            <div class="service-card">

                <div class="service-icon">
                    &lt;/&gt;
                </div>

                <h3>
                    Web Development
                </h3>

                <p>
                    Membangun website modern, responsif, cepat,
                    dan sesuai dengan kebutuhan bisnis Anda.
                </p>

                <a href="{{ route('kontak') }}" class="service-link">
                    Pelajari lebih lanjut →
                </a>

            </div>


            <!-- Service 2 -->

            <div class="service-card">

                <div class="service-icon">
                    ◈
                </div>

                <h3>
                    UI/UX Design
                </h3>

                <p>
                    Merancang tampilan website yang menarik,
                    mudah digunakan, dan memberikan pengalaman
                    pengguna yang nyaman.
                </p>

                <a href="{{ route('kontak') }}" class="service-link">
                    Pelajari lebih lanjut →
                </a>

            </div>


            <!-- Service 3 -->

            <div class="service-card">

                <div class="service-icon">
                    ✦
                </div>

                <h3>
                    Digital Solution
                </h3>

                <p>
                    Menghadirkan solusi digital inovatif untuk
                    membantu meningkatkan efektivitas dan produktivitas bisnis.
                </p>

                <a href="{{ route('kontak') }}" class="service-link">
                    Pelajari lebih lanjut →
                </a>

            </div>


            <!-- Service 4 -->

            <div class="service-card">

                <div class="service-icon">
                    ◎
                </div>

                <h3>
                    Website Maintenance
                </h3>

                <p>
                    Menjaga website tetap aman, stabil, dan berjalan
                    dengan baik melalui pemeliharaan secara berkala.
                </p>

                <a href="{{ route('kontak') }}" class="service-link">
                    Pelajari lebih lanjut →
                </a>

            </div>


            <!-- Service 5 -->

            <div class="service-card">

                <div class="service-icon">
                    ⚙
                </div>

                <h3>
                    System Development
                </h3>

                <p>
                    Mengembangkan sistem informasi yang membantu
                    perusahaan mengelola proses bisnis secara lebih efisien.
                </p>

                <a href="{{ route('kontak') }}" class="service-link">
                    Pelajari lebih lanjut →
                </a>

            </div>


            <!-- Service 6 -->

            <div class="service-card">

                <div class="service-icon">
                    ↗
                </div>

                <h3>
                    Digital Marketing
                </h3>

                <p>
                    Membantu meningkatkan kehadiran digital bisnis
                    agar dapat menjangkau lebih banyak pelanggan.
                </p>

                <a href="{{ route('kontak') }}" class="service-link">
                    Pelajari lebih lanjut →
                </a>

            </div>

        </div>

    </section>


    <!-- ================= CTA ================= -->

    <section class="cta">

        <h2>
            Siap Mengembangkan Bisnis Anda?
        </h2>

        <p>
            Mari wujudkan kebutuhan digital Anda bersama tim kami.
        </p>

        <a href="{{ route('kontak') }}" class="cta-button">
            Hubungi Kami →
        </a>

    </section>


    <!-- ================= FOOTER ================= -->

    <footer>
        © {{ date('Y') }} Company Profile. All rights reserved.
    </footer>

</body>
</html>