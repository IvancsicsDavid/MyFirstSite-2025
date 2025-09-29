<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public static function csoportlista()
    {
        return
        [
            'elso' => 'David',
            'masodik' => 'Istvan',
            'harmadik' => 'Erik',
            'negyedik' => 'Frederick',
        ];
    }
}
