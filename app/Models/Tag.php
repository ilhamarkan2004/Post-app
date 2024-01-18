<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	/**
	 * @var string[]
	 */
	protected $fillable = [
		'name'
	];
	/**
	 * @var string[]
	 */
	protected $hidden = [];
	public function posts()
	{
		return $this->belongsToMany(Post::class, 'post_tag', 'tagId', 'postId');
	}
}
