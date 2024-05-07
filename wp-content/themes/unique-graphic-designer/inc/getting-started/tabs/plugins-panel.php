<?php
/**
 * Plugin Panel.
 *
 */
?>
<!-- Updates panel -->
<div id="plugins-panel" class="panel-left">
    <div id="Mizan_Demo_Importor_editor" class="tabcontent">
        <?php if(!class_exists('Mizan_Importer_ThemeWhizzie')){
            $plugin_ins = Unique_Graphic_Designer_Plugin_Activation_Mizan_Demo_Importor::get_instance();
            $unique_graphic_designer_actions = $plugin_ins->recommended_actions;
            ?>
            <div class="unique-graphic-designer-recommended-plugins ">
                    <div class="unique-graphic-designer-action-list">
                        <?php if ($unique_graphic_designer_actions): foreach ($unique_graphic_designer_actions as $key => $unique_graphic_designer_actionValue): ?>
                                <div class="unique-graphic-designer-action" id="<?php echo esc_attr($unique_graphic_designer_actionValue['id']);?>">
                                    <div class="action-inner plugin-activation-redirect">
                                        <h4 class="action-title"><?php echo esc_html($unique_graphic_designer_actionValue['title']); ?></h4>
                                        <div class="action-desc"><?php echo esc_html($unique_graphic_designer_actionValue['desc']); ?></div>
                                        <?php echo wp_kses_post($unique_graphic_designer_actionValue['link']); ?>
                                    </div>
                                </div>
                            <?php endforeach;
                        endif; ?>
                    </div>
            </div>
        <?php }else{ ?>
            <div class="tab-outer-box">
                <h2><?php esc_html_e( 'Welcome to Mizan Theme!', 'unique-graphic-designer' ); ?></h2>
                <p><?php esc_html_e( 'For setup the theme, First you need to click on the Begin activating plugins', 'unique-graphic-designer' ); ?></p>
                <p><?php esc_html_e( '1. Install Mizan Demo Importor', 'unique-graphic-designer' ); ?></p>
                <p><?php esc_html_e( '>> Then click to Return to Required Plugins Installer ', 'unique-graphic-designer' ); ?></p>
                <p><?php esc_html_e( '2. Activate Mizan Demo Importor ', 'unique-graphic-designer' ); ?></p>
                <p><?php esc_html_e( '>> Click on the start now button', 'unique-graphic-designer' ); ?></p>
                <p><?php esc_html_e( '>> Click install plugins', 'unique-graphic-designer' ); ?></p>
                <p><?php esc_html_e( '>> Click import demo button to setup the theme and click visit your site button', 'unique-graphic-designer' ); ?></p>
            </div>
        <?php } ?>
    </div>
</div><!-- .panel-left -->