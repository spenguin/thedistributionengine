@extends( 'master' )

@section( 'content' )
    <div class="section">
        @if( !empty( $shop ) )
            <h2>Shop Administration</h2>
            <div class="form region-input">
                {{Form::open( array('method' => $method, 'url' => 'shops/accept' ) ) }}
                    {{ Form::hidden( 'shopId', $shop['id'] ) }}
                    <fieldset>
                        <legend>Shop details for {{ $shop['name'] }}</legend>
                        <div class="form-group">
                            {{Form::label( 'Company address' )}}
                            {{ $shop['address'] }}
                        </div>
                        <div class="form-group">
                            {{ Form::label( 'Region' ) }}
                            {{ Form::select( 'regionId', $regions ) }}
                        </div>
                        {{Form::submit( "Activate", array( "class" => "btn btn-default" ) )}}
                        <a href="<a href="{{ URL::to( '/' ) }}/shops/decline/{{ $shop['id'] }}" class="btn btn-default">Decline Shop</a>
                        <div class="form-group">
                            <a href="<a href="{{ URL::to( '/' ) }}/admin/shops/">Clear form</a>
                        </div>
                    </fieldset>
                
                {{Form::close()}}
                
            </div>            
            
        @endif
        <h3>Shops</h3>
        @if( count( $shops ) > 0 )
            <table>
                <thead>
                    <tr>
                        <td width="5%">Id</td>
                        <td width="30%">Name</td>
                        <td width="25%">Region</td>
                        <td width="20%">Status
                        <td width="20%">&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $count  = 1; ?>
                        @foreach ( $shops as $s )
                            <tr class="<?php echo $count == 1 ? 'odd' : 'even'; ?>">
                                <td style="text-align:center;">{{ $s['id'] }}</td>
                                <td>{{ $s['name']; }}</td>
                                <td>
                                    @if( empty( $s['regionId'] ) )
                                        --
                                    @else
                                        {{ $regions[$s['regionId']] }}
                                    @endif
                                </td>
                                <td>{{ $status[$s['status']] }}</td>
                                <td><a href="{{ URL::to( '/' ) }}/admin/shops/{{ $s['id'] }}">Edit</a></td>
                            </tr>
                        <?php
                            $count  = ( $count+1 ) % 2;  ?>
                        @endforeach
                </tbody>
                
            </table>
        @else
            <p class="info">No shops to display</p>
        @endif
    </div>
    
@stop