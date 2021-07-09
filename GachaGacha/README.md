①課題内容（どんな作品か）
 -必要あれば操作方法等こちらに記載
 DB作成で「gs_db」を作成してください。
 「gs_user_table」SQLファイルをインポートしてください。
 「gs_gachagacha_table」SQLファイルをインポートしてください。
 *「collection_[ユーザー名]_table 」はユーザー新規登録時に作成します。

 動作に必要なDB/table
 DB名:gs_db
 table:
    collection_[ユーザー名]_table 
        id int(12) AUTO_INCRIMENT PLYMARY
        character_id int(12)
        character_name varchar(128)
        character_img varchar(128)
        datetime datetime

    gs_gachagacha_table 
        id int(12) AUTO_INCRIMENT PLYMARY
        character_id int(12)
        character_name varchar(128)
        character_img varchar(128)
        datetime datetime

    gs_user_table
        id int(12) AUTO_INCRIMENT PLYMARY
        user_name varchar(128)
        user_id varchar(64)
        user_pw varchar(64)           
        life_flag int(1)
        datetime datetime

よくあるガチャ機能のあるWEBアプリを再現してみた。
構成要素
・スタート画面
・ログイン画面　新規ユーザー追加画面
・ホーム画面
・ガチャの種類選択画面
・ガチャ結果画面
・コレクション画面
・設定画面
・ユーザー情報更新画面
・ログアウトボタン

②工夫した点・こだわった点
・DBでログインIDとPWを確認してその後session_idを利用してログイン認証を行っている。
・ユーザー名ごとにテーブルを作成することで　ユーザーごとのコレクションを管理できるようにした
・collectionから削除を行う際にポップアップで削除の確認を表示して確認を求める機能を追加した
・DBに画像のパスを登録してローカルの画像を表示する機能。

③質問・疑問（あれば）
HTML CSS JS PHPを学んで一つずつは構築できるようになってきたが組み合わせて使用するイメージが持てていません。
例えば：HTMLとCSSで作成したページにJSで動きを付けて入力をしたデータなどをPHP SQLを使ってDBに保存をするのにはどのように書いてどのようなファイル構造にするのがよいのでしょうか？
＊現状ファイルが「.php」ばかりでPHPの中にHTMLを書いている状態になっていると思いますがこの状態が普通なのでしょうか？

④その他（感想、シェアしたいことなんでも）
自分への戒め
session_start();を忘れるな
include('function.php') を忘れるな
DB接続時はreturn $pdo;で値を返すのを忘れるな
$pdo = connectDB();で帰ってきた値を受け取ることを忘れるな