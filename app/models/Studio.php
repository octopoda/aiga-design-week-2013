<?php

class Studio extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    public function activity() {
    	return $this->belongsTo('activity');
    }
}