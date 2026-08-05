<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin Company Profile</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            min-height: 100vh;
            background-color: #f4f6f9;
        }

        /* Layout Sidebar */
        aside {
            width: 250px;
            background-color: #1e293b;
            color: #fff;
            padding: 20px;
        }

        aside h2 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        aside ul {
            list-style: none;
        }

        aside ul li {
            margin-bottom: 12px;
        }

        aside a {
            color: #cbd5e1;
            text-decoration: none;
        }

        aside hr {
            margin: 20px 0;
            border-color: #334155;
        }

        /* Layout Area Utama (Main) */
        main {
            flex: 1;
            padding: 25px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        hr {
            margin: 20px 0;
            border: 0;
            border-top: 1px solid #e2e8f0;
        }

        /* Container Kartu Statistik */
        section div {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }

        /* Elemen Kartu */
        section div > div {
            background: #fff;
            padding: 15px 20px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            min-width: 200px;
            display: block;
        }

        /* Tabel Layout */
        table {
            width: 100%;
            background: #fff;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table th, table td {
            border: 1px solid #cbd5e1;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #e2e8f0;
        }
    </style>
</head>
<body>

    <!-- SIDEBAR NAVIGASI -->
    <aside>
        <h2>Admin Panel</h2>
        <nav>
            <ul>
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <!-- Menu tugas Raka -->
                <li><a href="{{ route('admin.homepage.edit') }}">Kelola Homepage</a></li>
                <!-- Menu tugas Magfi & Ajas -->
                <li><a href="{{ route('admin.pages.index') }}">Kelola Pages / Service</a></li>
            </ul>
        </nav>
        <hr>
        <!-- Tombol Logout -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </aside>

    <main>
        <!-- TOPBAR / HEADER -->
        <header>
            <h1>Dashboard</h1>
            <p>Selamat Datang, <strong>{{ Auth::user()->name ?? 'Admin' }}</strong>!</p>
            <a href="{{ route('home') }}" target="_blank">Lihat Website Utama &rarr;</a>
        </header>

        <hr>

        <!-- RINGKASAN STATISTIK (CARDS) -->
        <section>
            <h3>Ringkasan Konten</h3>
            <div>
                <!-- Statistik Layanan/Portfolio -->
                <div>
                    <h4>Total Service / Portfolio</h4>
                    <p>{{ $totalPages }} Halaman</p>
                </div>

                <!-- Statistik Status Admin -->
                <div>
                    <h4>Status Akun</h4>
                    <p>Active (Administrator)</p>
                </div>
            </div>
        </section>

        <hr>

        <!-- PINTASAN CEPAT (QUICK ACTIONS) -->
        <section>
            <h3>Akses Cepat</h3>
            <ul>
                <li>
                    <a href="{{ route('admin.homepage.edit') }}">Edit Tampilan Homepage</a>
                </li>
                <li>
                    <a href="{{ route('admin.pages.create') }}">Tambah Service / Portfolio Baru</a>
                </li>
            </ul>
        </section>

        <hr>

        <!-- TABEL KONTEN TERBARU -->
        <section>
            <h3>Halaman Terakhir Diperbarui</h3>
            <table border="1" cellpadding="8" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Halaman</th>
                        <th>Slug</th>
                        <th>Tanggal Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($recentPages as $index => $page)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $page->title }}</td>
                            <td>{{ $page->slug }}</td>
                            <td>{{ $page->created_at ? $page->created_at->format('d-m-Y H:i') : '-' }}</td>
                            <td>
                                <a href="{{ route('admin.pages.edit', $page) }}">Edit</a> |
                                <a href="{{ route('page.show', $page->slug) }}" target="_blank">Lihat</a>
                            </td>
                        </tr>
                    @empty
                        <!-- Contoh Tampilan Kosong jika belum ada data -->
                        <tr>
                            <td colspan="5" align="center">Belum ada data halaman / service.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </section>
    </main>

</body>
</html>
