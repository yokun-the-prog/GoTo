<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->

<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>メニューページ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="./../css/home.css" rel="stylesheet">



    </head>

    <header>
        <div class="header-body wrapper">
            <nav class="left-nav">
                <ul>
                <li><a href="{{ url('/home') }}" class="">トップページに戻る</a></li>
                </ul>
            </nav>
            <div class="center-title">
                <h1>そうだ、南知多いこう。</h1>
                <p>南知多町の旅をサポートします。</p>
            </div>
            <nav class="right-nav">
                <ul>
                    <li><a href="{{ url('/home') }}" class="">ログアウト</a></li>
                    <li><a href="{{ url('/contact') }}" class="">お問い合わせ</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <main>
        <div class="main-photo">
            <h1>メニューページ</h1>
            <p>下記メニューから選択してください。</p>
        </div>

        <div>


            <!-- メニューバー -->
            <div class="menu">
                <nav>見どころ紹介</nav>
                <nav>旅の計画</nav>
                <nav>旅の履歴</nav>
                <nav>口コミ</nav>

            </div>

            <!-- コンテンツ -->
            <div>
                <!-- ポストで読み込む -->
                123456

            </div>


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



