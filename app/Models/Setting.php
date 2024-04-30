<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'first_about_us',
        'second_about_us',
        'f_link',
        't_link',
        's_link',
        'i_link',
    ];
    protected function logo(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => asset($value),
        );
    }
}