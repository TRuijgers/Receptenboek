<?php ?>
    <section id="section2">
        <div class="primary-div-left">
            <div class="bundler">
                <div class="image-container">
                    <img src=<?php $contentDistributor->printImage(1); ?> alt="">
                </div>
                <div class="title-container">
                    <h3>Benodigdheden</h3>
                </div>
            </div>
            <div class="text-container">
                <p><?php $contentDistributor->printServingTip(0); ?></p>
            </div>
        </div>
        <div class="secondary-div">
            <?php $contentDistributor->printIngredientsList();?>
            <?php $contentDistributor->printToolsList();?>
        </div>
    </section>
<?php ?>