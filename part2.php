<?php
    function build_table($array){
    // start table
    $html = '<table>';
    // header row
    $html .= '<tr>';
    foreach($array[0] as $key=>$value){
            $html .= '<th>' . htmlspecialchars($key) . '</th>';
        }
    $html .= '</tr>';

    // data rows
    foreach( $array as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . htmlspecialchars($value2) . '</td>';
        }
        $html .= '</tr>';
    }

    // finish table and return it

    $html .= '</table>';
    return $html;
}

$array = array(

   
        array('name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'Science'),
        array('name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'AAST'),
        array('name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'AAST'),
        array('name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => "Science <font color='red'>"),
        array('name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'AAST'),
);



  

echo build_table($array);
?>







 




