<?php

class Activity extends Eloquent {
	protected $guarded = array();
	//protected $table = 'activities';

	/**
   * Items that are "fillable"
   * meaning we can mass-assign them from the constructor
   * or $comment->fill()
   * @var array
   */
	protected $fillable = array('name',  'start_time',  'end_time', 'description');

	public static $rules = array(
		'name'=>'required', 
		'start_time'=>'required',
		'end_time'=>'required',
		'description'=>'required'
	);

	public function Day() {
		return $this->belongsTo('Day');
	}

	public function Venue() {
		return $this->belongsTo('Venue');
	}

	public function talk() {
		return $this->hasMany('Talk');
	}

	public function studio() {
		return $this->hasMany('Studio');
	}

	
}