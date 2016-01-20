# gcm-server
Back End Google Cloud Message Menggunakan PHP

## Step
1. Diharapkan sudah terinstall `curl` apabila belum maka install terlebih dahulu, ubuntu bisa menggunakan `sudo apt-get install curl`
2. Pastikan dulu API SERVER Google Cloud Message sudah terdaftar yang nantinya diisikan didalam file config.cfg
    `define("GOOGLE_API_KEY", "REPLACE API SERVER IN HERE");`
  Apabila belum terdaftar bisa menuju ke halaman [ini](https://developers.google.com/mobile/add?platform=android&cntapi=gcm&cntapp=Default%20Demo%20App&cntpkg=gcm.play.android.samples.com.gcmquickstart&cnturl=https:%2F%2Fdevelopers.google.com%2Fcloud-messaging%2Fandroid%2Fstart%3Fconfigured%3Dtrue&cntlbl=Continue%20with%20Try%20Cloud%20Messaging "Android GCM Register")

2. File `register_user.php` digunakan untuk menangani register user dengan menerima generate registerID dari API GCM yang kemudian dimasukan kedalam database, nantinya digunakan untuk pengiriman pesan broadcast dari server menuju Android Device

3. apabila semua sudah siap, maka cara pengiriman pesan broadcast bisa melalui file index atau 
  `localhost/gcm-server`

## Android Client
untuk client android bisa dilihat pada [source kode berikut](https://github.com/pwcahyo/gcm "gcm client")

