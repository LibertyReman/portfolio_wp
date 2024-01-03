document.querySelector( '.js-hamburger' ).addEventListener(
    'click',
    () => {
        document.querySelector('.js-hamburger').classList.toggle('is-open');
        document.querySelector('.p-gmenu').classList.toggle('is-open');
        document.querySelector('.l-main').classList.toggle('is-open');
    }
);

// メニューがクリックされたらハンバーガーを閉じる
document.querySelector( '.js-hamburger-list' ).addEventListener(
    'click',
    () => {
        document.querySelector('.js-hamburger').classList.remove('is-open');
        document.querySelector('.p-gmenu').classList.remove('is-open');
        document.querySelector('.l-main').classList.remove('is-open');
    }
);


