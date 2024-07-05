<?php
 include 'layouts/session.php'; 
  include 'layouts/head-main.php'; 
  ?> 
  <head>
  <title><?php echo $language["Grid"]; ?> | Vinoteca </title>
   <?php
   include 'layouts/head.php';  
   include 'layouts/head-style.php'; 
   ?>
</head>
<style>
  .select2-container--default .select2-selection--multiple .select2-selection__rendered {
    padding: 5px;
  }

  .select2-container .select2-selection--single .select2-selection__rendered {
    padding: 5px;
    padding-right: 20px;
  }

  .select2-container .select2-selection--single {
    height: auto;
  }

  .select2-container--default .select2-selection--single .select2-selection__arrow {
    top: 8px;
  }

  .select2-container {
    width: 100% !important;
  }

  .form-check {
    white-space: nowrap;
    padding: 5px;
  }

  .modal-content {
    width: 80rem;
    max-width: 80rem;
  }

  @media (min-width: 576px) {
    .modal-dialog {
      width: 80rem;
      max-width: 80rem;
    }
  }

  @media (max-width: 576px) {
    .modal-content {
      width: auto;
      max-width: auto;
    }
  }

  .modal-header .btn-close {
    margin: auto;
  }

  .modal-header .text-right {
    margin: -.5rem -.5rem -.5rem auto;
  }

  .form-check-input {
    width: 0.8em;
    height: 0.7em;
    margin-top: 0.6em;
  }

  .btn-default:hover {
    background: lightgrey;
  }
  #example2_filter{
    float:right;
  }
</style> <?php include 'layouts/body.php'; ?>

