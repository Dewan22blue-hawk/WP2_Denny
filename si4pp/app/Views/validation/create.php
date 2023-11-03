<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Mata Kuliah</title>
    <link rel="stylesheet" href="./src/output.css">
</head>

<body>
    <center>
        <form action="<?= base_url('/LatihanVal/create'); ?>" method="post">

            <table>
                <tr>
                    <th colspan="3" class="text-2xl">
                        Form Input Data Mata Kuliah
                    </th>
                </tr>
                <tr>
                    <th colspan="3">
                        <hr>
                    </th>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kode" id="kode" placeholder="Kode Matakuliah" value="<?= old('kode'); ?>">
                        <p><?= isset($validation) ? $validation->getError('kode') : '' ?>
                        </p>
                    </td>

                </tr>
                <tr>
                    <th>Nama MK</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" placeholder="Nama Mata Kuliah" value="<?= old('nama'); ?>">
                        <p><?= isset($validation) ? $validation->getError('nama') : '' ?>
                        </p>
                    </td>

                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" placeholder="Masukkan alamat anda" value="<?= old('alamat'); ?>">
                        <p><?= isset($validation) ? $validation->getError('alamat') : '' ?>
                        </p>
                    </td>

                </tr>
                <tr>
                    <th>Email</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="email" placeholder="Email anda" value="<?= old('email'); ?>">
                        <p><?= isset($validation) ? $validation->getError('email') : '' ?>
                        </p>
                    </td>

                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>