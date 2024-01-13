
    <?php get_header(); ?> <!-- header.phpを読み込むテンプレートタグ -->
    <main class="l-main">
      <div class="c-inner">
        <h1 class="l-main__title">
          <a class="c-link" href="<?php echo esc_url(home_url('/')); ?>">
            <span id="ityped"></span>
          </a>
        </h1>

        <section class="p-about c-section"> <!-- flex -->
          <h2 class="c-section__title" id="about">About</h2>
          <div class="p-about__contents"> <!-- flex -->
            <?php
              $page = get_page_by_path('about');
              echo '<img src="' .get_the_post_thumbnail_url($page, 'full') .'" alt="icon" class="p-about__contents__icon">';
              echo '<div class="p-about__contents__test">' .$page->post_content .'</div>';
            ?>
          </div>
        </section>

        <section class="p-works c-section"> <!-- flex -->
          <h2 class="c-section__title" id="works">Works</h2>
          <div class="p-works__contents">
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <?php
                  $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 100,
                  );
                  $myposts = get_posts($args); // 記事取得

                  foreach($myposts as $post):
                    setup_postdata($post); // グローバル変数$postを書き換え ?>
                    <div class="swiper-slide">
                      <div class="p-works__contents__card">
                        <a class="c-link" href="<?php the_permalink(); ?>">
                          <div class="p-works__contents__card__thumbnail">
                            <?php the_post_thumbnail('medium'); ?>
                          </div>
                          <p class="p-works__contents__card__title"><?php the_title(); ?></p>
                          <div class="p-works__contents__card__info">
                            <p><?php the_time('Y/m/d'); ?></p>
                            <div><span class="c-tag c-tag--red"><?php $cat = get_the_category(); $cat = $cat[0]; {echo $cat->cat_name;} ?></span></div>
                          </div>
                        </a>
                      </div>
                    </div> <!-- .swiper-slide -->
                  <?php endforeach;
                  WP_reset_postdata(); // グローバル変数$postをリセット
                ?>
              </div> <!-- .swiper-wrapper -->
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </section>

        <section class="p-skill c-section"> <!-- flex -->
          <h2 class="c-section__title" id="skill">Skill</h2>
          <ul class="p-skill__list"> <!-- flex -->
            <?php
              $args = array(
                'post_type' => 'skill',
                'posts_per_page' => 100,
              );
              $myposts = get_posts($args); // 記事取得

              $i = 0;
              foreach($myposts as $post):
                $i++;
                setup_postdata($post); // グローバル変数$postを書き換え ?>
                <li class="p-skill__list__item">
                  <button class="js-modal-opbtn" data-modal="modal<?php echo $i; ?>">
                    <?php the_post_thumbnail('medium'); ?>
                    <p><?php the_title(); ?></P>
                  </button>
                </li>
              <?php endforeach;
              WP_reset_postdata(); // グローバル変数$postをリセット
            ?>
          </ul>

          <?php
            $args = array(
              'post_type' => 'skill',
              'posts_per_page' => 100,
            );
            $myposts = get_posts($args); // 記事取得

            $i = 0;
            foreach($myposts as $post):
              $i++;
              setup_postdata($post); // グローバル変数$postを書き換え ?>
              <div class="p-modal" id="modal<?php echo $i; ?>">
                <div class="p-modal__window">
                  <div class="p-modal__window__clbtn">
                    <span>×</span>
                  </div>
                  <div class="p-modal__window__contents">
                    <?php the_post_thumbnail('medium'); ?>
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                  </div>
                </div>
              </div>
            <?php endforeach;
            WP_reset_postdata(); // グローバル変数$postをリセット
          ?>
        </section>

        <?php get_template_part('page-contact'); ?> <!-- page-contact.phpの読み込み -->

      </div> <!-- c-inner -->
    </main>
    <?php get_footer(); ?> <!-- footer.phpを読み込むテンプレートタグ -->


