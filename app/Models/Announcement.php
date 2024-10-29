<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $table = 'announcements'; 
    protected $primaryKey = 'id';
    protected $fillable = ['title','start', 'end', 'picture','description','created_at', 'updated_at'];

}
