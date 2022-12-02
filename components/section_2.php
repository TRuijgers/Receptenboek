<?php ?>
    <section id="section2">
        <div>
            <div>
                <?php 
                    $contentLoader->printImages(2);
                ?>
                <div>
                    <h3>Benodigdheden:</h3>
                    <ul>
                        <?php 
                            $contentLoader->printIngredients();
                        ?>
                    </ul>
                </div>
            </div>
            <span class="section-separator"></span>
        </div>
    </section>
<?php ?>