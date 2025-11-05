<?php

namespace Database\Seeders;

use App\Models\Mail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mail::create([
            'nama' => 'Budi Santoso',
            'email' => 'budi.s@example.com',
            'subjek' => 'Pertanyaan Mengenai Produk',
            'pesan' => 'Halo, saya ingin bertanya lebih lanjut mengenai produk Anda.',
        ]);

        Mail::create([
            'nama' => 'Citra Lestari',
            'email' => 'citra.l@example.com',
            'subjek' => 'Keluhan Layanan',
            'pesan' => 'Saya ingin menyampaikan keluhan terkait layanan yang saya terima kemarin.',
        ]);
    }
}
