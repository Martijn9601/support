<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    /**
     * 
     *
     * @var array
 */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    /**
     * 
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * 
     */
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
    /**
     * 
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    /**
     * 
     * @param  
     */
    public static function getTicketOwner($user_id)
    {
        return static::where('id', $user_id)->firstOrFail();
    }
}