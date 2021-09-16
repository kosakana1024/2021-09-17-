<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題に使うアンケート（入力画面）</title>
</head>

<body>
    <form action="kadai_create.php" method="POST">
        <fieldset>
        <legend>課題に使う時間アンケート</legend>
        <a href="kadai_read.php">一覧画面</a>
        <div>
        お名前  : <input type="text" name="name">
        </div>

        <div>
            年齢   : <input type="text" name="age">
        </div>

        <div>
            性別   :
            男 <input type="radio" name="sex" value="男">
            男 <input type="radio" name="sex" value="男">
        </div>

        <div>
            Mobile : <input type="text" name="number" placeholder="09093176176">
        </div>

        <div>
            Email  : <input type="text" name="address"placeholder="kosakana@gmail.com">
        </div>

        <div>
            一週間で課題にかける時間：
            <input type="radio" name="week" value="1 二〜五時間">1. 2~5時間
            <input type="radio" name="week" value="2 六〜十時間">2. 6~10時間
            <input type="radio" name="week" value="3 十一〜十五時間">3. 11~15時間 
            <input type="radio" name="week" value="4 十六〜二十時間">4. 16~20時間
            <input type="radio" name="week" value="5 それ以上">5. それ以上
        </div>

        <div>
            一日で課題にかける時間：
            <input type="radio" name="day" value="1 一〜二時間">1. 1~2時間
            <input type="radio" name="day" value="1 三〜四時間">2. 3~4時間
            <input type="radio" name="day" value="1 五〜六時間">3. 5~6時間
            <input type="radio" name="day" value="1 それ以上">4. それ以上
        </div>

        <div>
            <button>submit</button>
        </div>
        
        <div>
        <input type="reset" value="cancel" />
        </div>
        </fieldset>
    </form>
</body>

</html>