<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeederCsv extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trainData = Helpers::getCsvData(__DIR__ . '/trains.csv');

        foreach ($trainData as $key => $train)

            if ($key !== 0) {
                $newTrain = new Train();

                $newTrain->azienda = $train[0];
                $newTrain->stazione_partenza = $train[1];
                $newTrain->stazione_arrivo = $train[2];
                $newTrain->ora_partenza = $train[3];
                $newTrain->ora_arrivo = $train[4];
                $newTrain->codice_treno = $train[5];
                $newTrain->numero_carrozze = $train[6];
                $newTrain->in_orario = $train[7];
                $newTrain->cancellato = $train[8];
                $newTrain->prezzo = null;

                // dd($newTrain);
                $newTrain->save();
            }
    }
}
