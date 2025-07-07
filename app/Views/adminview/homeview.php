<?php
$session = session();
$user_name = $session->get('user_name');
?>
<?= $this->extend('adminview/mainview') ?>

<?= $this->section('judul') ?>
E-library Naespa In Kwangya
<?= $this->endSection('judul') ?>


<?= $this->section('subjudul') ?>
<?php
date_default_timezone_set('Asia/Jakarta');
$currentTime = date('H:i');
$pagiStart = '05:00';
$pagiEnd = '10:59';

$siangStart = '11:00';
$siangEnd = '14:59';

$soreStart = '15:00';
$soreEnd = '18:00';

$malamStart = '18:00';
$malamEnd = '04:59';

if ($currentTime >= $pagiStart && $currentTime <= $pagiEnd) {
    $greeting = 'Selamat Pagi';
} elseif ($currentTime >= $siangStart && $currentTime <= $siangEnd) {
    $greeting = 'Selamat Siang';
} elseif ($currentTime >= $soreStart && $currentTime <= $soreEnd) {
    $greeting = 'Selamat Sore';
} else {
    $greeting = 'Selamat Malam';
}

echo $greeting . ', ' . $user_name;
?>

<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>
<p>E-Library yang canggih dirancang sebagai solusi terintegrasi untuk mengelola data buku perpustakaan dan informasi peminjam dengan efisiensi dan keakuratan. Memadukan teknologi modern dengan tata kelola perpustakaan yang baik, E-Library memberikan pengalaman pengelolaan perpustakaan yang terpadu dan responsif.</p>

