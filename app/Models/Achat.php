<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    use HasFactory;
    protected $fillable = [
        'montant',
        'cheque_id',
        'marchand_id'

    ];
    public function cheques(){
        return $this->belongsToMany('Cheque');
    }
    public function marchand(){ // <- here
        return $this->belongsTo(Marchand::class);
    }


}
