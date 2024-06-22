<?php
    get_header();
?>

    <div class="section">
        Page PHP - Sustainability<br>
        頁面 ID：<?php echo get_the_ID(); ?>
        <?php
            echo get_post_type();
        ?>
    </div>

    <style>
        .section {
            color: red;
        }
    </style>

<?php
    get_footer();
?>