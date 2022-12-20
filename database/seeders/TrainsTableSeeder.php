<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $newTrain = new Train();

        $newTrain->azienda = $faker->word();
        $newTrain->stazione_partenza = $faker->text(15);
        $newTrain->stazione_arrivo = $faker->text(15);
        $newTrain->ora_partenza = $faker->dateTimeBetween('-1 week', '+2 week');
        $newTrain->ora_arrivo = $faker->dateTimeInInterval($newTrain->ora_partenza, '+20 hour');
        $newTrain->codice_treno = $faker->bothify('??###??');
        $newTrain->numero_carrozze = $faker->numberBetween(1, 20);
        $newTrain->in_orario = $faker->boolean();
        $newTrain->cancellato = $faker->boolean();
        $newTrain->prezzo = $faker->randomFloat(2, 0, 1000);

        // dd($newTrain);
        $newTrain->save();
    }
}
