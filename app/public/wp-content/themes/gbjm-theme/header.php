<!DOCTYPE html?>
<html>
    <head>
        <?php wp_head(); ?>

        <!-- 全域 css -->
        <style>
            body {
                margin: 0;
            }

            a {
                text-decoration: none;
                color: inherit;
            }

            a:hover {
                color: blue;
            }

            .nav-bar {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .nav-item-area {
                display: flex;
            }

            .nav-item:not(:last-child) {
                margin-right: 8px;
            }

            .nav-item {
                color: #3c4b76;
                font-size: 2rem;
                font-weight: 700;
                margin: 0 1rem;
                white-space: nowrap;
            }

            .nav-item-active {
                color: orangered;
            }

            .logo-img {
                width: 20%;
                min-width: 226px;
            }

            .section {
                min-height: 100vh;
            }
        </style>
    </head>
    <body>
        <div  class="nav-bar">
            <a class="logo-img" href="/">
                <img style="width: 100%" src="<?php echo get_theme_file_uri('image/logo.png'); ?>" alt="Logo">
            </a>

            <div class="nav-item-area">
                <div <?php if(is_page('sustainability')) echo 'class="nav-item-active nav-item"'; ?> class="nav-item">
                    <a href="/sustainability">Sustainability</a>
                </div>
                <div <?php if(is_page('company')) echo 'class="nav-item-active nav-item"'; ?> class="nav-item">
                    <a href="/company">Company</a>
                </div>
                <div <?php if(is_page('savoir-faire')) echo 'class="nav-item-active nav-item"'; ?> class="nav-item">
                    <a href="/savoir-faire">Savoir Faire</a>
                </div>
                <div <?php if(is_page('story')) echo 'class="nav-item-active nav-item"'; ?> class="nav-item">
                    <a href="/story">Story</a>
                </div>
                <div <?php if(is_page('library')) echo 'class="nav-item-active nav-item"'; ?> class="nav-item">
                    <a href="/library">Library</a>
                </div>
            </div>
        </div>
