<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposalitem extends Model
{
    protected $table = 'proposal_items';

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
