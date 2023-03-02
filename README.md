# Laravel 10 透過 Eloquent 模型自動加密和解密資料庫資料

引入 elgibor-solution 的 laravel-database-encryption 套件來擴增透過 Eloquent 模型自動加密和解密資料庫資料，更同時包含可搜尋加密資料。由於資料外洩與駭客攻擊事件層出不窮，政府與企業均積極評估如何運用資料加密技術針對機敏或價值資料提供完善的保護，並符合遵循法規及管理需求。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 執行 __Artisan__ 指令的 __encryptable:encryptModel__ 來執行對既有資料欄位進行加密。
```sh
$ php artisan encryptable:encryptModel App\Models\User
```
- 執行 __Artisan__ 指令的 __encryptable:decryptModel__ 來執行對既有資料欄位進行解密。
```sh
$ php artisan encryptable:decryptModel App\Models\User
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/users/create/` 來進行使用者新增並查詢。

----

## 畫面截圖
![](https://i.imgur.com/iZl0dZB.png)
> 查詢資料時會自動解密

![](https://i.imgur.com/jP0mYXl.png)
> 針對自定義敏感資訊欄位加密處理