<?php

class Answer extends Base {

	protected $guarded = array();

	public static $rules = array(
		'answer'=>'required|min:2|max:255'
	);

	public function user() {
		return $this->belongsTo('User');
	}

	public function question() {
		return $this->belongsTo('Question');
	}
}
