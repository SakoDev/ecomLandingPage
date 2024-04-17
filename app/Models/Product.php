<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function getPrincipalImage()
    {
        $image = $this->images()->where('isPrincipal', true)->first();
        if ($image && $image->image) {
            $pathParts = pathinfo($image->image);
            $imageName = $pathParts['filename'] . '-small.' . $pathParts['extension'];
            return $pathParts['dirname'] . '/' . $imageName;
        } else {
            return 'default/default-product.jpg';
        }
    }
}
