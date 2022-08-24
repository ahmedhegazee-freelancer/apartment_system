<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ['apartment_id', 'service_id', 'resident_id', 'price', 'payment_date', 'status', 'uuid'];

    public function apartment(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Apartment::class);
    }
    public function service(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
    public function resident(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'resident_id');
    }

    public function scopePending(Builder $query)
    {
        return $query->where('status', 'pending');
    }
    public function scopePaid(Builder $query)
    {
        return $query->where('status', 'paid');
    }
}