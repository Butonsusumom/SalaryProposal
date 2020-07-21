<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DefSal extends Model {
    protected $table = 'defsals';
    protected $fillable = ['position','region', 'max', 'min','isLead'];
}
