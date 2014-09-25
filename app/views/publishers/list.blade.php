@extends( 'master' )

@section( 'content' )
    <div class="section">
        @if( !empty( $publisher ) )
            <h2>Publisher Administration</h2>
            <div class="form region-input">
                {{Form::open( array('method' => $method, 'url' => 'publishers/accept' ) ) }}
                    {{ Form::hidden( 'publisherId', $publisher['id'] ) }}
                    <fieldset>
                        <legend>Publisher details for {{ $publisher['name'] }}</legend>
                        <div class="form-group">
                            {{Form::label( 'Company address' )}}
                            {{ $publisher['address'] }}
                        </div>
                        {{Form::submit( "Activate", array( "class" => "btn btn-default" ) )}}
                        <a href="<a href="{{ URL::to( '/' ) }}/publishers/decline/{{ $publisher['id'] }}" class="btn btn-default">Decline Publisher</a>
                        <div class="form-group">
                            <a href="<a href="{{ URL::to( '/' ) }}/admin/publishers/">Clear form</a>
                        </div>
                    </fieldset>
                
                {{Form::close()}}
                
            </div>            
            
        @endif
        <h3>Publishers</h3>
        @if( count( $publishers ) > 0 )
            <table>
                <thead>
                    <tr>
                        <td width="10%">Id</td>
                        <td width="30%">Name</td>
                        <td width="30%">Status
                        <td width="30%">&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $count  = 1; ?>
                        @foreach ( $publishers as $p )
                            <tr class="<?php echo $count == 1 ? 'odd' : 'even'; ?>">
                                <td style="text-align:center;">{{ $p['id'] }}</td>
                                <td>{{ $p['name']; }}</td>
                                <td>{{ $status[$p['status']] }}</td>
                                <td><a href="{{ URL::to( '/' ) }}/admin/publishers/{{ $p['id'] }}">Edit</a></td>
                            </tr>
                        <?php
                            $count  = ( $count+1 ) % 2;  ?>
                        @endforeach
                </tbody>
                
            </table>
        @else
            <p class="info">No publishers to display</p>
        @endif
    </div>
    
@stop