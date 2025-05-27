<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'country_code', 'country_code_name'];

    public function getCountryCodeWithPhoneAttribute()
    {
        return '+' . $this->country_code . ' ' . Str::limit(optional($this->user)->phone ?? $this->phone, 50);
    }
}
