 
<div class="widget mb-50">
    <div class="widget-title-box mb-40">
        <span class="animate-border"></span>
        <h3 class="widget-title">Từ khóa tìm kiếm</h3>
    </div>
    <div class="tag">
        <?php if (isset($keyword) && !empty($keyword)) {
            foreach ($keyword as $val) {?>
             <a href="<?=$base_url?>/tags/<?=strEnglish1($val)?>"><?=$val?></a>
         <?php }}?>
     </div>
 </div>