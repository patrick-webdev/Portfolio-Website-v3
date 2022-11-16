<section id="projects">
    <div class="container-fluid">
        <div class="row">
            <?php
                foreach($projects as $project){
                    ?>
                    <div class='col-12 col-md-6'>
                        <a href="<?=$project["url"]?>" target="_bank" class="noStyle">
                            <div class='project'>
                                <p class='project__title lgFont'><?=$project["title"]?></p>
                                <p class='project__desc'><?=$project["description"]?></p>
                                <p class='project__seeMore link--color underline'>See more...</p>
                            </div>
                        </a>
                    </div>

                    <?php
                }
            ?>
        </div>
    </div>
</section>