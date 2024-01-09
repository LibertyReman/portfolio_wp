<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!-- 言語設定を自動的に出力 -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link href="<?php bloginfo('template_directory'); ?>/img/hero.jpg" as="image" rel="preload">
    <?php wp_head(); ?> <!-- 必ず入れる プラグインや情報出力が機能しなくなってしまう -->
  </head>

  <body <?php body_class(); ?>> <!-- 表示するページの種類によってclassを付与 -->
    <?php wp_body_open(); ?> <!-- <body>直後にコードを出力したい場合に使うフック -->
    <header class="l-header">
      <div class="c-inner">
        <?php get_sidebar(); ?> <!-- sidebar.phpを読み込むテンプレートタグ -->
      </div>
    </header>


