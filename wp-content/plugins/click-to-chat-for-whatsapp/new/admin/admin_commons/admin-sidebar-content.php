<?php
/**
 * sidebar content - admin main page
 */


if ( ! defined( 'ABSPATH' ) ) exit;

$othersettings = get_option('ht_ctc_othersettings');

?>

<div class="sidebar-content">

    <div class="col s12 m8 l12 xl12">
        <div class="row">
            <ul class="collapsible popout ht_ctc_sidebar_contat">
                <li class="active">
                    <div class="collapsible-header"><?php esc_html_e( 'Contact Us', 'click-to-chat-for-whatsapp' ); ?>
                        <span class="right_icon dashicons dashicons-arrow-down-alt2"></span>
                    </div>	
                    <div class="collapsible-body">
                        <p class="description" style="font-size:14px;line-height:1.4;margin:10px 0;">
                            Got a question? 😊 We’d love to hear from you!
                        </p>
                        <?php
                        if ( defined( 'HT_CTC_PRO_VERSION' ) ) {
                            ?>
                            <p class="description"><a target="_blank" href="https://holithemes.com/plugins/click-to-chat/support"> Click to Chat PRO</a></p>
                            <?php
                        } else {
                            ?>
                            
                            <!-- Click to Chat — Forum -->
                            <p class="description"><a target="_blank" href="https://wordpress.org/support/plugin/click-to-chat-for-whatsapp/#new-topic-0">Contact Us</a></p>
                            <?php
                        }
                        do_action('ht_ctc_ah_admin_sidebar_contact_details' );
                        ?>
                    </div>	
                </li>
            </ul>
        </div>
    </div>

    <?php
    do_action('ht_ctc_ah_admin_sidebar_contact' );

    if ( ! defined( 'HT_CTC_PRO_VERSION' ) ) {
        ?>
        <div class="col s12 m8 l12 xl12">
            <div class="row">
                <ul class="collapsible popout ht_ctc_sidebar_pro">
                    <li class="active">
                        <div class="collapsible-header"><?php esc_html_e( 'PRO', 'click-to-chat-for-whatsapp' ); ?> FEATURES 
                            <span class="right_icon dashicons dashicons-arrow-down-alt2"></span>
                        </div>
                      
                        <div class="collapsible-body">	
                            <p class="description">📝 Form Filling</p>
                            <p class="description">👥 Multi-Agent Support</p>
                            <p class="description">&emsp;⏳ Different time ranges</p>
                            <p class="description">&emsp;🔒 Hide agent when offline</p>
                            <p class="description">&emsp;⏰ Display offline agent with next available time</p>
                            <p class="description">🎲 Random Numbers</p>
                            <p class="description">🌍 Country-Based Display (New)</p>
                            <p class="description">📊 Google Ads Conversion Tracking</p>
                            <p class="description">🕒 Business Hours</p>
                            <p class="description">&emsp;🔒 Hide when offline</p>
                            <p class="description">&emsp;📞 Change WhatsApp number when offline</p>
                            <p class="description">&emsp;✨ Change Call-to-Action when offline</p>
                            <p class="description">⏲️ Display After Delays</p>
                            <p class="description">&emsp;⏱️ Time Delay</p>
                            <p class="description">&emsp;🖱️ Scroll Delay</p>
                            <p class="description">🔄 Display Based On:</p>
                            <p class="description">&emsp;📅 Selected days in a week</p>
                            <p class="description">&emsp;🕓 Selected time range in a day</p>
                            <p class="description">&emsp;👤 Website visitor login status</p>
                            <p class="description">🌐 Dynamic variables for Webhooks</p>
                            <p class="description">🔗 Custom URL</p>
                            <p class="description">📍 Fixed/Absolute Position Types</p>
                            <p class="description">👋 Greetings Actions:</p>
                            <p class="description">&emsp;⏰ Time-based</p>
                            <p class="description">&emsp;🖱️ Scroll-based</p>
                            <p class="description">&emsp;🖱️ Click-based</p>
                            <p class="description">&emsp;👁️ Viewport-based</p>
                            <p class="description">⚙️ Page Level Settings:</p>
                            <p class="description">&emsp;🎨 Style adjustments</p>
                            <p class="description">&emsp;⏲️ Time/Scroll-based triggers</p>
                            <p class="description">&emsp;💬 Greetings Content</p>
                            <p class="description">✨ More Features</p>

                            <p class="description" style="text-align: center; position:sticky; bottom:2px; margin-top:20px;"><a target="_blank" href="https://holithemes.com/plugins/click-to-chat/pricing/" class="waves-effect waves-light btn" style="width: 100%;">PRO Version</a></p>

                        </div>	
                    </li>
                </ul>
            </div>
        </div>
        <?php
    }

    ?>


</div>