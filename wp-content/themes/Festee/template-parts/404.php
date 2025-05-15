<?php
get_header();

$content = '<div class="error-page">';
$content .= '<h1>Oops! Page not found.</h1>';
$content .= '<p>The page you are looking for might have been moved or deleted.</p>';
$content .= '<a href="' . home_url() . '">Go back to homepage</a>';
$content .= '</div>';
echo $content;
get_footer();
?>