<p>Dibuat Menggunakan</p> 
<a href="https://www.codeigniter.com/" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAACxklEQVR4AdXWA5AcQRSA4U7Othexbdu2bdsoxLZt2/ZeBnVlIywdg7Lz12YzlZ31+V7Vd9id6dfuFvmNnER7xR45RqswJOQahMg2l0wF4rEKZggUewVScQ+bEIJiTA70ggXv0Rkiy1B8FUjACShQsR5+KJbkIVgOyUbBeUSiyJOHYh4skCFBwSVEo/Aju4KWPArLka4lB1TszjGJQBRu5Jm15InYCMkuOaBgEkQuCi1yTXbLbTcUSE68RVMUYnLbUkMy9rhJLuMJKkHkVkJF3jOLcr+rFnzCRWMLFOeJtd9v0BQix2QVyN8DUT2H+ePzvLAVFMDvBZCcsOCVbg5sRTKC0RZPcAd94A/vItvW9eiOty4m3DashQrJ5iOu4iieQYaCNxiHAHjd9Uk476Lr36ElauO+rhIKVF2lZbzFgKw0DwdWtokJZLA+NNrNhHuMijl/n2uDK1B0SfUU3EFVeGx9JE5BdbPkWkLkJVmfN2EVXkOB5IKKRdkGUY7fbivQEK/dtEjBJoTi/wnbDichA07fu4oETxUY4ia5DAkWTIIfGDq7E3IJ3kN28u5r1IfbjWcWVCcvv8NlpEPGCzSBvgFBmOSiEha0g9tLxlwnFUjHTAzRjelIONlDrJVY7qQCH9AajvFviWCcbjIp2I5QVMQlSLiLBrCLz7W0csy4BUW3ZVf1NAfa4L1u3JpB5KTAKCqgG6oz9uXhqpxyWA0VElQcQAg83nQvQbE5jyh4HbmpDr0p4wN6uT2yc0wwwCjGQIKKQwhCfi6tU6HabKD8UHj1chR2IANXEO9TBUzaRNyFDBxEKny6AaVhDyzoCwEPYbcndMYLbEIqrFc7r+JHRa2QOMzHMdSxnhMmjy0vb9sftmM4wiCy4XNQGKy7XV30hyHb4NgT3w3aRhaAGuiIVN8vI+7nhR+CUc5pBUzaM0HZPIOyEX8AWD7mDcySVAkAAAAASUVORK5CYII=" alt="codeigniter"></a>
<a href="https://mysql.com/" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAABnRSTlMAAAAAAABupgeRAAABwklEQVR4AVySA3AkQRSG+2wb5TqjeLZt24xt27Zt27Zt20nZm3/SWz2bnRo9fI9NXtmHLf9kQt4akMea5KE6eWdI7yUfjMTurX+sv7jGk+2/rT3TKms7h7Jru15YhUPcL+G86rMpB7/QYTD9AUOOyLtnVrVDuGMWmlvbWdLcV1jf3TU4EVPSdFrHl2NeLMpGoLKOK1IJyCC3FLmob/RRG4r8aheNtLElTbv+2kDDiiT4A4OqJD2TyT3VO4YBav7p0NCSJD3jRsZnnlmGQRQCtD4ERg8Ihp9DUg6c8v3C/UDtqILL2OTcX8dY4Ugoh2DvbcPsE0uQBFoewP1UC2MA88Q8lGPYBMAE59TeNwmmw4Erw+B3RsMPzLqvZkKAe78yhFzS2HNQzklsDxDBOCSVJpa3EjGtb3rlUUVXVpWoFctt6x/nAdzo2C+zGnmQDf/wYPlpn8cVXQhT0TYosOG7+XPzIIgsFo+JCigJSzyp5PrEJlIgEOz9ZyPK8AC7cQouavuC+eIQU9c+GJpXh5XTGfKd4DwxFS3UICwHE5T3Sb1qGGgelU8+mDMr54wLH5YEjaJdbAOdYIno8pqmO/LMD64aAI9KJeRHIoWtAAAAAElFTkSuQmCC" alt="" style="width: 30px;"></a>
<a href="https://getbootstrap.com/" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAETklEQVR4AY2XA7AsSRBFT1bVYG3btm3btm3btgPL0Nq2bdvefXZPV/6HmVcxrfknIhujW5WTagG4anqdRdRfCLIhMANQUkBRFII17jX7PZKfTd9HqvzrVZ4y5ehU4G+5dmadwUf6DjA3dVqJU/R+wXto0/0PUotWNFrzF6bFgwHhaqLEkyikxVGYt+ZKFzhV2YoUStaCPJoSpOlawn2uBUR1awdMX+R6X5cNG/HZ7kVQfLhGUp4jGSfCjA4QMlYXxDxe/fhCVLP/a0TqdwKYuoGq5MYFIC4hmXC34ok58qsqk80g5NHfofT+5/nmhYjXbhqg42dBxAIjBoqQhQKmOOo93tewJQqZZGph+vktqx5Y5Zg3p2LpXYRYI1Q9oxQErVHy8ap11wfeubObF6/uGLbOUXvrtm6+fXkAHzNKqSpsf82UzLgYxFrDE6eCFgKuVVqFkBMAXr6+g/++rTtPDKo6KjLt/HDE47MxxYwW42C1gyrcf8QAikUIJHVMq5wHTzOCiMNKFUsVJyNW4f/vhGeuaKPB7EuVUrsP1wGXlM5OsYCIweCwlBCx9RQ1GPH89XVEg6F+TfhOCYTfdkXlNhtpMgW0fp55wTINfnhzIIgVmKNluW3G44mJEWqINipFjblWdGx4wtQA9LXHPH9tN0qFUC2FlFbwQL4lWeuwKYYFQDCAMMnUhpkWmZS5VywD0PZrxC27/Elfmw3hl1dpwwKyS2a4Cqy055Tk8ftngzx0zj/88WWEwY7/NeRuSjHjl0pByQx0/B7x/0/BettClsy2eIXD7p2Dk16enenmsXjiRChrajEmCGavMMlN2/zJBcv8zoXL/M0Fw3bafL9x3Mw/cc1mv/H5cz0AzD68kMMfnp7q1J5YYxTNbWImy/XFcWCwUsJJeTT/S1TRwQo/vB5z045/8c1rfQBMO4djtf0mwRPj0dwZwRRNMVmICILDUMZKBUMFO2xGKogv8c49PTRYeJ0yigd8fhoW5Xy2B2TMxGDUgSggWFW8xET9GprUVKbpN7IC3rQesbJRr3g08VlhgdUnCQH7R5z8hWTAp+tA1liiGYVIqSEaZgZKNdbcp8qqu4c0/ezZ/pCKORtzCcGWvWCTk6emv1PHCxHA5DMaZlvCjQZegz++GuKNu3qBCoyPZxLkCnsBAUGAwDLbTE4rfnyvn1v2/IfaoMNiASFPx+XUvKb5rq/NU4SPla5/Y377dJAPH+3l4yf6IC5jKIHYMKgqKRyFPUAQLJct305MDa9KCDtJTM4Q5r8qFodICcEE8ZxeoIpKOhIkDB8A6jBoOpBS96D1aUnG3S85G1R14P8GmZnMOBAEUy88FmTiHsmkLjqG5DY5D386FXlQlUO0oPCIGkxWdUzcS2LxirZocvKAsYOls4CfinqBIk1G2F2w5OdaN7kfSrGebX6X7n+tKa2qyg0KfynQekaguHIWP5L9qch1cWRWHfTm/wkRpnafkhoYMwAAAABJRU5ErkJggg==" alt="bootsrap"></a>




<?= $this->endSection('isi') ?>
