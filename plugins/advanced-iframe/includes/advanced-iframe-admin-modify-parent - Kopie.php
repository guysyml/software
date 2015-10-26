<?php if ($devOptions['accordeon_menu'] == 'false') { ?>
<div class="ai-anchor" id="mp"></div>
<?php } ?>
<h1 id="h1-mp"><?php _e('Modify the parent page', 'advanced-iframe'); ?></h1>
<div>
    <div id="icon-options-general" class="icon_ai">
      <br>
    </div>

     <h2>
<?php
        _e('Advanced iFrame ', 'advanced-iframe');
        if ($evanto) {
        _e('Pro', 'advanced-iframe');
        }
              _e(' - Modify the parent page', 'advanced-iframe'); ?></h2>
    <p>
      <?php _e('With the following 3 options you can modify your template on the fly to give the iframe more space! At most templates you would have to create a page template with a special css and this is quite complicated. By using the options below your template is modified on the fly by jQuery. Please look at the screenshots to make these options more clear. The options are very useful for templates that have a top navigation because otherwise your menu is gone! If you still want to do this you should add a back link to the page. The examples below are for Twenty Ten, iNove and the default Wordpress theme.', 'advanced-iframe'); ?>
    </p>
    <table class="form-table">
<?php
        printTextInput($devOptions, __('Hide elements', 'advanced-iframe'), 'hide_elements', __('This setting allows you to hide elements when the iframe is shown. This can be used to hide the sidebar or the heading. Usage: If you want to hide a div you have to enter a hash (#) followed by the id e.g. #sidebar. If you want to hide a heading which is a &lt;h2&gt; you have to enter h2. You can define several elements separated by , e.g. #sidebar,h2. This gives you a lot more space to show the content of the iframe. To get the id of the sidebar go to Appearance -> Editor -> Click on \'Sidebar\' on the right side. Then look for the first \'div\' you find. The id of this div is the one you need. For some common templates the id is e.g. #menu, #sidebar, or #primary. For Twenty Ten and iNove you can remove the sidebar directly: Page attributes -> Template -> no sidebar. Wordpress default: \'#sidebar\'. I recommend using firebug (see below) to find the elements and the ids. You can use any valid <a href="#jqh">jQuery selector pattern</a> here! Shortcode attribute: hide_elements=""', 'advanced-iframe'));
echo '</table><p>';
       _e('With the next 2 options you can modify the css of your parent page. The first option defines the id/class/element you want to modify and at the 2nd option you define the styles you want to change.', 'advanced-iframe');
echo '</p><table class="form-table">';

        printTextInput($devOptions, __('Content id', 'advanced-iframe'), 'content_id', __('Some templates do not use the full width for their content and even most \'One column, no sidebar Page Template\' templates only remove the sidebar but do not change the content width. Set the e.g. id of the div starting with a hash (#) that defines the content.  You can use any valid <a href="#jqh">jQuery selector pattern</a> here! In the field below you then define the style you want to overwrite. For Twenty Ten and WordPress Default the id is #content, for iNove it is #main. You can also define more than one element. Please separate them with | and provide the styles below. Please read the note below how to find this id for other templates. #content|h2 means that you want to set a new style for the div content and the heading h2 below. Shortcode attribute: content_id=""', 'advanced-iframe'));
        printTextInput($devOptions, __('Content styles', 'advanced-iframe'), 'content_styles', __('Define the styles that have to be overwritten to enable the full width. Most of the time you have to modify some of the following attributes: width, margin-left, margin-right, padding-left. Please use ; as separator between styles. If you have defined more than one element above (Content id) please separate the different style sets with |. The default values are: Wordpress default: \'width:450px;padding-left:45px;\'. Twenty Ten: \'margin-left:20px;margin-right:240px\'. iNove: \'width:605px\'. Read the note below how to find these styles for other templates. If you have defined #content|h2 at the Content id you can e.g. set \'width:650px;padding-left:25px;|padding-left:15px;\'. Shortcode attribute: content_styles=""', 'advanced-iframe'));
        if ($evanto) {
          printTrueFalse($devOptions, __('Add css class to parent elements', 'advanced-iframe'), 'add_css_class_parent', __('Sometimes it is not possible to modify existing css classes of the parent because they are also used somewhere else or there is no unique selector for this element. Setting this attribute to true causes that a new class is added at each parent of the iframe up to the body! If the element has an id the class is named "ai-class-(id)". Otherwise "ai-class-(number)" is added. Then it is easy to identify all parent elements of the iframe and modify them. If you have several iframes on one page the classes could not be unique anymore. You need to set "Include ai.js in the footer" to false if you want to use this! Shortcode attribute: add_css_class_parent="true" or add_css_class_parent="false" ', 'advanced-iframe'));               
          printTextInput($devOptions, __('Change parent links target', 'advanced-iframe'), 'change_parent_links_target', __('Change links of the parent page to open the url inside the iframe. This option does add the attribute target="your id" to the links you define. You can use any valid <a href="#jqh">jQuery selector pattern</a> here! So if your link e.g. has an id="link1" you have to use "a#link1". If you want to change all links e.g. in the div with the id="menu-div" you have to use "#menu-div a". You can also define more than one element. Please separate them with ,. Shortcode attribute: change_parent_links_target=""', 'advanced-iframe'));
          printTrueExternalFalse($devOptions, __('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Show iframe as layer', 'advanced-iframe'), 'show_iframe_as_layer', __('If you enable this, the iframe is initally hidden and if you click on a link defined at "Change parent links target" the iframe is shown as a simple lighbox as overlay on the page. So if you use this for external links the user does not leave your page! "External" does simply open all links that are not on the same domain in a layer. The setting at "Change parent links target" is ignored than. This setting does overwrite some iframe settings like height, width and border! Show part of iframe, lazy load, hide part of iframe and iframe loader are disabled as they do not work with this feature. <span id="howtoid">Shortcode</span> attribute: show_iframe_as_layer="true", show_iframe_as_layer="external", show_iframe_as_layer="false" ', 'advanced-iframe'),'http://www.tinywebgallery.com/blog/advanced-iframe/advanced-iframe-pro-demo/change-links-targets#e32'); 
        }
      ?>
    </table>
               
  

      <?php _e('<p><strong>How to find the id and the attributes:</strong></p><ol><li>Manually: Go to Appearance -> Editor and select the page template. Then you have to look which div elements are defined. e.g. container, content, main. Also classes can be defined here. Then you have to select the style sheet below and search for this ids and classes and look which one does define the width of you content.</li><li>Firebug: For Firefox you can use the plugin firebug to select the content element directly in the page. On the right side the styles are always shown. Look for the styles that set the width or any bigger margins. These are the values you can then overwrite by the settings above.</li><li><strong>Small jquery help</strong><br>Above you have to use the jQuery syntax:<p><ul><li>- tags - if you want to hide/modify a tag directly (e.g. h1, h2) simply use it directly e.g. h1,h2</li><li>- id - if you want to hide/modify an element where you have the id use #id</li><li>- class - if you want to hide/modify an element where you have the class use .class</li></ul></p>You can use any valid <a href="#jqh">jQuery selector pattern</a> here!</li></ol>', 'advanced-iframe'); ?>

<?php if ($devOptions['single_save_button'] == 'false') { ?>    
    <p class="button-submit">
      <input id="so" class="button-primary" type="submit" name="update_iframe-loader" value="<?php _e('Update Settings', 'advanced-iframe') ?>"/>
    </p>
<?php } ?>    
</div>