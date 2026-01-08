<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= isset($portfolio) ? 'Edit' : 'Tambah'; ?> Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800">

<div class="max-w-2xl mx-auto my-10 bg-white border border-slate-200 rounded-2xl shadow-sm p-6">
    <h1 class="text-2xl font-bold mb-4">
        <?= isset($portfolio) ? 'Edit' : 'Tambah'; ?> Portfolio
    </h1>

    <?php
    $action = isset($portfolio)
        ? site_url('admin/portfolio/update/' . $portfolio['id'])
        : site_url('admin/portfolio/store');
    ?>

    <form action="<?= $action; ?>" method="post" class="space-y-4">
        <div>
            <label class="block text-xs font-semibold mb-1">Judul</label>
            <input type="text" name="title" required
                   value="<?= isset($portfolio) ? esc($portfolio['title']) : ''; ?>"
                   class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
        </div>

        <div>
            <label class="block text-xs font-semibold mb-1">Deskripsi</label>
            <textarea name="description" rows="4" required
                      class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:ring-2 focus:ring-sky-500 focus:border-sky-500"><?= isset($portfolio) ? esc($portfolio['description']) : ''; ?></textarea>
        </div>

        <div class="flex justify-between items-center">
            <a href="<?= site_url('admin/portfolio'); ?>"
               class="text-sm text-slate-600 hover:underline">Kembali</a>

            <button type="submit"
                    class="px-4 py-2 rounded-lg text-sm font-semibold bg-sky-600 text-white hover:bg-sky-700">
                Simpan
            </button>
        </div>
    </form>
</div>

</body>
</html>
