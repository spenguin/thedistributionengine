<?php namespace Soaringpenguin\Assets;

class Assets
{
    public static function greeting( $file )
    {
        return "What up dawg";
    }
    public static function register( $assetType, $asset )
    {
        
        var_dump( Assettype::where( 'name' , '=', $assetType )->first( array( 'id' ) ) );
        // Find out what kind of file it is
        $typeId = 1;  // Need to figure out why this isn't working. //new Assettype(); //Assettype::where( 'name' , '=', $assetType )->first( array( 'id' ) );
        
   //     $asset  = Input::file( 'image' );
        $newFilename    = time() . '.' . $asset->getClientOriginalExtension();
        $insert = array(
            'filename'  => $newFilename,
            'originalName'  => $asset->getClientOriginalName(),
            'mimeType'  => $asset->getMimeType()
        );
        var_dump($insert);
        
        $destinationPath = public_path() . '/img/assets/';
			
		$uploadSuccess = Input::file('image')->move($destinationPath, $newFilename );
        
        return 1;
    }
}
