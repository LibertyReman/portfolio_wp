    <?php get_header(); ?> <!-- header.phpを読み込むテンプレートタグ -->
    <main>
      <div class="p-error">
        <h1 class="p-error__title">404</h1>
        <h1 class="p-error__text">Not Found</h1>
        <p class="p-error__text">お探しのページは見つかりませんでした。</p>
        <a class="c-link c-link--button" href="<?php echo esc_url(home_url('/')); ?>" >Top Page</a>
      </div>
    </main>
    <?php get_footer(); ?> <!-- footer.phpを読み込むテンプレートタグ -->
