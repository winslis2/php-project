<?php

if ( isset($_SERVER['HTTP_USER_AGENT']) &&  (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE)) {
    ?>
    <p>正在使用 Internet Explorer</p>
    <?php
} else {
    ?>
    <div style="text-align: center;"><b>没有使用 Internet Explorer</b></div>
    <?php
}
?>
}
