<x-app-layout>
    <div x-data="{ darkMode: false }" :class="darkMode ? 'dark' : ''" class="min-h-screen bg-gray-100 dark:bg-gray-900 transition-colors duration-500">

        <!-- Navbar -->
        <div class="bg-gray-800 dark:bg-gray-900 text-white shadow-md px-6 py-4">
            <div class="flex justify-between items-center">
                <h1 class="font-bold text-3xl md:text-4xl tracking-wide">Halo, Ini Dashboard Test</h1>
            </div>
        </div>

        <!-- Content Area -->
        <div class="flex-1 p-6 overflow-y-auto">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-lg space-y-6 transition-all duration-500">

                <!-- Section Title -->
                <div>
                    <h2 class="font-bold text-3xl text-gray-800 dark:text-gray-200">Welcome to the Dashboard!</h2>
                    <p class="mt-2 text-gray-600 dark:text-gray-400 text-sm">Penjelasan tentang NoteApp menggunakan Laravel</p>
                </div>

                <!-- Short Description -->
                <div class="text-gray-800 dark:text-gray-200 space-y-4">
                    <p class="leading-relaxed text-lg">
                        NoteApp adalah aplikasi berbasis Laravel untuk mengelola catatan pribadi. Pengguna dapat membuat, mengedit, dan menghapus catatan dengan sistem autentikasi untuk menjaga privasi data. Fitur-fitur utama mencakup tampilan responsif, validasi input, serta mode gelap untuk kenyamanan visual.
                    </p>
                </div>

                <!-- Fitur Utama (divided into 2 columns) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                        <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200">Fitur Utama:</h3>
                        <ul class="list-inside list-disc pl-4 space-y-2 text-gray-800 dark:text-gray-200">
                            <li><strong>Autentikasi Pengguna:</strong> Pengguna hanya dapat mengakses catatan setelah login.</li>
                            <li><strong>Buat dan Kelola Catatan:</strong> Buat catatan baru, edit, dan hapus catatan yang ada.</li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                        <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200">Fitur Utama Lainnya:</h3>
                        <ul class="list-inside list-disc pl-4 space-y-2 text-gray-800 dark:text-gray-200">
                            <li><strong>Validasi Input:</strong> Validasi untuk memastikan data yang dimasukkan benar.</li>
                            <li><strong>Mode Gelap:</strong> Dukungan mode gelap untuk pengalaman visual yang lebih nyaman.</li>
                        </ul>
                    </div>
                </div>

                <!-- Arsitektur Aplikasi (divided into 2 columns) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                        <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200">Arsitektur Aplikasi:</h3>
                        <ul class="list-inside list-disc pl-4 space-y-2 text-gray-800 dark:text-gray-200">
                            <li><strong>Frontend:</strong> Blade Templating digunakan untuk tampilan dinamis.</li>
                            <li><strong>Backend:</strong> Laravel mengelola autentikasi dan penyimpanan catatan.</li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                        <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200">Arsitektur Lainnya:</h3>
                        <ul class="list-inside list-disc pl-4 space-y-2 text-gray-800 dark:text-gray-200">
                            <li><strong>Database:</strong> Catatan disimpan dalam tabel `notes` yang terhubung dengan `users`.</li>
                        </ul>
                    </div>
                </div>

                <!-- Keamanan & Akses (divided into 2 columns) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                        <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200">Keamanan & Akses:</h3>
                        <ul class="list-inside list-disc pl-4 space-y-2 text-gray-800 dark:text-gray-200">
                            <li><strong>Middleware Autentikasi:</strong> Melindungi route catatan untuk pengguna terautentikasi.</li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                        <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200">Keamanan Lainnya:</h3>
                        <ul class="list-inside list-disc pl-4 space-y-2 text-gray-800 dark:text-gray-200">
                            <li><strong>Cek Kepemilikan:</strong> Catatan hanya bisa diakses, diedit, atau dihapus oleh pemiliknya.</li>
                        </ul>
                    </div>
                </div>

                <!-- Kelebihan Aplikasi (divided into 2 columns) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                        <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200">Kelebihan Aplikasi:</h3>
                        <ul class="list-inside list-disc pl-4 space-y-2 text-gray-800 dark:text-gray-200">
                            <li><strong>Sederhana dan Mudah Digunakan:</strong> Antarmuka yang bersih dan mudah dipahami.</li>
                            <li><strong>Penyimpanan Catatan yang Aman:</strong> Keamanan data dengan akses terbatas.</li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                        <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200">Kelebihan Lainnya:</h3>
                        <ul class="list-inside list-disc pl-4 space-y-2 text-gray-800 dark:text-gray-200">
                            <li><strong>Scalable:</strong> Mudah dikembangkan untuk kebutuhan tambahan.</li>
                        </ul>
                    </div>
                </div>

                <!-- Pengembangan Lebih Lanjut -->
                <div>
                    <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200">Pengembangan Lebih Lanjut:</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Fitur tambahan seperti kategori catatan, pencarian catatan, dan pengingat bisa ditambahkan untuk meningkatkan fungsionalitas aplikasi ini.
                    </p>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
