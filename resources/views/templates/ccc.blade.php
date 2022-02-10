return [
      'jenis_surat'=>$this->faker->word(),
      'tanggal'=>$this->faker->dateTime(),
      'nomor'=>$this->faker->numerify('B-####'),
      'asal'=>$this->faker->email(),
      'hal'=>$this->faker->sentence(mt_rand(2,8)),
  ];