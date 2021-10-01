<?php

$output = [];
if(isset($_POST['action'])){
    switch($_POST['action']){
        case 'save':
            switch ($_POST['id']){
                case 'htmlmixed':
                    file_put_contents("index.html",$_POST['text']);
                    break;
                case 'css':
                    file_put_contents("main.css",$_POST['text']);
                    break;
                case 'php':
                    file_put_contents("index.php",$_POST['text']);
                    break;
            }
            $output["text"] = $_POST['text'];
        default:
            $output['text1'] = file_get_contents("index.html");
            $output['text2'] = file_get_contents("main.css");
            $output['text3'] = file_get_contents("index.php");
            break;
        
    }
}

echo json_encode($output);

?>