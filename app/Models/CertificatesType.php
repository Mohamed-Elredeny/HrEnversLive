<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CertificatesType extends Model
{
    use Notifiable;

    protected $table = "certificate_type";
    protected $guarded=[];
}
