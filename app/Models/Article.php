<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 04 Mar 2019 17:41:08 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Article
 * 
 * @property int $id
 * @property string $title
 * @property string $body
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Article extends Eloquent
{
	protected $fillable = [
		'title',
		'body'
	];
}
