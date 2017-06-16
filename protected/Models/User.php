<?php
namespace App\Models;

use App\Model;

/**
 * @property string $email
 * @property string $password
 */
class User
    extends Model
{
    protected static $table = 'users';

    protected function validate_email($value)
    {
        if (false == strpos($value, '@')){
            die('Неверный email');
        }
    }

    /**
     * @deprecated
     */
    public function foo()
    {

    }
}