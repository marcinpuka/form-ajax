
    <?php
    $users = array();
    $row = 1;
    if (($handle = fopen("data.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, ",")) !== FALSE) {
            array_push($users, $data);
            $num = count($data);
            //print_r($data);
            //echo "<p> $num fields in line $row: <br /></p>\n";
            $row++;
            //for ($c=0; $c < $num; $c++) {
            //    echo $data[$c] . "<br />\n";
            //}
        }
        fclose($handle);
    }
    // print_r($users);
    echo json_encode($users);
    ?>
