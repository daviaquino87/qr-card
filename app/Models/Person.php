<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Person extends Model
{
    use HasFactory;

    protected $table = 'people';
    protected $fillable = [
        'name',
        'email',
        'github',
        'linkedin',
    ];

    protected $keyType = 'string';
    public $incrementing = false;

    public static function boot() {
        parent::boot();

        static::creating(function(Model $model){
            if(empty($model->id)) {
                $model->id = Str::uuid();
            }
        });
    }
}
