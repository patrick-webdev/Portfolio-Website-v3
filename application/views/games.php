<section id="games">
    <div class="container--fluid">
        <div class="row align-items-center">
            <?php
                foreach($games as $game){
                    ?>

                    <div class="col-12 col-md-6 col-xxl-4 d-flex justify-content-center">
                        <div class="game">
                            <img src="<?= config_item('base_uri') ?>assets/img/<?= $game["img"] ?>" alt="">
                            <p><span class="bold lgFont"><?= $game["title"] ?> (<?= $game["year"] ?>)</span></p>
                            <p><?= $game["description"] ?></p>
                            <p><a href="<?= $game["url"] ?>" class="underline link--color" target='_blank'>Download</a></p>
                            <p class="game__myRoles">My roles:</p>
                            <ul>
                                <?php
                                    foreach($game[0] as $role){
                                        echo "<li>" . $role . "</li>";
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>

                    <?php
                }
            ?>
        </div>
    </div>
</section>