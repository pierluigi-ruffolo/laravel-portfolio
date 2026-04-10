<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-light">
    <div id="app" class="d-flex">

        <nav id="sidebar" class="bg-dark vh-100 position-fixed d-flex flex-column p-3">
            <h4 class="text-primary fw-bold mb-4 px-3">Admin</h4>

            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : 'text-white' }}">
                        <i class="bi bi-speedometer2 me-2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.projects.index') }}"
                        class="nav-link {{ request()->routeIs('admin.projects.index') ? 'active' : 'text-white' }}">
                        <i class="bi bi-person me-2"></i> Progetti
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.types.index') }}"
                        class="nav-link {{ request()->routeIs('admin.types.index') ? 'active' : 'text-white' }}">
                        <i class="bi bi-person me-2"></i> Tipologie
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profile.edit') }}"
                        class="nav-link {{ request()->routeIs('profile.edit') ? 'active' : 'text-white' }}">
                        <i class="bi bi-person me-2"></i> Profilo
                    </a>
                </li>

            </ul>

            <hr class="text-white-50">

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-danger w-100 shadow-sm">
                    <i class="bi bi-box-arrow-left me-2"></i> Esci
                </button>
            </form>
        </nav>

        <main id="content" class="p-4">
            <div class="container-fluid">
                @yield('content')
            </div>
        </main>

    </div>
</body>

</html>