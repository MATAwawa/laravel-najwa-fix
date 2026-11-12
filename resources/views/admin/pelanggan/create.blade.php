<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Edit Pelanggan - Volt Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { background-color: #f2f4f6; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; color: #1f2937; display: flex; min-height: 100vh; }
        a { text-decoration: none; }
        ul { list-style: none; }
        .sidebar { width: 250px; min-height: 100vh; background-color: #1f2937; color: #ffffff; padding: 1.5rem 1rem; flex-shrink: 0; }
        .sidebar-brand { display: flex; align-items: center; color: #ffffff; font-weight: 700; font-size: 1.1rem; padding: 0.5rem 0.75rem; margin-bottom: 1.25rem; }
        .sidebar-brand svg { color: #f59e0b; margin-right: 0.65rem; }
        .nav-link { display: flex; align-items: center; color: #d1d5db; padding: 0.65rem 0.9rem; border-radius: 0.5rem; margin-bottom: 0.35rem; font-size: 0.92rem; }
        .nav-link:hover, .nav-link.active { background-color: #374151; color: #ffffff; }
        .nav-link svg { margin-right: 0.75rem; flex-shrink: 0; }
        .sidebar-divider { border: 0; border-top: 1px solid #374151; margin: 1.25rem 0; }
        .badge-warning { background-color: #fbbf24; color: #1f2937; font-size: 0.7rem; font-weight: 700; padding: 0.15rem 0.45rem; border-radius: 0.25rem; margin-left: 0.5rem; }
        .content { flex: 1; padding: 1.25rem 2rem; }
        .topbar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; }
        .search-box { display: flex; align-items: center; background: #ffffff; border: 1px solid #d1d5db; border-radius: 0.5rem; padding: 0.4rem 0.75rem; width: 260px; }
        .search-box svg { color: #6b7280; margin-right: 0.5rem; }
        .search-box input { border: none; outline: none; width: 100%; font-size: 0.9rem; background: transparent; }
        .topbar-right { display: flex; align-items: center; gap: 1rem; }
        .avatar-circle { width: 34px; height: 34px; border-radius: 50%; background: #1f2937; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.8rem; }
        .breadcrumb { display: flex; align-items: center; gap: 0.4rem; font-size: 0.85rem; color: #6b7280; margin-bottom: 0.6rem; }
        .breadcrumb a { color: #374151; display: inline-flex; align-items: center; }
        .page-header { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; margin-bottom: 1.5rem; }
        .page-title { font-size: 1.5rem; font-weight: 700; color: #111827; margin-bottom: 0.2rem; }
        .page-subtitle { font-size: 0.9rem; color: #6b7280; }
        .card { background: #ffffff; border-radius: 0.75rem; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04); padding: 1.5rem; margin-bottom: 1.5rem; }
        .form-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.25rem; }
        .form-group { margin-bottom: 1rem; }
        .form-label { display: block; font-size: 0.875rem; font-weight: 600; color: #374151; margin-bottom: 0.4rem; }
        .form-control, .form-select { width: 100%; padding: 0.55rem 0.75rem; font-size: 0.9rem; border: 1px solid #d1d5db; border-radius: 0.5rem; background: #ffffff; color: #111827; }
        .form-control:focus, .form-select:focus { outline: none; border-color: #1f2937; }
        .btn { display: inline-flex; align-items: center; justify-content: center; font-weight: 600; font-size: 0.875rem; padding: 0.55rem 1.1rem; border-radius: 0.5rem; border: none; cursor: pointer; }
        .btn-dark { background-color: #1f2937; color: #ffffff; }
        .btn-info { background-color: #0ea5e9; color: #ffffff; }
        .btn-outline { background-color: #ffffff; color: #374151; border: 1px solid #d1d5db; margin-left: 0.5rem; }
        .alert-danger { background-color: #fee2e2; border: 1px solid #fecaca; color: #991b1b; padding: 0.85rem 1rem; border-radius: 0.5rem; margin-bottom: 1.25rem; font-size: 0.875rem; }
        .alert-danger ul { list-style: disc; padding-left: 1.25rem; }
        .footer { background: #ffffff; border-radius: 0.75rem; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04); padding: 1.25rem 1.5rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; font-size: 0.85rem; color: #6b7280; }
        .footer-links { display: flex; gap: 1rem; }
        .footer-links a { color: #6b7280; }
        @media (max-width: 900px) { .form-grid { grid-template-columns: 1fr; } }
        @media (max-width: 768px) { body { flex-direction: column; } .sidebar { width: 100%; min-height: auto; } .content { padding: 1rem; } }
    </style>
</head>

<body>
    <aside class="sidebar">
        <a href="{{ route('dashboard') }}" class="sidebar-brand">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
            </svg>
            <span>Volt Overview</span>
        </a>
        <ul>
            <li>
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('pelanggan.index') }}" class="nav-link active">
                    <svg width="18" height="18" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z"></path>
                    </svg>
                    <span>Pelanggan</span>
                </a>
            </li>
        </ul>
        <hr class="sidebar-divider">
        <ul>
            <li>
                <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/" target="_blank" class="nav-link">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Documentation</span>
                    <span class="badge-warning">v1.4</span>
                </a>
            </li>
        </ul>
    </aside>

    <main class="content">
        <div class="topbar">
            <div class="search-box">
                <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg>
                <input type="text" placeholder="Search">
            </div>
            <div class="topbar-right">
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                </svg>
                <div style="display:flex; align-items:center; gap:0.5rem;">
                    <div class="avatar-circle">BG</div>
                    <span style="font-weight:600; font-size:0.875rem;">Bonnie Green</span>
                </div>
            </div>
        </div>

        <nav class="breadcrumb">
            <a href="{{ route('dashboard') }}">
                <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
            </a>
            <span>/</span>
            <a href="{{ route('pelanggan.index') }}">Pelanggan</a>
            <span>/</span>
            <span>Edit Pelanggan</span>
        </nav>

        <div class="page-header">
            <div>
                <h1 class="page-title">Edit Pelanggan</h1>
                <p class="page-subtitle">Form untuk memperbarui data pelanggan.</p>
            </div>
            <a href="{{ route('pelanggan.index') }}" class="btn btn-dark">Kembali</a>
        </div>

        <div class="card">
            @if ($errors->any())
                <div class="alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('pelanggan.update', $dataPelanggan->pelanggan_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-grid">
                    <div>
                        <div class="form-group">
                            <label for="first_name" class="form-label">First name</label>
                            <input type="text" id="first_name" name="first_name" value="{{ old('first_name', $dataPelanggan->first_name) }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="form-label">Last name</label>
                            <input type="text" id="last_name" name="last_name" value="{{ old('last_name', $dataPelanggan->last_name) }}" class="form-control" required>
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <label for="birthday" class="form-label">Birthday</label>
                            <input type="date" id="birthday" name="birthday" value="{{ old('birthday', $dataPelanggan->birthday) }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="form-label">Gender</label>
                            <select id="gender" name="gender" class="form-select" required>
                                <option value="">-- Pilih --</option>
                                <option value="Male" {{ old('gender', $dataPelanggan->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('gender', $dataPelanggan->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Other" {{ old('gender', $dataPelanggan->gender) == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email', $dataPelanggan->email) }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" id="phone" name="phone" value="{{ old('phone', $dataPelanggan->phone) }}" class="form-control" required>
                        </div>
                        <div style="padding-top: 0.25rem;">
                            <button type="submit" class="btn btn-info">Simpan Perubahan</button>
                            <a href="{{ route('pelanggan.index') }}" class="btn btn-outline">Batal</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <footer class="footer">
            <div>© 2019-2026 <a href="https://themesberg.com" target="_blank" style="color:#2563eb;">Themesberg</a></div>
            <div class="footer-links">
                <a href="https://themesberg.com/about">About</a>
                <a href="https://themesberg.com/themes">Themes</a>
                <a href="https://themesberg.com/blog">Blog</a>
                <a href="https://themesberg.com/contact">Contact</a>
            </div>
        </footer>
    </main>
</body>

</html>