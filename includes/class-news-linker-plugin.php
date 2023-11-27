<?php



class NewsLinkerPlugin
{
    // private $display_options;

    public function __construct()
    {
        // $this->display_options = new NewsLinkerOptions();

        var_dump(include_once plugin_dir_path(__FILE__) . '../templates/admin/template-news-linker-admin.php');

        add_action('admin_menu', array($this, 'news_linker_menu_initialization'));
    }

    function news_linker_menu_initialization()
    {
        add_menu_page(
            'News Linker',
            'News Linker',
            'manage_options',
            'news-linker',
            array($this, 'render_template_news_linker_menu'),
            'dashicons-welcome-widgets-menus',
            5
        );
    }
    public function render_template_news_linker_menu()
    {
        include_once plugin_dir_path(__FILE__) . '../templates/admin/template-news-linker-admin.php';
    }
}
