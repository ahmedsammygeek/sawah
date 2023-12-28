<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Setting extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['site_name' , 'address' , 'working_hours' , 'about' , 'terms' ];

}
