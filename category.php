<?php


$categories = get_the_category();

if ( ! empty( $categories ) ) {
	echo esc_html( $categories[0]->name );
}

echo "<br>";
echo $categories[0]->name;

echo "<br>";

single_cat_title();
?>

<?php echo category_description( ); ?>

<?php
echo "<br>";
var_dump($categories);