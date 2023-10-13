<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul; ?></title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/style.css">
</head>

<body>
    <div class="wrapper">
        <header>
            <hgroup>
                <h1>DewanBuku.Net</h1>
                <h3>Membuat Template Sederhana Dengan Codeigniter 4</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?= base_url('web'); ?>">Home</a></li>
                    <li><a href="<?= base_url('web/about'); ?>">About</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
    </div>
</body>

</html>