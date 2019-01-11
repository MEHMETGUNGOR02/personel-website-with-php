<?php 
 
include("ayar.php");
ob_start();
session_start();
//KAYIT SİLME
$post_id = $_POST['post_id'];

$sql = "delete from postlar where post_id = '$post_id'";
$kayit = mysql_query($sql);

if (isset ($kayit)){
echo "Kayıt Silindi!";
header("Refresh: 2; url=admin-kayit-sil.php");
}
else {
echo "Kayıt Başarısız mehmetgungor02@outlook.com adresinden iletişime geçin";
}
 
ob_end_flush();
?>