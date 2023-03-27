<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen" style="
background:rgba(0,0,0,0.7) url('/image/bg.jpg') no-repeat;
background-size: cover; 
background-position:center ;
background-blend-mode: darken;">
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
            <a href="/" class="flex items-center">
                <img src="/image/logo.png" class="h-6 mr-3 sm:h-9" alt="e-pago Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white" style="font-family: 'Poppins', sans-serif;">e-PAGO</span>
            </a>
            <div class="mt-1" style="font-family: 'Poppins', sans-serif;">
      
                <div class="inline-flex rounded-md shadow-sm" role="group" style="font-family: 'Poppins', sans-serif;">
                    <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white transition duration-150 ease-out hover:ease-in"> <a href="{{ route('login') }}">Login</a>
                    </button>
                    <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-r-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white transition duration-150 ease-out hover:ease-in">
                      <a href="{{ route('registration') }}">Register</a>
                    </button>
                  </div>
                </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>
      
</body>
</html>