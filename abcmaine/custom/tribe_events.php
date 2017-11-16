<?php
/* custom programing for events calendar */
 //apply_filters( 'tribe_events_ical_single_event_links', $calendar_links );

 add_filter ('tribe_events_ical_single_event_links', 'reach_hide_cal_links');
 function reach_hide_cal_links($in_links) {
   return "";
 }
