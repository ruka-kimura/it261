<?php
// データベース接続情報
define('DB_NAME', 'mysql.ronaoruka.com');  // DB名（通常、DB名がホスト名のように見える場合があるので確認が必要）
define('DB_USER', 'rukakimura');            // ユーザー名
define('DB_PASSWORD', 'Ozkytk1129');       // パスワード
define('DB_HOST', 'localhost');            // ホスト名

// データベースに接続
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// 接続チェック
if (!$iConn) {
    die('データベース接続エラー: ' . mysqli_connect_error());
}

// SQL クエリ
$sql = 'SELECT * FROM people';

// クエリの実行
$result = mysqli_query($iConn, $sql);

// クエリ実行チェック
if (!$result) {
    die('クエリエラー: ' . mysqli_error($iConn));
}

// 結果を表示
while ($row = mysqli_fetch_assoc($result)) {
    echo 'Name: ' . $row['name'] . '<br>';
}

mysqli_close($iConn);
?>
