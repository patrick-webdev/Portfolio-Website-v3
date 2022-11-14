<section id="projects">
    <div class="container-fluid">
        <div class="row">
            <?php
                foreach($projects as $project){
                    echo "<div class='col-6'>";
                    echo "<div class='project'>";
                    echo "<p class='project__title lgFont underline'>" . $project["title"] . "</p>";
                    echo "<p class='project__desc'>" . $project["description"] . "</p>";
                    echo "<p class='project__seeMore'><a href='" . $project["url"] . "' class='link--color' target='_blank'>See more...</a></p>";
                    echo "</div></div>";
                }
            ?>
        </div>
    </div>
</section>