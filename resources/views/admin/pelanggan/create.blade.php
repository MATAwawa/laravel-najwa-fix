<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f6f9; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .sidebar { min-height: 100vh; background-color: #1f2937; color: #fff; }
        .sidebar .nav-link { color: #d1d5db; border-radius: 8px; margin-bottom: 6px; padding: 10px 15px; display: flex; align-items: center; gap: 10px; }
        .sidebar .nav-link:hover, .sidebar .nav-link.active { background-color: #374151; color: #ffffff; }
        .card-form { border: none; border-radius: 12px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05); }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar p-3">
            <h5 class="fw-bold px-2 py-3 border-bottom border-secondary mb-3">⚡ Volt Overview</h5>
            <ul class="nav flex-column pt-2">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <span>📊</span><span class="sidebar-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="{{ route('pelanggan.index') }}" class="nav-link active">
                        <span>👥</span><span class="sidebar-text">Pelanggan</span>
                    </a>
                </li>
            </ul>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-1">
                            <li class="breadcrumb-item"><a href="{{ route('pelanggan.index') }}" class="text-decoration-none">Pelanggan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                        </ol>
                    </nav>
                    <h3 class="fw-bold mb-0">Tambah Pelanggan</h3>
                    <small class="text-muted">Form untuk menambahkan data pelanggan baru.</small>
                </div>
                <a href="{{ route('pelanggan.index') }}" class="btn btn-dark">Kembali</a>
            </div>

            <div class="card card-form p-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('pelanggan.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="first_name" class="form-label fw-semibold">First name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}">
                        </div>

                        <div class="col-md-4">
                            <label for="birthday" class="form-label fw-semibold">Birthday</label>
                            <input type="date" class="form-control" id="birthday" name="birthday" value="{{ old('birthday') }}">
                        </div>

                        <div class="col-md-4">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="col-md-4">
                            <label for="last_name" class="form-label fw-semibold">Last name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}">
                        </div>

                        <div class="col-md-4">
                            <label for="gender" class="form-label fw-semibold">Gender</label>
                            <select class="form-select" id="gender" name="gender">
                                <option value="">Gender</option>
                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="phone" class="form-label fw-semibold">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                        </div>
                    </div>

                    <div class="mt-4 d-flex gap-2">
                        <button type="submit" class="btn btn-dark px-4">Simpan</button>
                        <a href="{{ route('pelanggan.index') }}" class="btn btn-outline-warning px-4">Batal</a>
                    </div>
                </form>
            </div>
        </main>
    </div>
</div>

</body>
</html>