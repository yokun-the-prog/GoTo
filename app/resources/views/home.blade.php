<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->

<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>そうだ、南知多に行こう。</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="./../css/home.css" rel="stylesheet">

    </head>

    <header>
        <div class="header-body wrapper">
            <nav class="left-nav">
                <ul>
                    <li>サービスコンテンツ</li>
                    <li>サービスの使い方</li>
                    <li><a href="{{ url('/start') }}" class="">サービスを使う</a></li>
                </ul>
            </nav>
            <div class="center-title">
                <h1>そうだ、南知多行こう。</h1>
                <p>南知多町の旅をサポートします。</p>
            </div>
            <nav class="right-nav">
                <ul>
                    <li><a href="{{ url('/register') }}" class="">会員登録</a></li>
                    <li><a href="{{ url('/login') }}" class="">ログイン</a></li>
                    <li><a href="{{ url('/contact') }}" class="">お問い合わせ</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <main>
        <div class="main-photo">
            <div class="photo-back wrapper">
                <img src="./../images/back.webp" alt="">
            </div>
        </div>
        <div class="contents-back">

            <div class="heading">
                <h2>Contents</h2>
                <p>サービス内容</p>
            </div>


            <div class="contents-grid wrapper">
                <div class="item">
                    <h3>南知多町見どころ紹介</h3>
                    <p>南知多町を代表する名所を</p>
                    <p>写真付きで紹介。</p>
                    <img src="./../images/miena.png" alt="">
                </div>
                <div class="item">
                    <h3>旅の計画</h3>
                    <p>旅の開始/終了予定時刻等、</p>
                    <p>設定した条件から旅程を自動で作成します。</p>
                    <img src="./../images/miena.png" alt="">
                </div>
                <div class="item">
                    <h3>フォトラリー機能</h3>
                    <p>フォトラリー機能を備えており、ゲーム感覚で</p>
                    <p>南知多町を観光することができます。</p>
                    <img src="./../images/miena.png" alt="">
                </div>
                <div class="item">
                    <h3>旅の思い出</h3>
                    <p>旅程を写真付きで保存、PDFへの出力が可能。</p>
                    <p>SNSへ、"旅の思い出"として共有することができます。</p>
                    <img src="./../images/miena.png" alt="">
                </div>
                <div class="item">
                    <h3>口コミサイト機能</h3>
                    <p>口コミ機能を備えており、あなたの旅の思い出を</p>
                    <p>他ユーザーにお知らせすることができます。</p>
                    <img src="./../images/miena.png" alt="">
                </div>
                <div class="item">
                    <h3>ダウンロード機能</h3>
                    <p>作成した旅程はPDFとしてダウンロード</p>
                    <p>が可能。絵日記としても思い出に残せます。</p>
                    <img src="./../images/miena.png" alt="">
                </div>
            </div>

        </div>

        <div class="how-to-use-back">
            <div class="heading">
                <h2>How to USE</h2>
                <p>サービスの使い方一例</p>
            </div>
            <div class="how-to-use-grid wrapper">
                <div class="use-step">
                    <h3>Step1</h3>
                    <p>ああ</p>
                    <img src="./../mages/miena.png" alt="">
                </div>
                <div class="use-step">
                    <h3>Step2</h3>
                    <p>ああ</p>
                    <p>ああ</p>
                    <img src="./../images/miena.png" alt="">
                </div>
                <div class="use-step">
                    <h3>Step3</h3>
                    <p>ああ</p>
                    <p>ああ</p>
                    <img src="./../images/miena.png" alt="">
                </div>

            </div>
        </div>
        <div class=button-back>
            <a class="button" href="{{ url('/using') }}">サービスを使う</a>

        </div>

    </main>

    <footer>
        <div class="upper-footer">
            <div class="wrapper">
                <div>
                    <div>snow</div>
                    <div>mail</div>
                </div>
                <div class="footer-nav-box">
                    <nav class="footer-nav">
                        <ul>
                            <li>お問い合わせ</li>
                            <li>作成者</li>
                            <li>利用規約</li>
                            <li>プライバシーポリシー</li>
                            <li>サイトマップ</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="bottom-footer">
            <div class="wrapper">copyright</div>
        </div>

    </footer>

</body>

</html>



