<?php

use Illuminate\Database\Seeder;
use App\Pacchetto; 

class PacchettiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 20; $i++){
            //creazioneistanza
            $new_pacchetto = new Pacchetto();
            //popolazione colonne
            $new_pacchetto->destinazione = 'Sity' . rand(1, 50);
            $new_pacchetto->giorni = rand(7, 30);
            $new_pacchetto->prezzo = rand(450, 2000);
            $new_pacchetto->descrizione = 'Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit. Aenean ornare tempus tortor, 
            sed interdum dui tincidunt ut.';
            $new_pacchetto->partenza = '2021-08-' . rand(1, 30);
            $new_pacchetto->posti = rand(1, 20);
            $new_pacchetto->partenza_da = 'Milano';
            //salvare record a db
            $new_pacchetto->save();

        }
    }
}
