<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
       'name',
       'speaker_name',
       'start_date',
       'end_date',
       'target_audience',
       'participants_limit'

        // $table->foreign('certificado_id')->references('id')->on('certificates');
    ];
}
