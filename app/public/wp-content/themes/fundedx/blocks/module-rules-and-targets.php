<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading    = get_field('heading');
    $cta        = get_field('cta');
    $alignment  = get_field('alignment');
    $media      = get_field('media');
    $list_items = get_field('list_items');
?>

<style>
    .video-media{
        filter: grayscale(100%);
    }
    .custom-list {
        list-style: none;
        padding-left: 0;
    }
    .custom-list li {
        display: flex;
        align-items: center;
        padding-bottom: 3px;
        font-size: 1rem;
        color: #868686;
        font-weight: 500;
    }
    @media screen and (max-width: 767px) {
        .center-btn{
            text-align: center;
            margin: auto;
        }
        
    }
</style>
<!-- style="background-image: url('<?= get_template_directory_uri() . '/img/bg.svg' ?>'); background-size: cover; background-position: top;" -->
<section class="module module--text-with-media <?= $className ?>">
    <div class="wrapper">
        <div class="text-with-media align-<?= $alignment ?>">

            <div class="mw-511">
                <div class="flex items-start" style="margin-bottom: 2rem">

                    <div>
                        <h2 class="module-title"><?= $heading ?></h2>
                    </div>

                </div>

            <div class="text-content">
                
                <ul class="custom-list">
                    <?php if( $list_items ): ?>
                        <?php foreach( $list_items as $item ): ?>
                            <li>
                                <img data-src="<?= get_template_directory_uri(); ?>/img/item-list-icon.png" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon" width="30"> <?= $item['item_text'] ?>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>

                <?php if( !empty( $cta ) ): ?>
                    <div class="center-btn ">
                    <a href="<?php echo get_site_url(); ?>#take-the-challenge" class="mt-30px mb-3 btn btn--primary" ><?= $cta['title'] ?><?= get_template_part('img/arrow-up.svg'); ?></a>
                    </div>
                <?php endif ?>

            </div>

        </div>

        <div class="text-media">
            <?php if( !empty( $media ) ): ?>
                <?php if( $media['type'] == 'video' ): ?>
                    <video id="video" width="100%" height="100%" class="video-media"playsinline  muted>
                        <source src="<?= $media['url'] ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                <?php elseif( $media['type'] == 'image' ): ?>
                    <?= image( $media['ID'], 'a4x3' ) ?>
                <?php endif ?>
            <?php endif ?>
        </div>
        
        </div>
    </div>
</section>


<script type="module">
    document.addEventListener("DOMContentLoaded", () => {
        const video = document.getElementById('video');
        
        const playVideo = () => {
            video.play();
            setTimeout(() => {
                video.pause(); // Pause the video
                video.currentTime = 0; // Reset the video time to 0
            }, 8000); // 8 seconds delay. Adjust the time to fit between 5-8 seconds as per your requirement
        };
        
        playVideo(); // Play the video on page load
        
        video.addEventListener('ended', () => {
            setTimeout(playVideo, 5000); // 5 seconds delay before replaying. Adjust the time to fit between 5-8 seconds as per your requirement
        });
    });
</script>


