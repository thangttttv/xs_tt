<?php
$detect = new MobileDetect();
if(!$detect->isMobile()){
?>
<div class="addthis_toolbox addthis_default_style fl">
    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
    <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
    <a class="addthis_counter addthis_pill_style"></a>
</div>
<?php }?>