@extends( 'master' )


@section( 'content' )
    <div class="section">
        <h2>Shop Registration</h2>
        <div class="form region-input">
            {{Form::open( array('method' => $method, 'url' => 'shops/register' ) ) }}
                <fieldset>
                    <legend>Please enter your Shop details</legend>
                    <div class="form-group">
                        {{Form::label( 'Your name' )}}
                        {{Form::text('name')}}
                    </div>
                        <div class="form-group">
                        {{Form::label( 'Your email' )}}
                        {{Form::text('email')}}
                    </div>
                    <div class="form-group">
                        {{Form::label( 'Shop name' )}}
                        {{Form::text('shopname')}}
                    </div>
                    <div class="form-group">
                        {{Form::label( 'Shop address' )}}
                        {{Form::textarea('address')}}
                    </div>
                    <div class="form-group">
                        {{Form::label( 'Password' )}}
                        {{Form::password('password')}}
                    </div>
                    <div class="form-group">
                        {{Form::label( 'Confirm Password' )}}
                        {{Form::textarea('confpass')}}
                    </div>
                    {{Form::submit( "Submit", array( "class" => "btn btn-default" ) )}}
                    <div class="form-group">
                        <a href="./registration/shops">Clear form</a>
                    </div>
                </fieldset>
            
            {{Form::close()}}
            
        </div>
    </div>
    
@stop