<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }

        @media (max-width: 768px) {
            .dropdown-menu {
                right: 0;
                left: auto;
            }
        }
    </style>
</head>
<body class="bg-gray-100">

<!-- Sidebar -->
<div class="bg-gray-800 text-white h-screen w-64 fixed left-0 top-0 overflow-y-auto">
    <div class="p-6">
        <h2 class="text-lg font-semibold mb-4">Dashboard</h2>
        <ul>
            <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-700">Dashboard</a>
            </li>
            <li>
                <a href="{{route('category.index')}}" class="block py-2 px-4 hover:bg-gray-700">Category</a>
            </li>
            <li>
                <a href="{{route('property.index')}}" class="block py-2 px-4 hover:bg-gray-700">Property</a>
            </li>
            <li>
                <a href="{{route('blog.index')}}" class="block py-2 px-4 hover:bg-gray-700">Blog</a>
            </li>
            <!-- Add more sidebar links as needed -->
        </ul>
    </div>
</div>


<!-- Main Content -->
<div class="ml-64">
    <!-- Navbar -->
    <nav class="bg-gray-800 py-4">
        <div class="container mx-auto flex justify-end items-center">
            <div>
                <div class="dropdown inline-block relative">
                    <button class="text-white focus:outline-none">
                        <img src="path_to_profile_photo.jpg" alt="Profile Photo" class="w-8 h-8 rounded-full">
                    </button>
                    <ul class="dropdown-menu absolute hidden bg-gray-800 text-white pt-1">
                        <li><a href="#" class="rounded-t bg-gray-800 hover:bg-gray-700 py-2 px-4 block whitespace-no-wrap">Profile</a></li>
                        <li><a href="#" class="bg-gray-800 hover:bg-gray-700 py-2 px-4 block whitespace-no-wrap">Settings</a></li>
                        <li>
{{--                            <a href="{{route('logout')}}" class="rounded-b bg-gray-800 hover:bg-gray-700 py-2 px-4 block whitespace-no-wrap">Logout</a>--}}
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    @yield('content')
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        var dropdowns = document.querySelectorAll('.dropdown');

        dropdowns.forEach(function (dropdown) {
            var button = dropdown.querySelector('button');
            var menu = dropdown.querySelector('.dropdown-menu');

            button.addEventListener('click', function () {
                menu.classList.toggle('hidden');
            });

            document.addEventListener('click', function (event) {
                if (!dropdown.contains(event.target)) {
                    menu.classList.add('hidden');
                }
            });
        });
    });
</script>
</body>
</html>
