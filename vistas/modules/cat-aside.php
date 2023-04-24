<aside class="uk-padding-small" id="cat_aside">
    <ul class="uk-nav uk-nav-default">
        <?php
        foreach (loadCats() as $cat) {
            ?>
            <li class="uk-active uk-bg-violet">
                <a href="#">
                    <span class="uk-margin-small-right uk-icon" uk-icon="list"> </span>
                    <?php echo  ucfirst($cat['nombre']); ?>
                </a>
                <?php
                $subcat = loadCats($cat['id']);
                if(count($subcat) > 0){
                ?>
                    <ul class="uk-nav uk-nav-secondary uk-margin-left cinn-category-list">
                    <?php
                    foreach ($subcat as $scat) {
                    ?>
                        <li><a href="<?php echo  '?md='.$cat['nombre'].'&cat='.$scat['id']; ?>" class="uk-text-meta"><?php echo  ucfirst($scat['nombre']); ?></a></li>
                <?php
                    }
                ?>
                </ul>
                <?php
                }
                ?>
            </li>
                <?php
        }
        ?>
    </ul> 
</aside>