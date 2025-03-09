<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Officer extends Model
{
    protected $fillable = [
        'name',
        'position',
        'photo'
        
    ];


    protected static function boot()
    {
        parent::boot();
    
        /** @var Model $model */
        static::updating(function ($model) {
            if ($model->isDirty('photo') && ($model->getOriginal('photo') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('photo'));
            }
        
        });
    
        static::deleting(function ($model) {
            if ($model->photo !== null) {
                Storage::disk('public')->delete($model->photo);
            }
            
        
        });
    }
}
