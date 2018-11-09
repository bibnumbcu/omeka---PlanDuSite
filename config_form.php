<?php
$add_to_main_navigation      = get_option('plan_du_site_add_to_main_navigation');
$page_title                  = get_option('plan_du_site_page_title');
$add_main_navigation_menu    = get_option('plan_du_site_add_main_navigation_menu');
$exhibit_label = get_option('plan_du_site_exhibit_label');
$add_exhibit_builder_plugin  = get_option('plan_du_site_add_exhibit_builder_plugin');
$add_collection_tree_plugin  = get_option('plan_du_site_add_collection_tree_plugin');
$simple_pages_label = get_option('plan_du_site_simple_pages_label');
$add_simple_pages_plugin  = get_option('plan_du_site_add_simple_pages_plugin');
$add_simple_contact_form_plugin  = get_option('plan_du_site_add_simple_contact_form_plugin');



$view = get_view();
?>

<?php if (!Omeka_Captcha::isConfigured()): ?>
    <p class="alert">You have not entered your <a href="http://www.google.com/recaptcha/intro/index.html/">reCAPTCHA</a>
        API keys under <a href="<?php echo url('settings/edit-security#fieldset-captcha'); ?>">security settings</a>. We recommend adding these keys, or the contact form will be vulnerable to spam.</p>
<?php endif; ?>

<div class="field">
    <div class="two columns alpha">
        <?php echo $view->formLabel('plan_du_site_page_title', 'Page Title'); ?>
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
            If checked, add a link to the main site navigation.
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

<fieldset>
    <legend>Compatibility with omeka plugins</legend>
<?php if (plugin_is_active('ExhibitBuilder')) : ?>
<div class="field">
    <div class="two columns alpha">
        <?php echo $view->formLabel('plan_du_site_add_exhibit_builder_plugin', 'Exhibit Builder '); ?>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">
            If checked, add an Exhibit Builder section to the plandusite page
        </p>
        <?php echo $view->formCheckbox('plan_du_site_add_exhibit_builder_plugin', $add_exhibit_builder_plugin, null, array('1', '0')); ?>
    </div>
</div>
<div class="field">
    <div class="two columns alpha">
        <?php echo $view->formLabel('plan_du_site_exhibit_label', 'Exhibit Builder Label'); ?>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">
            The title of the Exhibit Builder section
        </p>
        <?php echo $view->formText('plan_du_site_exhibit_label', $exhibit_label); ?>
    </div>
</div>
<?php endif; ?>


<?php if (plugin_is_active('CollectionTree')) : ?>
<div class="field">
    <div class="two columns alpha">
        <?php echo $view->formLabel('plan_du_site_add_collection_tree_plugin', 'Collection Tree '); ?>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">
            If checked, add a Collection Tree section to the plandusite page
        </p>
        <?php echo $view->formCheckbox('plan_du_site_add_collection_tree_plugin', $add_collection_tree_plugin, null, array('1', '0')); ?>
    </div>
</div>
<?php endif; ?>

<?php if (plugin_is_active('SimplePages')) : ?>
<div class="field">
    <div class="two columns alpha">
        <?php echo $view->formLabel('plan_du_site_add_simple_pages_plugin', 'Simple Pages '); ?>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">
            If checked, add a Simple Pages section to the plandusite page
        </p>
        <?php echo $view->formCheckbox('plan_du_site_add_simple_pages_plugin', $add_simple_pages_plugin, null, array('1', '0')); ?>
    </div>
</div>
<div class="field">
    <div class="two columns alpha">
        <?php echo $view->formLabel('plan_du_site_simple_pages_label', 'Simple Pages Label'); ?>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">
            The title of the Simple Pages section
        </p>
        <?php echo $view->formText('plan_du_site_simple_pages_label', $simple_pages_label); ?>
    </div>
</div>
<?php endif; ?>

<?php if (plugin_is_active('SimpleContactForm')) : ?>
<div class="field">
    <div class="two columns alpha">
        <?php echo $view->formLabel('plan_du_site_add_simple_contact_form_plugin', 'Simple Contact Form '); ?>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">
            If checked, add the simple contact form page link to the plandusite page
        </p>
        <?php echo $view->formCheckbox('plan_du_site_add_simple_contact_form_plugin', $add_simple_contact_form_plugin, null, array('1', '0')); ?>
    </div>
</div>
<?php endif; ?>

</fieldset>