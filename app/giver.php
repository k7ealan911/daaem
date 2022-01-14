<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class giver extends Model
{
    //

public function user(){
    return $this->hasOne(User::class,'email','email');
}


}
