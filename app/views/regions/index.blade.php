@extends( 'master' )


@section( 'content' )
    <div class="section">
        <h2>Region Administration</h2>
        <div class="form region-input">
            {{Form::model( $region, array('method' => $method, 'url' => 'regions/' . $region->id ) ) }}
                <fieldset>
                    @unless( $method == 'delete' )
                        <legend>Add or Update Region</legend>
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
                </fieldset>
            
            {{Form::close()}}
        </div>
        <h3>Current Regions</h3>
        <table>
            <thead>
                <tr>
                    <td width="10%">Id</td>
                    <td width="30%">Name</td>
                    <td width="30%">Parent</td>
                    <td width="30%">&nbsp;</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $count  = -1;
                    foreach( $regions as $region ): ?>
                            <tr class="<?php echo $count < 0 ? 'odd' : 'even'; ?>">
                                <td></td>
                                <td><?php echo $region->name; ?></td>
                                <td><?php echo ( $region->parentId == 0 ) ? '-' : $parents[$region->parentId]; ?></td>
                                <td>{{ HTML::link('regions/edit/' . $region->id, 'Edit') }} | {{ HTML::link('regions/delete/' . $region->id, 'Delete') }}</td>
                            </tr>
                <?php
                        $count  = $count*-1;
                    endforeach; ?>
            </tbody>
            
        </table>
    </div>

@stop
