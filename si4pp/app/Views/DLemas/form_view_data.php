<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title><?= $title; ?></title>
</head>

<body>
    <div class="flex justify-center mt-8">
        <div class="w-full max-w-2xl bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold text-center mb-4">Tampil Data Mata Kuliah</h1>
            <hr class="my-4">

            <div class="grid grid-cols-3 gap-4">
                <div class="text-gray-700">
                    Nama Siswa
                </div>
                <div class="text-gray-700">
                    :
                </div>
                <div>
                    <?= $nama; ?>
                </div>

                <div class="text-gray-700">
                    NIS
                </div>
                <div class="text-gray-700">
                    :
                </div>
                <div>
                    <?= $nis; ?>
                </div>

                <div class="text-gray-700">
                    Kelas
                </div>
                <div class="text-gray-700">
                    :
                </div>
                <div>
                    <?= $kelas; ?>
                </div>

                <div class="text-gray-700">
                    Tanggal Lahir
                </div>
                <div class="text-gray-700">
                    :
                </div>
                <div>
                    <?= $tanggal; ?>
                </div>

                <div class="text-gray-700">
                    Tempat Lahir
                </div>
                <div class="text-gray-700">
                    :
                </div>
                <div>
                    <?= $tempat; ?>
                </div>

                <div class="text-gray-700">
                    Alamat
                </div>
                <div class="text-gray-700">
                    :
                </div>
                <div>
                    <?= $alamat; ?>
                </div>

                <div class="text-gray-700">
                    Kelamin
                </div>
                <div class="text-gray-700">
                    :
                </div>
                <div>
                    <?= $kelamin == 'laki' ? "Laki-Laki" : "Perempuan" ?>
                </div>

                <div class="text-gray-700">
                    Agama
                </div>
                <div class="text-gray-700">
                    :
                </div>
                <div>
                    <?= $agama; ?>
                </div>
            </div>

            <div class="text-center mt-6">
                <a href="<?= base_url('dlemas'); ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Kembali</a>
            </div>
        </div>
    </div>
</body>

</html>