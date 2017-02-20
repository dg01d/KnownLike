<?php

    $rel = '';
    $icon = '<i class="fa fa-bookmark"></i> ';

    if (!empty($vars['object']->likeof)) {
        $rel = 'rel="like" class="u-like-of"';
        $icon = '<i class="fa fa-star-o"></i> ';
    }
    if (!empty($vars['object']->repostof)) {
        $rel = 'rel="like" class="u-repost-of"';
        $icon = '<i class="fa fa-retweet"></i> ';
    }

    if (!empty($vars['object']->pageTitle)) {
        $body = $vars['object']->pageTitle;
    } else {
        $body = $vars['object']->body;
    }

?>
<?php

    if (!empty($vars['object']->likeof)) {

        ?>

    <div class="e-content entry-content">
        <?=$icon?> Liked 
            <a href="<?= $vars['object']->likeof; ?>" <?=$rel?> target="_blank">
                <?= $vars['object']->description; ?>
            </a>
    </div>
<?php 

    }

    if (!empty($vars['object']->repostof)) {

        ?>

   <p>This is a repost</p>
<?php 

}

if (empty($vars['object']->repostof||$vars['object']->likeof)) {

    ?>

<div class="known-bookmark">
    <?php

        if (empty($vars['feed_view'])) {

            ?>
            <h2 class="p-bookmark"><?=$icon?><a href="<?= $vars['object']->body; ?>" rel="bookmark"
                                      target="_blank"><?= $this->parseURLs(htmlentities(strip_tags($body)), $rel) ?></a>
            </h2>
        <?php

        }

        if (!empty($vars['object']->description)) {
            echo $this->__(['value' => $vars['object']->description, 'object' => $vars['object'], 'rel' => $rel])->draw('forms/output/richtext');
        
        }
        
        if (!empty($vars['object']->tags)) {
        ?>
            <p class="tag-row"><i class="icon-tag"></i><?=$this->parseURLs($this->parseHashtags(htmlentities(strip_tags($vars['object']->tags))),$rel)?></p>
        <?php
        }

    ?>
</div>

<?php 

    }

    ?>

<?= $this->draw('entity/content/embed'); ?>
