<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
<<<<<<< HEAD
        'childName','nameOfParents','email','phone','year','date',
=======
        'childName','surnameСhild','nameOfParents','phone','year','date','email'
>>>>>>> 86c8323531bbf312c52ab8c3ca49f634b0059f35
    ];
}
