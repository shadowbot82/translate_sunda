<?php
/**
* @author Ardan [https://web.facebook.com/z0nk3x]
* Instgram [https://www.instagram.com/ar_dhann/]
* @link https://github.com/ardzz
* @link https://www.bac0ders.me
*/
/*************************************************/
@error_reporting(0);
@ini_set('display_errors', 0);
@error_reporting(0);
@set_time_limit(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
function lapor_bug($nama, $email, $pesan){
    $data = "from_mail=$email&from_name=$nama&msg=$pesan";
    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://z0nk3x.me/smtp/sunda");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Cookie: _gat=1; PHPSESSID=f314jsomv69b3p9i6lg6rfo202; _ga=GA1.2.359346977.1525957494; _gid=GA1.2.1300337294.1526214681',
            'Content-Type: application/x-www-form-urlencoded',
            'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36'
  ));
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        $server_output = json_decode($server_output, TRUE);
        if ($server_output['status'] == "success") {
            echo "Berhasil mengirim pesan!, Terimakasih! :)\n";
        }
        else {
            echo "Gagal mengirim pesan :(\n";
        }
}
    function update($version){
    $nf = basename(__FILE__);
    $update = file_get_contents("https://z0nk3x.me/sunda/".$version);
    $update = json_decode($update, TRUE);
    if ($update['update'] == "yes") {
        $new_version = $update['version'];
        echo "Update tersedia! ingin meng-updatenya? (y/n) : ";
        $up = trim(fgets(STDIN, 1024));
        if ($up == "y") {
            echo "Sedang mengunduh...\n";
            shell_exec('wget -O '.$nf.' https://raw.githubusercontent.com/ardzz/translator_sunda/master/sunda.php 2>&1');
            echo "Success! Please Restart This Tool For Applying New Feature!\n";
            sleep(2);
            }
            else {
                echo "Membatalkan Update....";
                sleep(5);
                exit();
                exec('clear');
            }
    }
        elseif ($update['version'] == "null") {
            $v = $update['v'];
        echo "Tidak ada update sekarang kamu telah menggunakan versi terbaru ($v)\n";
    }
        else {
        echo "Tidak ada update\n";
    }
}
function banner(){
    system('clear');
    echo "
 ____                           ____
 \ \ \                         / / /
  \ \ \                       / / / 
   > > > [ Translator Sunda ] < < <  
  / / /                       \ \ \ 
 /_/_/                         \_\_\
+-----------[ Z0NK3X ]---------------+             
    \n";
}
banner();
echo "1) Bahasa Indonesia Ke Sunda\n";
echo "2) Bahasa Indonesia Ke Sunda Kasar\n";
echo "3) Bahasa Indonesia Ke Sunda Halus\n";
echo "4) Sunda Ke Bahasa Indonesia\n";
echo "5) Laporkan BUG / ASK to Us\n";
echo "6) Cek Update\n";
echo "7) About Us :)\n";
echo "8) Keluar :(\n";
echo "Pilih salah satu opsi : ";
$id = trim(fgets(STDIN, 1024));
if ($id == "1") {
    echo "Kata/Kalimat Bahasa Indonesia       : ";
$indo = trim(fgets(STDIN, 1024));
$data = "text=".$indo."&md=is";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://kamus-sunda.com/software-microsoft-untuk-pendidikan.html");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Cookie: _gat=1; PHPSESSID=f314jsomv69b3p9i6lg6rfo202; _ga=GA1.2.359346977.1525957494; _gid=GA1.2.1300337294.1526214681',
            'Content-Type: application/x-www-form-urlencoded',
            'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36'
  ));
        $server_output = curl_exec ($ch);
        curl_close ($ch);
