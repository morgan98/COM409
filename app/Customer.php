<?php
namespace App;


use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'FirstName', 'LastName', 'Address1', 'Address2','Postcode','PremiumAccess', 'email', 'password',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}