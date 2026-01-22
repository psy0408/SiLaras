<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>SiLaras!</title>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-indigo-600">SiLaras!</h1>
            <div class="space-x-6">
                <a href="/home" class="hover:text-indigo-600">Home</a>
                <a href="/about" class="hover:text-indigo-600">About</a>
                <a href="#" class="hover:text-indigo-600">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h2 class="text-4xl font-extrabold mb-4">
                Bangun Website Cepat <span class="text-indigo-600">dengan Laravel</span>
            </h2>
            <p class="text-gray-600 mb-6">
                Template sederhana menggunakan Laravel + Tailwind CSS.
                Cocok untuk landing page, dashboard, atau project kuliah.
            </p>
            <div class="space-x-4">
                <a href="#" class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700">
                    Get Started
                </a>
                <a href="#" class="border border-indigo-600 text-indigo-600 px-6 py-3 rounded-lg hover:bg-indigo-50">
                    Learn More
                </a>
            </div>
        </div>

        <div class="hidden md:block">
            <img src="https://illustrations.popsy.co/gray/web-design.svg" alt="Hero">
        </div>
    </section>

    <!-- Features -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-12">Fitur Utama</h3>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-6 border rounded-xl hover:shadow-lg transition">
                    <h4 class="font-bold text-lg mb-2">🚀 Cepat</h4>
                    <p class="text-gray-600">Tailwind bikin styling super cepat tanpa ribet CSS.</p>
                </div>
                <div class="p-6 border rounded-xl hover:shadow-lg transition">
                    <h4 class="font-bold text-lg mb-2">🎨 Modern</h4>
                    <p class="text-gray-600">Desain clean dan responsive di semua device.</p>
                </div>
                <div class="p-6 border rounded-xl hover:shadow-lg transition">
                    <h4 class="font-bold text-lg mb-2">⚙️ Mudah</h4>
                    <p class="text-gray-600">Struktur Laravel rapi dan gampang dikembangkan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-6">
        <div class="max-w-7xl mx-auto px-6 text-center">
            © {{ date('Y') }} MyApp. All rights reserved.
        </div>
    </footer>

</body>
</html>
