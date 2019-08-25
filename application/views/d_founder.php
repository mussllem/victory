<!-- Start main-content -->
  <div class="main-content">
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="">
      <div class="container pt-20 pb-5">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-1">
              <h2 class="text-theme-colored2 font-36"></h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="team" class="bg-silver-deep">
      <div class="container">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12 col-md-offset-5">
              <h2 class="text-uppercase title">CO <span class="text-theme-colored2">Founder</span></h2>
            </div>
          </div>
        </div><hr>
        <div class="row mtli-row-clearfix">
          <?php
          foreach ($team_founders as $team_founder){
          ?>
            <div class='col-xs-12 col-sm-6 col-md-4'>
            <div class='team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30'>
              <div class='team-thumb'>
                <img class='img-circle' alt='' src='<?php echo base_url();?>theme/img/founder/<?php echo $team_founder->foto; ?>' >
                <div class='team-overlay'></div>
                <ul class='styled-icons team-social icon-sm'>
                  <li><a href='<?php echo $team_founder->facebook;?>'><i class='fa fa-facebook'></i></a></li>
                  <li><a href='<?php echo $team_founder->twitter;?>'><i class='fa fa-twitter'></i></a></li>
                  <li><a href='<?php echo $team_founder->instagram;?>'><i class='fa fa-instagram'></i></a></li>
                  <li><a href='<?php echo $team_founder->linkedin;?>'><i class='fa fa-linkedin'></i></a></li>
                </ul>
              </div>
              <div class='team-details'>
                <h4 class='text-uppercase text-theme-colored font-weight-600 m-5'><?php echo $team_founder->nama; ?></h4>
                <h6 class='text-gray font-13 font-weight-400 line-bottom-centered mt-0'>CO-Founder / <?php echo $team_founder->jobdesk; ?></h6>
                <p class='hidden-md'>-</h4>
                <form action='<?php echo base_url();?>founder/detail' method='post'>
                <input type='hidden' name='id' value='<?php echo $team_founder->id; ?>'>
                <button class='btn btn-xs btn-theme-colored text-uppercase btn-block pt-20 pb-20'>Read more</button>
                </form>
                </p>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
        </div>
        <div class="section-title">
          <div class="row">
            <div class="col-md-12 col-md-offset-5">
              <h2 class="text-uppercase title"><span class="text-theme-colored2">Team Creative</span></h2>
            </div>
          </div>
        </div><hr>
        <div class="row mtli-row-clearfix">
          <?php
          foreach ($team_creatives as $team_creative){
          ?>
            <div class='col-xs-12 col-sm-6 col-md-4'>
            <div class='team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30'>
              <div class='team-thumb'>
                <img class='img-circle' alt='' src='<?php echo base_url();?>theme/img/founder/<?php echo $team_creative->foto; ?>' >
                <div class='team-overlay'></div>
                <ul class='styled-icons team-social icon-sm'>
                  <li><a href='<?php echo $team_creative->facebook;?>'><i class='fa fa-facebook'></i></a></li>
                  <li><a href='<?php echo $team_creative->twitter;?>'><i class='fa fa-twitter'></i></a></li>
                  <li><a href='<?php echo $team_creative->instagram;?>'><i class='fa fa-instagram'></i></a></li>
                  <li><a href='<?php echo $team_creative->linkedin;?>'><i class='fa fa-linkedin'></i></a></li>
                </ul>
              </div>
              <div class='team-details'>
                <h4 class='text-uppercase text-theme-colored font-weight-600 m-5'><?php echo $team_creative->nama; ?></h4>
                <p class='hidden-md'>-</h4>
                <form action='<?php echo base_url();?>founder/detail' method='post'>
                <input type='hidden' name='id' value='<?php echo $team_creative->id; ?>'>
                <button class='btn btn-xs btn-theme-colored text-uppercase btn-block pt-20 pb-20'>Read more</button>
                </form>
                </p>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
        </div>
      </div>
    </section>
  </div>