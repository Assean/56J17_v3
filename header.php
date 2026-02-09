<!-- #header>#user-nav>#login-link+#register-link+#profile-link+#logout-link -->
<div id="header" class='position-sticky' style="height:120px;background:url('img/banner.jpg');">

    <div id="user-nav" class='navbar float-right' style='width:30%'>
        <?php
        if(!isset($_SESSION['user'])):
        ?>
        <!-- 未登入顯示 -->
        <div id="login-link" class='nav-item'>
            <a type="button" class="btn btn-dark" class='nav-link' href="login.php">登入</a> 
        </div>
        <div id="register-link" class='nav-item'>
            <a type="button" class="btn btn-dark" class='nav-link' href="register.php">註冊</a>
        </div>
        <?php
        else:
        ?>        
        <!-- 已登入顯示 -->
        <div id="profile-link" class='nav-item'>
            <a class='nav-link' href="profile.php">個人檔案</a>
        </div>
        <div id="logout-link" class='nav-item'>
            <a class='nav-link' href="api/logout.php">登出</a>
        </div>
        <?php
        endif;
        ?>        
    </div>
</div>
<!-- #link-nav>#home+#aboutus+#games+#email+#sitemap -->
 <div style='background:#fcc'>
 <div id="link-nav" class='navbar container'>
    <div class='nav-item' id="home">
        <a class='nav-link' href="index.php">首頁</a>
    </div>
    <div class='nav-item' id="aboutus">
        <a class='nav-link' href="aboutus.php">關於我們</a>
    </div>
    <div class='nav-item' id="games">
        <a class='nav-link' href="games.php">遊戲平台</a>
    </div>
    <div class='nav-item' id="email">
        <a class='nav-link' href="email.php">聯絡我們</a>
    </div>
    <div class='nav-item' id="sitemap">
        <a class='nav-link' href="sitemap.php">網站地圖</a>
    </div>
 </div>
</div>