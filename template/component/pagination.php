<div class="pager">
    <?php $paginationhtml = get_the_posts_pagination(
        array(
            'show_all' => true,
            // 'end_size' => 1,
            // 'mid_size' => 2,
            'prev_next' => true,
            'prev_text' => __( '<span class="arrow"></span>', 'textdomain' ),
            'next_text' => __( '<span class="arrow"></span>', 'textdomain' ),
            'type' => 'list', 
        )
        );
        echo preg_replace('/\<h2 class=\"screen-reader-text\"\>(.*?)\<\/h2\>/ui', '', $paginationhtml);
    ?>
</div>