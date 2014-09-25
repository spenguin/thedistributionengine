@extends( 'master' )

@section( 'content' )
    <h1>{{{$region->name}}}</h1>
    <p>{{{$region->description}}}</p>
    <p>Parent: 
    @if( empty( $parent ) )
        No parent
    @else
        <a href="{{url( 'regions/' . $parent->id )}}">{{$parent->name}}</a>
    @endif
    </p>

@stop