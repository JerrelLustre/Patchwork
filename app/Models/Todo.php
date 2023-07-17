<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters){
        // If the array is not null or false, then run the statement
        if($filters['type'] ?? false){
            // Find all todos that fit the request type (exam or  assignment)
            $query->where('type', 'like' , '%' . request('type' ) . '%'  );
        };
    }

    protected $fillable =['title' , 'course', 'type', 'date', 'time','user_id'];

    // Relationship to user
    // user_id may not be needed because it is default. If using a different name then change accordingly
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
