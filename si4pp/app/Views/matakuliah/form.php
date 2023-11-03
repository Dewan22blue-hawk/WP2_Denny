<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Mata Kuliah</title>
</head>

<body>
    <center>
        <form action="<?= base_url('/matkul/cetak'); ?>" method="post">

            <table>
                <tr>
                    <th colspan="3">
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
                        <p><?= $validation->getError('kode'); ?>
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
                    <td>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <p><?= isset($validation) ? $validation->getError('sks') : '' ?>
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