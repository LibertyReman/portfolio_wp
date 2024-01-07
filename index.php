
    <?php get_header(); ?> <!-- header.phpを読み込むテンプレートタグ -->
    <main class="l-main">
      <div class="c-inner">
        <h1 class="l-main__title"><span id="ityped"></span></h1>

        <section class="p-about c-section"> <!-- flex -->
          <h2 class="c-section__title" id="about">About</h2>
          <div class="p-about__contents"> <!-- flex -->
            <img src="./img/icon.jpg" alt="icon" class="p-about__contents__icon">
            <p class="p-about__contents__text">Simple to do timer ajfiosdja  jodsfa fjdsoia fdjsoi fdjsoafjdisofje jofej oew fjio   .... Simple to do timer ajfiosdja  jodsfa</p>
          </div>
        </section>

        <section class="p-works c-section"> <!-- flex -->
          <h2 class="c-section__title" id="works">Works</h2>
          <div class="p-works__contents">
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="p-works__contents__card">
                    <a href="/">
                      <div class="p-works__contents__card__thumbnail">
                        <img src="./img/works-sample.jpg" alt="works-sample">
                      </div>
                      <p class="p-works__contents__card__title">WordPressを使ったハンバーガーサイトの作成（架空サイト）</p>
                      <div class="p-works__contents__card__info">
                        <p>2024.1.5</p>
                        <div><span class="c-tag c-tag--red">WordPress</span></div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </section>

        <section class="p-skill c-section"> <!-- flex -->
          <h2 class="c-section__title" id="skill">Skill</h2>
          <ul class="p-skill__list"> <!-- flex -->
            <li class="p-skill__list__item">
              <button class="js-modal-opbtn" data-modal="modal1">
                <img src="./img/html5.svg" alt="html5">
                <p>HTML / CSS</P>
              </button>
            </li>
            <li class="p-skill__list__item">
              <button class="js-modal-opbtn" data-modal="modal2">
                <img src="./img/sass.svg" alt="sass">
                <p>FLOCSS</p>
              </button>
            </li>
            <li class="p-skill__list__item">
              <button class="js-modal-opbtn" data-modal="modal3">
                <img src="./img/wordpress.svg" alt="wordpress">
                <p>WordPress</p>
              </button>
            </li>
            <li class="p-skill__list__item">
              <button class="js-modal-opbtn" data-modal="modal4">
                <img src="./img/javascript.svg" alt="javascript">
                <p>JavaScript</p>
              </button>
            </li>
            <li class="p-skill__list__item">
              <button class="js-modal-opbtn" data-modal="modal5">
                <img src="./img/jquery.svg" alt="jquery">
                <p>jQuery</p>
              </button>
            </li>
            <li class="p-skill__list__item">
              <button class="js-modal-opbtn" data-modal="modal6">
                <img src="./img/php.svg" alt="php">
                <p>PHP</P>
              </button>
            </li>
            <li class="p-skill__list__item">
              <button class="js-modal-opbtn" data-modal="modal7">
                <img src="./img/git.svg" alt="git">
                <p>Git</p>
              </button>
            </li>
            <li class="p-skill__list__item">
              <button class="js-modal-opbtn" data-modal="modal8">
                <img src="./img/linux.svg" alt="linux">
                <p>Linux</p>
              </button>
            </li>
            <li class="p-skill__list__item">
              <button class="js-modal-opbtn" data-modal="modal9">
                <img src="./img/certificate.svg" alt="certificate">
                <p>Certificate</p>
              </button>
            </li>
          </ul>

          <div class="p-modal" id="modal1">
            <div class="p-modal__window">
              <div class="p-modal__window__clbtn">
                <span>×</span>
              </div>
              <div class="p-modal__window__contents">
                <img src="./img/html5.svg" alt="html5">
                <h3>HTML / CSS</h3>
                <p>HTML Living StandardとモダンCSSに対応しています。</p>
              </div>
            </div>
          </div>
          <div class="p-modal" id="modal2">
            <div class="p-modal__window">
              <div class="p-modal__window__clbtn">
                <span>×</span>
              </div>
              <div class="p-modal__window__contents">
                <img src="./img/sass.svg" alt="sass">
                <h3>FLOCSS</h3>
                <p>SaasやCSS設計手法のFLOCSSに対応しています。</p>
              </div>
            </div>
          </div>
          <div class="p-modal" id="modal3">
            <div class="p-modal__window">
              <div class="p-modal__window__clbtn">
                <span>×</span>
              </div>
              <div class="p-modal__window__contents">
                <img src="./img/wordpress.svg" alt="wordpress">
                <h3>WordPress</h3>
                <p>WordPressのテーマ作成に対応しています。</p>
              </div>
            </div>
          </div>
          <div class="p-modal" id="modal4">
            <div class="p-modal__window">
              <div class="p-modal__window__clbtn">
                <span>×</span>
              </div>
              <div class="p-modal__window__contents">
                <img src="./img/javascript.svg" alt="javascript">
                <h3>JavaScript</h3>
                <p>Webサイトに動きをつけることができます。</p>
              </div>
            </div>
          </div>
          <div class="p-modal" id="modal5">
            <div class="p-modal__window">
              <div class="p-modal__window__clbtn">
                <span>×</span>
              </div>
              <div class="p-modal__window__contents">
                <img src="./img/jquery.svg" alt="jquery">
                <h3>jQuery</h3>
                <p>Webサイトに動きをつけることができます。</p>
              </div>
            </div>
          </div>
          <div class="p-modal" id="modal6">
            <div class="p-modal__window">
              <div class="p-modal__window__clbtn">
                <span>×</span>
              </div>
              <div class="p-modal__window__contents">
                <img src="./img/php.svg" alt="php">
                <h3>PHP</h3>
                <p>PHPを使ったWordPressのカスタマイズを行うことができます。</p>
              </div>
            </div>
          </div>
          <div class="p-modal" id="modal7">
            <div class="p-modal__window">
              <div class="p-modal__window__clbtn">
                <span>×</span>
              </div>
              <div class="p-modal__window__contents">
                <img src="./img/git.svg" alt="git">
                <h3>Git</h3>
                <p>バージョン管理ツールGit / SVNや、WebサービスGitHub / Redmineを使うことができます。</p>
              </div>
            </div>
          </div>
          <div class="p-modal" id="modal8">
            <div class="p-modal__window">
              <div class="p-modal__window__clbtn">
                <span>×</span>
              </div>
              <div class="p-modal__window__contents">
                <img src="./img/linux.svg" alt="linux">
                <h3>Linux</h3>
                <p>Linuxの通信アプリ開発の経験があります。ソケットプログラミング、シェルスクリプト、コマンドライン操作、Vimなどを使うことができます。</p>
              </div>
            </div>
          </div>
          <div class="p-modal" id="modal9">
            <div class="p-modal__window">
              <div class="p-modal__window__clbtn">
                <span>×</span>
              </div>
              <div class="p-modal__window__contents">
                <img src="./img/certificate.svg" alt="certificate">
                <h3>Certificate</h3>
                <p>国家資格 応用情報技術者 (2023.10)</p>
              </div>
            </div>
          </div>

        </section>

        <section class="p-contact c-section"> <!-- flex -->
          <h2 class="c-section__title" id="contact">Contact</h2>
          <form class="p-contact__form" id="" method="post" action=""> <!-- flex -->
            <label class="p-contact__form__label" for="name">Name</label>
            <input class="p-contact__form__input" type="text" id="name" name="name">

            <label class="p-contact__form__label" for="email">Email</label>
            <input class="p-contact__form__input" type="mail" id="email" name="email">

            <label class="p-contact__form__label" for="message">Message</label>
            <textarea class="p-contact__form__message" id="message" name="message"></textarea>

            <input class="p-contact__form__submit" type="submit" value="SEND">
          </form>
        </section>

      </div> <!-- c-inner -->
    </main>
    <?php get_footer(); ?> <!-- footer.phpを読み込むテンプレートタグ -->


