<?php

namespace GrassFeria\Starterkid\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Setting extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'banner_message',
    ];


    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
              ->width(config('starterkid.image_conversions.thumb.width'))
              ->sharpen(config('starterkid.image_conversions.thumb.sharpen'))
              ->quality(config('starterkid.image_conversions.thumb.quality'))
              ->format('webp');
        $this->addMediaConversion('medium')
              ->width(config('starterkid.image_conversions.medium.width'))
              ->sharpen(config('starterkid.image_conversions.medium.sharpen'))
              ->quality(config('starterkid.image_conversions.medium.quality'))
              ->format('webp');
       $this->addMediaConversion('large')
              ->width(config('starterkid.image_conversions.large.width'))
              ->sharpen(config('starterkid.image_conversions.large.sharpen'))
              ->quality(config('starterkid.image_conversions.large.quality'))
              ->format('webp');
              
        $this->addMediaConversion('thumb_fallback')
              ->width(config('starterkid.image_conversions.thumb.width'))
              ->sharpen(config('starterkid.image_conversions.thumb.sharpen'))
              ->quality(config('starterkid.image_conversions.thumb.quality'));
              
        $this->addMediaConversion('medium_fallback')
              ->width(config('starterkid.image_conversions.medium.width'))
              ->sharpen(config('starterkid.image_conversions.medium.sharpen'))
              ->quality(config('starterkid.image_conversions.medium.quality'));
          
       $this->addMediaConversion('large_fallback')
              ->width(config('starterkid.image_conversions.large.width'))
              ->sharpen(config('starterkid.image_conversions.large.sharpen'))
              ->quality(config('starterkid.image_conversions.large.quality'));
        
              
              
    }

    
    
}
