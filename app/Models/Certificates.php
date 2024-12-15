<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Certificates extends Model
{
    use Notifiable;

    protected $table = "Certificate";
    protected $guarded=[];

    // In your Certificate model
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'Emp_id', 'id'); // Adjust as per your column names
    }

}
