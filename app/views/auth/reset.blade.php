@extends( 'master' )


@section( 'content' )
    <div class="section">
        <h2>Reset Password</h2>
        <div class="form region-input">
            {{Form::open( array('method' => $method, 'url' => 'auth/update' ) ) }}
                {{ Form::hidden( 'userId', $userId ) }}
                <fieldset>
                    <legend>Please enter and confirm new password</legend>
                    <div class="form-group">
                        {{Form::label( 'New Password' )}}
                        {{Form::text('password')}}
                    </div>
                    <div class="form-group">
                        {{Form::label( 'Confirm Password' )}}
                        {{Form::password('passconf')}}
                    </div>
                  
                        
                    {{Form::submit( "Submit", array( "class" => "btn btn-default" ) )}}
                </fieldset>
            
            {{Form::close()}}
            
        </div>
    </div>
    
@stop