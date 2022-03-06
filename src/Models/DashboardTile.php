<?php

namespace Monet\Framework\Dashboard\Models;

use Illuminate\Database\Eloquent\Model;
use Monet\Framework\Support\Extensions\Extendable;

class DashboardTile extends Model
{
    use Extendable;

    protected $fillable = [
        'name',
        'position'
    ];

    public function dashboard()
    {
        return $this->belongsTo(Dashboard::class);
    }

    public function getHtmlAttribute()
    {
        return '<livewire:' . $this->name . ' position="' . $this->position . '" />';
    }
}