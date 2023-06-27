<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Formdata extends Model
{
    use HasFactory;
    public function up()
    {
        Schema::create('formdata', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

}
