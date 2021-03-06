<?php global $post; ?>
<div class="event_element social">
    <a id="social_hook" class="hook"></a>
    <?php if (get_post_meta($post->ID, 'januas_social_showtitle', true) == 'y') { ?>
        <header class="article-header">					
            <h4><?php _e('Facebook', 'januas'); ?></h4>					
        </header> <!-- end article header -->
    <?php } ?>
    <?php
    $height = 62;
    $width = 292;
    $stream = get_post_meta($post->ID, 'januas_social_stream', true);
    $header = get_post_meta($post->ID, 'januas_social_header', true);
    $faces = get_post_meta($post->ID, 'januas_social_faces', true);

    if ($stream == 'false' && $faces == 'false')
        $height = 62;
    else {
        if ($faces == 'true' && $stream == 'false')
            $height = 258;
        else if ($faces == 'false' && $stream == 'true')
            $height = 395;
        else if ($faces == 'true' && $stream == 'true')
            $height = 558;

        if ($header == 'true')
            $height += 32;
    }
    ?>
    <section class="entry-content clearfix">
        <iframe src="http://www.facebook.com/plugins/likebox.php?href=<?php echo get_post_meta($post->ID, 'januas_social_pageurl', true); ?>&amp;width=<?php echo $width; ?>&amp;colorscheme=<?php echo get_post_meta($post->ID, 'januas_social_colorscheme', true); ?>&amp;border_color=<?php echo urlencode(get_post_meta($post->ID, 'januas_social_bordercolor', true)); ?>&amp;show_faces=<?php echo $faces; ?>&amp;stream=<?php echo $stream; ?>&amp;header=<?php echo $header; ?>&amp;height=<?php echo $height; ?>" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:<?php echo $width; ?>px; height:<?php echo $height; ?>px;" allowTransparency="true"></iframe>
    </section>
</div>