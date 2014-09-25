@extends( 'master' )

@section( 'content' )
    {{Form::model( $region, array('method' => $method, 'url' => 'regions/' . $region->id ) ) }}
    
    @unless( $method == 'delete' )
        <div class="form-group">
            {{Form::label( 'Name' )}}
            {{Form::text('name')}}
        </div>
        <div class="form-group">
            {{Form::label( 'Description' )}}
            {{Form::textarea( 'description' )}}
        </div>
        <div class="form-group">
            {{Form::label( 'Parent')}}
            {{Form::select( 'parentId', $parents )}}
        </div>
            
        {{Form::submit( "Save", array( "class" => "btn btn-default" ) )}}
    @else
        {{Form::submit( "Delete", array( "class" => "btn btn-default" ) )}}
    @endif
    
    {{Form::close()}}
@stop