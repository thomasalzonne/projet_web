<li class="col s12 hide-on-large-only show-on-medium-and-down">
    <div class="collapsible-header valign-wrapper">
      <div class="row">
        <div class="col s12 center">
            <img class="circle responsive-img about-img" src="<?php echo $about['image']?>" alt="<?php echo $about['nom']?>">
        </div>
      </div>
      <div class="col s6">

      </div>
      <div class="column">
        <div class="row">
          <div class="col s1">
              <span class="page-title"><?php echo $about['nom']?></span>
          </div>
        </div>
        <div class="row">
          <div class="col s7">

          </div>
        </div>
          <div class="row">
            <div class="col s2">
            <span><?php echo $about['date_debut']?> - <?php echo $about['date_fin']?></span>
            </div>
          </div>
        </div>
    </div>
    <div class="collapsible-body text-wrapper"><span><?php echo $about['description']?></span></div>
</li>
