
<style>

    h1 {
        
        
    }
    
    tbody {
        
        
    }
    
    td.e {
        
        background: rgba(40,40,40,.2);
        
    }
    
    td.v {
        
        background: rgba(255,255,255,.7);
        
    }

</style>

<div style="position:relative" class="wrap">

    <h2 class="plug_title">Info Panel</h2>
    
    
    <?php

    
    ob_start();
    phpinfo();
    $x = ob_get_contents();
    ob_end_clean();
     
    $x = preg_replace( '%^.*<body>(.*)</body>.*$%ms','$1',$x);
    echo $x;




    ?>
    
</div>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->v
