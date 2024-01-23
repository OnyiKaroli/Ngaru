            <div class="col-lg-4 mb-6 mb-lg-0 primary-sidebar sidebar-sticky" id="sidebar">
              <div class="primary-sidebar-inner">
                <div class="card mb-4">
                  <div class="card-body px-6 pt-5 pb-6">
                    <h4 class="card-title fs-16 lh-2 text-dark mb-3">Categories</h4>
                    <form>
                      <div class="position-relative">
                        <input type="text" id="search02"
                                           class="form-control form-control-lg border-0 shadow-none"
                                           placeholder="Search..." name="search">
                        <div class="position-absolute pos-fixed-center-right">
                          <button type="submit" class="btn fs-15 text-dark shadow-none"><i
                                                class="fal fa-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card mb-4">
                  <div class="card-body px-6 pt-5 pb-6">
                    <h4 class="card-title fs-16 lh-2 text-dark mb-3">Categories</h4>
                    <?php
                      $select = mysqli_query($server, "SELECT COUNT(`id`), `category` FROM `blogs_tb` WHERE `status`!='pending' GROUP BY `category` ORDER BY COUNT(`id`) DESC LIMIT 5") or die(mysqli_error($server));
                      while ($column = mysqli_fetch_assoc($select)) {
                    ?>
                    <ul class="list-group list-group-no-border">
                      <li class="list-group-item p-0">
                        <a href="listing-with-left-sidebar.html"
                                       class="d-flex text-body hover-primary">
                          <span class="lh-29"><?php echo $column['category']; ?></span>
                          <!--span class="d-block ml-auto"><?php //echo COUNT(`id`); ?></span-->
                        </a>
                      </li>
                    </ul>
                    <?php }?>
                  </div>
                </div>
                <div class="card mb-4">
                  <div class="card-body px-6 pt-5 pb-6">
                    <h4 class="card-title fs-16 lh-2 text-dark mb-3">Latest Posts</h4>
                    <?php
                      $select = mysqli_query($server, "SELECT * FROM `blogs_tb` WHERE `status`!='pending' ORDER BY `tdate` DESC LIMIT 3") or die(mysqli_error($server));
                      while ($column = mysqli_fetch_assoc($select)) {
                    ?>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item px-0 pt-0 pb-3">
                        <div class="media">
                          <div class="position-relative mr-3">
                            <?php echo "<a href='blog-single?bid=".$column['id']."'
                                               class='d-block w-100px rounded pt-11 bg-img-cover-center'
                                               style='background-image: url('images/post-02.jpg')'>
                            </a>
                            <a href='blog-single?bid=".$column['id']."'
                                               class='badge text-white bg-dark-opacity-04 m-1 fs-13 font-weight-500 bg-hover-primary hover-white position-absolute pos-fixed-top'>
                                               ".$column['category']."
                            </a>"?>
                          </div>
                          <div class="media-body">
                            <h4 class="fs-14 lh-186 mb-1">
                              <?php echo "<a href='blog-single?bid=".$column['id']."'
                                                   class='text-dark hover-primary'>
                                                   ".$column['title']."
                              </a>"?>
                            </h4>
                            <div class="text-gray-light">
                            <?php echo $column['date']; ?>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <?php }?>
                  </div>
                </div>
                <div class="card mb-4">
                  <div class="card-body px-6 py-5">
                    <h4 class="card-title fs-16 lh-2 text-dark mb-3">Popular Tags</h4>
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item mb-2">
                        <a href="#"
                                       class="px-2 py-1 d-block fs-13 lh-17 bg-gray-03 text-muted hover-white bg-hover-primary rounded">designer</a>
                      </li>
                      <li class="list-inline-item mb-2">
                        <a href="#"
                                       class="px-2 py-1 d-block fs-13 lh-17 bg-gray-03 text-muted hover-white bg-hover-primary rounded">mockup</a>
                      </li>
                      <li class="list-inline-item mb-2">
                        <a href="#"
                                       class="px-2 py-1 d-block fs-13 lh-17 bg-gray-03 text-muted hover-white bg-hover-primary rounded">template</a>
                      </li>
                      <li class="list-inline-item mb-2">
                        <a href="#"
                                       class="px-2 py-1 d-block fs-13 lh-17 bg-gray-03 text-muted hover-white bg-hover-primary rounded">IT
                          Security</a>
                      </li>
                      <li class="list-inline-item mb-2">
                        <a href="#"
                                       class="px-2 py-1 d-block fs-13 lh-17 bg-gray-03 text-muted hover-white bg-hover-primary rounded">IT
                          services</a>
                      </li>
                      <li class="list-inline-item mb-2">
                        <a href="#"
                                       class="px-2 py-1 d-block fs-13 lh-17 bg-gray-03 text-muted hover-white bg-hover-primary rounded">business</a>
                      </li>
                      <li class="list-inline-item mb-2">
                        <a href="#"
                                       class="px-2 py-1 d-block fs-13 lh-17 bg-gray-03 text-muted hover-white bg-hover-primary rounded">videos</a>
                      </li>
                      <li class="list-inline-item mb-2">
                        <a href="#"
                                       class="px-2 py-1 d-block fs-13 lh-17 bg-gray-03 text-muted hover-white bg-hover-primary rounded">wordpress
                          theme</a>
                      </li>
                      <li class="list-inline-item mb-2">
                        <a href="#"
                                       class="px-2 py-1 d-block fs-13 lh-17 bg-gray-03 text-muted hover-white bg-hover-primary rounded">sketch</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>