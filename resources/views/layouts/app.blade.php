<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dipsionary - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --undip-blue: #3C3B6E;
            --undip-yellow: #F9F5EA;
        }
        body {
            font-family: 'Averia Sans Libre';
        }
        .navbar {
            background-color: var(--undip-blue);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .term-card {
            border-left: 4px solid var(--undip-blue);
        }
        .search-box {
            corner-radius: 15;
            border: 2px solid #F9F5EA;
            left: 340px;
            top: 14;
        }
        .rectangle {
            position: absolute;
            left: 316px;
            top: 307px;
            width: 808px;
            height: 337px;
            background-color: var(--undip-yellow);
            border-radius: 17px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .logo {
            width: 100px;
            height: auto;
            margin-bottom: 10px;
        }
        .paragraph {
            font-size: 16px;
            text-align: center;
            color: var(--undip-blue);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand fw-bold fs-3" href="/">DIPSIONARY</a>

            <!-- Search Box -->
            <div class="input-group search-box">
                <input type="text" class="form-control border-0" placeholder="Cari istilah perkuliahan...">
                <button class="btn btn-primary px-4" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
