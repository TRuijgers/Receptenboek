<?php ?>
    <section id="section1">
        <div class="primary-div-right">
            <div class="text-container">
                <p><?php $contentDistributor->printRecipeContent('description')?></p>
            </div>
            <div class="bundler">
                <div class="image-container">
                    <img src=<?php $contentDistributor->printImage(0); ?> alt="">
                </div>
                <div class="title-container">
                    <h2><?php $contentDistributor->printRecipeContent('title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="secondary-div">
            <div>
                <p>
                    <?php $contentDistributor->printBackgroundInfo(0); ?>
                </p>
                <span></span>
            </div>
        </div>
    </section>
<?php ?>