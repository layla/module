<?php namespace Layla\Module\Models;

class Relation extends Base {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = array(
		'resource_id',
		'other_resource_id',
		'type',
		'name',
		'morph_key'
	);

	////////////////////////////////////////////////////////////////////
	//////////////////////////// RELATIONS /////////////////////////////
	////////////////////////////////////////////////////////////////////

	public function parentResources()
	{
		return $this->hasMany('Layla\Module\Models\Resource', 'id', 'other_resource_id');
	}

	/**
	 * Relation with \Layla\Module\Models\Resource
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function resource()
	{
		return $this->belongsTo('Layla\Module\Models\Resource');
	}

	/**
	 * Relation with \Layla\Module\Models\Resource
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function other()
	{
		return $this->belongsTo('Layla\Module\Models\Resource', 'other_resource_id');
	}

}
