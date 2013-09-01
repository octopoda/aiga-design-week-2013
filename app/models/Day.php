<?php

class Day extends Eloquent {
	protected $guarded = array();

	/**
   * Items that are "fillable"
   * meaning we can mass-assign them from the constructor
   * or $comment->fill()
   * @var array
   */
	protected $fillable = array('day_name', 'day_title');

	public static $rules = array(
		'day_name'=>'required',
		'day_title'=>'required'
	);

	public function activity() {
		return $this->hasMany('Activity');
	}
}