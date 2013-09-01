<?php

class Venue extends Eloquent {
	protected $guarded = array();

	/**
   * Items that are "fillable"
   * meaning we can mass-assign them from the constructor
   * or $comment->fill()
   * @var array
   */
	protected $fillable = array('name',  'description', 'address1', 'address2', 'city');

	public static $rules = array(
		'name'=>'required',
		'description'=>'required',
		'address1'=>'required',
		'address2'=>'required',
		'city'=>'required',
	);

	public function Events() {
		return $this->hasMany('Event');
	}
}