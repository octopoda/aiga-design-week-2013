<?php

class Speaker extends Eloquent {
	protected $guarded = array();

	protected $fillable = array('name',  'description');

	public static $rules = array(
		'name'=>'required',
		'description'=>'required',
	);


	public function Activity() {
		return $this->belongsTo('Activity');
	}
}