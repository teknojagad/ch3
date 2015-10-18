<?php
//function declaration
function p( $content ) {
    return "<p>$content</p>";
}
//fucntion calls
$output = p( "I want this text in my first paragraph" );
$output .= p( "...and this in my second" );
echo $output;
