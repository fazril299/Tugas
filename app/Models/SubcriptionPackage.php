<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable (['nama_package','description','price'])]

class SubcriptionPackage extends Model
{
    public function subcriptionPackageUsers(): HasMany
    {
        return $this->hasMany(SubcriptionPackageUsers::class);
    }
    public function subcriptionPackageBooks(): HasMany
    {
        return $this->hasMany(SubcriptionPackageBooks::class);
    }
}
