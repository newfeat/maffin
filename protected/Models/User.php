<?php
namespace App\Models;

use App\Model;

class User
    extends Model
    implements HasEmail
{
    protected static $table = 'users';

    public $email;
    public $password;

    use HasEmailTrait;



}