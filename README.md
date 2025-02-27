# WordPress 自作ポートフォリオテーマ

## セットアップ

1. $ cd /xxx/wp-content/themes/ # サーバー内のWPテーマフォルダへ移動
1. $ git clone <https://github.com/LibertyReman/portfolio_wp.git>
1. WordPressの管理画面からテーマを有効化

---

## 開発

1. Localアプリでサイト名 `portfoliowp.local` のWordPressプロジェクトを作成
1. $ cd ~/Local\ Sites/portfoliowp/app/public/wp-content/themes/  # テーマフォルダへ移動
1. $ git clone <https://github.com/LibertyReman/portfolio_wp.git>
1. $ cd  portfolio_wp/
1. $ npm link gulp browser-sync gulp-plumber gulp-dart-sass gulp-sourcemaps
1. $ gulp

---

## ライセンス

- License: GNU General Public License v3.0
- License URI: <http://www.gnu.org/licenses/gpl-3.0.html>
- Author: KK
