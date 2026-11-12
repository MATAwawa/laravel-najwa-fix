<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Data Pelanggan - Volt Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2f4f6;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            color: #1f2937;
        }
        .sidebar {
            width: 260px;
            min-height: 100vh;
            background-color: #1f2937;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
        }
        .sidebar .nav-link {
            color: #d1d5db;
            border-radius: 0.5rem;
            padding: 0.65rem 1rem;
            margin-bottom: 0.25rem;
            display: flex;
            align-items: center;
            font-size: 0.95rem;
        }
        .sidebar .nav-link:hover, .sidebar .nav-item.active .nav-link {
            background-color: #374151;
            color: #ffffff;
        }
        .sidebar-icon {
            width: 20px;
            height: 20px;
            margin-right: 0.75rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .content {
            margin-left: 260px;
            padding: 1.5rem 2rem;
        }
        .card {
            border: 0;
            border-radius: 0.75rem;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.04);
        }
        .thead-light th {
            background-color: #f9fafb;
            color: #374151;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-bottom: 1px solid #e5e7eb;
            padding: 0.85rem 1rem;
        }
        .table td {
            padding: 0.9rem 1rem;
            vertical-align: middle;
            border-bottom: 1px solid #f3f4f6;
        }
        .icon-xs {
            width: 16px;
            height: 16px;
        }
        .icon-xxs {
            width: 14px;
            height: 14px;
        }
        .icon-sm {
            width: 20px;
            height: 20px;
        }
        @media (max-width: 991.98px) {
            .sidebar {
                position: static;
                width: 100%;
                min-height: auto;
            }
            .content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
    <!-- Mobile Navbar -->
    <nav class="navbar navbar-dark bg-dark px-4 col-12 d-lg-none">
        <a class="navbar-brand me-lg-5 fw-bold" href="{{ route('dashboard') }}">Volt Overview</a>
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <!-- Sidebar -->
    <nav id="sidebarMenu" class="sidebar d-lg-block text-white collapse">
        <div class="sidebar-inner px-3 pt-4">
            <ul class="nav flex-column pt-2">
                <li class="nav-item mb-2">
                    <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center fw-bold text-white">
                        <span class="sidebar-icon text-warning">
                            <svg class="icon-sm" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span>Volt Overview</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon-xs" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                        </span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="{{ route('pelanggan.index') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon-xs" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z"></path>
                            </svg>
                        </span>
                        <span>Pelanggan</span>
                    </a>
                </li>

                <hr class="my-3 border-secondary">

                <li class="nav-item">
                    <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/" target="_blank" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon-xs" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span>Documentation <span class="badge bg-warning text-dark ms-1">v1.4</span></span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="content">
        <!-- Top Navbar -->
        <nav class="navbar navbar-top navbar-expand px-0 pb-3">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100 align-items-center">
                    <form class="d-flex" style="max-width: 280px;">
                        <div class="input-group bg-white rounded border">
                            <span class="input-group-text bg-white border-0 text-muted">
                                <svg class="icon-xs" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <input type="text" class="form-control border-0 shadow-none" placeholder="Search">
                        </div>
                    </form>

                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item me-3 text-dark">
                            <svg class="icon-sm" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1