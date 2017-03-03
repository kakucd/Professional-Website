<?php
        $form_data = array (
                'Date' 			=> $date,
                'Name' 			=> $fullname,
                'Phone Number' 		=> $phone,
                'Email Address' 	=> $emailAdd,
                'Job Title' 		=> $job,
                'Additional Notes' 	=>$notes,

                'Person of Interest' 	=> array (   
					   $person['emily'],
                                           $person['casey']
                                           )
                );

$json_data = json_encode($form_data). "\n";

$orderFile = fopen("data.json", "a") or die("Unable to open");
fwrite( $orderFile, $json_data );
fclose ($orderFile);
?>
