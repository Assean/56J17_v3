<?php session_start();
$games=[];
// 定義(建立)一個空陣列
$handle=opendir('games');
// 呼叫 opendir()打開 games 資料夾，回傳一個目錄項目並存到 $handle
// 若目錄找不到該檔案，回傳 false
if($handle){
    while(false!==($entry=readdir($handle))){
        // 使用 readdir() 逐一讀取資料夾中的項目名稱
        // 直到 readdir() 回傳 false 表示結束
        // 把每次的結果存到  $entry
        if($entry !="." && $entry !=".."){
            // 如果不等於 . 、 ..（目前資料夾與上層資料夾）
            echo "<script>console.log($entry)</script>";
            // 將目前的  $entry 透過 echo console 顯示名稱
            $json_path = "games/".$entry."/game.json";
            // game.json 的相路徑，存到  $json_path
            if(file_exists($json_path)){
                // 檢查該 game.json 檔案是否存在，若存在才進行讀取
                $data=json_decode(file_get_contents($json_path),true);
                // file_get_contents() 讀取 game.json 的內容
                // 然後以 json_decode(..., true) 轉成 PHP 關聯陣列，結果存在$data
                $data['path']="games/".$entry."/index.html";
                // 每個遊戲資料新增一個 path 欄位
                // 導向該遊戲的 index.html，方便前端用來開啟遊戲
                $games[]=$data;
                // $data 推到  $games 陣列
                // 累積所有遊戲的資料
            }
        }
    }
    closedir($handle);
}   // 關閉先前打開的目錄資源

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunTech 社群網站 | 遊戲平台</title>
    <link rel="stylesheet" href="by/css/bootstrap.css">
    <link rel="stylesheet" href="by/css/style.css">
    <script src="by/js/jquery-3.7.1.min.js"></script>
    <script>
        let activeGame;
        // 宣告全域變數 activeGame
        function receiveGameResult(data) {
            //定義函式 receiveGameResult，接收一個 data 物件
            // 由遊戲視窗回傳，含遊戲結果資訊
            //進行結果顯示與儲存流程
                // Jquery語法
                $("#gameTitle").text(data.game);
                // 用 jQuery語法 選取 id 為 gameTitle 的元素
                //  .text() 設定其內文為 data.game（遊戲名稱）
                $("#gameStatus").text(data.data.result);
                // 選取 id 為 gameStatus 的元素
                // 設定其內文為 data.data.result
                $("#gameTime").text(data.data.time);
                // 選取 id 為 gameTime 的元素
                // 設定其內文為 data.data.time（遊戲耗時）
                $("#resultBlock").removeClass("d-none");
                // 從 id 為 resultBlock 的元素移除 class d-none
                // （Bootstrap 隱藏class）
                // 使結果區塊顯示
                $("#resultBlock").addClass("d-block");
                // 為該元素加上 class d-block
                // （Bootstrap 顯示class）
                // 確保區塊以 display: block 方式顯示
                $("#result_modal").modal("show");
                // 呼叫 Bootstrap Modal 的 .modal("show") 方法
                // 彈出結果輸入 modal 對話框
                $("#submit_name").one("click", () => {
                    // 為 id 為 submit_name 的按鈕綁定 one 事件（只觸發一次）
                    // 當使用者點擊「確認」按鈕時執行箭頭函式
                console.log($("#name").val())
                data['user'] = $("#name").val();
                // 把使用者從文字輸入框 #name 輸入的姓名值寫入 data 物件的 user 欄位
                $.post('api/save_result.php', data, (res) => {
                    // 用 jQuery 的 $.post() 方法
                    // 以 POST 請求將 data 物件傳送到後端 save_result.php 進行儲存
                    // 並用箭頭函式處理伺服器回應
                    alert("遊戲結果已儲存");
                    $("#name").val("");
                    // 清空 #name 輸入框
                    $("#result_modal").modal("hide");
                    // 隱藏結果 modal，關閉對話框
                })

            })
       }
        function openGame(url, title) {
            // 定義函式 openGame
            // 接收遊戲網址 url 與遊戲標題 title
            // 用於開啟遊戲視窗
            activeGame = title
            // 將傳入的 title 儲存到全域變數 activeGame
            // 記錄目前開啟的遊戲
            window.open(url, 'GameWindow', 'width=800,height=600')
            // 開啟新視窗，指定網址為 url、
            // 視窗名稱為 'GameWindow'
            // 寬度 800px 高度 600px
        }

    </script>
</head>

<body>
    <?php include_once "header.php";?>

    <div id="main-content" class='container' style='min-height:700px'>
        <h1 class="text-center my-4">遊戲平台</h1>
        <div id="resultBlock" class="d-none border rounded bg-success text-white p-3">
            <div class="my-2">遊戲名稱:<span id="gameTitle"></span></div>
            <div class="my-2">遊戲狀態:<span id="gameStatus"></span></div>
            <div class="my-2">遊戲時間:<span id="gameTime"></span></div>
        </div>

        <div class="row flex-wrap">
            <?php 
        foreach($games as $game):
        ?>
            <div class="w-50 p-3">
                <div class="border rounded p-2" style="height:150px">
                    <div>遊戲名稱:
                        <?=$game['title'];?>
                    </div>
                    <div>遊戲說明:
                        <?= mb_strlen($game['description']) > 50 ? mb_substr($game['description'], 0, 50) . '...' : $game['description']; ?>
                    </div>
                    <button class="btn btn-primary"
                        onclick="openGame('<?=$game['path'];?>','<?=$game['title'];?>')">開始遊戲</button>
                </div>
                    <!-- 使用者點擊該按鈕時 -->
                     <!-- 叫先前定義的 JavaScript 函式 openGame()，傳入遊戲網址與標題 -->
                      <!-- 第一個參數：PHP 短標籤 < ?= ...?> 輸出 $game['path'] 的值 -->
                       <!-- 第二個參數：PHP 短標籤輸出 $game['title'] 的值 -->
            </div>
            <?php
        endforeach;
        ?>
        </div>
        <div class="modal fade" tabindex="-1" id="result_modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">輸入姓名</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" id="submit_name" class="btn btn-primary">確認</button>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div id="footer" class='text-center bg-primary text-white' style="height:45px;line-height:45px">Copyright © 2026
        FunTech. All rights reserved.</div>

    <script src="by/js/bootstrap.js"></script>
</body>

</html>