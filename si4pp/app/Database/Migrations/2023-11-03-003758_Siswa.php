<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "constraint" => 11,
                "unsigned" => true,
                "auto_increment" => true,
            ],
            "nama" => [
                "type" => "VARCHAR",
                "constraint" => 255,
            ],
            "nis" => [
                "type" => "INT",
                "contraint" => "8",

            ],
            "kelas" => [
                "type" => "VARCHAR",
                "constraint" => "255",
            ],
            "tanggal_lahir" => [
                "type" => "DATETIME",
            ],
            "tempat_lahir" => [
                "type" => "VARCHAR",
                "constraint" => "255",

            ],
            "alamat" => [
                "type" => "VARCHAR",
                "constraint" => "255",
            ],
            "jenis_kelamin" => [
                "type" => "VARCHAR",
                "constraint" => "255",
            ],
            "agama" => [
                "type" => "VARCHAR",
                "constraint" => "255"
            ],
        ]);
        $this->forge->addKey("id", TRUE);
        $this->forge->createTable("siswa", TRUE);
    }

    public function down()
    {
        $this->forge->dropTable("siswa");
    }
}
