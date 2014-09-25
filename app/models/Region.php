<?php
class Region extends Eloquent
{
    protected $fillable = array( 'name', 'slug', 'description', 'parentId' );
    
    public function checkSlug( $slug )
    {
        return DB::table( 'regions' )->where( 'slug', $slug )->count();
    }
    
}
