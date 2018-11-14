<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    public $timestamps = false;

    public function Teachers()
    {
        return $this->HasMany(SubjectsTeacher::class, 'subject');
    }
}
