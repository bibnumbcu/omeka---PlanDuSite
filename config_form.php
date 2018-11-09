<?php
$add_to_main_navigation      = get_option('plan_du_site_add_to_main_navigation');
$page_title                  = get_option('plan_du_site_page_title');
$add_main_navigation_menu    = get_option('plan_du_site_add_main_navigation_menu');
$add_exhibit_builder_plugin  = get_option('plan_du_site_add_exhibit_builder_plugin');
$add_collection_tree_plugin  = get_option('plan_du_site_add_collection_tree_plugin');
$add_simple_page_plugin  = get_option('plan_du_site_add_simple_page_plugin');
$add_simple_contact_form_plugin  = get_option('plan_du_site_add_simple_contact_form_plugin');

$view = get_view();
?>

<?php if (!Omeka_Captcha::isConfigured()): ?>
    <p class="alert">You have not entered your <a href="http://www.google.com/recaptcha/intro/index.html/">reCAPTCHA</a>
        API keys under <a href="<?php echo url('settings/edit-security#fieldset-captcha'); ?>">security settings</a>. We recommend adding these keys, or the contact form will be vulnerable to spam.</p>
<?php endif; ?>

<div class="field">
    <div class="two columns alpha">
        <?php echo $view->formLabel('plan_du_site_page_title', 'Titre de la page'); ?>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">
            The title of the contact form (not HTML).
        </p>
        <?php echo $view->formText('plan_du_site_page_title', $page_title); ?>
    </div>
</div>


<div class="field">
    <div class="two columns alpha">
        <?php echo $view->formLabel('plan_du_site_add_to_main_navigation', 'Add to Main Navigation'); ?>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">
            If checked, add a link to the contact form to the main site
            navigation.
        </p>
        <?php echo $view->formCheckbox('plan_du_site_add_to_main_navigation', $add_to_main_navigation, null, array('1', '0')); ?>
    </div>
</div>

<div class="field">
    <div class="two columns alpha">
        <?php echo $view->formLabel('plan_du_site_add_main_navigation_menu', 'Add Main Navigation Menu'); ?>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">
            If checked, add the main navigation menu to the plandusite page
        </p>
        <?php echo $view->formCheckbox('plan_du_site_add_main_navigation_menu', $add_main_navigation_menu, null, array('1', '0')); ?>
    </div>
</div>

<?php if (plugin_is_active('ExhibitBuilder')) : ?>
<div class="field">
    <div class="two columns alpha">
        <?php echo $view->formLabel('plan_du_site_add_exhibit_builder_plugin', 'Add Exhibits in PlanDuSite Page '); ?>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">
            If checked, add the exhibits from Exhibit Builder plugin to the plandusite plugin
        </p>
        <?php echo $view->formCheckbox('plan_du_site_add_exhibit_builder_plugin', $add_exhibit_builder_plugin, null, array('1', '0')); ?>
    </div>
</div>
<?php endif; ?>


<?php if (plugin_is_active('CollectionTree')) : ?>
<div class="field">
    <div class="two columns alpha">
        <?php echo $view->formLabel('plan_du_site_add_collection_tree_plugin', 'Add Collection Tree in PlanDuSite Page '); ?>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">
            If checked, add the collection tree from collection_tree plugin to the plandusite page
        </p>
        <?php echo $view->formCheckbox('plan_du_site_add_collection_tree_plugin', $add_collection_tree_plugin, null, array('1', '0')); ?>
    </div>
</div>
<?php endif; ?>

<?php if (plugin_is_active('SimplePages')) : ?>
<div class="field">
    <div class="two columns alpha">
        <?php echo $view->formLabel('plan_du_site_add_simple_page_plugin', 'Add Simple Pages in PlanDuSite Page '); ?>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">
            If checked, add pages from Simple Pages plugin to the plandusite page
        </p>
        <?php echo $view->formCheckbox('plan_du_site_add_simple_page_plugin', $add_simple_page_plugin, null, array('1', '0')); ?>
    </div>
</div>
<?php endif; ?>

<?php if (plugin_is_active('SimpleContactForm')) : ?>
<div class="field">
    <div class="two columns alpha">
        <?php echo $view->formLabel('plan_du_site_add_simple_contact_form_plugin', 'Add Simple Contact Form in PlanDuSite Page '); ?>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">
            If checked, add the simple contact form page link to the plandusite page
        </p>
        <?php echo $view->formCheckbox('plan_du_site_add_simple_contact_form_plugin', $add_simple_contact_form_plugin, null, array('1', '0')); ?>
    </div>
</div>
<?php endif; ?>