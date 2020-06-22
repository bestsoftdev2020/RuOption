<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class destination extends Model
{
    //
    protected $table = 'destinations';

	/**
	 * The attributes to be fillable from the model.
	 *
	 * A dirty hack to allow fields to be fillable by calling empty fillable array
	 *
	 * @var array
	 */

	protected $fillable = [];
	protected $guarded = ['id'];
}
