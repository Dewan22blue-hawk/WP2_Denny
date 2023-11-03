<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title><?= $title; ?></title>
</head>

<body>

    <form action="<?= base_url('/dlemas/input'); ?>" method="post" class="w-full max-w-lg mx-auto my-8">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

            <h1 class="text-2xl font-bold text-center mb-4">Form Input Data Siswa</h1>
            <hr class="my-4">

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                    Nama Siswa
                </label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" name="nama" value="<?= old('nama'); ?>">
                <p class="text-red-500 text-xs italic"><?= isset($validation) ? $validation->getError('nama') : '' ?></p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nis">
                    NIS
                </label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nis" type="text" name="nis" value="<?= old('nis'); ?>">
                <p class="text-red-500 text-xs italic"><?= isset($validation) ? $validation->getError('nis') : '' ?></p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="kelas">
                    Kelas
                </label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="kelas" type="text" name="kelas" value="<?= old('kelas'); ?>">
                <p class="text-red-500 text-xs italic"><?= isset($validation) ? $validation->getError('kelas') : '' ?></p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggal_lahir">
                    Tanggal Lahir
                </label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tanggal_lahir" type="date" name="tanggal_lahir" value="<?= old('tanggal'); ?>">
                <p class="text-red-500 text-xs italic"><?= isset($validation) ? $validation->getError('tanggal') : '' ?></p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tempat">
                    Tempat Lahir
                </label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tempat" type="text" name="tempat" value="<?= old('tempat'); ?>">
                <p class="text-red-500 text-xs italic"><?= isset($validation) ? $validation->getError('tempat') : '' ?></p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="alamat">
                    Alamat
                </label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="alamat" type="text" name="alamat" value="<?= old('alamat'); ?>">
                <p class="text-red-500 text-xs italic"><?= isset($validation) ? $validation->getError('alamat') : '' ?></p>
            </div>

            <div class="mb-4">
                <span class="block text-gray-700 text-sm font-bold mb-2">Jenis Kelamin</span>
                <div class="mt-2">
                    <input id="laki" type="radio" name="kelamin" value="laki" class="mr-1">
                    <label for="laki" class="mr-4">Laki-Laki</label>
                    <input id="perempuan" type="radio" name="kelamin" value="perempuan" class="mr-1">
                    <label for="perempuan">Perempuan</label>
                </div>
                <p class="text-red-500 text-xs italic"><?= isset($validation) ? $validation->getError('kelamin') : '' ?></p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="agama">
                    Agama
                </label>
                <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" id="agama" name="agama">
                    <option value="">Pilih Agama</option>
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Khonghucu">Khonghucu</option>
                </select>
                <p class="text-red-500 text-xs italic"><?= isset($validation) ? $validation->getError('agama') : '' ?></p>
            </div>

            <div class="flex items-center justify-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
            </div>

        </div>
    </form>

</body>

</html>