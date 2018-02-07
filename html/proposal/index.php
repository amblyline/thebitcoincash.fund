<?php $config = include('../_config.php'); ?>

<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <?php
    $headInfo = [
      'title'       => 'Submit a Proposal',
      'description' => '',
      'url'         => '',
      'og_img'      => 'https://thebitcoincash.fund/assets/img/bcf_opengraph.jpg'
    ]; ?>
    <?php include($config['include_dir'] . 'head.php'); ?>
    <title><?= $headInfo['title'] . $config['title_post'] ?></title>
    <script>
      $().ready(function() {
        $.extend(jQuery.validator.messages, {
          required: 'This field is required'
        });
        $("#proposalForm-form").validate({
          rules: {
            Name: "required",
            Email: {
              required: true,
              email: true
            },
            Project_Name: "required",
            Project_Summary: "required",
            Required_Resources: "required",
            Itemized_Budget: "required",
            Timeline: "required",
            Goals: "required"
          },
          messages: {
            Name: "Please enter your name",
            Email: "Please enter a valid email address"
          }
        });
      });
    </script>
  </head>
  <body>
    <?php include($config['include_dir'] . 'nav.php'); ?>
    <div class="page-wrap">
      <div class="hero">
        <div class="container">
          <picture>
            <!-- Desktop -->
            <source media="(min-width: 650px)"
                    srcset="<?= $config['svg_dir']; ?>proposal_hero_desktop.svg" />
            <!-- Mobile -->
            <source srcset="<?= $config['svg_dir']; ?>proposal_hero_mobile.svg" />
            <img src="<?= $config['svg_dir']; ?>proposal_hero_desktop.svg" class="img-responsive hero-img" />
          </picture>
          <h1 class="hero-heading">Have a brilliant marketing idea?</h1>
          <p class="hero-lead">If you have an idea how to spread adoption of Bitcoin Cash, we'd like to help you fund it.</p>
        </div>
      </div>
      <div class="proposalIntro">
        <div class="container">
          <div class="row">
            <div class="col-md-5 proposalIntro-imgCol">
              <img src="<?= $config['svg_dir']; ?>proposal_submit.svg" class="img-responsive proposalIntro-img" />
            </div>
            <div class="col-md-7 proposalIntro-txtCol">
              <h2>What we're looking for</h2>
              <span class="border proposalIntro-border"></span>
              <p class="proposalIntro-lead">We are looking to promote any non-profit project that will help promote the adoption of Bitcoin Cash.</p>
              <p>
                Examples of projects we're funding now are Bitcoin Cash video tutorials, a BCH-specific JavaScript library and an info pack to help businesses adopt BCH. We've previously funded the incredible <a href="https://txhighway.com/" target="_blank">TX Highway</a>, as well as Bitcoin Cash meetups all over the world.
              </p>
              <p>If you have an idea like this that you think will help make Bitcoin Cash the future of money, submit the form below and we'll evaluate your proposal.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="proposalForm">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-md-push-7 proposalForm-txtCol">
              <h2 class="proposalForm-heading">SMART Principles</h2>
              <p class="proposalForm-text">Use S.M.A.R.T Principles when writing your proposal:</p>
              <ul class="proposalForm-list">
                <li><strong>Specific</strong> - Well defined. Clear to anyone that has a basic knowledge of the project.</li>
                <li><strong>Measurable</strong> - Know if the goal is obtainable. Find out when you have achieved your goal</li>
                <li><strong>Agreed Upon</strong> - Agreement with all the stakeholders what the goals should be.</li>
                <li><strong>Realistic</strong> - Within the availability of resources, knowledge and time.</li>
                <li><strong>Time-bound</strong> - Enough time to achieve the goal. Not too much time, which can affect project performance</li>
              </ul>
              <h2 class="proposalForm-heading">Example Proposals</h2>
              <p class="proposalForm-text">To get an idea of how to fill out the form below, take a look at these accepted proposals from other community members.</p>
              <ul class="proposalForm-list">
                <li><a href="https://github.com/cranau/FPR/blob/f06ec2b38b0ba11f35e669c592c4eef99456a5d2/fpr-0008.md" target="_blank">Bitcoin Cash Tutorial Series</a></li>
                <li><a href="https://github.com/Wecx/Seatac-Bitcoin-Cash-Acceptance-Initiative/blob/master/BCF-FPR-SeatacBCH.md" target="_blank">Seatac BCH Acceptance Initiative</a></li>
              </ul>
              <p class="proposalForm-text">If you have any questions, feel free to contact us or come and talk to us at chat.thebitcoincash.fund</p>
            </div>
            <div class="col-md-7 col-md-pull-5 proposalForm-frmCol">
              <form id="proposalForm-form" action="https://formcarry.com/s/HkK6QYWUG" method="POST">
                <input class="form-control input-lg proposalForm-input" type="text" placeholder="Name" name="Name">
                <input class="form-control input-lg proposalForm-input" type="email" placeholder="Email" name="Email">
                <input class="form-control input-lg proposalForm-input" type="text" placeholder="Project Name" name="Project_Name">
                <textarea class="form-control input-lg proposalForm-input" rows="4" placeholder="Project Summary" name="Project_Summary"></textarea>
                <textarea class="form-control input-lg proposalForm-input" rows="2" placeholder="Stakeholders (List all people involved. Pseudonyms are ok.)" name="Stakeholders"></textarea>
                <textarea class="form-control input-lg proposalForm-input" rows="4" placeholder="Required Resources (Skills, manpower, connections, etc.)" name="Required_Resources"></textarea>
                <textarea class="form-control input-lg proposalForm-input" rows="5" placeholder="Itemized Budget & Funding Schedule" name="Itemized_Budget"></textarea>
                <textarea class="form-control input-lg proposalForm-input" rows="5" placeholder="Timeline" name="Timeline"></textarea>
                <textarea class="form-control input-lg proposalForm-input" rows="3" placeholder="Goals (Define who you want to reach, as well as how and why.)" name="Goals"></textarea>
                <textarea class="form-control input-lg proposalForm-input" rows="5" placeholder="Additional Info (Optional)" name="Additional_Info"></textarea>
                <input class="btn btn-lg proposalForm-btn" type="submit" value="Submit for Review">
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php include($config['include_dir'] . 'footer.php'); ?>
    </div>
  </body>
</html>
