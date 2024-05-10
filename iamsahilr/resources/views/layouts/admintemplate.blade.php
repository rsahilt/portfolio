<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;600&family=Russo+One&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- bootstrap connection link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- @vite('resources/css/app.css') -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <header class="d-flex flex-wrap justify-content-center py-3 bg-custom-adm-header">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">IAMSAHILR.</span>
        </a>
      
        <!-- search box -->
        <div class="form-outline" data-mdb-input-init>
            <input type="search" id="form1" class="form-control" placeholder="Search"/>
        </div>

        <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="admin-nav nav-link" aria-current="page">Logout</a></li>
        </ul>
    </header>

    <section class="adminsection bg-custom-adm-header">

        <!-- dashboard sidebar -->
        <div class="adminsidebar bg-custom-adm-header">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-whiter" style="width: 100%;">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li>
                        <a href=" {{ route('admin.dashboard') }} " class="nav-link">
                        <i class="fa fa-tachometer"></i> &nbsp;
                        Dashboard
                        </a>
                    </li>
                    
                    <li>
                        <a href="{{ route('admin.messages') }}" class="nav-link">
                        <i class="fa fa-envelope"></i> &nbsp;
                        Messages
                        </a>
                    </li>

                    <!-- <li>
                        <a href="#" class="nav-link">
                        <i class="fa fa-calendar"></i> &nbsp;
                        Calendar
                        </a>
                    </li> -->

                    <!-- <li>
                        <a href="#" class="nav-link">
                        <i class="fa fa-question-circle"></i> &nbsp;
                        FAQ
                        </a>
                    </li> -->

                    <!-- <li>
                        <a href="#" class="nav-link">
                        <i class="fa fa-chart-area"></i> &nbsp;
                        Analytics
                        </a>
                    </li> -->

                    <!-- <li>
                        <a href="#" class="nav-link">
                        <i class="fa fa-exclamation-triangle"></i> &nbsp;
                        Errors
                        </a>
                    </li> -->

                    <li>
                        <a href="/" class="nav-link">
                        <i class="fa fa-globe"></i> &nbsp;
                        Landing Page
                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="dashboardcontent">
            <!-- this links the content section from another blade -->
            @yield('content')
        </div>

    </section>

    <footer class="adminfooter bg-custom-adm-header">
        <p>Copyright<sup>&copy;</sup> 2024, Sahil Rajbhandari, Canada</p>
    </footer>
</body>
</html>