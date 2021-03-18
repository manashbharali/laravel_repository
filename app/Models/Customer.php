<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function format()
    {
        return [
            'customer_id' => $this->id,
            'customer_name' => $this->name,
            'customer_contact' => $this->contact,
            'created_at' => $this->created_at->diffForHumans(),
            'created_by' => $this->user->email,
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
