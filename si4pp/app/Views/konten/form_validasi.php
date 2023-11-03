<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<style>
    p {
        color: red;
    }
</style>

<body>

    <form action="" method="post">
        <div>Nama</div>
        <div>
            <input type="text" name="nama" value="<?= old('nama'); ?>">

        </div>
        <div>
            <?php if (session()->getFlashdata('error') && array_key_exists('nama', session()->getFlashdata('error'))) : ?>
                <p><?= session()->getFlashdata('error')['nama'] ?></p>
            <?php endif; ?>
        </div>
        <div>Email</div>
        <div>
            <input type="text" name="email" value="<?= old('email'); ?>">
        </div>
        <div>
            <?php if (session()->getFlashdata('error') && array_key_exists('email', session()->getFlashdata('error'))) : ?>
                <p><?= session()->getFlashdata('error')['email'] ?></p>
            <?php endif; ?>
        </div>
        <div>Password</div>
        <div>
            <input type="password" name="password">
        </div>
        <div>
            <?php if (session()->getFlashdata('error') && array_key_exists('password', session()->getFlashdata('error'))) : ?>
                <p><?= session()->getFlashdata('error')['password'] ?></p>
            <?php endif; ?>
        </div>
        <div>Konfirmasi Password</div>
        <div>
            <input type="password" name="konfirmasi">
        </div>
        <div>
            <?php if (session()->getFlashdata('error') && array_key_exists('konfirmasi', session()->getFlashdata('error'))) : ?>
                <p><?= session()->getFlashdata('error')['konfirmasi'] ?></p>
            <?php endif; ?>
        </div>
        <input type="submit" name="submit" value="Kirim Data">
    </form>
    <div>
        <?php

        if ((session()->getFlashdata("success"))) {
            echo "<h1>" . session()->getFlashdata('success') . "</h1>";
        }
        ?>
    </div>
</body>

</html>