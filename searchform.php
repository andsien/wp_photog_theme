<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" class="form-inline xsearch-form" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input id="<?php echo $unique_id; ?>" class="form-control mr-sm-2 form-control-lg" type="search" placeholder="Search" aria-label="Search" value="<?php echo get_search_query(); ?>" name="s">
    <button class="btn btn-lg btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
</form>
