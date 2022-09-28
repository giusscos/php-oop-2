<?php

trait MadeOf{
    public $material;

    public function setMaterial($material){
        if($material){
            $this->material = $material;
        } else {
            throw new Exception('Inserimento materiale non valido');
        }
    }

    public function getMaterial(){
        return $this->material;
    }
}