<div class="footer-area">
    <!-- Left area -->
    <div class="footer-left">
        <div class="footer-com-name">GBJM GROUP</div>
        <div>GBJM TECHNOLOGY Co., Ltd.</div>
        <div>18F, No.1, Songzhi Rd., Xinyi Dist., Taipei City 110, Taiwan</div>
        <div>service@gbjm-tec.com.tw</div>
        <div>+886 2 2723 3080</div>
    </div>

    

    <!-- Right area -->
    <div class="footer-right">
        <div class="iso-cube">
            <div class="iso-img">
                <img style="width: 100%" src="<?php echo get_theme_file_uri('image/gbjm-iso.webp'); ?>" alt="Logo">
            </div>
            <div>GB/T19001-2016<br>ISO9001:2015</div>
        </div>
        <div class="iso-cube">
            <div class="iso-img">
                <img style="width: 100%" src="<?php echo get_theme_file_uri('image/gbjm-iso.webp'); ?>" alt="Logo">
            </div>
            <div>GB/T19001-2016<br>ISO9001:2015</div>
        </div>
        <div class="iso-cube">
            <div class="iso-img">
                <img style="width: 100%" src="<?php echo get_theme_file_uri('image/gbjm-iso.webp'); ?>" alt="Logo">
            </div>
            <div>SA 8000 2014</div>
        </div>
    </div>
</div>

<style>
    .footer-area {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #eae7dd;
        color: #808080;
        padding: 2rem 0;
    }

    .footer-left {
        padding-left: 2%;
    }

    .footer-right {
        display: flex;
        padding-right: 2%;
    }

    .footer-com-name {
        color: #0d3b66;
        font-size: 2rem;
        font-weight: 700;
    }

    .iso-cube {
        max-width: 164px;
        text-align: center;
    }

    .iso-img {
        width: 100%;
        margin-bottom: 10px;
    }

    @media (max-width: 790px) {
        .footer-area {
            display: block;
        }

        .footer-left {
            margin-bottom: 20px;
        }

        .footer-right {
            justify-content: space-evenly;
        }
    }

</style>

<?php wp_footer(); ?>
</body>
</html>
