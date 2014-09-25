<?php

class SiteVars extends Eloquent
{
    public static function getSiteVars( $prefix = '' )
    {
        $_res   = DB::table( 'sitevars' )->where( 'name', 'LIKE', $prefix . "__%" )->get();
        $o      = array();
        if( count( $_res ) > 0 )
        {
            foreach( $_res as $row )
            {
                $o[ str_replace( $prefix . '__', '', $row->name )]  = $row->value;
            }
        }
        return $o;
        
    }
}

