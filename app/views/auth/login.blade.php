@extends( 'master' )


@section( 'content' )
    <div class="section">
        <h2>Login</h2>
        <div class="form region-input">
            {{Form::open( array('method' => $method, 'url' => 'validate' ) ) }}
                <fieldset>
                    <legend>Please enter username and password</legend>
                    <div class="form-group">
                        {{Form::label( 'Username' )}}
                        {{Form::text('username')}}
                    </div>
                    <div class="form-group">
                        {{Form::label( 'Password' )}}
                        {{Form::password('password')}}
                    </div>
                  
                        
                    {{Form::submit( "Submit", array( "class" => "btn btn-default" ) )}}
                    <div class="form-group">
                        <a href="forgotten">Forgotten your login</a> | <a href="register">Register to use our services</a>
                    </div>
                </fieldset>
            
            {{Form::close()}}
            
        </div>
    </div>
    
@stop