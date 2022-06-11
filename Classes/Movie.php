<?php
class Movie{
    private $titolo;
    private $genere;
    private $anno;
    private $regista;
    private $voto;

    function __construct($_titolo, $_genere, $_anno, $_regista, $_voto)
    {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->anno = $_anno;
        $this->regista = $_regista;
        $this->voto = $_voto;
    }

    public function getFullInfo(){
        return "{$this->titolo}<br> {$this->genere}<br> {$this->anno}<br> {$this->regista}<br>";
    }
    public function getTitle(){
        return $this->titolo;
    }
    public function getGenre(){
        return $this->genere;
    }
    public function getYear(){
        return $this->anno;
    }
    public function getDirector(){
        return $this->regista;
    }
    public function getVote(){
        return $this->voto = $this->voto >= 3 ? 'Consigliato' : 'Sconsigliato';
    }
}
?>