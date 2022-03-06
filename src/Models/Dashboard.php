<?php

namespace Monet\Framework\Dashboard\Models;

use Illuminate\Database\Eloquent\Model;
use Monet\Framework\Auth\Models\User;
use Monet\Framework\Support\Extensions\Extendable;

class Dashboard extends Model
{
    use Extendable;

    protected $fillable = [
        'name',
        'active'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tiles()
    {
        return $this->hasMany(DashboardTile::class);
    }
}