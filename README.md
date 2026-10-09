# eloquent-app-practice

## 概要

COACHTECH 教材 Tutorial 9-4「Eloquent ORM ハンズオン演習」で作成したLaravelアプリケーションの成果物です。
Eloquent ORMを活用して、データベースとの連携やデータの作成・一覧表示などの基本機能（CRUD）をしっかりと学びながら実装しました！

## 使用技術

- PHP 8.x
- Laravel 10.x
- Eloquent ORM
- MySQL
- Laravel Sail (Docker)

## 学んだこと

- データベースのマイグレーションやモデルを通じて、テーブル設計やデータのやり取りの仕組みずくり
- コントローラーやBladeファイルを連携させ、画面からの入力（Create）とデータベースからのデータ取得・表示（Read）の一連の流れを構築を実践しました
- データの並び替え（新着順のソートなど）のロジックをEloquentで実装し、意図した通りの表示に調整する方法を学びました。
- 開発を進める中で発生したエラーに対し、AIを利用しながらですがエラーメッセージを読み解いて一つひとつ解決していくデバッグの力が身につきました。

## 動作確認

1. プロジェクトのルートディレクトリでLaravel Sailを起動します。
   `bash
    ./vendor/bin/sail up -d
    `
   github-push
