@extends( 'master' )


@section( 'content' )
    <div class="section">
        <h2>Publisher Registration</h2>
        <div class="form region-input">
            {{Form::open( array('method' => $method, 'url' => 'publishers/register', 'enctype' => 'multipart/form-data' ) ) }}
                <fieldset>
                    <legend>Please enter your Publisher details</legend>
                    <div class="form-group">
                        {{Form::label( 'Your name' )}}
                        {{Form::text('name')}}
                    </div>
                        <div class="form-group">
                        {{Form::label( 'Your email' )}}
                        {{Form::text('email')}}
                    </div>
                    <div class="form-group">
                        {{Form::label( 'Company name' )}}
                        {{Form::text('companyname')}}
                    </div>
                    <div class="form-group">
                        {{Form::label( 'Company address' )}}
                        {{Form::textarea('address')}}
                    </div>
                    <div class="form-group">
                        {{Form::label( 'Company logo' )}}
                        {{ Form::file('image') }}
                    </div>
                    <div class="form-group">
                        {{Form::label( 'Password' )}}
                        {{Form::password('password')}}
                    </div>
                    <div class="form-group">
                        {{Form::label( 'Confirm password' )}}
                        {{Form::password('passconf')}}
                    </div>
                    {{Form::submit( "Submit", array( "class" => "btn btn-default" ) )}}
                    <div class="form-group">
                        <a href="./registration/publishers">Clear form</a>
                    </div>
                </fieldset>
            
            {{Form::close()}}
            
        </div>
    </div>
    
@stop