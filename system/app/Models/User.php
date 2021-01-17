<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\Traits\Attributes\UserAttributes;
use App\Models\Traits\Relations\UserRelations;

class User extends Authenticatable
{
    protected $table = 'user';
    use HasFactory, Notifiable;
    use UserAttributes, UserRelations;
    
}
