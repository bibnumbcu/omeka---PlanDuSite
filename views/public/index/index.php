<?php echo head(array('bodyclass' => 'PlanDuSitePage','title'=>html_escape(get_option('plan_du_site_page_title')))); ?>



<h1><?php echo html_escape(get_option('plan_du_site_page_title')); // Not HTML ?></h1>

<?php if (get_option('plan_du_site_add_main_navigation_menu')) :?>
<h2>Menu principal</h2>
<?php echo public_nav_main();?>
<?php endif; ?>

<h2>Collections</h2>
<?php if (get_option('plan_du_site_add_collection_tree_plugin') ) :?>
<?php echo $collectiontree;?>
<?php else: ?>
<ul>
<?php foreach (loop('collections') as $collection): ?>
    <li><?php echo link_to_collection(); ?></li>
<?php endforeach; ?>
</ul>
<?php endif; ?>

<?php if (get_option('plan_du_site_add_exhibit_builder_plugin') ) :?>
<h2>Expositions</h2>
<ul>
<?php foreach (loop('exhibits') as $exhibit): ?>
    <li><?php echo link_to_exhibit(); ?></li>
<?php endforeach; ?>
</ul>
<?php endif; ?>


<?php  if (get_option('plan_du_site_add_simple_page_plugin')) :?>
<h2>Pages supplémentaires</h2>
<ul>
<?php foreach (loop('simplepages') as $page): ?>
    <li><a href="<?php echo html_escape(record_url($page)); ?>"><?php echo metadata($page, 'title'); ?>  </a>  </li>
<?php endforeach; ?>

<?php  if (get_option('plan_du_site_add_simple_contact_form_plugin')) :?>
    <li><a href="<?php echo WEB_ROOT.'/'.$simplecontactformpath; ?>">Formulaire de contact</a></li>
<?php endif; ?>
</ul>
<?php endif; ?>


<?php echo foot(); ?>