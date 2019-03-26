<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use App\User;


class DebtsTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create();
        $users = User::all()->pluck('id')->toArray();

        for ($i = 0; $i < 10; $i++) {
            $payee_user_id = $faker->randomElement($users);

            $payer_user_id = $faker->randomElement($users);

            while ($payee_user_id == $payer_user_id) {
                $payer_user_id = $faker->randomElement($users);
            }


            DB::table('debts')->insert([
                'payee_user_id' => $payee_user_id,
                'payer_user_id' => $payer_user_id,
                'title' => Str::random(10),
                'description' => Str::random(25),
                'amount' => rand(5, 20),
                'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now')
            ]);
        }
    }
}
