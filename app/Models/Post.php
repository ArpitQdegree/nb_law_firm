<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'slug',
        'body',
        'status',
        // 'posted_by',
        'image',
    ];

    #slug functionality added from here

    public function createSlug($title, $id = 0){
        $slug = str_slug($title);

        $allSlugs = $this->getRelatedSlugs($slug, $id);

        if(! $allSlugs->contains('slug', $slug)){
            return $slug;
        }

        for($i =1; $i<=10; $i++){
            $newSlug = $slug.'-'.$i;

            if(! $allSlugs->contains('slug', $newSlug)){
                return $newSlug;
            }
        }

        throw new \Exception('can not create a unique slug');
    }

    protected function getRelatedSlugs($slug, $id=0){
        return Post::select('slug')->where('slug','like', $slug.'%')
                    ->where('id','<>', $id)
                    ->get();
        
        // $post->slug = $slug->createSlug($request->title);
    }

    // protected static function boot(){
    //     parent::boot();

    //     static::created(function ($post){
    //         $post->slug = $post->createSlug($post->title);
    //         $post->save();
    //     });
    // }

    // private function createSlug($title){
    //     if(static::whereSlug($slug = Str::slug($title))->exists()){
    //         $max = static::whereTitle($title)->latest('id')->skip(1)->value('slug');

    //         if(is_numeric($max[-1])){
    //             return preg_replace_callback('/(\d+)$/', function ($mathces){
    //                 return $mathces[1] + 1;
    //             }, $max);
    //         }

    //         return "{$slug}-2";
    //     }

    //     return $slug;
    // }
}
