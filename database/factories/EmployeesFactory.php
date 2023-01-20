<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
           'name' => $this->faker->firstName(),
           'surname' => $this->faker->lastName(),
           'bi' => '91820011p',
           'mobile' => $this->faker->phoneNumber,
           'province_id' => '1',
           'gender_id' => '1',
           'city_id'=> '1',
           'marital_status'=> '1',
           'address' => 'Avenida Eduardo Mondlane',
            'position_id' => '1',
           'date_birth' => $this->faker->date,
           'nationality' => 'Moçambicano',
           'degree' => 'Engenheiro',
           'contract' => 'Eventual',
            'salary_base' => '60000',
            'subsidy' => '50000',
           'social_number' => '40009320',
            'date_admission' => $this->faker->date
        ];
    }
}
