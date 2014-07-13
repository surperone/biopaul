<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  
  /* OptionTree is not loaded yet */
  if ( ! function_exists( 'ot_settings_id' ) )
    return false;
    
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'general_default',
        'title'       => '基本设置'
      ),
      array(
        'id'          => 'advanced_settings',
        'title'       => '高级设置'
      ),
      array(
        'id'          => 'appearance',
        'title'       => '外观样式'
      ),
      array(
        'id'          => 'social_icons',
        'title'       => '社交网络'
      ),
      array(
        'id'          => 'analytics_seo',
        'title'       => '统计代码&amp;SEO'
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'owner_photo',
        'label'       => '首页头像',
        'desc'        => '请填写图片网址或者上传图片，建议尺寸：100x100',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general_default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'owner_first_name',
        'label'       => '姓氏',
        'desc'        => '将显示在头像的左侧。建议1-4个字，或者留空',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'general_default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'owner_last_name',
        'label'       => '名字',
        'desc'        => '将显示在头像的右侧。建议1-4个字，或者留空',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'general_default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'contact_info',
        'label'       => '欢迎辞/网站公告',
        'desc'        => '填写后将出现在首页右上角、社交图标的上方',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'general_default',
        'rows'        => '5',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'copyright_text',
        'label'       => '页脚文字',
        'desc'        => '显示于每个页面的最下方，可以是版权信息、站点地图链接等，支持HTML代码',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'general_default',
        'rows'        => '5',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'profile_page',
        'label'       => '指定首页页面',
        'desc'        => '首页内容一般为简要的自我介绍。新建相应页面后，在这里选择，即可在网站首页显示其内容',
        'std'         => '',
        'type'        => 'page-select',
        'section'     => 'general_default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'resume_page',
        'label'       => '指定简历页面',
        'desc'        => '新建相应页面后，在这里选择，将其指定为“简历”页面',
        'std'         => '',
        'type'        => 'page-select',
        'section'     => 'general_default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'portfolio_page',
        'label'       => '指定作品页面',
        'desc'        => '新建相应页面后，在这里选择，将其指定为“作品”页面。该页面的模板必须为“Portofolio Page”，不然无法正常显示',
        'std'         => '',
        'type'        => 'page-select',
        'section'     => 'general_default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'blog_page',
        'label'       => '指定博客页面',
        'desc'        => '新建相应页面后，在这里选择，将其指定为“博客”页面',
        'std'         => '',
        'type'        => 'page-select',
        'section'     => 'general_default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'contact_page',
        'label'       => '指定留言页面',
        'desc'        => '新建相应页面后，在这里选择，将其指定为“留言”页面',
        'std'         => '',
        'type'        => 'page-select',
        'section'     => 'general_default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'if_ajaxify',
        'label'       => '全站Ajax加载',
        'desc'        => '如果希望能全站播放背景音乐，请务必开启此项。手机用户访问时不会启用',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'advanced_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'custom_reloadjs',
        'label'       => '重新加载JS',
        'desc'        => '开启全站Ajax后可能导致某些document.ready触发的功能失效（比如百度推荐），请在此处粘贴相应JS代码',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'advanced_settings',
        'rows'        => '6',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'bgm',
        'label'       => '背景音乐',
        'desc'        => '支持 mp3/ogg 音乐或 js 列表，请填写网址或直接上传文件。
上传音乐文件则启用单曲模式，默认自动播放音乐；上传列表文件则启用播放器模式，网页左下角显示播放器。js列表文件格式请参照主题根目录下的 radio_content_example.js 文件',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'advanced_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'bgm_loop',
        'label'       => '是否循环播放',
        'desc'        => '该设置只对单曲模式有效',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'advanced_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'work_items_link_status',
        'label'       => '作品链接至详情页面',
        'desc'        => '勾选后点击作品的名字可以进入该作品页面。适用于每个作品都有详细介绍的情况',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'advanced_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'blog_sidebar',
        'label'       => '博客侧边栏小工具',
        'desc'        => '是否启用博客页面的侧边栏小工具',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'advanced_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'duoshuo_domain',
        'label'       => '多说域名（×××.duoshuo.com）',
        'desc'        => '填写后多说“最近访客”小工具才能正常使用。已经注册过多说的用户直接填写×××处内容，未注册的请先到 <a href="http://duoshuo.com/create-site/" title="创建多说站点" target="_blank">这里</a> 创建站点，然后填写',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'advanced_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'background_pattern',
        'label'       => '背景图片',
        'desc'        => '请填写图片网址或者上传图片',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'appearance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'background_grid',
        'label'       => '背景网点',
        'desc'        => '背景图上是否加一层网点',
        'std'         => '',
        'type'        => 'radio',
        'section'     => 'appearance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'bright',
            'label'       => '灰色网点（偏亮）',
            'src'         => ''
          ),
          array(
            'value'       => 'dark',
            'label'       => '黑色网点（偏暗）',
            'src'         => ''
          ),
          array(
            'value'       => 'no',
            'label'       => '不使用',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'custom_css',
        'label'       => '自定义CSS',
        'desc'        => '请直接粘贴你的CSS源代码',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'appearance',
        'rows'        => '8',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'fav_icon',
        'label'       => 'Favicon图标',
        'desc'        => '请填写图标网址或者上传图标，建议尺寸：16x16',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'appearance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'apple_touch_icon',
        'label'       => 'Favicon图标（57x57）',
        'desc'        => '请填写图标网址或者上传图标，建议尺寸：57x57',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'appearance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'apple_touch_icon_72',
        'label'       => 'Favicon图标（72x72）',
        'desc'        => '请填写图标网址或者上传图标，建议尺寸：72x72',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'appearance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'apple_touch_icon_114',
        'label'       => 'Favicon图标（114x114）',
        'desc'        => '请填写图标网址或者上传图标，建议尺寸：114x114',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'appearance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'sina_id',
        'label'       => '新浪微博（http://weibo.com/×××）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'tencent_id',
        'label'       => '腾讯微博（http://t.qq.com/×××）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'baidu_id',
        'label'       => '百度贴吧',
        'desc'        => '请直接填写百度帐号，将链接到您的百度个人主页（贴吧Tab）：http://www.baidu.com/p/×××?from=tieba',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'renren_id',
        'label'       => '人人（http://www.renren.com/×××）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'kaixin_id',
        'label'       => '开心网（http://www.kaixin001.com/home/?uid=×××）',
        'desc'        => '请填写×××处的数字',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'qq_id',
        'label'       => 'QQ',
        'desc'        => 'QQ号必须是数字帐号，主显帐号是邮箱不影响。如果不想在网址中暴露QQ号，请先到 <a href="http://shang.qq.com/widget/set.php" target="_blank">这里</a> 将“安全级别设置”选择为“安全加密”，保存后到 <a href="http://shang.qq.com/widget/consult.php" target="_blank">QQ通讯组件</a> 获取代码，并在此处填入href=之后，双引号之间的那个网址',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'qq_qr',
        'label'       => '手机QQ二维码',
        'desc'        => '请填写您的QQ二维码网址，在此处上传，或者直接使用媒体库中的图片',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'twitter_id',
        'label'       => 'Twitter（https://twitter.com/×××）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'facebook_id',
        'label'       => 'Facebook（https://www.facebook.com/×××）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'gplus_id',
        'label'       => 'Google Plus（https://plus.google.com/×××）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'skype_id',
        'label'       => 'Skype',
        'desc'        => '请填写您的Skype帐号。访客点击后默认会启动Skype打开和您的文字聊天窗口。',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'youku_id',
        'label'       => '优酷（http://i.youku.com/×××）',
        'desc'        => '有个性化域名的请直接填写×××处内容；没有个性化域名的频道网址会是 http://i.youku.com/u/××× 的形式，因此请填写 “u/×××”',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'tudou_id',
        'label'       => '土豆（http://www.tudou.com/home/×××）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'bilibili_id',
        'label'       => '哔哩哔哩（http://space.bilibili.tv/×××）',
        'desc'        => '请填写×××处数字',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'xiami_id',
        'label'       => '虾米（http://www.xiami.com/u/×××）',
        'desc'        => '请填写×××处数字',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'songtaste_id',
        'label'       => 'SongTaste（http://www.songtaste.com/user/×××/）',
        'desc'        => '请填写×××处数字',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'huaban_id',
        'label'       => '花瓣（http://huaban.com/×××）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'youtube_id',
        'label'       => 'Youtube（https://www.youtube.com/user/×××）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'vimeo_id',
        'label'       => 'Vimeo（http://vimeo.com/×××）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'soundcloud_id',
        'label'       => 'SoundCloud（https://soundcloud.com/×××）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'flickr_id',
        'label'       => 'Flickr（https://www.flickr.com/photos/×××/）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'instagram_id',
        'label'       => 'Instagram（http://instagram.com/×××）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'f500px_id',
        'label'       => '500px（http://500px.com/×××）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'pinterest_id',
        'label'       => 'Pinterest（http://www.pinterest.com/×××/）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'zhihu_id',
        'label'       => '知乎（http://www.zhihu.com/people/×××）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'guokr_id',
        'label'       => '果壳（http://www.guokr.com/i/×××/）',
        'desc'        => '请填写×××处数字',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'douban_id',
        'label'       => '豆瓣（http://www.douban.com/people/×××/）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'zcool_id',
        'label'       => '站酷',
        'desc'        => '如果没有使用个性化域名，请填写http://www.zcool.com.cn/u/××× 中×××处数字；使用个性化域名的请直接填写全部网址，不要忘了“http://”',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'yiyan_id',
        'label'       => '译言（http://user.yeeyan.org/u/×××）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'segmentfault_id',
        'label'       => 'SegmentFault（http://segmentfault.com/u/×××）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'quora_id',
        'label'       => 'Quora（https://www.quora.com/×××）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'dropbox_id',
        'label'       => 'Dropbox 邀请链接',
        'desc'        => '请填写完整的Dropbox邀请链接，如 “https://db.tt/×××”',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'linkedin_id',
        'label'       => 'Linkedin',
        'desc'        => '请填写完整的个人主页链接，如“http://www.linkedin.com/pub/×××/×××/×××/×××”',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'dribbble_id',
        'label'       => 'Dribbble（http://dribbble.com/×××）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'github_id',
        'label'       => 'Github（https://github.com/×××）',
        'desc'        => '请填写×××处内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'stackexchange_id',
        'label'       => 'StackExchange（http://stackexchange.com/users/×××）',
        'desc'        => '请填写×××处内容。注意这里是总站StackExchange的，不要填成了StackOverflow的',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'wechat_qr',
        'label'       => '微信',
        'desc'        => '请填写您的微信二维码网址，在此处上传，或者直接使用媒体库中的图片',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'yixin_qr',
        'label'       => '易信',
        'desc'        => '请填写您的易信二维码网址，在此处上传，或者直接使用媒体库中的图片',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'line_qr',
        'label'       => 'Line',
        'desc'        => '请填写您的Line二维码网址，在此处上传，或者直接使用媒体库中的图片',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'whatsapp_qr',
        'label'       => 'Whatsapp',
        'desc'        => '请填写您的Whatsapp二维码网址，在此处上传，或者直接使用媒体库中的图片',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'mail_address',
        'label'       => 'E-mail',
        'desc'        => '支持邮箱地址（×××@×××.com）或者在线写信类网址（如QQ邮箱“邮我”，在设置——账户的最下方开启该功能并获取代码后，在此处填入href=之后，双引号之间的那个网址）',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'rss_feed',
        'label'       => 'RSS Feed',
        'desc'        => '请填写完整网址。一般为“您的博客地址/feed/”',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'any_url',
        'label'       => '自定义链接',
        'desc'        => '请填写完整网址。不要忘了“http://”',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'header_analytics_code',
        'label'       => '页头统计代码',
        'desc'        => '适用于任何要求在页头(head)部分加载的统计代码，如谷歌统计，百度统计异步代码。请直接粘贴您的代码(包含script标签)，支持多个统计代码，但建议只用一个',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'analytics_seo',
        'rows'        => '4',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_analytics',
        'label'       => '页尾统计代码',
        'desc'        => '适用于任何要求在页尾(footer)部分加载的统计代码，如腾讯统计，百度统计普通代码。请直接粘贴您的代码(包含script标签)，支持多个统计代码，但建议只用一个',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'analytics_seo',
        'rows'        => '4',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'baidu_tuijian',
        'label'       => '百度推荐',
        'desc'        => '在<a href="http://tuijian.baidu.com" target="_blank">百度推荐</a>获取异步代码后，填写id="hm_t_×××"引号中的内容',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'analytics_seo',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'site_description',
        'label'       => '站点描述',
        'desc'        => '适当、准确地描述你的网站。如果不想出现 Description 标签用于SEO，此处请留空',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'analytics_seo',
        'rows'        => '4',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'site_keywords',
        'label'       => '关键词',
        'desc'        => '网站关键词，关键词之间用半角英文逗号隔开。如果不想出现 Keywords 标签用于SEO，此处请留空',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'analytics_seo',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'site_author',
        'label'       => '作者',
        'desc'        => '网站作者或者所有者的名字。如果不想出现 Author 标签用于SEO，此处请留空',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'analytics_seo',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}