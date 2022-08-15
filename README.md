# reading_management_app

## 目的

PF作るため

## 概要
読書管理サービス

### システム方式・構成

Webサービス

- フロントエンド
  - Vue.js
  - クラウド構成
    - S3
- バックエンド
  - Laravel
  - クラウド構成
    - AWS Beansetalk
- DB  
  - mysql
- 外部サービスとかあれば

### 用語定義

- ステータス. 
アプリ内で書籍の状態を以下の項目のいずれかに振り分けることとし、振り分けられた分類のことをステータスと定義する。
読んでる本、読んだ本、積読本、読みたい本


## 業務要件

### 構築後のフロー（ユースケース）

新規登録フロー
1. トップ画面
2. 情報入力
3. メイン画面

ログインフロー
1. ログイン
2. メールアドレス、パスワード入力
3. メイン画面

読書目標設定フロー
1. メイン画面
2. 目標入力
3. メイン画面に目標を表示

書籍登録フロー
1. 新い書籍の登録画面
2. 情報入力（タイトル、表紙画像、ISBN、ステータス、etc)
3. 情報表示
4. 編集

読書時間フロー
1. ステータス画面で書籍のイメージをクリック
2. 書籍情報画面
3. 読書時間入力（日時、読んだ時間、etc）

### 利用者一覧（ステイクホルダー）

- 一般ユーザー
- 管理者

### 規模

アクティブユーザが100人ぐらい

## 機能要件
- ログイン
- サインアップ
- プロフィール登録
- イメージ画像アップロード
- 読書目標設定
- 書籍一覧表示
- 読書時間のグラフ表示
- 並び替え
- 検索（日付、タイトル）
- コメント入力
- 書籍の削除
- 書籍のステータス
- 退会


### 画面

- トップ画面  
アプリの使い方（チュートリアル）、サインインとサインアップができる。

- サインアップ画面. 
以下の項目を入力してサインアップする。名前、年齢、性別、ユーザー名、メールアドレス、パスワード、パスワード再入力など

- メイン画面  
読書状況、目標表示、書籍一覧、読書時間グラフを表示する

- 新規書籍登録画面  
イメージ画像、タイトル、著者、登録日、コメントなどを入力

- ステータス画面（読んでる本、積読本、読んだ本、読みたい本） 
各ステータスごとに書籍の一覧を表示

-書籍情報（編集）画面. 
書籍の情報を表示、読書時間の入力、ステータスの変更、書籍の削除


### 情報・データ（データベースに入れるもの）

- プロフィールを表示するためのデータ  
氏名、年齢、性別、ユーザー名、メールアドレス、パスワードなど

- 書籍の情報を表示するためのデータ  
新規書籍登録画面から入力されたデータを書籍情報画面ステータス画面で表示する

- 読書時間  
読書時間をメイン画面で日毎にグラフで表示する


### 外部インタフェース

-  Twitterに投稿

### スケジュール

| 日付 | 内容 |
| 2022年8月17日まで | 要件確認 |
| 2022年9月7日まで | 開発 |
| 2022年9月10日まで | テスト |
| 2022年9月13日 | 開発完了及びデプロイ|


### セキュリティ

- データの保持（個人情報の収集）
- サーバのセキュリティ
  - クラウドベンダー（AWS）に遵守
