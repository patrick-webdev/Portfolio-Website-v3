<section id="projectsIntro">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="tool">
                    <div class="tool__logo"><i class="fa-brands fa-php"></i></div>
                    <div class="tool__title lgFont">Development</div>
                    <div class="tool__desc lgFont">From simple webpages to complex websites and webapps.</div>
                </div>
            </div>
            <div class="col">
                <div class="tool">
                    <div class="tool__logo"><i class="fa-solid fa-database"></i></div>
                    <div class="tool__title lgFont">Databases</div>
                    <div class="tool__desc lgFont">Both MySQL and NoSQL database design, creation, and management.</div>
                </div>
            </div>
            <div class="col">
                <div class="tool">
                    <div class="tool__logo"><i class="fa-solid fa-pencil"></i></div>
                    <div class="tool__title lgFont">Design</div>
                    <div class="tool__desc lgFont">Experience with the design process and Nielsen heuristics to design products.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="projectSearchBar">
    <form id="searchBar">
        <button type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
        <input type="text" placeholder="Search..." class="mdFont" oninput="searchProjects(this.value)">
    </form>
</section>

<section id="projects">
    <div class="container-fluid">
        <div class="row">
            <?php
                foreach($projects as $project){
                    echo "<div class='col-6'>";
                    echo "<div class='project' data-tags='";
                    foreach($project[0] as $tag){ echo $tag . "|";}
                    echo "'>";
                    echo "<p class='project__title lgFont underline'>" . $project["title"] . "</p>";
                    echo "<p class='project__desc'>" . $project["description"] . "</p>";
                    echo "<p class='project__seeMore'><a href='" . $project["url"] . "' class='link--color' target='_blank'>See more...</a></p>";
                    echo "</div></div>";
                }
            ?>
        </div>
    </div>
</section>

<script src="<?= config_item('base_uri') ?>assets/js/projects.js"></script>