<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

$Bangkok_now = Carbon::now('Asia/Bangkok');

echo "Sekarang di Bangkok menunjukkan pukul : $Bangkok_now";

?>