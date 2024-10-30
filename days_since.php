<?php
/*
Plugin Name: Days since
Plugin URI: http://www.tamba2.org.uk
Description: Counter
Author: Me
Version: 1.0.0
Author URI: http://www.tamba2.org.uk/
*/ 

function days_since($countdown_day, $countdown_month, $countdown_year, $server_offset = 0) {
echo (int)((time(void) + ($server_offset * 3600) - mktime(0,0,0,$countdown_day,$countdown_month,$countdown_year))/86400);
}
?>