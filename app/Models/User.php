<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 04 Mar 2019 17:41:08 +0000.
 */

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Support\Str;
use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $api_token
 *
 * @package App\Models
 */
class User extends Eloquent implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Authenticatable;

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'remember_token',
		'api_token'
	];

    public function generateToken()
    {
        $this->api_token = Str::random(10);
        $this->save();

        return $this->api_token;
    }
}
