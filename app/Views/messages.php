<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pesan Kontak</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800">
<div class="max-w-4xl mx-auto my-10 bg-white border border-slate-200 rounded-2xl shadow-sm p-6">
    <h1 class="text-2xl font-bold mb-4">Daftar Pesan Kontak</h1>

    <?php if (empty($messages)): ?>
        <p class="text-sm text-slate-600">Belum ada pesan.</p>
    <?php else: ?>
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm border border-slate-200">
                <thead class="bg-slate-100 text-left">
                    <tr>
                        <th class="px-3 py-2 border-b border-slate-200">#</th>
                        <th class="px-3 py-2 border-b border-slate-200">Nama</th>
                        <th class="px-3 py-2 border-b border-slate-200">Email</th>
                        <th class="px-3 py-2 border-b border-slate-200">Subjek</th>
                        <th class="px-3 py-2 border-b border-slate-200">Pesan</th>
                        <th class="px-3 py-2 border-b border-slate-200">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($messages as $i => $msg): ?>
                        <tr class="odd:bg-white even:bg-slate-50">
                            <td class="px-3 py-2 border-b border-slate-200"><?= $i + 1; ?></td>
                            <td class="px-3 py-2 border-b border-slate-200"><?= esc($msg['name']); ?></td>
                            <td class="px-3 py-2 border-b border-slate-200"><?= esc($msg['email']); ?></td>
                            <td class="px-3 py-2 border-b border-slate-200"><?= esc($msg['subject']); ?></td>
                            <td class="px-3 py-2 border-b border-slate-200"><?= esc($msg['message']); ?></td>
                            <td class="px-3 py-2 border-b border-slate-200"><?= $msg['created_at']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>
</body>
</html>
