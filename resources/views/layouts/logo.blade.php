<?php
    $aclass = "text-center font-weight-bold";
    $iclass = "fas fa-graduation-cap";
    if(isset($isLight)){
        $aclass = $isLight ? $aclass." text-primary" : $aclass." text-white";
        $iclass = $isLight ? $iclass." text-primary" : $iclass." text-white";
    }
?>
<div class="logo col-auto mx-3 align-self-center position-relative">
    <a class="<?php echo $aclass ?>" href="#">Juniorise</a>
    <span class="hat-icon position-absolute">
        <i class="<?php echo $iclass ?>"></i>
    </span>
</div>