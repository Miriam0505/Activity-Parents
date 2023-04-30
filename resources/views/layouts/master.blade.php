<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')
        
        @include('shared.head')
        <div class="container py-4">
            <div class="row mb-4">
                <div class="col text-center">
                    <div class="py-4 bg-primary">
                        <h1 class="mb-0 text-white">{{ $page_title }}</h1> 
                        </header>
                    </div>
                </div>
            </div> 
@yield('botones')
@yield('content')
@yield('buttons')
</div>
@include('shared.footer')