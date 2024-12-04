<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Setting extends Model implements TranslatableContract
{
    use HasFactory , Translatable;
    public $translatedAttributes = ['title', 'content'];
    public $fillable = ['id' ,'logo' ,'fivicon'  ,'facebook' ,'instagram' ,'email'];
}
