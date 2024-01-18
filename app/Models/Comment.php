<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	/**
	 * @var string[]
	 */
	protected $fillable = [
		'review',
		'postId'
	];
	/**
	 * @var string[]
	 */
	protected $hidden = [];
	public function post()
	{
		return $this->belongsTo(Post::class, 'postId');
	}
}
