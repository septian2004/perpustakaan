<?php


namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class anggotaFactory extends Factory
{
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'nomor_telepon' => $this->faker->phoneNumber(),
            'tanggal_daftar' => $this->faker->date(),
        ];
    }
}
