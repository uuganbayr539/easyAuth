<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table ='products';
    
    protected $primaryKey = 'id';

    public $timestamps = true;
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'cover_img',
    ];
    //  @return \Illuminate\Database\Eloquent\Builder
    public static function productInformationView()
    {
        return static::select('id', 'name', 'description', 'price', 'quantity', 'cover_img');
    }
}
