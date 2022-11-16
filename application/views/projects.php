<section id="projectsIntro">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 col-md">
                <div class="tool">
                    <div class="tool__logo"><i class="fa-brands fa-php"></i></div>
                    <div class="tool__title lgFont">Web</div>
                    <div class="tool__desc lgFont d-none d-md-block">From simple webpages to complex websites and webapps.</div>
                </div>
            </div>
            <div class="col-4 col-md">
                <div class="tool">
                    <div class="tool__logo"><i class="fa-solid fa-database"></i></div>
                    <div class="tool__title lgFont">Databases</div>
                    <div class="tool__desc lgFont d-none d-md-block">Both MySQL and NoSQL database design, creation, and management.</div>
                </div>
            </div>
            <div class="col-4 col-md">
                <div class="tool">
                    <div class="tool__logo"><i class="fa-solid fa-pencil"></i></div>
                    <div class="tool__title lgFont">Design</div>
                    <div class="tool__desc lgFont d-none d-md-block">Experience with the design process and Nielsen heuristics to design products.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="projectSearchBar">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <form id="searchBar">
                    <button type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                    <input type="text" placeholder="Search by name or a tag..." class="mdFont" oninput="searchProjects(this.value)">
                </form>
            </div>
        </div>
    </div>
    
</section>

<section id="projects">
    <div class="container-fluid">
        <div class="row">
            <?php
                foreach($projects as $project){
                    ?>
                    <div class='col-12 col-md-6'>
                        <a href="<?=$project['url']?>" target="_bank" class="noStyle">
                            <?php
                                echo "<div class='project' data-tags='";
                                foreach($project[0] as $index=>$tag){
                                    echo $tag . "|";
                                }
                                echo "'>";
                            ?>
                                <p class='project__title lgFont'><?=$project["title"]?></p>
                                <p class='project__desc'><?=$project["description"]?></p>
                                <p class="project__tags">Tags: 
                                    <?php
                                        foreach($project[0] as $index=>$tag){
                                            echo $tag;
                                            if($index!=count($project[0])-1) echo ", ";
                                        }
                                        if(count($project[0])==0) echo "N/A";
                                    ?>
                                </p>
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

<script src="<?= config_item('base_uri') ?>assets/js/projects.js"></script>