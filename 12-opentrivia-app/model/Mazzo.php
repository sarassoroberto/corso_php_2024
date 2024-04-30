<?php
namespace model;
use src\card\CardQuestionMultiple;
class Mazzo
{
    public $id;
    public $query_string;
    public $carte;

    public function carte(){

        $response = json_decode($this->carte, true);
        $carte = [];
        $dati_carte_mezzo = $response['results'];
        foreach ($dati_carte_mezzo as $key => $dati_carta) {
            $carte[] = new CardQuestionMultiple($dati_carta);            
        }

        return $carte;
    }

    public function carta($index)
    {
        return $this->carte()[$index];
    }
    

}
