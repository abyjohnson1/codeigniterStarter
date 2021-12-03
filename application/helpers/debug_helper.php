<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('dDebug'))
{
    function dDebug()
    {
        list($callee) = debug_backtrace();

        $args = func_get_args();

        $total_args = func_num_args();

        echo '<div><fieldset style="background: #fefefe !important; border:1px red solid; padding:15px">';
        echo '<legend style="background:red; color:white; padding:5px;">'.$callee['file'].' @line: '.$callee['line'].'</legend><pre><code>';

        $i = 0;

        foreach ($args as $arg)
        {
            echo '<strong>Debug #' . ++$i . ' of ' . $total_args . '</strong>: ' . '<br>';

            var_dump($arg);
        }

        echo "</code></pre></fieldset><div><br>";
        $CI=& get_instance();
        $CI->output->enable_profiler(TRUE);
    }
} 
// function dd($data){
//     echo "<style>
//     body{
//         background:#000;
//         color:#fff;
//     }
    
//     </style>";
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";    
//     die();

// }

// function d(){
//     $CI=& get_instance();
//     $CI->output->enable_profiler(TRUE);
// }