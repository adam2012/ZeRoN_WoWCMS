<?php
/**
*
* help_faq [Japanese]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translator: ocean=Yohsuke < n/a > ( n/a ) http://bbmods.info/bbs/
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => 'ログインと登録に関する問題'
	),
	array(
		0 => 'なぜログインできないの？',
		1 => '理由はいくつか考えられます。ユーザー登録の際に入力したユーザー名とパスワードに間違いがなかったかどうかを今一度お確かめください。もし間違っていない場合、アクセス禁止されていないかを管理人にお問い合わせください。他に考えられる可能性としては掲示板自体に何か問題が発生しているかもしれない事です。その場合、管理人は問題を解決する必要があるでしょう。'
	),
	array(
		0 => '登録は必ずしなければいけないの？',
		1 => '掲示板の管理方針によってはログインしなくても投稿できる場合がありますので必ずしも登録する必要はありません。しかし登録することでユーザー画像の使用、プライベートメッセージ （ PM ） の使用、ユーザーへのメール送信、グループへの参加など様々な機能にアクセスできるようになります。未登録ユーザー （ゲストユーザー） は利用できる機能が登録ユーザーよりも限られます。登録は数分で行うことができますので、掲示板をよく利用する場合はユーザー登録することをお勧めします。'
	),
	array(
		0 => 'なぜ自動的にログオフしてしまうの？',
		1 => 'ログインする際にチェックボックス “自動ログインを有効にする” をチェックしなかった場合、掲示板はそのログインセッションのみしかログイン状態を保とうとしないため、セッションの有効期限が過ぎるとログイン状態も自然に解除されます。この事はあなたのアカウントが他人に悪用される事を防いでくれます。常にログイン状態を保ちたい場合、このチェックボックスをチェックしてからログインしてください。この自動ログイン機能は図書館、インターネットカフェ、大学などの共有されたコンピュータ環境では利用しないことをお勧めします。もしログインの際にこのチェックボックスが表示されない場合、それは管理人がこの機能を無効に設定している事を意味します。'
	),
	array(
		0 => 'オンライン状態のユーザーとしてユーザー名をリストに表示されないようにするには？',
		1 => 'ユーザーCP の “ユーザー設定” にオプション “オンライン状態を隠す” があるはずです。このオプションを “はい” に設定してください。そうすればオンライン状態は管理人、モデレータ、ユーザー自身にしか表示されなくなります。この場合オンラインデータページにユーザー名が表示されなくなり、かわりにお忍びユーザーの一人として表示されます。'
	),
	array(
		0 => 'パスワードを無くしてしまいました！',
		1 => '落ち着いてください！ 無くしたパスワードを取り戻すことはできませんが新しいパスワードを再発行することならできます。パスワードを再発行するにはログインページで <em>パスワードを忘れてしまいました</em> リンクをクリックしてください。そして以前に登録したユーザー名とメールアドレスを入力して送信してください。再発行されたパスワードは入力したメールアドレスに送信されます。'
	),
	array(
		0 => '登録したのにログインできません！',
		1 => 'まず最初に正しいユーザー名とパスワードを入力しているかをご確認ください。両方とも正しいにも関わらずログインできない場合、次の２つが考えられます。１つ目は、掲示板が COPPA （児童オンライン・プライバシー保護法） を有効にしている場合です。この場合、１３歳未満のユーザーは要求された指示に従う必要があります。２つ目は、掲示板がアカウントの有効化を必要としている場合です。この場合、掲示板の設定によりますが有効化はユーザー自身か管理人のどちらかが行います。アカウント有効化が必要かどうかは登録完了時にメールで知らされます。あなたのメールアドレスにメールが送られているはずなのでそのメールの指示に従ってください。もしメールが届いていない場合、正しくないメールアドレスを入力したかスパムフィルタに引っかかっている可能性があります。正しいメールアドレスを入力したにも関わらずメールが送られてこない場合は管理人にお問い合わせください。'
	),
	array(
		0 => '以前、登録したはずなのに今はログインできません！',
		1 => '様々な理由により管理人がアカウントを無効化または削除することがあります。また大抵の掲示板はデータベースのサイズを少しでも減らすため、長い間投稿していないユーザーのアカウントを定期的に削除するように設定しています。このようなことがあるため、お手数ですが再度ユーザー登録を行っていただき、フォーラムに積極的に参加するようにしてください。',
	),
	array(
		0 => 'COPPA とは？',
		1 => 'COPPA （児童オンライン・プライバシー保護法） とは、１３歳未満の子供に個人情報を入力させるウェブサイトに対して、子供の個人情報の保管についての承諾書を親または保護者から入手させる事を義務づける、アメリカ合衆国における法律です。この法律があなたもしくはこのウェブサイトに対して適用されるのかどうかについては法律の専門家にお問い合わせください。phpBB Group は法律に関するいかなる問い合わせも受け付けておりません。',
	),
	array(
		0 => 'ユーザー登録できません！',
		1 => '管理人があなたの IPアドレス をアクセス禁止に指定しているか、あなたが登録しようとしたユーザー名を禁止している可能性があります。また、管理人が掲示板のユーザー登録を停止している可能性もあります。詳細は管理人にお問い合わせください。',
	),
	array(
		0 => 'cookie を消去したらどうなるの？',
		1 => '“掲示板の cookie を消去する” リンクをクリックすると phpBB3 が生成した cookie を全て消去します。この cookie は掲示板にログインする際にあなたが誰なのかを識別するためのものです。もしログインまたはログアウトに関して何らかの問題を抱えている場合、掲示板の cookie を消去することで解決するかもしれません。',
	),
	array(
		0 => '--',
		1 => 'ユーザー設定'
	),
	array(
		0 => 'ユーザー設定のやり方は？',
		1 => '登録ユーザーの設定データはデータベースに保管されています。設定データを変更するには ユーザーCP へ入室してください。ユーザーCP リンクは通常は掲示板のトップにあります。そちらでユーザーに関する設定データを変更できます。'
	),
	array(
		0 => '掲示板の時刻が正しくありません！',
		1 => 'あなたが住んでいる国・地域のタイムゾーンと掲示板のデフォルトタイムゾーンが異なっている可能性があります。この場合、ユーザーCP へ入室してタイムゾーンをあなたが住んでいる国・地域 （ロンドン、パリ、ニューヨーク、シドニーなど） のタイムゾーンに設定してください。他のユーザー設定もそうですがタイムゾーンの変更は登録ユーザーしか行えません。もしユーザー登録がお済みでないならこの機会に登録することをお勧めします。'
	),
	array(
		0 => 'タイムゾーンを変更したのに時刻が正しく表示されません！',
		1 => 'タイムゾーンと サマータイム/DST を正しく設定しているにもかかわらず時刻が正しく表示されない場合、掲示板が置かれているサーバの設定時間が正しくない可能性があります。この場合、管理人にこの事を連絡し解決してもらうしかありません。'
	),
	array(
		0 => '私の母語が “掲示板の言語” リストにありません！',
		1 => 'あなたの母語へ翻訳された言語パック （以下 “母語パック” ） が掲示板にインストールされていません。母語パックを掲示板にインストールできるかどうかを管理人に訊いてみてください。もし母語パックがまだ作成されていない場合、ご自分で母語パックを作成して頂いてかまいません。詳細は phpBB Group のウェブサイトをご覧ください （このページの一番下にリンクがあります） 。'
	),
	array(
		0 => 'ユーザー名の下に画像を表示させるには？',
		1 => '記事を閲覧する際にユーザー名の下に表示される画像は２種類あります。１つはランク画像です。大抵のランク画像は星かブロックかドットを並べたものです。並んでいる数の多さは、そのユーザーの投稿数または掲示板における地位・ステータスの高さを意味します。もう１つはユーザー画像です。この画像はユーザー独自の画像である場合が多く、アバターと呼ばれます。掲示板の設定によってはアバターを許可していなかったり、許可していても独自のアバターをアップロードできなかったりする場合があります。アバターが許可されていない場合、どうして許可していないのかを管理人にお問い合わせください。'
	),
	array(
		0 => 'ランクとは？ ランクを変更するには？',
		1 => 'ランクとはユーザー名の下に表示される画像のことであり、この画像はそのユーザーの投稿数または掲示板における地位・ステータスの高さ （モデレータ、管理人など） を表しています。基本的にユーザーはランクを自分で変更することはできません。ランクを上げるためだけに無意味な記事を投稿するのはお控えください。投稿数を減らされるだけでなく、場合によってはランクを下げられたりアカウントを削除される可能性があります。'
	),
	array(
		0 => 'メールアイコンをクリックするとログインページが表示されるんですけど？',
		1 => '登録ユーザーのみ、そして管理人が掲示板経由のメール送信を有効に設定している場合のみ、他のユーザーに対してメールを送信することが可能です。これは匿名ユーザーによるメールを利用した悪質な行為を防ぐためです。'
	),
	array(
		0 => '--',
		1 => '投稿に関する問題'
	),
	array(
		0 => 'フォーラムにトピックを投稿するには？',
		1 => 'フォーラムに新しいトピックを投稿するには、フォーラム閲覧ページ内にあるトピック作成ボタンをクリックしてください。掲示板の設定によってはトピックを投稿するにはユーザー登録が必要な場合があります。フォーラム閲覧ページの下の方に、そのフォーラムにおけるあなたのパーミッションがリスト表示されているはずです。例、トピック投稿: <strong>可</strong>、投票参加: <strong>可</strong> など。'
	),
	array(
		0 => '記事を編集・削除するには？',
		1 => '管理人かモデレータでない限り、通常は一般ユーザーが他のユーザーの記事を編集・削除することはできません。編集を行う場合は編集したい記事の編集ボタンをクリックします。掲示板の設定によってはその記事が作成されてから長い時間が経過していると編集できない場合がある点にご注意ください。もし編集しようとしている記事が誰かから既に返信されている場合、編集後に編集した回数と日時が記事内に小さく表示されます。まだ返信されていない記事を編集する場合やモデレータまたは管理人が編集する場合、編集した回数と日時は表示されません （なぜ編集したかについての足跡を残すことはあるかもしれませんが・・） 。一般ユーザーはたとえ自分の記事だろうとそれが既に誰かから返信されている場合、その記事を削除することはできない点にご注意ください。'
	),
	array(
		0 => '自分の記事にサインを追加するには？',
		1 => 'サインを追加するには ユーザーCP でサインを設定する必要があります。ユーザーCP でサインを設定した後、投稿画面でチェックボックス “サインを有効にする” をチェックして投稿すれば、その記事にサインを追加できます。ユーザーCP で “サインを常に有効にする” を “はい” にしていれば、投稿画面の “サインを有効にする” は常にチェックされた状態になります。その際、チェックを外して投稿すればサインはもちろん追加されません。'
	),
	array(
		0 => '投票トピックを作成するには？',
		1 => '新しいトピックを作成、あるいはまだ返信されていないトピックを編集する際に、ページの下の方にあるタブ “投票の作成” をクリックしてください。もしこのタブが表示されない場合、投票トピックを作成するパーミッションがあなたにはありません。タブをクリックしたら投票のお題と最低２つのオプションを作ります。各オプションをテキストエリア内の別々の行に入力してください。投票期間を設けることもできますが、特に期間を設けない場合は 0 のままにしてください。ユーザーが選択できるオプション数 と 投票先オプションの変更の許可 も同時に設定できます。'
	),
	array(
		0 => 'なぜ投票オプションをこれ以上追加できないの？',
		1 => '投票オプションの最大数は管理人によって設定されています。もっと多くの投票オプションを追加する必要があると思う場合は管理人に相談してください。'
	),
	array(
		0 => '投票トピックを編集・削除するには？',
		1 => ' “記事を編集・削除するには？” と同様に、投票トピックの編集・削除はそのトピックの投稿者、モデレータ、管理人しか行うことができません。投票トピックを編集するにはそのトピックの一番最初の記事の編集ボタンをクリックしてください。一票でも投票されている投票トピックの編集・削除はモデレータか管理人しか行えません。これは投票オプションが投票期間中に変更されるのを防ぐためです。'
	),
	array(
		0 => 'なぜフォーラムにアクセスできないの？',
		1 => '一部のフォーラムは特定のグループやユーザーしか入室・表示できないように制限されていることがあります。フォーラムの表示、入室、投稿、その他のアクションの実行にはパーミッションが必要です。モデレータか管理人にパーミッションを与えてもらうようお問い合わせください。'
	),
	array(
		0 => 'なぜファイルを添付できないの？',
		1 => 'ファイル添付のパーミッションは各フォーラム、各グループ、各ユーザーに与えられます。管理人によっては特定のフォーラムに対してパーミッションを許可していなかったり特定のグループにのみ許可していたりするかもしれません。なぜファイル添付できないのかどうしても判らない場合は管理人にお問い合わせください。'
	),
	array(
		0 => 'なぜ私は警告されたの？',
		1 => '各掲示板サイトはそのサイト独自のルールを定めているのが普通です。もしあなたが当サイトのルールを犯してしまっている場合、警告されていても不思議ではありません。警告を出すかどうかはモデレータまたは管理人の判断であることにご注意ください。phpBB Group は当サイトが出す警告について何の関係もありませんし責任も負いません。なぜ警告が出されたのか判らない場合はモデレータまたは管理人にお問い合わせください。'
	),
	array(
		0 => '問題のある記事をモデレータに通報するには？',
		1 => '管理人が記事の通報を許可している場合、記事内に通報ボタンが表示されます。そのボタンをクリックすれば通報ページへ移動できます。'
	),
	array(
		0 => '投稿画面の “セーブ” ボタンは何ですか？',
		1 => '作成中のメッセージを保存するためのボタンです。メッセージの完成に時間がかかる場合は利用すると良いでしょう。保存されたメッセージをロード（読み込み）するには ユーザーCP へ入室してください。'
	),
	array(
		0 => 'なぜ投稿した記事に承認が必要なの？',
		1 => '「このフォーラムに投稿された記事は閲覧される前にモデレータが審査する必要がある」 と管理人がそのフォーラムを判断している可能性があります。あるいは 「このユーザーが投稿した記事は閲覧される前にモデレータが審査する必要がある」 と管理人があなたを判断し、承認が必要なグループへあなたを配置している可能性もあります。詳細は管理人にお問い合わせください。'
	),
	array(
		0 => 'トピックの表示位置を上げるには？',
		1 => '“このトピックを上げる” リンクをクリックすればトピックの表示位置をトピックリストの先頭に移動させることができます。しかしそのリンクがどこにも表示されていない場合、この機能が無効に設定されているかトピックを上げるのに十分な時間が経過していないかのどちらかが考えられます。トピックに返信してもトピックは上がりますが、トピックを上げるためだけに返信するのは掲示板のルールに抵触する可能性がある点にご注意ください。'
	),
	array(
		0 => '--',
		1 => 'メッセージ作成とトピックの種類'
	),
	array(
		0 => 'BBCode とは？',
		1 => 'BBCode はユーザーの利便性・システムの安全性のためにシステム側が用意した簡単なマークアップ言語です。BBCode を使用することによって文章の見栄えをコントロールしたり画像やリンクを文章に挿入したりできるようになります。BBCode を使用するにはパーミッションが必要です。パーミッションが与えられている場合でも個々の投稿で BBCode を無効にできます。BBCode それ自体は HTMLコード と似ていますが、タグを &lt; &gt; ではなく [ ] で閉じる点が異なります。より詳しい情報は投稿画面内の “BBCode” リンクをクリックしてください。'
	),
	array(
		0 => 'HTML を使うことはできますか？',
		1 => 'できません。 phpBB3 では HTMLコード を文章に含めてもレンダリングされなくなりました。HTML を利用して文章を作成したいのであれば、代わりに BBCode を使用してください。'
	),
	array(
		0 => 'スマイリーとは？',
		1 => 'スマイリー （別称：エモーションアイコン） とは感情を表現するために用いられる小さな画像のことです。例えば、:) は嬉しい感情、:( は悲しい感情を表します。投稿画面でスマイリーの一覧が表示されます。スマイリーが多くなると記事が読みづらくなりますのでスマイリーの乱用はお控えください。スマイリーを乱用した記事はモデレータによる編集・削除・移動の対象となる可能性があります。管理人も投稿の際に使用可能なスマイリーの数を制限するようになるでしょう。'
	),
	array(
		0 => '記事内に画像を載せることはできますか？',
		1 => 'できます。もし管理人がファイル添付を許可していれば、あなたは画像をアップロードできます。一方、ファイル添付を許可されていなくても画像ファイルへのハイパーリンクを記事に埋め込むことで画像を表示させることが可能です （例: [img]http://www.example.com/my-picture.gif[/img] ） 。あなたのローカルコンピュータがウェブサーバでない限り、あなたのローカルコンピュータにのみ存在する画像を記事に表示させることはできません。またアクセスにパスワード等が必要なサイト内の画像、Hotmail や Yahoo! のメールボックス内の画像等も利用できない点にご注意ください。画像を表示させるには BBCode [img] をご利用ください。'
	),
	array(
		0 => 'グローバル告知トピックとは？',
		1 => 'グローバル告知トピックは掲示板の重要な情報を含んだトピックです。全てのユーザーはこのトピックをできるだけ読むようにしなければいけません。グローバル告知トピックはあらゆるフォーラムと ユーザーCP で表示されます。グローバル告知トピックを投稿するにはパーミッションが必要です。'
	),
	array(
		0 => '告知トピックとは？',
		1 => '告知トピックとはその告知トピックが存在するフォーラムについての重要な情報を含んだトピックのことです。フォーラムに記事を投稿するつもりなら、そのフォーラムの告知トピックをできるだけ読むようにしなければいけません。告知トピックはそのフォーラムのあらゆるトピックで表示されます。グローバル告知トピックと同様、告知トピックを投稿するにはパーミッションが必要です。'
	),
	array(
		0 => '注目トピックとは？',
		1 => '注目トピックはフォーラムの最初のページに、告知トピックがあればその真下に表示されるトピックです。注目トピックはそのフォーラムにおいてかなり重要な位置を占めるトピックなので、もしそのフォーラムに関心があるなら読んでおいて損はないでしょう。（グローバル）告知トピックと同様、注目トピックを投稿するにはパーミッションが必要です。'
	),
	array(
		0 => '閉鎖トピックとは？',
		1 => '閉鎖トピックとは返信が禁止されているトピックのことです （投票トピックの場合は投票も禁止されます） 。様々な理由によりモデレータや管理人によってトピックが閉鎖されることがあります。パーミッションによりますがユーザー自身が投稿したトピックをユーザー自身で閉鎖することも可能です。'
	),
	array(
		0 => 'トピックアイコンとは？',
		1 => 'トピックアイコンとはトピックの内容を表すためにトピックの投稿者が投稿の際に選んだ画像のことです。トピックアイコンを使用するにはパーミッションが必要です。'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'ユーザーレベルとグループ'
	),
	array(
		0 => 'Admin とは？',
		1 => 'Admin とは、掲示板全体をコントロールするパーミッションを与えられたグループあるいはそのグループのメンバーのことです。管理人から与えられているパーミッションによりますが、Admin はパーミッションの設定、ユーザーのアクセス禁止、グループの作成、モデレータの任命などを実行できます。管理人によってはさらに Admin にグローバルモデレータの全パーミッションを与えている場合もあるでしょう。'
	),
	array(
		0 => 'モデレータとは？',
		1 => 'モデレータとは、フォーラムの世話を日々行うグループあるいはそのグループのメンバーのことです。モデレータはフォーラム内の記事を編集、削除、凍結、トピックを閉鎖、開放、移動、分割できます。基本的にモデレータの存在意義は、フォーラムの趣旨を外れた投稿や規約に反する投稿をしたユーザーに対して警告したりその記事を削除したり凍結したりすることによってそのフォーラムの秩序を保つことにあります。'
	),
	array(
		0 => 'グループとは？',
		1 => 'グループとはユーザーのグループのことです。管理人はこのグループを管理することでユーザーのパーミッションをコントロールしています。管理人は各グループに別々のパーミッションを割り当てることが可能です。これによって管理人は、モデレータ専用グループを作成することでモデレータの管理が容易になったり、フォーラム専用グループを作成することで特定のユーザーしか入れないフォーラムを提供することが可能になったりします。'
	),
	array(
		0 => 'グループはどこにあってどうやって参加できるの？',
		1 => 'もしユーザー登録がお済みであれば ユーザーCP 内のタブ “メンバーリスト” で全てのグループを確認できます。もしグループに参加したい場合はグループを選択してボタンをクリックしてください。全てのグループが誰でも参加できる開放グループであるとは限らず、参加にグループリーダーの承認が必要な申請グループ、参加自体を受け付けてない閉鎖グループ、グループ自体が非公開な非公開グループがあります。開放グループの場合は適切にボタンをクリックすればグループに参加できます。申請グループの場合も適切にボタンをクリックすればグループに参加を申請できます。場合によってはグループに参加する理由をグループリーダーから訊かれることがあります。もし何らかの理由で参加の申請を却下されてもグループリーダーを問い詰めるようなことはしないでください。'
	),
	array(
		0 => 'グループリーダーになるには？',
		1 => 'グループリーダーは大抵、管理人がグループを作成する際にグループメンバーの誰かから任命されることがほとんどです。当掲示板に新しいグループが必要と感じている場合、最初にすべきことは管理人にその事をプライベートメッセージで問い合わせてみることです。',
	),
	array(
		0 => 'なぜグループによって色が違うの？',
		1 => 'グループ毎に違う色を割り当てる事によってユーザーがどのグループのメンバーかを判別しやすいようにしているためです。'
	),
	array(
		0 => ' “デフォルトグループ” とは？',
		1 => 'あるユーザーが複数のグループのメンバーである場合、デフォルトグループのグループカラーとグループランクがそのユーザーに適用されます。管理人はあなたにデフォルトグループ変更のパーミッションを与えているかもしれません。その場合は ユーザーCP でデフォルトグループを変更してください。'
	),
	array(
		0 => ' “管理・運営チーム” とは？',
		1 => '当フォーラムサイトを管理・運営しているユーザー達のことです。Admin （管理人） とモデレータが含まれます。'
	),
	array(
		0 => '--',
		1 => 'PM （プライベートメッセージ）'
	),
	array(
		0 => 'プライベートメッセージを送信できません！',
		1 => '３つの理由が考えられます。１つ目はあなたが登録ユーザーでないため、２つ目は管理人がこの掲示板の PM 機能を停止しているため、３つ目は管理人があなたの PM の使用を禁止しているためです。詳細は管理人にお問い合わせください。'
	),
	array(
		0 => '読みたくない PM が定期的に送られてきます！',
		1 => 'ユーザーCP 内のタブ “プライベートメッセージ” 内の “ルール &amp; フォルダ” で、特定のユーザーから送られてきた PM だけをブロックするルールを設定できます。もし特定のユーザーから誹謗中傷を含む PM が送られている場合は管理人に知らせてください。管理人はユーザーの PM の使用を禁止できます。'
	),
	array(
		0 => 'この掲示板のユーザーからスパム等のメールが自分に送信されています！',
		1 => '誠に残念です。掲示板にはセーフガード機能があり、誰が掲示板を介してそのようなメールを送ったかを探知できます。今まで受信したスパム等のメールの全内容 （ヘッダ情報含む） をコピーして管理人にメールで送信してください。これにより管理人はこの問題に対処できます。'
	),
	array(
		0 => '--',
		1 => 'フレンドユーザーとブロックユーザー'
	),
	array(
		0 => 'フレンドリスト、ブロックリストとは？',
		1 => 'フレンドリストにユーザーを追加すると ユーザーCP でそのユーザーのオンライン状態をすぐに確認でき、すぐにプライベートメッセージを送ることができます。さらにフレンドユーザーから送られきたプライベートメッセージは色付き表示されます。ブロックユーザーから送られてきたプライベートメッセージも別の色で表示されます。'
	),
	array(
		0 => 'ユーザーをフレンドリストまたはブロックリストに追加・削除するには？',
		1 => 'ユーザーをリストに追加するには２つの方法があります。１つは追加したいユーザーのプロフィールページを開き、“フレンドリストに追加する” リンクまたは “ブロックリストに追加する” リンクをクリックします。もう１つは ユーザーCP で直接ユーザー名を入力して追加します。削除の方法も追加と同じです。'
	),
	array(
		0 => '--',
		1 => 'フォーラムの検索'
	),
	array(
		0 => '検索するには？',
		1 => 'トップページ、フォーラム閲覧ページ、トピック表示ページ内の検索ボックスに検索したいキーワードを入力してボタンをクリックしてください。より詳細な検索は “詳細検索” リンクをクリックすれば検索ページにアクセスできます。スタイルによっては検索ボックスと詳細検索リンクの位置が通常と異なるかもしれません。'
	),
	array(
		0 => '検索しても無効なのはどうして？',
		1 => '入力したキーワードがあまりにもたくさんの記事に使われ過ぎているからかも知れません。 phpBB3 ではあまりにも頻繁に使われ過ぎていて記事を特定できないようなキーワードをインデクスすることはありません。記事を特定できそうなキーワードで検索するか、詳細検索を活用してください。'
	),
	array(
		0 => '検索するとページが真っ白になるのはどうして？',
		1 => '検索結果が多すぎてサーバに負担をかけ過ぎています。詳細検索ページで キーワード検索 と フォーラムの絞り込み を行ってください。'
	),
	array(
		0 => 'ユーザーを検索するには？',
		1 => ' “メンバーリスト” ページを開き、 “ユーザー検索” リンクをクリックしてください。'
	),
	array(
		0 => '自分が投稿した記事を確認するには？',
		1 => 'ユーザーCP のフロントページで “投稿記事を表示する” をクリックするか、あるいはあなた自身のプロフィールページを開いて “ユーザーの記事を全て検索” をクリックしてください。自分が投稿したトピックを確認するには詳細検索ページで適切に入力・選択してください。'
	),
	array(
		0 => '--',
		1 => 'トピックのウォッチとブックマーク'
	),
	array(
		0 => 'ブックマークとウォッチの違いは？',
		1 => ' phpBB3 のブックマークはブラウザのブックマーク （お気に入り） とほとんど似たようなものです。つまりトピックが更新されてもあなたに通知されることはありませんが、あなたは後でそのトピックに戻ることができます。トピックのウォッチはそれとは違い、トピックが更新されるとあなたに通知が送られます。通知をプライベートメッセージで受け取るかメールで受け取るかは好みで選べます。フォーラムのウォッチについても同様です。'
	),
	array(
		0 => 'フォーラムまたはトピックをウォッチするには？',
		1 => 'フォーラムをウォッチするにはそのフォーラムへ入室し “このフォーラムをウォッチする” リンクをクリックしてください。トピックをウォッチするにはそのトピックに返信する時に該当のチェックボックスをチェックして投稿するか、トピック表示ページ内の “このトピックをウォッチする” リンクをクリックしてください。'
	),
	array(
		0 => 'フォーラムまたはトピックのウォッチを解除するには？',
		1 => 'ユーザーCP 内の “ウォッチの管理” へ行き、説明と指示に従ってください。'
	),
	array(
		0 => '--',
		1 => 'ファイルの添付'
	),
	array(
		0 => 'この掲示板にアップロードできるファイルの種類は？',
		1 => '掲示板にアップロードできるファイルの種類は管理人が許可しているものに限ります。どのフォーマットが許可されているか判らない場合は管理人にお問い合わせください。'
	),
	array(
		0 => '自分がアップロードしたファイルを確認するには？',
		1 => '登録ユーザーであればアップロードした添付ファイルのリストをユーザーCP 内の “添付ファイルの管理” で確認できます。'
	),
	array(
		0 => '--',
		1 => ' phpBB3 について'
	),
	array(
		0 => 'この掲示板ソフトウェアを作成したのは誰ですか？',
		1 => 'このソフトウェアの作成を行ったのは <a href="http://www.phpbb.com/">phpBB Group</a> であり著作権は phpBB Group が所有しています。phpBB は GNU General Public License （GNU が提唱するライセンス形態、GPL） に定められている条件に従って使用や配布が許諾されています。詳細については phpBB Group のサイトをご参照ください。'
	),
	array(
		0 => '必要な機能がありません',
		1 => 'このソフトウェアの作成を行ったのは phpBB Group であり著作権は phpBB Group が所有しています。その機能が必要だと思う場合は phpbb.com サイトにて phpBB Group に提案してみてください。新機能の提案・要望は決して phpbb.com の掲示板には書き込まないでください。新機能等の追加の作業は SourceForge で行われています。フォーラムをよく読み、既に提案しようとしている新機能の追加が決まっているかを確認してから新機能の提案・要望の手順を行ってください。'
	),
	array(
		0 => 'この掲示板に関連した不正・法的問題については誰に問い合わせればいいのでしょうか？',
		1 => ' “管理・運営チーム” の各 Adminユーザー が正しい連絡先であるはずです。もし誰も返答してくれない場合、あるいはもしこのサイトが無料サイト （例: Yahoo!, free.fr, f2s.com など） で運営されている場合、ドメイン所持者 （<a href="http://www.google.com/search?q=whois">whois lookup</a> 検索で調べてください） に連絡すべきです。phpBB Group には、誰が何処でどのようにこの掲示板を使用するかについて干渉する<strong>権限は全くない</strong>ということにご注意ください。phpBB Group に phpbb.com や phpBBソフトウェア と<strong>直接関わりのない</strong>法的問題 （裁判所からの停止命令、損害賠償、名誉棄損など） に関することを問い合わせないでください。<strong>第三者</strong>による phpBB の使用に関して phpBB Group にメールで問い合わせても回答は簡単なものか全くされないものとお考えください。'
	)
);

?>