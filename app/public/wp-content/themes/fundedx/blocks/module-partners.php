<?php 
    $className = !empty($block['className']) ? $block['className'] : null;
    $heading = get_field('heading');
    $block_1 = get_field('block_1');
    $block_2 = get_field('block_2');
    $block_3 = get_field('block_3');
    $block_4 = get_field('block_4');
?>

<section class="module module--partners py-80px <?= $className ?>" style="background: #141414;;">

<div class="wrapper">
    <div class="module-title-holder text-center">
        <h2 class="module--title text-white"><?= $heading ?></h2>
    </div>

    <div class="lg:grid grid-cols-2">
        <div>
            <ul class="custom-list list-inside list-decimal"  style="max-width: 400px;">
                <li class="flex items-start mb-2 mt-5 text-white">
                    <img data-src="<?= get_template_directory_uri(); ?>/img/social-icon.svg" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-10 mr-4">
                    <div>
                        <h3 class="text-white" style="font-size: 24px;max-width: 350px; line-height: 28px; color:#EAEDEB;">Be Rewarded For Each Recommendation</h3>
                        <p>Your voice matters to us, and we believe in rewarding your trust. As a partner in our affiliate program, each referral translates into benefits.</p>
                    </div>
                </li>
                <li class="flex items-start mb-2 mt-5 text-white">
                    <img data-src="<?= get_template_directory_uri(); ?>/img/pie-icon.svg" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-10 mr-4">
                    <div>
                        <h3 class="text-white" style="font-size: 24px;max-width: 200px; line-height: 28px; color:#EAEDEB;">Progressive Commissions</h3>
                        <p>Begin your affiliate journey with a 7.5% commission, unlocking more as you grow. Reach 10% after your first 50 referrals, and escalate to an impressive 15% after 100.</p>
                    </div>
                </li>
            </ul>
        </div>
        <div>
            <ul class="custom-list list-inside list-decimal"  style="max-width: 400px;">
                <li class="flex items-start mb-5 mt-5 text-white" style="margin-bottom: 2rem;">
                    <img data-src="<?= get_template_directory_uri(); ?>/img/social-icon.svg" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-10 mr-4">
                    <div>
                        <h3 class="text-white" style="font-size: 24px;max-width: 200px; line-height: 28px; color:#EAEDEB;">Monthly Withdrawals</h3>
                        <p>Convenience meets timely rewards with our automatic monthly withdrawal system. Your earnings are securely processed once a month without any hassle.</p>
                    </div>
                </li>
                <li class="flex items-start mb-2 mt-5 text-white">
                    <img data-src="<?= get_template_directory_uri(); ?>/img/bar-icon.svg" src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt="Icon" class="list-icon w-10 mr-4">
                    <div>
                        <h3 class="text-white" style="font-size: 24px;max-width: 200px; line-height: 28px; color:#EAEDEB;">We Will Provide With Materials</h3>
                        <p>We equip you with everything you need to succeed. Receive a unique affiliate link and visually appealing materials to catch the eye.</p>
                    </div> 
                </li>
            </ul>
        </div>
    </div>
</div>

</section>