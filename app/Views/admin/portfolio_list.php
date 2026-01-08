<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - Kelola Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800">

<div class="max-w-4xl mx-auto my-10 bg-white border border-slate-200 rounded-2xl shadow-sm p-6">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Administrator - Portfolio</h1>

        <div class="text-xs text-slate-600">
            Login sebagai: <span class="font-semibold"><?= esc(session('username')); ?></span>
            • <a href="<?= site_url('logout'); ?>" class="text-rose-600 hover:underline">Logout</a>
        </div>
    </div>

    <a href="<?= site_url('admin/portfolio/create'); ?>"
       class="inline-flex mb-4 px-4 py-2 rounded-lg text-sm font-semibold bg-sky-600 text-white hover:bg-sky-700">
        + Tambah Portfolio
    </a>

    <?php if (! empty($portfolios)): ?>
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm border border-slate-200">
                <thead class="bg-slate-100">
                <tr>
                    <th class="px-3 py-2 border-b text-left">ID</th>
                    <th class="px-3 py-2 border-b text-left">Judul</th>
                    <th class="px-3 py-2 border-b text-left">Deskripsi</th>
                    <th class="px-3 py-2 border-b text-left">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($portfolios as $item): ?>
                    <tr class="odd:bg-white even:bg-slate-50">
                        <td class="px-3 py-2 border-b"><?= $item['id']; ?></td>
                        <td class="px-3 py-2 border-b"><?= esc($item['title']); ?></td>
                        <td class="px-3 py-2 border-b"><?= esc($item['description']); ?></td>
                        <td class="px-3 py-2 border-b space-x-2">
                            <a href="<?= site_url('admin/portfolio/edit/' . $item['id']); ?>"
                               class="text-xs text-sky-600 hover:underline">Edit</a>
                            <a href="<?= site_url('admin/portfolio/delete/' . $item['id']); ?>"
                               onclick="return confirm('Hapus portfolio ini?');"
                               class="text-xs text-rose-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <p class="text-sm text-slate-500">Belum ada data portfolio.</p>
    <?php endif; ?>
</div>

</body>
</html>
