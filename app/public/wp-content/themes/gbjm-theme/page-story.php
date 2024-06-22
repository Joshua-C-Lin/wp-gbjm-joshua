<?php
    get_header();
?>

    <div class="section">
        Page PHP - Story<br>
        頁面 ID：<?php echo get_the_ID(); ?>
    </div>

    <style>
        .section {
            color: skyblue;
        }
    </style>

<?php
    get_footer();
?>