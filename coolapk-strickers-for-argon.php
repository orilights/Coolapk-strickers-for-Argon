<?php
/*
 *Coolapk strickers for Argon
 *
 * Plugin Name: Coolapk strickers for Argon
 * Plugin URI: https://github.com/OriLight152/Coolapk-strickers-for-Argon
 * Description: 为 Argon 主题添加部分酷安表情包
 * Version:     1.1
 * Author:      OriLight
 * Author URI:  https://orilight.top/
 * Text Domain: coolapk-strickers-for-argon
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if (get_option('cas_options_cdn') == ''){
    update_option('cas_options_cdn',stripcslashes('[jsDelivr]'));
}

function cas_options_submenu(){
    add_submenu_page('options-general.php', '酷安表情包设置', 'Coolapk strickers', 'manage_options', 'coolapk_strickers_for_argon', 'cas_options');
}

function cas_options(){
    if(isset($_POST['submit'])){
        update_option('cas_options_cdn',stripcslashes($_POST['cas_stickers_cdn']));
        echo '<div class="updated"><p>设置已更新</p></div>';
    }
    $CStickersCDN = get_option('cas_options_cdn');
    echo '<h1>Coolapk strickers for Argon</h1>';
    echo '<h2>CDN设置</h2>';
    echo '<p>[local] - 从本地加载表情资源</p>';
    echo '<p>[jsDelivr] - 从jsDelivr加载表情资源</p>';
    echo '<p>也可直接填写CDN地址，如 https://static.amarea.cn/ (需带/)</p>';
    echo '<form action="" method="post" id="cas_stickers_cdn_form">';
    echo '<p><input type="text" id="cas_stickers_cdn" name="cas_stickers_cdn" value="' . $CStickersCDN . '" /></p>';
    echo '<p><input type="submit" name="submit" value="保存设置" /></p>';
    echo '</form>';
}


add_action('admin_menu', 'cas_options_submenu');


function add_cas_emoticons($emotionList){

    $SLocal = plugin_dir_path(__FILE__);
    $SjsDelivr = 'https://cdn.jsdelivr.net/gh/OriLight152/Coolapk-strickers-for-Argon/';
    $SDefault = 'https://static.amarea.cn/';

    switch (get_option('cas_options_cdn')) {
        case '[local]':
            $StickersCDN = $SLocal;
            break;
        
        case '[jsDelivr]':
            $StickersCDN = $SjsDelivr;
            break;

        case '[default]':
            $StickersCDN = $SDefault;
            break;

        default:
            $StickersCDN = get_option('cas_options_cdn');
            break;
    }
    
    array_push(
        $emotionList,
        array(
            'groupname' => 'Coolapk', 
            'list' => array(
                array('type' => 'sticker', 'code' => 'coolapk-coolb', 'src' => $StickersCDN . 'stickers/coolapk/32/coolb.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0001', 'src' => $StickersCDN . 'stickers/coolapk/32/0001.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0002', 'src' => $StickersCDN . 'stickers/coolapk/32/0002.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0003', 'src' => $StickersCDN . 'stickers/coolapk/32/0003.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0004', 'src' => $StickersCDN . 'stickers/coolapk/32/0004.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0005', 'src' => $StickersCDN . 'stickers/coolapk/32/0005.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0006', 'src' => $StickersCDN . 'stickers/coolapk/32/0006.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0007', 'src' => $StickersCDN . 'stickers/coolapk/32/0007.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0008', 'src' => $StickersCDN . 'stickers/coolapk/32/0008.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0009', 'src' => $StickersCDN . 'stickers/coolapk/32/0009.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0010', 'src' => $StickersCDN . 'stickers/coolapk/32/0010.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0011', 'src' => $StickersCDN . 'stickers/coolapk/32/0011.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0012', 'src' => $StickersCDN . 'stickers/coolapk/32/0012.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0013', 'src' => $StickersCDN . 'stickers/coolapk/32/0013.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0014', 'src' => $StickersCDN . 'stickers/coolapk/32/0014.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0015', 'src' => $StickersCDN . 'stickers/coolapk/32/0015.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0016', 'src' => $StickersCDN . 'stickers/coolapk/32/0016.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0017', 'src' => $StickersCDN . 'stickers/coolapk/32/0017.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0018', 'src' => $StickersCDN . 'stickers/coolapk/32/0018.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0019', 'src' => $StickersCDN . 'stickers/coolapk/32/0019.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0020', 'src' => $StickersCDN . 'stickers/coolapk/32/0020.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0021', 'src' => $StickersCDN . 'stickers/coolapk/32/0021.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0022', 'src' => $StickersCDN . 'stickers/coolapk/32/0022.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0023', 'src' => $StickersCDN . 'stickers/coolapk/32/0023.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0024', 'src' => $StickersCDN . 'stickers/coolapk/32/0024.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0025', 'src' => $StickersCDN . 'stickers/coolapk/32/0025.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0026', 'src' => $StickersCDN . 'stickers/coolapk/32/0026.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0027', 'src' => $StickersCDN . 'stickers/coolapk/32/0027.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0028', 'src' => $StickersCDN . 'stickers/coolapk/32/0028.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0029', 'src' => $StickersCDN . 'stickers/coolapk/32/0029.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0030', 'src' => $StickersCDN . 'stickers/coolapk/32/0030.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0031', 'src' => $StickersCDN . 'stickers/coolapk/32/0031.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0032', 'src' => $StickersCDN . 'stickers/coolapk/32/0032.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0033', 'src' => $StickersCDN . 'stickers/coolapk/32/0033.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0034', 'src' => $StickersCDN . 'stickers/coolapk/32/0034.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0035', 'src' => $StickersCDN . 'stickers/coolapk/32/0035.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0036', 'src' => $StickersCDN . 'stickers/coolapk/32/0036.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0037', 'src' => $StickersCDN . 'stickers/coolapk/32/0037.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0038', 'src' => $StickersCDN . 'stickers/coolapk/32/0038.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0039', 'src' => $StickersCDN . 'stickers/coolapk/32/0039.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0040', 'src' => $StickersCDN . 'stickers/coolapk/32/0040.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0041', 'src' => $StickersCDN . 'stickers/coolapk/32/0041.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0042', 'src' => $StickersCDN . 'stickers/coolapk/32/0042.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0043', 'src' => $StickersCDN . 'stickers/coolapk/32/0043.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0044', 'src' => $StickersCDN . 'stickers/coolapk/32/0044.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0045', 'src' => $StickersCDN . 'stickers/coolapk/32/0045.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0046', 'src' => $StickersCDN . 'stickers/coolapk/32/0046.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0047', 'src' => $StickersCDN . 'stickers/coolapk/32/0047.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0048', 'src' => $StickersCDN . 'stickers/coolapk/32/0048.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0049', 'src' => $StickersCDN . 'stickers/coolapk/32/0049.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0050', 'src' => $StickersCDN . 'stickers/coolapk/32/0050.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0051', 'src' => $StickersCDN . 'stickers/coolapk/32/0051.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0052', 'src' => $StickersCDN . 'stickers/coolapk/32/0052.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0053', 'src' => $StickersCDN . 'stickers/coolapk/32/0053.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0054', 'src' => $StickersCDN . 'stickers/coolapk/32/0054.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0055', 'src' => $StickersCDN . 'stickers/coolapk/32/0055.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0056', 'src' => $StickersCDN . 'stickers/coolapk/32/0056.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0057', 'src' => $StickersCDN . 'stickers/coolapk/32/0057.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0058', 'src' => $StickersCDN . 'stickers/coolapk/32/0058.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0059', 'src' => $StickersCDN . 'stickers/coolapk/32/0059.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0060', 'src' => $StickersCDN . 'stickers/coolapk/32/0060.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0061', 'src' => $StickersCDN . 'stickers/coolapk/32/0061.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0062', 'src' => $StickersCDN . 'stickers/coolapk/32/0062.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0063', 'src' => $StickersCDN . 'stickers/coolapk/32/0063.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0064', 'src' => $StickersCDN . 'stickers/coolapk/32/0064.png'),
                array('type' => 'sticker', 'code' => 'coolapk-0065', 'src' => $StickersCDN . 'stickers/coolapk/32/0065.png')
            )
        )
    );
    return $emotionList;
}
add_filter('argon_emotion_list' , 'add_cas_emoticons');
?>