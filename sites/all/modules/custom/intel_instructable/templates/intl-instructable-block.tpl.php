<?php
$mosaicImgArr=array(1,6,13); 
$rowNo=array(0,8);
function gridMarkupCreate($instructable){
    $boxMarkup=array();
    $boxMarkup[]='<div class="gridColumn">';
    $boxMarkup[]='<img src="'.$instructable['cover_image_square2Url'].'" class="outerImg"/>';
    $boxMarkup[]='<div class="clickedInfo">';
    $boxMarkup[]='<div class="post_info">';
    $boxMarkup[]='<h5 class="instruct_title">'.$instructable['title'].'</h5>';
    $boxMarkup[]='<p class="instruct_username"><span>'.t('by').' </span>'.$instructable['author_screenname'].'</p>';
    $boxMarkup[]='</div>';
    $boxMarkup[]='<img src="'.$instructable['cover_image_square3Url'].'" class="innerImg"/>';
    $boxMarkup[]='</div>';
    $boxMarkup[]='</div>';
    return $boxMarkup;
}
$gridClass=array();
$gridClass['default']='grid';
$gridClass['row']='row_1';
?>
<div id="intel-instructable-block">
    <div class="instructable-logo"><img src="<?php print $variables['instructagle_logo_url']; ?>" /></div>
    <div class="mosiacGrid">
        <?php for($x=0;$x<count($data);$x++){
            $gridContent='';
            $append=0;
            $additional='';
            unset($gridClass['columnClass']);
            if($x==0 || $x==5 || $x==12){
                $gridClass['extra']='bigGrid';
                $gridContent=implode('', gridMarkupCreate($data[$x]));
            }else if($x==1 || $x==8 || $x==13){
                $gridClass['extra']='smallSquareGrid';
                $gridContent=implode('', gridMarkupCreate($data[$x]));
                $gridContent.=implode('', gridMarkupCreate($data[$x+1]));
                $gridContent.=implode('', gridMarkupCreate($data[$x+2]));
                $gridContent.=implode('', gridMarkupCreate($data[$x+3]));
                $append=3;
                if($x==8)
                    $gridClass['row']='row_2';
            }else if($x==6 || $x==17){
                $gridClass['extra']='smallRectGrid';
                $gridContent=implode('', gridMarkupCreate($data[$x]));
                $gridContent.=implode('', gridMarkupCreate($data[$x+1]));
                if($x==6){
                    $additional='<div class="mosiacClearfix">&nbsp;</div>';
                }
                $gridClass['columnClass']='lastColumn';
                $append=1;
            }
            //echo $x;
            if($gridContent){
            echo '<div class="'.implode(' ', $gridClass).'">';
            echo $gridContent;
            echo '</div>';
            echo $additional;
            $x=$x+$append;
            }
        
        } ?>
    </div>
    <div class="bean-text">
        <?php if($bottomTextTitle)
            echo '<h2><strong>'.$bottomTextTitle.'</strong></h2>'; 
        if($bottomText){
            echo '<p>';
            echo $bottomText;
            if($bottomTextLink)
                echo '<br/>'.$bottomTextLink; 
            echo '</p>';
        }?>
    </div>
</div>