<?php get_header(); ?>
<div class="container-404">
    <h2 class="page-heading">You have searched a non existent page.</h2>
    <img src="http://source.unsplash.com/640x480/?glasgow">

<h3>Try the following links instead.</h3>
    <ul>
        <li><a href="<?php echo site_url('/blog') ?>"> Blog List</a></li>
        <li><a href="<?php echo site_url('/projects') ?>"> Projects</a></li>
        <li><a href="<?php echo site_url('/about') ?>">About</a></li>
        <li><a href="<?php echo site_url('') ?>"> Home Page</a></li>
    </ul>
</div>

<?php get_footer(); ?>