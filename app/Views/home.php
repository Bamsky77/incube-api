<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>IncubeSolutions - Company Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tailwind via CDN (cukup untuk tugas) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800">

    <!-- NAVBAR -->
    <header class="sticky top-0 z-20 bg-white/80 backdrop-blur border-b border-slate-200">
        <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">
            <a href="#hero" class="font-bold text-xl tracking-tight">
                <span class="text-sky-600">Incube</span><span class="text-slate-900">Solutions</span>
            </a>

            <nav class="hidden md:flex gap-6 text-sm font-medium">
    <a href="#about" class="hover:text-sky-600">Tentang</a>
    <a href="#services" class="hover:text-sky-600">Layanan</a>
    <a href="#portfolio" class="hover:text-sky-600">Portfolio</a>
    <a href="#contact" class="hover:text-sky-600">Kontak</a>
</nav>

        </div>
    </header>

    <!-- HERO SECTION -->
    <section id="hero" class="pt-16 pb-20">
        <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">
            <div>
                <p class="text-sm font-semibold text-sky-600 mb-2 uppercase tracking-wide">
                    Company Profile • IncubeSolutions
                </p>
                <h1 class="text-3xl md:text-4xl font-bold tracking-tight mb-4">
                    Solusi Digital untuk Mengembangkan Bisnis Anda
                </h1>
                <p class="text-slate-600 mb-6">
                    IncubeSolutions adalah perusahaan yang bergerak di bidang pengembangan perangkat lunak,
                    siap membantu transformasi digital perusahaan dengan teknologi modern dan tim yang profesional.
                </p>

                <div class="flex flex-wrap gap-3">
                    <a href="#contact"
                       class="inline-flex items-center justify-center px-5 py-2.5 rounded-full text-sm font-semibold bg-sky-600 text-white hover:bg-sky-700">
                        Hubungi Kami
                    </a>
                    <a href="#services"
                       class="inline-flex items-center justify-center px-5 py-2.5 rounded-full text-sm font-semibold border border-slate-300 text-slate-700 hover:bg-slate-100">
                        Lihat Layanan
                    </a>
                </div>

                <div class="mt-6 text-xs text-slate-500">
                    Dibuat oleh: <span class="font-semibold">[Ahmad Hilbram Dzulqa]</span> • PKL IncubeSolutions
                </div>
            </div>

            <div class="relative">
                <div class="aspect-[4/3] rounded-3xl border border-slate-200 bg-gradient-to-br from-sky-50 to-slate-50
                            flex items-center justify-center shadow-sm">
                    <div class="text-center px-6">
                        <p class="text-xs font-medium text-sky-600 mb-2 uppercase tracking-wide">
                            Teknologi yang Kami Gunakan
                        </p>
                        <p class="text-sm text-slate-600 mb-4">
                            Modern CSS Framework &amp; PHP Framework:
                        </p>
                        <div class="flex flex-wrap justify-center gap-3 text-xs font-semibold">
                            <span class="px-3 py-1 rounded-full bg-slate-900 text-white">Tailwind CSS</span>
                            <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-800 border border-slate-200">CodeIgniter 4</span>
                            <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-800 border border-slate-200">PHP 8+</span>
                            <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-800 border border-slate-200">SQL Server Express</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="py-14 bg-white border-y border-slate-200">
        <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-2xl font-bold mb-3">Tentang IncubeSolutions</h2>
                <p class="text-slate-600 mb-3">
                    IncubeSolutions berfokus pada pengembangan aplikasi web, sistem informasi,
                    dan solusi teknologi yang disesuaikan dengan kebutuhan perusahaan.
                </p>
                <p class="text-slate-600 mb-4">
                    Dengan dukungan tim muda yang kreatif dan adaptif, kami membantu klien
                    merancang sistem yang scalable, aman, dan mudah digunakan.
                </p>

                <ul class="space-y-2 text-sm text-slate-700">
                    <li>• Berpengalaman dalam pengembangan aplikasi web berbasis PHP &amp; JavaScript.</li>
                    <li>• Menggunakan framework modern untuk tampilan dan backend.</li>
                    <li>• Menawarkan maintenance dan dukungan purna jual.</li>
                </ul>
            </div>

            <div class="grid grid-cols-2 gap-4 text-sm">
                <div class="p-4 rounded-2xl bg-slate-900 text-white">
                    <p class="text-xs uppercase tracking-wide text-sky-300 mb-1">Fokus Kami</p>
                    <p class="font-semibold">Pengembangan Web</p>
                    <p class="text-slate-200 text-xs mt-2">
                        Sistem informasi, dashboard, dan portal perusahaan.
                    </p>
                </div>
                <div class="p-4 rounded-2xl bg-slate-100 border border-slate-200">
                    <p class="text-xs uppercase tracking-wide text-slate-500 mb-1">Nilai</p>
                    <p class="font-semibold text-slate-900">Kolaboratif</p>
                    <p class="text-slate-600 text-xs mt-2">
                        Mengutamakan komunikasi dan pemahaman kebutuhan klien.
                    </p>
                </div>
                <div class="p-4 rounded-2xl bg-slate-100 border border-slate-200">
                    <p class="text-xs uppercase tracking-wide text-slate-500 mb-1">Teknologi</p>
                    <p class="font-semibold text-slate-900">Up-to-date</p>
                    <p class="text-slate-600 text-xs mt-2">
                        Menggunakan teknologi yang relevan dan kekinian.
                    </p>
                </div>
                <div class="p-4 rounded-2xl bg-slate-100 border border-slate-200">
                    <p class="text-xs uppercase tracking-wide text-slate-500 mb-1">Tujuan</p>
                    <p class="font-semibold text-slate-900">Meningkatkan Efisiensi</p>
                    <p class="text-slate-600 text-xs mt-2">
                        Membantu bisnis menjadi lebih efektif melalui digitalisasi.
                    </p>
                </div>
            </div>
        </div>
    </section>

        <!-- SERVICES SECTION (DINAMIS DARI DATABASE) -->
    <section id="services" class="py-14">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold mb-2">Layanan Kami</h2>
                <p class="text-slate-600 text-sm">
                    Beberapa layanan utama yang ditawarkan oleh IncubeSolutions.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <?php if (!empty($services)): ?>
                    <?php foreach ($services as $service): ?>
                        <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
                            <h3 class="font-semibold mb-2">
                                <?= esc($service['title']); ?>
                            </h3>
                            <p class="text-sm text-slate-600">
                                <?= esc($service['description']); ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-sm text-slate-500 col-span-3">
                        Belum ada data layanan. Silakan tambahkan melalui halaman administrator.
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </section>


    <!-- PORTFOLIO SECTION -->
       <!-- PORTFOLIO SECTION (DINAMIS) -->
    <section id="portfolio" class="py-14 bg-white border-y border-slate-200">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold mb-2">Portfolio Singkat</h2>
                <p class="text-slate-600 text-sm">
                    Contoh proyek yang pernah dikerjakan oleh IncubeSolutions.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6 text-sm">
                <?php if (!empty($portfolios)): ?>
                    <?php foreach ($portfolios as $item): ?>
                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                            <p class="font-semibold mb-1"><?= esc($item['title']); ?></p>
                            <p class="text-slate-600 text-xs">
                                <?= esc($item['description']); ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-sm text-slate-500 col-span-3">
                        Belum ada data portfolio. Silakan tambahkan melalui halaman administrator.
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </section>


    <!-- CONTACT FORM SECTION -->
    <section id="contact" class="py-14">
        <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-10">
            <div>
                <h2 class="text-2xl font-bold mb-2">Hubungi Kami</h2>
                <p class="text-slate-600 text-sm mb-4">
                    Silakan isi formulir berikut untuk menghubungi tim IncubeSolutions.
                    (Nanti backend &amp; database kita sambung ke form ini.)
                </p>

                <div class="text-sm text-slate-700 space-y-1">
                    <p><span class="font-semibold">Alamat:</span> Jl. Contoh No. 123, Kota Contoh</p>
                    <p><span class="font-semibold">Telepon:</span> (021) 123 4567</p>
                    <p><span class="font-semibold">Email:</span> info@incubesolutions.com</p>
                </div>
            </div>

            <div>
                <?php if (session()->getFlashdata('success')): ?>
                    <div class="mb-4 text-xs text-green-700 bg-green-100 border border-green-200 rounded-lg px-3 py-2">
                        <?= session()->getFlashdata('success'); ?>
                    </div>
                <?php endif; ?>

                <form action="<?= site_url('contact/send'); ?>" method="post" class="bg-white border border-slate-200 rounded-2xl p-5 shadow-sm space-y-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1" for="name">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required
                               class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1" for="email">Email</label>
                        <input type="email" id="email" name="email" required
                               class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1" for="subject">Subjek</label>
                        <input type="text" id="subject" name="subject" required
                               class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1" for="message">Pesan</label>
                        <textarea id="message" name="message" rows="4" required
                                  class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500"></textarea>
                    </div>

                    <button type="submit"
                            class="w-full inline-flex items-center justify-center px-4 py-2.5 rounded-lg text-sm font-semibold bg-sky-600 text-white hover:bg-sky-700">
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-6 border-t border-slate-200 text-center text-xs text-slate-500">
        &copy; <?= date('Y'); ?> IncubeSolutions • Dibuat untuk tugas PKL Company Profile.
    </footer>

</body>
</html>
