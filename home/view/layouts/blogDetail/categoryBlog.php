<div class="widget mb-50">
    <div class="widget-title-box mb-40">
        <span class="animate-border"></span>
        <h3 class="widget-title">Danh sách danh mục</h3>
    </div>
    <ul class="cat">
        <?php if (isset($list_cat) && !empty($list_cat)) {
            foreach ($list_cat as $val) {?>
                <li>
                    <a href="<?=$base_url?>/<?=$val['code']?>"><b><?=$val['name']?></b><span class="f-right"></span></a>
                </li>
            <?php }
        }?>


    </ul>
</div>