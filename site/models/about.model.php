<li class="col s12 hide-on-med-and-down">
    <div class="collapsible-header valign-wrapper">
        <div class="col s1">
            <img class="circle responsive-img about-img" src="<?php echo $about['image']?>" alt="<?php echo $about['nom']?>">
        </div>
        <div class="col s1">

        </div>
        <div class="col s1">
            <span class="page-title"><?php echo $about['nom']?></span>
        </div>
        <div class="col s7">

        </div>
        <div class="col s2">
        <span><?php echo $about['date_debut']?> - <?php echo $about['date_fin']?></span>
        </div>
    </div>
    <div class="collapsible-body"><span><?php echo $about['description']?></span></div>
</li>
