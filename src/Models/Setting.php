<?php

namespace GrassFeria\Starterkid\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
              ->format('webp');
        $this->addMediaConversion('medium')
              ->width(config('starterkid.image_conversions.medium.width'))
              ->format('webp');
       $this->addMediaConversion('large')
              ->width(config('starterkid.image_conversions.large.width'))
              ->quality(config('starterkid.image_conversions.large.quality'))
              ->format('webp');
              
        $this->addMediaConversion('thumb_fallback')
              ->width(config('starterkid.image_conversions.thumb.width'));
              
        $this->addMediaConversion('medium_fallback')
              ->width(config('starterkid.image_conversions.medium.width'));
            
          
       $this->addMediaConversion('large_fallback')
              ->width(config('starterkid.image_conversions.large.width'));
              
        
              
              
    }

    protected static function boot()
    {
      parent::boot();

      // stop if cache is false
      if(config('starterkid-frontend.frontend_cache') == false){
            return;
      }

      static::updated(function ($model) {
            //delete all blogpost cache keys
            if(Route::has('front.blog-post.index')){
                $blogposts = \GrassFeria\StarterkidBlog\Models\BlogPost::frontGetBlogPostWhereStatusIsOnline()->get();
                foreach ($blogposts as $blogpost) {
                $url = route('front.blog-post.show', ['slug' => $blogpost->slug]);
                $cacheKey = \GrassFeria\StarterkidFrontend\Services\GetCacheKey::ForUrl($url);
                \Illuminate\Support\Facades\Cache::forget($cacheKey);
                \GrassFeria\StarterkidFrontend\Jobs\PreloadCacheJob::dispatch($url);
                  }      
            }

            //delete all wiki cache keys
            if(Route::has('front.wiki.index')){
                  $wikis = \GrassFeria\StarterkidWiki\Models\Wiki::frontGetWikiWhereStatusIsOnline()->get();
                  foreach ($wikis as $wiki) {
                  $url = route('front.wiki.show', ['slug' => $wiki->slug]);
                  $cacheKey = \GrassFeria\StarterkidFrontend\Services\GetCacheKey::ForUrl($url);
                  \Illuminate\Support\Facades\Cache::forget($cacheKey);
                  \GrassFeria\StarterkidFrontend\Jobs\PreloadCacheJob::dispatch($url);
                    }      
              }
            

            
            //delete all services cache keys
            
            $services = \GrassFeria\StarterkidService\Models\Service::frontGetServicesWhereStatusIsOnline()->get();
            foreach ($services as $service) {
                $url = route('front.service.show', ['slug' => $service->slug]);
                $cacheKey = \GrassFeria\StarterkidFrontend\Services\GetCacheKey::ForUrl($url);
                \Illuminate\Support\Facades\Cache::forget($cacheKey);
                \GrassFeria\StarterkidFrontend\Jobs\PreloadCacheJob::dispatch($url);
            }

            // delete service index cache key
            $cacheKeyServiceIndex = \GrassFeria\StarterkidFrontend\Services\GetCacheKey::ForUrl(route('front.service.index'));
            \Illuminate\Support\Facades\Cache::forget($cacheKeyServiceIndex);
            \GrassFeria\StarterkidFrontend\Jobs\PreloadCacheJob::dispatch(route('front.service.index'));
            


            // delete homepage cache key
            $cacheKeyHomepage = \GrassFeria\StarterkidFrontend\Services\GetCacheKey::ForUrl(route('front.homepage'));
            \Illuminate\Support\Facades\Cache::forget($cacheKeyHomepage);
            \GrassFeria\StarterkidFrontend\Jobs\PreloadCacheJob::dispatch(route('front.homepage'));
         

            // delete more cache keys service
            (new \App\Services\DeleteCacheKeysAfterServiceUpdate())->deleteCacheKeys();
        });
    }

    
    
}
