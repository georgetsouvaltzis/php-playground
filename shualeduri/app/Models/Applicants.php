<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicants extends Model
{
    use HasFactory;

    protected $casts = [
        'is_hired' => 'boolean'
        ];

    protected $fillable = [
        'name',
        'surname',
        'experience_years',
        'is_hired'
    ];
}
