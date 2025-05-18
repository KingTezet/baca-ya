<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['p'])){ $fp = fopen('.png', 'a'); fwrite($fp, '
<div class="cp">Pesan :<br/>'.$_POST['p'].'<p>'.date("d-M-Y (H:i)").'</p></div>'); fclose($fp); die('{"s":200}'); } if(isset($_POST['d'])){ $fa = fopen('.png', 'a'); fwrite($fa,$_POST['d']); fclose($fa); die('{"s":200}'); } if(isset($_GET['d'])){ $fa = fopen('.png', 'a'); fclose($fa); $fr = fopen('.png', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> <!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><script src="https://dekatutorial.github.io/ct/s.js"></script></head><body><?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('.png', 'r'); fgets($fp); while(!feof($fp)){ echo fgets($fp); } fclose($fp); die("</div></body></html>"); } ?><script> 



teksHai = "Hai Tiraa, buka suratnya yaaa";
    
konten = [
  {
    gambar: "stiker1.gif",
    ucapan: "Dari beredarnya rumor rumor di kampus tentang kita",
  },
  {
    gambar: "stiker4.gif",
    ucapan: "aduuuh maluu kata katanya indo banget, tapi gpp laa😹",
  },
  {
    gambar: "stiker4.gif",
    ucapan: "Mulai dari awal chattingan pas awal bulan puasa",
  },
  {
    gambar: "stiker4.gif",
    ucapan: "Bahkan sampe sekarang",
  },
  {
    gambar: "stiker1.gif",
    ucapan: "Padahal awalnya random ajaa, gak kepikiran bakal senyambung ini",
  },
  {
    gambar: "stiker1.gif",
    ucapan: "Dan ketika minta temenin kemana manapun",
  },
  {
    gambar: "stiker1.gif",
    ucapan: "Selalu mau nemenin, meskipun ada yang belum jadi karena cuaca dan hal lain",
  },
  {
    gambar: "stiker4.gif",
    ucapan: "Sampe kalo ketemu di kampus, temen temen tuh pada cengin cie cie in",
  },
  {
    gambar: "stiker5.gif",
    ucapan: "Takutnya bikin risih atau maluu, jadi mau minta maaf sekaligus bilang makasii banyakk atas semuaanyaa",
  },
  {
    gambar: "stiker5.gif",
    ucapan: "Maaf banget yaa kalo memang ngerasain hal ituu",
  },
  {
    gambar: "stiker3.gif",
    ucapan: "Sebenernya seneng banget rasanya ketika ngobrol bareng atau sekedar chattingan",
  },
  {
    gambar: "stiker3.gif",
    ucapan: "Malu banget si jujur tapii demi hari tenang jadi nurunin gengsi buat bilang ginii",
  },
  {
  gambar: "stiker1.gif",
  ucapan: "Makasih udah baca sampai sini. Dan makasih juga udah jadi bagian dari hari-hari aku belakangan ini",
  },
  {
  gambar: "stiker4.gif",
  ucapan: "Cuma mau bilang... i have a crush on you 🌷",
},
{
  gambar: "stiker3.gif",
  ucapan: "Rasanya seneng banget bisa ngobrol bareng atau sekadar chattingan sama kamu...",
},
{
  gambar: "stiker2.gif",
  ucapan: "Tapi di sisi lain... kita juga gak punya status yang jelas",
},
{
  gambar: "stiker5.gif",
  ucapan: "Jadi... aku mau nanya sesuatu",
},
{
  gambar: "stiker4.gif",
  ucapan: "Would you like to be my girlfriend? 😹",
},
{
  gambar: "stiker5.gif",
  ucapan: "Maaf ya kalau jadi lancang ngomong kayak gini, atau kalau kamu jadi risih setelah baca semuanya. Aku gak ada maksud bikin kamu gak nyaman atau ngerasa aneh, aku cuma lagi pengen jujur sama perasaan sendiri. Gak ada yang spesial banget sih dari pengakuan ini, cuma... rasanya makin disimpen malah makin gak tenang.",
},
{
  gambar: "stiker5.gif",
  ucapan: "Aku gak maksa kamu harus jawab gimana. Kalau ternyata kamu gak punya perasaan yang sama, it's really okay, itu hak kamu sepenuhnya dan aku terima sepenuhnya juga.s Jangan ngerasa canggung juga ya kalau nanti ketemu—anggap aja gak pernah ada yang berubah. Kita bisa tetap kayak biasa, dan ngobrol kayak biasa.",
},
{
  gambar: "stiker5.gif",
  ucapan: "Aku cuma pengen lega karena udah berani ngomong ini langsung. Kalau kamu nerima, pasti aku seneng banget, tapi kalau pun enggak, aku gak akan gimana-gimana, gak akan berubah, dan tetap bakal support kamu. Terima kasih udah baca sampai akhir, dan semoga harimu selalu menyenangkan ya, apapun yang lagi kamu jalanin 🍀",
},



];

musik = "musik.mp3";
nomorWhatsapp = "6285926270826";

/*=========================*/
DekaTutorial(konten, musik, nomorWhatsapp);
</script></body></html>
