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
            <div id="option-container">
                <div class="quantity-option">
                    <button id="plus">&plus;</button>
                    <button id="minus">&minus;</button>
                </div>
                <div class="quantity-text">
                    <p>
                        <span id="quantity-display"><?php $contentDistributor->printRecipeContent('quantity');?></span>
                        <span><?php $contentDistributor->printRecipeContent('unit');?></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="secondary-div">
            <?php $contentDistributor->printIngredientsList();?>
            <?php $contentDistributor->printToolsList();?>
        </div>
    </section>
<?php ?>