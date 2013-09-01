<?php

class Talk extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    public function Activity() {
    	return $this->belongsTo('activity');
    }

    public function Speaker() {
    	return $this->hasMany('Speaker');
    }
}