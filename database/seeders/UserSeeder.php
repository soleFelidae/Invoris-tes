<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Membuat satu atau beberapa data spesifik (misal untuk Akun Admin/Testing)
        User::create([
            'name' => 'Admin Utama',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'), // Akan otomatis di-hash juga oleh model cast Anda, tapi ini praktik yang aman
        ]);

        // 2. Opsi Tambahan: Jika ingin membuat banyak data dummy acak sekaligus menggunakan Factory
        // Pastikan kamu sudah punya UserFactory bawaan Laravel jika ingin menggunakan baris di bawah ini:
        User::factory()->count(10)->create();
    }
}