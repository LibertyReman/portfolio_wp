
    <?php get_header(); ?> <!-- header.phpを読み込むテンプレートタグ -->
    <main class="l-main">
      <div class="c-inner">
        <h1 class="l-main__title l-main__title--single">
          <a class="c-link" href="<?php echo esc_url(home_url('/')); ?>" >
            <span>Based on UR Feelings and A little Spice</span>
          </a>
        </h1>
        <?php if(have_posts()) : // 投稿データがあるか確認
          while(have_posts()) :
            the_post(); // 投稿データの取得 ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <!-- 投稿情報classを追加 -->
              <section class="p-single c-section">
                <h1 class="c-section__title" id="works"><?php the_title(); ?></h1>
                <div class="p-single__thumbnail">
                  <?php the_post_thumbnail(); ?>
                </div>
                <?php the_content(); ?> <!-- 本文の出力 -->
                <?php wp_link_pages(); ?> <!--  ページ送りの出力 -->
              </section>
            </div> <!-- post_class() -->
          <?php endwhile;
        else : // 投稿データがない場合 ?>
          <p>表示する投稿データがありません</p>
        <?php endif; ?>
      </div> <!-- c-inner -->
    </main>
    <?php get_footer(); ?> <!-- footer.phpを読み込むテンプレートタグ -->


