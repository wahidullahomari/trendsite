<?php
/**
 * Start Elementor.
 *
 */
?>
<!-- Start Elementor -->
<div id="start-panel" class="panel-left visible">
    <div id="unique-graphic-designer-importer" class="tabcontent open">
        <?php if(!class_exists('Mizan_Importer_ThemeWhizzie')){
            $plugin_ins = Unique_Graphic_Designer_Plugin_Activation_Mizan_Demo_Importor::get_instance();
            $unique_graphic_designer_actions = $plugin_ins->recommended_actions;
            ?>
            <div class="unique-graphic-designer-recommended-plugins ">
                    <div class="unique-graphic-designer-action-list">
                        <?php if ($unique_graphic_designer_actions): foreach ($unique_graphic_designer_actions as $key => $unique_graphic_designer_actionValue): ?>
                                <div class="unique-graphic-designer-action" id="<?php echo esc_attr($unique_graphic_designer_actionValue['id']);?>">
                                    <div class="action-inner plugin-activation-redirect">
                                        <h3 class="action-title"><?php echo esc_html($unique_graphic_designer_actionValue['title']); ?></h3>
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
                <h3><?php esc_html_e('Welcome to Mizan Themes', 'unique-graphic-designer'); ?></h3>
                <p class="start-text"><?php esc_html_e('The demo will import after you click the Start Quickly button.', 'unique-graphic-designer'); ?></p>
                <div class="info-link">
                    <a class="button button-primary" href="<?php echo esc_url( admin_url('admin.php?page=mizandemoimporter-wizard') ); ?>"><?php esc_html_e('Start Quickly', 'unique-graphic-designer'); ?></a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
