<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appareil extends Model
{
    protected $fillable = [
        'code',
        'type',
        'marque',
        'panne',
        'deteDeDepot',
        'prix',
        'versement',
        'reste',
        'detail',
        'etaApreReparation'
    ];
}
