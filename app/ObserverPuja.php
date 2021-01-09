<?php
namespace App\Observers;

use App\Events\PujaActual;

class PujaObserver
{
    public function updated()
    {
        $oldPuja = 0;
        //Guardar la nueva puja 
        $newPuja = 1;
        if($oldPuja === 0 && $newPuja > 0){
            event(new PujaActual($puja));
        }
    }
} 