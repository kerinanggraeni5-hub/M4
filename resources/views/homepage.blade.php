<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Smart Traffic Management - Kabupaten Bandung</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

  <!-- NAVBAR -->
  <nav class="bg-blue-700 text-white px-6 py-4 flex justify-between items-center">
    <h1 class="text-2xl font-bold">STM Bandung</h1>
    <ul class="flex space-x-6">
      <li><a href="#" class="font-semibold hover:text-gray-200">Beranda</a></li>
      <li><a href="#" class="hover:text-gray-200">Pengaduan</a></li>
      <li><a href="#" class="hover:text-gray-200">CCTV</a></li>
      <li><a href="#" class="hover:text-gray-200">Ulasan</a></li>
    </ul>
  </nav>

  <!-- HERO SECTION -->
  <section class="bg-cover bg-center h-screen" style="background-image: url('img/bandung.jpg');">
    <div class="flex justify-center items-center h-full bg-black bg-opacity-50">
      <div class="text-center text-white px-4">
        <h1 class="text-5xl font-bold mb-6">Smart Traffic Management Kabupaten Bandung</h1>
        <p class="text-2xl mb-6">Pantau kondisi lalu lintas & kirim pengaduan secara real-time</p>
        <a href="#" class="bg-blue-600 text-white py-2 px-6 rounded-lg text-xl hover:bg-blue-700">Pengaduan</a>
        <a href="#" class="bg-blue-600 text-white py-2 px-6 rounded-lg text-xl hover:bg-blue-700">Akses CCTV</a>
      </div>
    </div>
  </section>

  <!-- FITUR UTAMA -->
  <section class="py-16 px-6">
    <div class="max-w-screen-xl mx-auto text-center">
      <h2 class="text-3xl font-bold text-blue-700 mb-8">Fitur Layanan Utama</h2>
      <div class="flex flex-wrap justify-center gap-12">
        <!-- CCTV -->
        <div class="bg-white p-10 rounded-lg shadow-md max-w-lg text-center">
          <h3 class="text-2xl font-semibold text-gray-800 mb-4">Layanan CCTV</h3>
          <p class="text-gray-700">
            Pantau kondisi lalu lintas secara langsung (live streaming) melalui kamera yang tersebar di berbagai titik di Kabupaten Bandung. Informasi mencakup kemacetan, banjir, dan cuaca di jalanan.
          </p>
        </div>
        <!-- Pengaduan -->
        <div class="bg-white p-10 rounded-lg shadow-md max-w-lg text-center">
          <h3 class="text-2xl font-semibold text-gray-800 mb-4">Layanan Pengaduan</h3>
          <p class="text-gray-700">
            Laporkan masalah lalu lintas seperti kemacetan, banjir, atau jalan rusak. Pengaduan akan diteruskan ke instansi terkait untuk ditindaklanjuti.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ULASAN PENGGUNA -->
  <section class="block bg-gray-50">
    <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
      <h2 class="text-3xl font-extrabold text-blue-700 mb-2 text-center">Ulasan</h2>
      <p class="text-gray-600 text-center mb-10">Pantau pendapat pengguna terkait layanan ini</p>

      <div id="ulasan-container" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Ulasan akan dimasukkan lewat JavaScript -->
      </div>

      <div class="mt-10 text-center">
        <a href="#" class="inline-block px-5 py-3 text-sm font-semibold text-white bg-blue-600 rounded-full hover:bg-blue-700 transition">
          Berikan Ulasan
        </a>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-blue-700 text-white py-6 mt-16 text-center">
    <p>&copy; 2025 Smart Traffic Management Kabupaten Bandung. All rights reserved.</p>
  </footer>

  <!-- SCRIPT -->
  <script>
    // Data ulasan dummy (contoh)
    const ulasanData = [
      {
        deskripsi: "Sistemnya sangat membantu, terutama saat ingin tahu kondisi lalu lintas di daerah Soreang.",
        nama: "Andi Setiawan",
        foto: "https://randomuser.me/api/portraits/men/32.jpg",
        waktu: "3 jam lalu",
        nilai: 5
      },
      {
        deskripsi: "Pengaduan saya cepat ditanggapi. Semoga terus ditingkatkan!",
        nama: "Dewi Lestari",
        foto: "https://randomuser.me/api/portraits/women/45.jpg",
        waktu: "1 hari lalu",
        nilai: 4
      },
      {
        deskripsi: "Aplikasi cukup bagus, tapi kadang streaming CCTV agak lambat.",
        nama: "Rizky Pratama",
        foto: "https://randomuser.me/api/portraits/men/55.jpg",
        waktu: "2 hari lalu",
        nilai: 3
      }
    ];

    // Fungsi menampilkan ulasan
    const container = document.getElementById('ulasan-container');
    ulasanData.forEach(u => {
      const stars = Array.from({ length: 5 }, (_, i) =>
        `<svg class="w-4 h-4 ${i < u.nilai ? 'text-yellow-400' : 'text-gray-300'}" fill="currentColor" viewBox="0 0 20 20">
          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.148
                   c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95
                   c.3.921-.755 1.688-1.538 1.118l-3.36-2.44a1 1 0 00-1.175 0l-3.36 2.44
                   c-.783.57-1.838-.197-1.538-1.118l1.286-3.95a1 1 0 00-.364-1.118
                   l-3.36-2.44c-.783-.57-.38-1.81.588-1.81h4.148a1 1 0 00.95-.69l1.286-3.95z"/>
        </svg>`).join('');

      const card = `
        <div class="bg-white rounded-2xl border p-6 shadow hover:shadow-xl transition duration-300 ease-in-out">
          <p class="text-gray-600 italic mb-4 line-clamp-4">“${u.deskripsi}”</p>
          <div class="flex items-center">
            <img src="${u.foto}" class="h-12 w-12 rounded-full object-cover mr-4 border" alt="${u.nama}">
            <div>
              <h6 class="font-semibold text-gray-800">${u.nama}</h6>
              <p class="text-xs text-gray-400">${u.waktu}</p>
            </div>
          </div>
          <div class="mt-3 flex items-center">${stars}</div>
        </div>`;
      container.insertAdjacentHTML('beforeend', card);
    });
  </script>

</body>
</html>
