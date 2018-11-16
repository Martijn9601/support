<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Ticket extends Model
{
	/**
	 * 
	 * 
	 * @var  array
	 */
    protected $fillable = [
    	'user_id', 'category_id', 'ticket_id', 'title', 'priority', 'message', 'status'
    ];
   
	public function user()
    {
    	return $this->belongsTo(User::class);
   }
   
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
 
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}