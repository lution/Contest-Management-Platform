<?php

class News   extends Eloquent {
    protected $table = "news";
    protected $primaryKey = "news_id";
    protected $fillable = array('cat_id', 'user_id', 'title', 'content', 'update_time');
    public $timestamps = false;
    
}

