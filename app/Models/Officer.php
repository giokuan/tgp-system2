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
            
            // if ($model->isDirty('photos')) {
            //     $originalPhotos = $model->getOriginal('photos') ?? [];
            //     $newPhotos = $model->photos ?? [];
    
            //     // Find photos that were removed
            //     $removedPhotos = array_diff($originalPhotos, $newPhotos);
    
            //     foreach ($removedPhotos as $photo) {
            //         Storage::disk('public')->delete($photo);
            //     }
            // }
        });
    
        static::deleting(function ($model) {
            if ($model->photo !== null) {
                Storage::disk('public')->delete($model->photo);
            }
            
            // if ($model->photos !== null) {
            //     // Assuming photos is an array of photo paths
            //     foreach ($model->photos as $photo) {
            //         Storage::disk('public')->delete($photo);
            //     }
            // }
        });
    }
}
