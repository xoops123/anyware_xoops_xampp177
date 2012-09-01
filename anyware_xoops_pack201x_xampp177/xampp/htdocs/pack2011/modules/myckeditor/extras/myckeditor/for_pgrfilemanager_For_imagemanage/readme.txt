2011/07/24 domifara

標準のBBCodeのイメージマネジャー統合用
イメージ選択ダイアログにpgrfilemanagerイメージマネジャー統合表示するものです。

イメージマネジャー統合方法は、下記の２通りのどちらかを使用してください


---------------------------------------------------------------------------------

統合方法１　テンプレートを変更してイメージマネジャー統合する

イメージマネジャー統合用、pgrfilemanagerを標準イメージマネージャーの代わりに起動するための
テンプレートを変更します。

　互換モジュール のlegacy_xoopsform_dhtmltextarea.html テンプレートの変更が必要です。

altsysなどで、テンプレートを変更してください。
参考：正しいテンプレートカスタマイズ方法
http://www.xugj.org/modules/xpwiki/?%E6%AD%A3%E3%81%97%E3%81%84%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E3%82%AB%E3%82%B9%E3%82%BF%E3%83%9E%E3%82%A4%E3%82%BA%E6%96%B9%E6%B3%95

(ホダ塾レビューのpreload HdXoopsTplHook.class.php　を使用している場合は
テーマ下のtemplatesディレクトリに入れるだけで有効になります。)

---------------------------------------
Xoop2.5.xの場合
上記までの変更と異なり
ルート直下の imagemanager.php に追記が必要です

[code]

include dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mainfile.php';

if (!isset($_REQUEST['target'])) {
    exit('Target not set');
}
// この一行を追加する
include 'modules/myckeditor/pgrfilemanager/imagemanager.php';

以下略
[/code]



---------------------------------------------------------------------------------

統合方法２　preload を使用してイメージマネジャー統合する

イメージマネジャー統合用、pgrfilemanagerを標準イメージマネージャーの代わりに起動するための
preload　pgrfilemanager.class.php　を
myckeditorモジュール内のpreloadディレクトリに追加で入れるだけです。

ただし、このpreloadによる方法は、ブラウザーにより動作が異なることが分かっています。

新旧、多くのブラウザーに対応しているのか？確認が取れていません。
(私のサイトのフォーラムに、何では動作しなかった等のご報告していただければ、ありがたいです)

私の IE9 , Firefox5 では動作しました。

統合方法１の方が、手間がかかりますが、ブラウザーの違いに依存しにくいと思います。

---------------------------------------------------------------------------------
[TODO]
テキストエリアに

例1
[siteurl=uploads/fckeditor/uid000001_2011022216364176a134e6.jpg]
[img align=center]http://localhost/xcl22/uploads/fckeditor/uid000001_2011022216364176a134e6.jpg[/img][/siteurl]
と
センターで挿入します(現在この一通りの挿入方法しかできません)

お手数ですが
左よせのときは、align=center　を　align=left　を挿入してください
例2 左よせ
[siteurl=uploads/fckeditor/uid000001_2011022216364176a134e6.jpg]
[img align=left]http://localhost/xcl22/uploads/fckeditor/uid000001_2011022216364176a134e6.jpg[/img][/siteurl]

右よせのときは、align=center　を　align=right　に変更してください
例3 右よせ
[siteurl=uploads/fckeditor/uid000001_2011022216364176a134e6.jpg]
[img align=right]http://localhost/xcl22/uploads/fckeditor/uid000001_2011022216364176a134e6.jpg[/img][/siteurl]
 