$source = $server_output;
preg_match('"</b> : (.*?)</div>"', $source, $match);
if($match) {
    echo "Hasil terjemahan dari $indo adalah \n$indo    : ".$match[1]."\n";
}
else {
    echo "Gagal menerjemahkan ($indo)\n";
    exit();
}
}
if ($id == "4") {
    echo "Kata/Kalimat Bahasa Sunda       : ";
$indo = trim(fgets(STDIN, 1024));
$data = "text=".$indo."&md=sih";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://kamus-sunda.com/webhosting-murah-dan-penerjemah-online.html");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Cookie: _gat=1; PHPSESSID=f314jsomv69b3p9i6lg6rfo202; _ga=GA1.2.359346977.1525957494; _gid=GA1.2.1300337294.1526214681',
            'Content-Type: application/x-www-form-urlencoded',
            'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36'
  ));
        $server_output = curl_exec ($ch);
        curl_close ($ch);
$source = $server_output;
preg_match('"</b> : (.*?)</div>"', $source, $match);
if($match) {
    echo "Hasil terjemahan dari $indo adalah \n$indo    : ".$match[1]."\n";
}
else {
    echo "Gagal menerjemahkan ($indo)\n";
    exit();
}
}
if ($id == "2") {
    echo "Kata/Kalimat Bahasa Indonesia       : ";
$indo = trim(fgets(STDIN, 1024));
$data = "text=".$indo."&md=isk";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://kamus-sunda.com/sekolah-ikatan-dinas-langsung-kerja.html");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Cookie: _gat=1; PHPSESSID=f314jsomv69b3p9i6lg6rfo202; _ga=GA1.2.359346977.1525957494; _gid=GA1.2.1300337294.1526214681',
            'Content-Type: application/x-www-form-urlencoded',
            'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36'
  ));
        $server_output = curl_exec ($ch);
        curl_close ($ch);
$source = $server_output;
preg_match('"</b> : (.*?)</div>"', $source, $match);
if($match) {
    echo "Hasil terjemahan dari $indo adalah \n$indo    : ".$match[1]."\n";
}
else {
    echo "Gagal menerjemahkan ($indo)\n";
    exit();
}
}
if ($id == "3") {
    echo "Kata/Kalimat Bahasa Indonesia       : ";
$indo = trim(fgets(STDIN, 1024));
$data = "text=".$indo."&md=ish";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://kamus-sunda.com/software-microsoft-untuk-pendidikan.html");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Cookie: _gat=1; PHPSESSID=f314jsomv69b3p9i6lg6rfo202; _ga=GA1.2.359346977.1525957494; _gid=GA1.2.1300337294.1526214681',
            'Content-Type: application/x-www-form-urlencoded',
            'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36'
  ));
        $server_output = curl_exec ($ch);
        curl_close ($ch);
$source = $server_output;
preg_match('"</b> : (.*?)</div>"', $source, $match);
if($match) {
    echo "Hasil terjemahan dari $indo adalah \n$indo    : ".$match[1]."\n";
}
else {
    echo "Gagal menerjemahkan ($indo)\n";
    exit();
}
}
if ($id == "8") {
    system(clear);
    echo "Kamu akan segera keluar :(. Terimakasih Telah Menggunakan Tool Ini :)\n";
    sleep(5);
    exit();
}
if ($id == "7") {
    system("clear");
    sleep(1);
    echo "         ABOUT ME (Ardzz)";
    sleep(2);
    echo "
       ________  _   _ _  _________  __
      |__  / _ \| \ | | |/ /___ /\ \/ /
        / / | | |  \| | ' /  |_ \ \  / 
       / /| |_| | |\  | . \ ___) |/  \ 
      /____\___/|_| \_|_|\_\____//_/\_\
      
               [#] Z0NK3X [#]
               [#]BCO-TEAM[#]
                 :: 2K18 ::
                BAC0DERS.ME
  +--------------------------------------+\n";
        exit();
}
if ($id == "5") {
    echo "Nama : ";
    $nama = trim(fgets(STDIN, 1024));
    echo "Email : ";
    $email = trim(fgets(STDIN, 1024));
    echo "*) Untuk pesan kamu bisa menggunakan HTML\n*) No Badword/Toxic\n";
    echo "Pesan : ";
    $pesan = trim(fgets(STDIN, 1024));
    echo "Sedang mengirim pesan.....\n";
    lapor_bug($nama, $email, $pesan);
}
if ($id == "6") {
    $v = "1.0";
    echo "Sedang mengecek update...\n";
    update($v);
}
?>
