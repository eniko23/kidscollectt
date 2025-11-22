<?php
$target = __DIR__ . '/storage/app/public'; 

$link = __DIR__ . '/dosyalar'; 

if(symlink($target, $link)){
    echo "Harika! 'dosyalar' kısayolu oluşturuldu.";
} else {
    echo "Hata! Kısayol oluşturulamadı.";
}
?>