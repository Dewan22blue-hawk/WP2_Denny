<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar dengan Dropdown List menggunakan Tailwind CSS</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <span class="text-white text-lg">Logo</span>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Beranda</a>
                        <div class="relative group">
                            <button class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium focus:outline-none">Dropdown</button>
                            <div class="absolute z-10 hidden group-hover:block mt-2 py-2 w-40 bg-white rounded-md shadow-xl">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pilihan 1</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pilihan 2</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pilihan 3</a>
                            </div>
                        </div>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Tentang</a>
                        <!-- Tambahkan tautan tambahan sesuai kebutuhan -->
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Konten utama di sini -->

</body>

</html>