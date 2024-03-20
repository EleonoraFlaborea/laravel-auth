<?php

namespace App\Models;

//use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Project extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = ['title', 'slug' ,'content', 'image'];

   /* public function getCreatedAt(){
        return Carbon::create($this->created_at)->format('d-m-Y');
    }

    public function getUpdatedAt(){
        return Carbon::create($this->updated_at)->format('d-m-Y');

    }*/
}
