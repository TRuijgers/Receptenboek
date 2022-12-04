<?php ?>
    <section id="section2">
        <div>
            <div>
                <?php 
                    $contentDistributor->printImage(2);
                ?>
                <div>
                    <h3>Benodigdheden:</h3>
                    <ul>
                        <?php 
                            $contentDistributor->printIngredientsList('ingredients');
                        ?>
                    </ul>
                </div>
            </div>
            <span class="section-separator"></span>
        </div>
    </section>
<?php ?>