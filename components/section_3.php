<?php ?>
    <section id="section3">
        <div class="primary-div-right">
            <div class="text-container">
                <p><?php $contentDistributor->printServingTip(0); ?></p>
            </div>
            <div class="bundler">
                <div class="image-container">
                    <img src=<?php $contentDistributor->printImage(2); ?> alt="">
                </div>
                <div class="title-container">
                    <h3>Bereidingswijze</h3>
                </div>
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