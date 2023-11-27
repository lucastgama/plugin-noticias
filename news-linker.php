<?php
/*
Plugin Name: News Linker - lite
Description: Plugins feito para adicionar API de noticias do Brasil.
Version: 0.1.0
Author: Lucas Gama
Text Domain: news-linker
Domain Path: languages
*/

if (!defined('ABSPATH')) {
	exit;
}

// Inclui a classe principal
require_once plugin_dir_path(__FILE__) . 'includes/class-news-linker-plugin.php';

$news__linker_plugin_instance = new NewsLinkerPlugin();
