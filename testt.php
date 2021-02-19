<?php
echo "hello world";
$link = mysqli_connect("172.18.0.2","root
","123");
if (!$link){
echo "tidak bisa konek ke MySQL" . PHP_EOL;
exit;
}
echo "Sukses: Koneksi telah terbuat!" . PHP_EOL;
echo "Host Information: " . mysqli_get_host_info($link) . PHP_EOL;


mysqli_close($link);
?>