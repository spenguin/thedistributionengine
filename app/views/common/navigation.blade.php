<ul>
@if( Auth::check() )
    <li class="active"><a href="#dashboard" class="scroll">Dashboard Home</a></li>
    <?php switch( Auth::user()->userTypeId ):
        case( 1 ): ?>
            <li><a href="admin/publishers" class="scroll">Publishers</a></li>
            <li><a href="admin/shops" class="scroll">Shops</a></li>
            <li><a href="admin/team" class="scroll">Team</a></li>
            <?php break;
        case( 2 ): ?>
            <li><a href="#shop" class="scroll">Shop Details</a></li>
            <li><a href="#team" class="scroll">Team</a></li>
            <li><a href="#orders" class="scroll">Orders</a></li>
            <?php break;
        case( 3 ): ?>
            <li><a href="/publisher/detail" class="scroll">Publisher Details</a></li>
            <li><a href="#team" class="scroll">Team</a></li>
            <li><a href="/creators" class="scroll">Creators</a></li>
            <li><a href="/catalogue" class="scroll">Catalogue</a></li>
            <?php break; 
    endswitch; ?>
        <li><a href="<?php echo url( '/logout' ); ?>" class="login">Logout</a></li>
@else
    <li class="active"><a href="<?php echo url( '/' ); ?>" class="scroll">Home</a></li>
<!--    <li><a href="<?php echo url( '/' ); ?>#publishers" class="scroll">Publishers</a></li>-->
<!--    <li><a href="<?php echo url( '/' ); ?>#contact" class="scroll">Contact</a></li>-->
    <li><a href="<?php echo url( '/login' ); ?>" class="login">Login</a></li>
@endif
</ul>
<div class="clear"> </div>  