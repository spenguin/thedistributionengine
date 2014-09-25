<?php

class Asset extends Eloquent
{
    protected $table    = 'assets';
    protected $fillable = array( 'name', 'originalName', 'mimeType' );
    
    
}
