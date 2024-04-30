<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Advertisement extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'name', 'price', 'phone', 'address',
        'category_id',
        'number_rooms',
        'number_floors',
        'number_kitchens',
        'number_halls',
        'elevator',
        'furnished',
        'type',
        'image',
        'description',
        'status',
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => asset($value),
        );
    }

    protected $casts = [
        'elevator' => Status::class,
        'furnished' => Status::class,
        'status' => Status::class,
        'badge' => Status::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}