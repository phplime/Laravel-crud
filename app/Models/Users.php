<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'user_lists';
    // protected $primaryKey = 'id';
    // protected $timestamps = FALSE;
    // protected $fillable = ['name','username','email','status','address'];
    
    public function user(){
        return $this->hasMany(UserInformation::class);
    }



}