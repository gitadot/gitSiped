<?php

namespace Database\Factories;

use App\Models\suratMasuk;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;



class SuratMasukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $Model = suratMasuk::class;

    public function definition()
    {
        return [
            'jenis_surat'=>$this->faker->word(),
            'tanggal'=>$this->faker->date('Y_m_d'),
            'nomor'=>$this->faker->numerify('B-####'),
            'asal'=>$this->faker->word(),
            'hal'=>$this->faker->sentence(mt_rand(2,8)),
            'fileUpload'=>$this->faker->mimeType(),
        ];
    }
}
