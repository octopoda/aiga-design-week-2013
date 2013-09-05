<?php

class Sponsor extends Eloquent {
	protected $guarded = array();

	protected $fillable = array('name', 'link', 'description');

	public static $rules = array(
		'name'=>'required',
		'link'=>'required|url',
		'description'=>'required' 
	);

	public function activity() {
		return $this->belongsToMany('Activity', 'activity_sponsor');
	}

}