<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Home</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
          display: none;
        }
      </style>
</head>
<body>
    <x-NavbarDashboard></x-NavbarDashboard>
    <x-SidebarDashboard></x-SidebarDashboard>
    <main>
        <div class="mx-auto max-w-12xl px-4 py-0 sm:px-6 lg:px-8">
            <div class="sm:ml-64">

                <div class=" border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-20">
                    <x-header-dashboard>{{ $title }}</x-header-dashboard>
                    {{ $slot }}
                </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>



