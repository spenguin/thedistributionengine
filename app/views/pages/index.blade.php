@extends( 'master' )


@section( 'content' )
    <div class="section about">
        <h2><a name="about">About The Distribution Engine</a></h2>
        <p>The Distribution Engine was started by Ken Goldberg and John Anderson as a means to support those independent comics publishers that were struggling to find decent distribution in the US and Canada.</p>
        <p>The Business Plan is simple:
            <ul>
                <li>Show each shop a variety of books. Actually let them see the books before they order.</li>
                <li>Don't force a minimum order on them.</li>
                <li>Support them after they've ordered any books with media mentions, supporting material where possible, and generally just being available to talk.</li>
            </ul></p>
            
        <p>The Distribution Engine isn't everywhere - yet. It's starting small to prevent overreaching and failing. Because failure is not an option.</p>
        <p>If you are interested in being a part of The Distribution Engine, either as a <a href="./registration/publishers">comics publisher</a> or a <a href="./registration/shops">comics dealer</a>, then please <a href="./register">register your interest</a>.</p> 
<!--            
        <p>If you run a comic shop, and want to hear more, <a href="mailto:info@thedistributionengine.com?subject=Comic Shop">let us know</a>.</p>
        <p>If you're an independent publisher who is struggling to get your work seen, <a href="mailto:info@thedistributionengine.com?subject=Publisher">tell us about it</a>. </p>-->
    </div>
    <div class="section publishers">
<!--        <h2><a name="publishers">Publishers in The Distribution Engine</a></h2>
        <p>These are the publishers we currently represent:</p>-->
        <div class="container">
            <?php $c    = 0; ?>
            @foreach( $publishers as $p )
                <div class="one-fifth column publisher @if( $c%6 == 0 ) alpha @endif @if( $c%5 == 1 ) omega @endif ">
                    <h3>{{ $p['name'] }}</h3>
                    <img src="./assets/{{ $logos[$p['id']]['name'] }}" style="max-width:50%;"/>
                </div>
                <?php $c++; ?>
            @endforeach
        
        
 <!--       
            <div class="one-third publisher column alpha">
                <h3>Soaring Penguin Press</h3>
                <img src="http://thedistributionengine.com/assets/1_1397476011_md.jpg" alt="Soaring Penguin Press" />
            </div>
            <div class="one-third publisher column ">
                <h3>Fanfare</h3>
                <img src="http://thedistributionengine.com/assets/2_1397911994_md.jpg" alt="Fanfare" />
            </div>
            <div class="one-third publisher column omega">
                <h3>Knockabout Comics</h3>
                <img src="http://thedistributionengine.com/assets/3_1397914906_md.jpg" alt="Knockabout Comics" />
            </div>
            <div class="one-third publisher column alpha">
                <h3>Accent UK</h3>
                <img src="" alt="Accent UK" />
            </div>
            <div class="one-third publisher column ">
                <h3>Time Bomb Comics</h3>
                <img src="http://thedistributionengine.com/assets/4_1397915112_md.png" alt="Time Bomb Comics" />
            </div>
            <div class="one-third publisher column omega">
                <h3>Subversive Comics</h3>
                <img src="http://thedistributionengine.com/assets/5_1397915112_md.png" alt="Subversive Comics" />
            </div>
            <div class="one-third publisher column alpha">
                <h3>Markosia</h3>
                <img src="http://thedistributionengine.com/assets/6_1397915112_md.png" alt="Markosia" />
            </div>-->
        </div>
    </div>
    
@stop