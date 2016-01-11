<?php
/**
 * Created by PhpStorm.
 * User: Queldamar
 * Date: 8-1-2016
 * Time: 12:08
 */


$db = mysqli_connect('localhost','bob','test' ,'events');

echo "--------";
exit;


$result = mysqli_fetch_array($db,"SELECT * FROM events");

$events = "";

foreach ($result as $key=>$value){
    $events .= "start: ".$value['date']."T".$value['start'];
    $events .= "end: ".$value['date']."T".$value['end'];
}

echo $events;

?>
$('#calendar').fullCalendar({
    defaultDate: '2014-11-10',
    defaultView: 'agendaWeek',
    events: [
        {
            start: '2014-11-10T10:00:00',
            end: '2014-11-10T16:00:00',
            rendering: 'background'
        }
    ]
});
