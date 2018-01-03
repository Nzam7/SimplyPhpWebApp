<?php 

        // Define daily open hours
        // Must be in 24-hour format, separated by dash
        // If closed for the day, leave blank (ex. sunday) or don't add line

        $hours = array(
        'mon' => array('11:00-20:30'),
        'tue' => array('11:00-13:00', '18:00-20:30'),
        'wed' => array('11:00-20:30'),
        'thu' => array('11:00-1:30'), // Open late
        'fri' => array('11:00-20:30'),
        'sat' => array('11:00-20:00'),
        'sun' => array() // Closed all day
        ); 


        ### Add exceptions for specific dates / holidays

        $exceptions = array(
        '2/24'  => array('11:00-18:00'),
        '10/18' => array('11:00-16:00', '18:00-20:30')
        );

        ### Customize the final output with shortcodes

        // OPTIONAL
        // Place HTML for output below. This is what will show in the browser.
        // Use {%hours%} shortcode to add dynamic times to your open or closed message.
        $template = array(
            'open'           => "<h3>We are open! Today's hours are {%hours%}.</h3>",
            'closed'         => "<h3>Sorry, we're closed. Today's hours are {%hours%}.</h3>",
            'closed_all_day' => "<h3>Sorry, we're closed today.</h3>",
            'separator'      => " - ",
            'join'           => " and ",
            'format'         => "g:ia", // options listed here: http://php.net/manual/en/function.date.php
            'hours'          => "{%open%}{%separator%}{%closed%}"
        );

        $store_hours = new StoreHours($hours, $exceptions, $template);
        echo '<table>';
        foreach ($store_hours->hours_overview() as $days => $hours) {
            echo '<tr>';
            echo '<td>' . $days . '</td>';
            echo '<td>' . $hours . '</td>';
            echo '</tr>';
        }
        echo '</table>';

?>




