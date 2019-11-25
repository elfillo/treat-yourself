<?php
    function dd($var, $dumb = 0){
        echo '<pre>';
        if($dumb){
            var_dump($var);
        }else{
            print_r($var);
        }
        echo '</pre>';
    }
?>