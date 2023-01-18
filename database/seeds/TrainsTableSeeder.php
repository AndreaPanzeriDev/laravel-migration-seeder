<?php


use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'Tratta' => 'Caloziocorte - Lecco',
                'distanza_tratta' => 8,
                'prezzo' => 1.6,
                'Minuti_di_ritardo' => 20,

            ],
            [
                'Tratta' => 'Milano - Lecco',
                'distanza_tratta' => 40,
                'prezzo' => 3.6,
                'Minuti_di_ritardo' => 5,

            ],
            [
                'Tratta' => 'Carnate - Lecco',
                'distanza_tratta' => 20,
                'prezzo' => 2.6,
                'Minuti_di_ritardo' => '1',

            ]
        ];

        foreach($trains as $item){
            $newTrain = new Train();
            $newTrain->Tratta = $item['Tratta'];
            $newTrain->distanza_tratta = $item['distanza_tratta'];
            $newTrain->prezzo = $item['prezzo'];
            $newTrain->Minuti_di_ritardo = $item['Minuti_di_ritardo'];
            $newTrain->save();
        }
    }
}