<div id="layout-wrapper"> <?php include 'layouts/menu.php'; ?>

  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
         <?php
                            $maintitle = "Instagram";
                            $title = 'Filters';
                        ?> <?php include 'layouts/breadcrumb.php'; ?>
        <!-- end page title -->
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Filter Data</h4>
              </div>
              <div class="card-body">
                <div>
                  <div class="bg-soft-light p-3">
                    <div class="row align-items-start" style="min-height: 6rem;">
                      <div class="col-sm-4">
                        <div class="grid-example">
                          <label for="category">
                            <i class="fa fa-home"></i>&nbsp;&nbsp;Select a Category </label>
                          <button class="btn btn-default btn-block" id="categoryButton" data-bs-toggle="modal" data-bs-target="#userModal" style="width:100%; background:white;white-space:nowrap;overflow:hidden;">Please Select Category</button>
                          <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
                            <div class="modal-dialog" style="margin:3.75rem auto;">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="userModalLabel">Category</h5>
                                  <div class="text-right">
                                    <input type="search" name="search" id="" placeholder="Search" class="form-control">
                                  </div>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="width:20px;margin:0 2rem;"></button>
                                </div>
                                <div class="modal-body" style="width:100%;height:350px;overflow-x:auto;">
                                  <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-2">
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Activism" name="Activism" value="Activism">
                                        <label class="form-check-label">
                                          <b>Activism</b>
                                        </label>
                                      </div>
                                      <div class="form-check parent">
                                        <input class="form-check-input" type="checkbox" id="Beauty - All" name="Beauty - All" value="Beauty - All">
                                        <label class="form-check-label">
                                          <b>Beauty - All</b>
                                        </label>
                                        <span class="child">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Beauty" name="Beauty" value="Beauty">
                                            <label class="form-check-label">Beauty</label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Bodyart" name="Bodyart" value="Bodyart">
                                            <label class="form-check-label">Bodyart</label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Haircare" name="Haircare" value="Haircare">
                                            <label class="form-check-label">Haircare</label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Makeup" name="Makeup" value="Makeup">
                                            <label class="form-check-label">Makeup</label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Nailcare" name="Nailcare" value="Nailcare">
                                            <label class="form-check-label">Nailcare</label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Skincare" name="Skincare" value="Skincare">
                                            <label class="form-check-label">Skincare</label>
                                          </div>
                                        </span>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Animals & Pets" name="Animals & Pets" value="Animals & Pets">
                                        <label class="form-check-label">
                                          <b>Animals & Pets</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Art,Design" name="Art,Design" value="Art,Design">
                                        <label class="form-check-label">
                                          <b>Art & Design</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Auto & Moto & Transport" name="Auto & Moto & Transport" value="Auto & Moto & Transport">
                                        <label class="form-check-label">
                                          <b>Auto & Moto & Transport</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Books & Literature" name="Books & Literature" value="Books & Literature">
                                        <label class="form-check-label">
                                          <b>Books & Literature</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Career" name="Career" value="Career">
                                        <label class="form-check-label">
                                          <b>Career</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Crafts & DIY & Hobbies" name="Crafts & DIY & Hobbies" value="Crafts & DIY & Hobbies">
                                        <label class="form-check-label">
                                          <b>Crafts & DIY & Hobbies</b>
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-2">
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Dance" name="Dance" value="Dance">
                                        <label class="form-check-label">
                                          <b>Dance</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Dating & Relationships" name="Dating & Relationships" value="Dating & Relationships">
                                        <label class="form-check-label">
                                          <b>Dating & Relationships</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Devices & Gadgets" name="Devices & Gadgets" value="Devices & Gadgets">
                                        <label class="form-check-label">
                                          <b>Devices & Gadgets</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Diet & Nutrition" name="Diet & Nutrition" value="Diet & Nutrition">
                                        <label class="form-check-label">
                                          <b>Diet & Nutrition</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Education" name="Education" value="Education">
                                        <label class="form-check-label">
                                          <b>Education</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Entertainment" name="Entertainment" value="Entertainment">
                                        <label class="form-check-label">
                                          <b>Entertainment</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Entrepreneurship" name="Entrepreneurship" value="Entrepreneurship">
                                        <label class="form-check-label">
                                          <b>Entrepreneurship</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Esoteric & Spirituality" name="Esoteric & Spirituality" value="Esoteric & Spirituality">
                                        <label class="form-check-label">
                                          <b>Esoteric & Spirituality</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Events" name="Events" value="Events">
                                        <label class="form-check-label">
                                          <b>Events</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Family & Parenting" name="Family & Parenting" value="Family & Parenting">
                                        <label class="form-check-label">
                                          <b>Family & Parenting</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Finance" name="Finance" value="Finance">
                                        <label class="form-check-label">
                                          <b>Finance</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Fitness" name="Fitness" value="Fitness">
                                        <label class="form-check-label">
                                          <b>Fitness</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Food & Beverage" name="Food & Beverage" value="Food & Beverage">
                                        <label class="form-check-label">
                                          <b>Food & Beverage</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Food & Beverage/Alcohol" name="Food & Beverage/Alcohol" value="Food & Beverage/Alcohol">
                                        <label class="form-check-label">
                                          <b>Food & Beverage/Alcohol</b>
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-2">
                                      <div class="form-check parent">
                                        <input class="form-check-input" type="checkbox" id="Fashion - All" name="Fashion - All" value="Fashion - All">
                                        <label class="form-check-label">
                                          <b>Fashion - All</b>
                                        </label>
                                        <span class="child">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="fashion" name="fashion" value="fashion">
                                            <label class="form-check-label">fashion</label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Accessories" name="Accessories" value="Accessories">
                                            <label class="form-check-label">Accessories</label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Clothes" name="Clothes" value="Clothes">
                                            <label class="form-check-label">Clothes</label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Jewelry" name="Jewelry" value="Jewelry">
                                            <label class="form-check-label">Jewelry</label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Shoes" name="Shoes" value="Shoes">
                                            <label class="form-check-label">Shoes</label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Shopping" name="Shopping" value="Shopping">
                                            <label class="form-check-label">Shopping</label>
                                          </div>
                                        </span>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Games/Esports" name="Games/Esports" value="Games/Esports">
                                        <label class="form-check-label">
                                          <b>Games/Esports</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Health & Medicine" name="Health & Medicine" value="Health & Medicine">
                                        <label class="form-check-label">
                                          <b>Health & Medicine</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="History & Heritage" name="History & Heritage" value="History & Heritage">
                                        <label class="form-check-label">
                                          <b>History & Heritage</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Home Decor & Gardening" name="Home Decor & Gardening" value="Home Decor & Gardening">
                                        <label class="form-check-label">
                                          <b>Home Decor & Gardening</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Humor" name="Humor" value="Humor">
                                        <label class="form-check-label">
                                          <b>Humor</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Industry & Manufacturing" name="Industry & Manufacturing" value="Industry & Manufacturing">
                                        <label class="form-check-label">
                                          <b>Industry & Manufacturing</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="IT & Technology" name="IT & Technology" value="IT & Technology">
                                        <label class="form-check-label">
                                          <b>IT & Technology</b>
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-2">
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Law & Legal Issues" name="Law & Legal Issues" value="Law & Legal Issues">
                                        <label class="form-check-label">
                                          <b>Law & Legal Issues</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Lifestyle" name="Lifestyle" value="Lifestyle">
                                        <label class="form-check-label">
                                          <b>Lifestyle</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Luxury" name="Luxury" value="Luxury">
                                        <label class="form-check-label">
                                          <b>Luxury</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Marketing & PR" name="Marketing & PR" value="Marketing & PR">
                                        <label class="form-check-label">
                                          <b>Marketing & PR</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Mental & Wellness" name="Mental & Wellness" value="Mental & Wellness">
                                        <label class="form-check-label">
                                          <b>Mental & Wellness</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Music" name="Music" value="Music">
                                        <label class="form-check-label">
                                          <b>Music</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Nature & Environment" name="Nature & Environment" value="Nature & Environment">
                                        <label class="form-check-label">
                                          <b>Nature & Environment</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="News & Media" name="News & Media" value="News & Media">
                                        <label class="form-check-label">
                                          <b>News & Media</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Outdoor Activities" name="Outdoor Activities" value="Outdoor Activities">
                                        <label class="form-check-label">
                                          <b>Outdoor Activities</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Personal development" name="Personal development" value="Personal development">
                                        <label class="form-check-label">
                                          <b>Personal development</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Photography" name="Photography" value="Photography">
                                        <label class="form-check-label">
                                          <b>Photography</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Politics" name="Politics" value="Politics">
                                        <label class="form-check-label">
                                          <b>Politics</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Real Estate" name="Real Estate" value="Real Estate">
                                        <label class="form-check-label">
                                          <b>Real Estate</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Religion" name="Religion" value="Religion">
                                        <label class="form-check-label">
                                          <b>Religion</b>
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-2">
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Science & Research" name="Science & Research" value="Science & Research">
                                        <label class="form-check-label">
                                          <b>Science & Research</b>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Smoking" name="Smoking" value="Smoking">
                                        <label class="form-check-label">
                                          <b>Smoking</b>
                                        </label>
                                      </div>
                                      <div class="form-check parent">
                                        <input class="form-check-input" type="checkbox" id="Sports - All" name="Sports - All" value="Sports - All">
                                        <label class="form-check-label">
                                          <b>Sports - All</b>
                                        </label>
                                        <span class="child">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Sports" name="Sports" value="Sports">
                                            <label class="form-check-label">Sports</label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Extreme" name="Extreme" value="Extreme">
                                            <label class="form-check-label">Extreme</label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Fighting" name="Fighting" value="Fighting">
                                            <label class="form-check-label">Fighting</label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="Football" name="Football" value="Football">
                                            <label class="form-check-label">Football</label>
                                          </div>
                                        </span>
                                      </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default">Clear All</button>
                                  <button type="button" class="btn btn-info">Apply</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="grid-example mt-2 mt-sm-0">
                          <label for="Follower">
                            <i class="fa fa-user"></i>&nbsp;&nbsp;Select a Follower </label>
                          <select id="single" class="js-states form-control">
                            <option value="#" selected disabled="disabled">Select a Follower</option>
                            <option value="100K">≤ 100K</option>
                            <option value="150K">≤ 150K</option>
                            <option value="200K">≤ 200K</option>
                            <option value="500K">≤ 500K</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="grid-example mt-2 mt-sm-0">
                          <label for="City">
                            <i class="fa fa-city"></i>&nbsp;&nbsp;Select a City </label>
                          <select id="city" class="js-states form-control">
                            <option value="#" selected disabled="disabled">Select a City</option>
                            <option>Washington DC</option>
                            <option>Alabama</option>
                            <option>Alaska</option>
                            <option>Arizona</option>
                            <option>Arkansas</option>
                            <option>California</option>
                            <option>Colorado</option>
                            <option>Connecticut</option>
                            <option>Delaware</option>
                            <option>Georgia</option>
                            <option>Kentucky</option>
                            <option>Hawaii</option>
                            <option>Idaho</option>
                            <option>Illinois</option>
                            <option>Indiana</option>
                            <option>Iowa</option>
                            <option>Kansas</option>
                            <option>Kentucky</option>
                            <option>Louisiana</option>
                            <option>Maine</option>
                            <option>Maryland</option>
                            <option>Massachusets</option>
                            <option>Michigan</option>
                            <option>Minnesota</option>
                            <option>Mississippi</option>
                            <option>Missouri</option>
                            <option>Montana</option>
                            <option>Nebraska</option>
                            <option>Nevada</option>
                            <option>New Hampshire</option>
                            <option>New Jersey</option>
                            <option>New Mexico</option>
                            <option>New York</option>
                            <option>North Carolina</option>
                            <option>North Dakota</option>
                            <option>Ohio</option>
                            <option>Oklahoma</option>
                            <option>Oregon</option>
                            <option>Pennsylvania</option>
                            <option>Rhode Island</option>
                            <option>South Carolina</option>
                            <option>South Dakota</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Utah</option>
                            <option>Vermont</option>
                            <option>Virginia</option>
                            <option>Washington</option>
                            <option>West Virginia</option>
                            <option>Wisconsin</option>
                            <option>Wyoming</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bg-soft-light p-3">
                    <div class="row align-items-start" style="min-height: 6rem;">
                      <div class="col-sm-4">
                        <div class="grid-example mt-2 mt-sm-0">
                          <label for="Follower">
                            <i class="fa fa-flag"></i>&nbsp;&nbsp;Select a Country </label>
                          <select id="country" class="js-states form-control">
                            <option value="#" selected disabled="disabled">Select a Country</option>
                            <option value="US">U S</option>
                            <option value="others">Others</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="grid-example">
                          <label for="Keyword">
                            <i class="fa fa-key"></i>&nbsp;&nbsp;Select a Keyword </label>
                          <select class="form-control" multiple="multiple">
                            <option>Key 1</option>
                            <option>Key 2</option>
                            <option>Key 3</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="grid-example mt-2 mt-sm-0">
                          <label for="Follower">
                            <i class="fa fa-lock"></i>&nbsp;&nbsp;Select a Account Type </label>
                          <select id="country" class="js-states form-control">
                            <option value="#" selected disabled="disabled">Select a Account Type</option>
                            <option value="verified">Verified</option>
                            <option value="not verfied">Not Verified</option>
                            <option value="any">Any</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bg-soft-light p-3">
                    <div class="row align-items-start" style="min-height: 6rem;">
                      <div class="col-sm-4">
                        <div class="grid-example mt-2 mt-sm-0">
                          <label for="Follower">
                            <i class="fa fa-user"></i>&nbsp;&nbsp;Select a Private </label>
                          <select id="private" class="js-states form-control">
                            <option value="#" selected disabled="disabled">Select a Private</option>
                            <option value="Yes">Yes</option>
                            <option value="not">Not</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-info" style="float:right;" id="search_catgory" disabled>
                      <i class="fa fa-search"></i>&nbsp;&nbsp;Search </button>
                  </div>
                </div>
              </div>
              <!-- end card body -->
            </div>
            <!-- end card -->
          </div>
          <!-- end col -->
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header" id="filter_data">
                <h4 class="card-title">Filter Data</h4>
                <div id="filter_data"></div> <!-- This is where the filtered data will be loaded -->
                <table id="example2" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Followers Count</th>
                            <th>Following Count</th>
                            <th>Country</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Table body content will be generated dynamically -->
                    </tbody>
                </table>

              </div>
              <div class="card-body"></div>
            </div>
            <!-- container-fluid -->
          </div>
          <!-- End Page-content --> <?php include 'layouts/footer.php'; ?>
        </div>
        <!-- end main content-->
      </div>
      <!-- END layout-wrapper --> <?php include 'layouts/right-sidebar.php'; ?> <?php include 'layouts/vendor-scripts.php'; ?> <script src="assets/js/app.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

      <script>
        $("select").select2({
          tags: true,
          tokenSeparators: [',', ' ']
        });
        $(document).ready(function() {
    var dataTable = $('#example2').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: 'php/filter.php',
            type: 'POST',
            data: function(d) {
                // Additional data to be sent with the request
                d.category = $('#categoryButton').text().trim(); // Retrieve category data
            }
        },
        "columns": [
            { "data": "fullname" },
            { "data": "follower_count" },
            { "data": "following_count" },
            { "data": "country" }
        ],
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "pagingType": "full_numbers",
        "dom": '<"row"<"col-sm-6"l><"col-sm-6"f>>tip' 
    });

    // Trigger search on category change
    $('#search_catgory').on('click', function() {
        dataTable.draw();
    });
});




        
</script>
<script>
        function filterCheckboxes(searchTerm) {
          searchTerm = searchTerm.toLowerCase();
          $('input[type="checkbox"]').each(function() {
            var categoryText = $(this).next('label').text().toLowerCase();
            if (categoryText.indexOf(searchTerm) === -1) {
              $(this).parent().hide();
            } else {
              $(this).parent().show();
            }
          });
        }
        $(document).ready(function() {
          $('#userModal input[name="search"]').keyup(function() {
            var searchTerm = $(this).val();
            filterCheckboxes(searchTerm);
          });
        });
        $(document).ready(function() {
          function updateButtonText() {
            var selectedCategories = [];
            $('#userModal input[type="checkbox"]:checked').each(function() {
              selectedCategories.push($(this).val());
            });
            if (selectedCategories.length > 0) {
              $('#categoryButton').text(selectedCategories.join(', '));
            } else {
              $('#categoryButton').text('Please Select Category');
            }
          }
          $('#userModal .btn-info').click(function() {
            // Update button text
            updateButtonText();
            // Close modal
            $('#userModal').modal('hide');
          });
          $('#userModal .btn-default').click(function() {
            $('#userModal input[type="checkbox"]').prop('checked', false);
            updateButtonText();
          });
          $('#userModal').on('change', 'input[type="checkbox"]', function() {
            var $checkbox = $(this);
            if ($checkbox.parent().hasClass('parent')) {
              var isChecked = $checkbox.prop('checked');
              $checkbox.siblings('.child').find('input[type="checkbox"]').prop('checked', isChecked);
            } else {}
            updateButtonText();
          });
          $('.form-check-input, .form-control').on('change keyup', function() {
            var inputNotEmpty = $('.form-check-input').val().trim() !== '';
            var selectOptionSelected = $('.form-control').val() !== '';
            // alert(inputNotEmpty);
            if (inputNotEmpty || selectOptionSelected) {
              // alert('ok');
              $('#search_catgory').prop('disabled', false);
            } else {
              $('#search_catgory').prop('disabled', true);
            }
          });
        });
      </script>
      </body>
      </html>