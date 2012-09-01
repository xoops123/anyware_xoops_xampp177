2011/05/03

このpreloadは、XOOPS Cube Legacy2.1.8でXCL2.2で追加になった
JQueryサポート仕様を疑似的に再現するものです。
XOOPS Cube Legacy2.1.8では
XOOPS_ROOT_PATH/preload/Jquery.class.php　と追加して利用します

ただし、あくまで疑似的なものなので、XCL2.2にくらぺ、機能的に劣ります。
・公開エリアでしか有効にはなりません。
・XCL2.2で変更になった、smarty function の function.xoops_dhtmltarea.php 経由での利用には対応していません。

(公開エリア(adminエリア以外)で使用するものだから使えるはずです)