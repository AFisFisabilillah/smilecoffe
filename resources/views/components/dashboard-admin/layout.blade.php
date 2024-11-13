<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="font-poppins">
    <!-- noavbar -->
   <x-dashboard-admin.navbar></x-dashboard-admin.navbar>
    <div class="flex w-full h-screen ">
        <x-dashboard-admin.sidebar></x-dashboard-admin.sidebar>
        <div class="px-4 py-6 flex-grow w-full">
           {{ $slot  }}
        </div>
    </div>
</body>

</html>
