<?php

class New extends \Eloquent {
	
	protected $table = 'news';
	protected $fillable = [
		'title',
		'content'
	];
}