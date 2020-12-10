Laravel development guide

________________________________

前提

php、composer をインストール済み

____________________________________________________

準備

phpバージョンが表示されるか確認する

php -v 

composerバージョンが表示されるか確認する

composer --version

composer経由でlatavelをインストールできるようにする

composer require laravel/installer

________________________________________________________________________________

新規にlaravelを展開する

laravel new プロジェクト名

もしくは

composer create-project --prefer-disst laravel/laravel="バージョン名" プロジェクト名

Laravel7でtestプロジェクトを作成する場合、

composer create-project --prefer-disst laravel/laravel="7.*" test

バージョン名を省略すると最新バージョンがインストールされる

_____________________________________________________________________________________

gitから取得する

デスクトップなどにプロジェクト用に作成したフォルダに入り、

git clooneでプロジェクトを取得する

フォルダ内にプロジェクトフォルダが作成されているのでそこに入り、

cp .env.example .env

php artisan key:generate

composer install

まで行う

________________________________________________________________________

正常に動作するか確認

pho artisan serveでlaravelの画面が表示されたら完了
