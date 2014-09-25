@extends( 'master' )


@section( 'content' )
    <div class="section">
        <h2>Login Reset</h2>
        <div class="form region-input">
            {{Form::open( array('method' => $method, 'url' => 'prompt' ) ) }}
                <fieldset>
                    <legend>Please enter username or email address</legend>
                    <div class="form-group">
                        {{Form::label( 'Username or Email' )}}
                        {{Form::text('userstring')}}
                    </div>
                    {{Form::submit( "Submit", array( "class" => "btn btn-default" ) )}}
                    <div class="form-group">
                        <a href="login">Return to login</a>
                    </div>
                </fieldset>
            
            {{Form::close()}}
            
        </div>
    </div>
    
@stop