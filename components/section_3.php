<?php ?>
    <section id="section3">
        <div class="primary-div-right">
            <div class="bundler">
                <div class="text-container">
                    <?php $contentDistributor->printServingTip(); ?>
                </div>
                <div class="image-container">
                    <img src=<?php $contentDistributor->printImage(2); ?> alt="">
                </div>
            </div>
            <div class="title-container">
                <h3>Bereidingswijze</h3>
            </div>
        </div>
        <div class="secondary-div">
            <div>
                <ol>
                    <?php 
                        $contentDistributor->printPreparationList();
                    ?>
                </ol>
            </div>
        </div>
    </section>
<?php ?>