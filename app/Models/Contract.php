<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'contract_number',
        'contract_date',
         'party_1',
         'party_2',
        'contract_address',
        'wood_type',
        'column_cladding',
        'total_area',
        'square_meter',
        'total_value',
        'paid_amount',
        'remaining_amount',
        'work_duration',
        'work_start_date',
        'price_quote_number',
        'notes',

    ];
    public function party1()
    {
        return $this->belongsTo(User::class, 'party_1');
    }
    public function party2()
    {
        return $this->belongsTo(User::class, 'party_2');
    }
    public function payments()
    {

    return $this->hasMany(Payment::class);
   }


}
