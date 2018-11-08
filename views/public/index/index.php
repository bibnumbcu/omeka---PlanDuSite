<?php echo head(); ?>

<h1>Plan du site</h1>
<h2>Collections</h2>
<ul>
<?php foreach (loop('collections') as $collection): ?>
    <li><?php echo link_to_collection(); ?></li>
<?php endforeach; ?>
</ul>

<h2>Menu principal</h2>
<?php echo public_nav_main();?>

<?php echo foot(); ?>