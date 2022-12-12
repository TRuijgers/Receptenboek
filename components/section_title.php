<?php ?>
    <section id="section1">
        <div class="primary-div-right">

            <div class="bundler">
                <div class="text-container">
                    <?php $contentDistributor->printBackgroundInfo(0)?>
                </div>
                <div class="image-container">
                    <img src=<?php $contentDistributor->printImage(0); ?> alt="">
                </div>
            </div>
            <div class="title-container">
                <h2><?php $contentDistributor->printRecipeContent('title'); ?></h2>
            </div>
        </div>
        <div class="secondary-div">
            <div>
                <?php $contentDistributor->printBackgroundInfo(1); ?>
            </div>
        </div>
    </section>
<?php ?>