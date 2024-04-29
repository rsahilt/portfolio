<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <!-- bootstrap connection link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- @vite('resources/css/app.css') -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom bg-custom-adm-header">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">IAMSAHIR.</span>
        </a>
      
        <!-- search box -->
        <div class="form-outline" data-mdb-input-init>
            <input type="search" id="form1" class="form-control" placeholder="Search"/>
        </div>

        <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="admin-nav nav-link" aria-current="page">Dashboard</a></li>
        <li class="nav-item"><a href="#" class="admin-nav nav-link">Responses</a></li>
        </ul>
    </header>
</body>
</html>