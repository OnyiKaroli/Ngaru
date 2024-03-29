<section>
                    <div class="container shadow-sm-2 rounded bg-white position-relative top-lg-n50px py-lg-0 py-6"
         data-animate="fadeInUp">
                      <form class="property-search py-lg-0 d-none d-lg-block">
                        <div class="row align-items-center ml-lg-0" id="accordion-3">
                          <div class="col-md-6 col-lg-3 order-1">
                            <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">Home Type</label>
                            <select class="form-control selectpicker bg-transparent border-bottom rounded-0 border-color-input"
                            title="Select" data-style="p-0 h-24 lh-17 text-dark" name="type">
                              <option>Condominium</option>
                              <option>Single-Family Home</option>
                              <option>Townhouse</option>
                              <option>Multi-Family Home</option>
                            </select>
                          </div>
                          <div class="col-md-6 col-lg-4 col-xl-5 pt-6 pt-md-0 order-2">
                            <label class="text-uppercase font-weight-500 letter-spacing-093">Search</label>
                            <div class="position-relative">
                              <input type="text" name="search"
                               class="form-control bg-transparent shadow-none border-top-0 border-right-0 border-left-0 border-bottom rounded-0 h-24 lh-17 pl-0 pr-4 font-weight-600 border-color-input placeholder-muted"
                               placeholder="Find something...">
                              <i class="far fa-search position-absolute pos-fixed-right-center pr-0 fs-18 mt-n3"></i>
                            </div>
                          </div>
                          <div class="col-sm pr-lg-0 pt-6 pt-lg-0 order-3">
                            <a href="#advanced-search-filters-3"
                       class="btn advanced-search btn-accent h-lg-100 w-100 shadow-none text-secondary rounded-0 fs-14 fs-sm-16 font-weight-600 text-left d-flex align-items-center collapsed"
                       data-toggle="collapse" data-target="#advanced-search-filters-3" aria-expanded="true"
                       aria-controls="advanced-search-filters-3">
                              Advanced Search
                            </a>
                          </div>
                          <div class="col-sm pt-6 pt-lg-0 order-sm-4 order-5">
                            <button type="submit"
                            class="btn btn-primary shadow-none fs-16 font-weight-600 w-100 py-lg-3">
                              Search
                            </button>
                          </div>
                          <div id="advanced-search-filters-3" class="col-12 py-sm-4 order-4 order-sm-5 collapse"
                     data-parent="#accordion-3">
                            <div class="row">
                              <div class="col-sm-6 col-lg-3 pt-6">
                                <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">Bedrooms</label>
                                <select class="form-control selectpicker bg-transparent border-bottom rounded-0 border-color-input"
                                    name="bedroom"
                                    title="All Bedrooms" data-style="p-0 h-24 lh-17 text-dark">
                                  <option>All Bedrooms</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                  <option>9</option>
                                  <option>10</option>
                                </select>
                              </div>
                              <div class="col-sm-6 col-lg-3 pt-6">
                                <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">Bathrooms</label>
                                <select class="form-control selectpicker bg-transparent border-bottom rounded-0 border-color-input"
                                    title="All Bathrooms" data-style="p-0 h-24 lh-17 text-dark" name="bathroom">
                                  <option>All Bathrooms</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                  <option>9</option>
                                  <option>10</option>
                                </select>
                              </div>
                              <div class="col-sm-6 col-lg-3 pt-6">
                                <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">Cities</label>
                                <select class="form-control selectpicker bg-transparent border-bottom rounded-0 border-color-input"
                                    name="city"
                                    title="All Cities" data-style="p-0 h-24 lh-17 text-dark">
                                  <option>All Cities</option>
                                  <option>New York</option>
                                  <option>Los Angeles</option>
                                  <option>Chicago</option>
                                  <option>Houston</option>
                                  <option>San Diego</option>
                                  <option>Las Vegas</option>
                                  <option>Las Vegas</option>
                                  <option>Atlanta</option>
                                </select>
                              </div>
                              <div class="col-sm-6 col-lg-3 pt-6">
                                <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">All Areas</label>
                                <select class="form-control selectpicker bg-transparent border-bottom rounded-0 border-color-input"
                                    name="areas"
                                    title="All Areas" data-style="p-0 h-24 lh-17 text-dark">
                                  <option>All Areas</option>
                                  <option>Albany Park</option>
                                  <option>Altgeld Gardens</option>
                                  <option>Andersonville</option>
                                  <option>Beverly</option>
                                  <option>Brickel</option>
                                  <option>Central City</option>
                                  <option>Coconut Grove</option>
                                </select>
                              </div>
                            </div>
                            <div class="row pt-2">
                              <div class="col-md-6 col-lg-4 pt-6 slider-range slider-range-secondary">
                                <label for="price-1-3" class="mb-4 text-gray-light">Price Range</label>
                                <div data-slider="true"
                                 data-slider-options='{"min":0,"max":1000000,"values":[100000,700000],"type":"currency"}'></div>
                                <div class="text-center mt-2">
                                  <input id="price-1-3" type="text" readonly name="price"
                                       class="border-0 amount text-center text-body font-weight-500">
                                </div>
                              </div>
                              <div class="col-md-6 col-lg-4 pt-6 slider-range slider-range-secondary">
                                <label for="area-size-3" class="mb-4 text-gray-light">Area Size</label>
                                <div data-slider="true"
                                 data-slider-options='{"min":0,"max":15000,"values":[0,13000],"type":"sqrt"}'></div>
                                <div class="text-center mt-2">
                                  <input id="area-size-3" type="text" readonly name="price"
                                       class="border-0 amount text-center text-body font-weight-500">
                                </div>
                              </div>
                              <div class="col-sm-6 col-lg-4 pt-6">
                                <label class="text-uppercase font-weight-500 letter-spacing-093 mb-1">Property
                                  ID</label>
                                <input type="text" name="search"
                                   class="form-control bg-transparent shadow-none border-top-0 border-right-0 border-left-0 border-bottom rounded-0 h-24 lh-17 p-0 font-weight-600 border-color-input"
                                   placeholder="Enter ID...">
                              </div>
                              <div class="col-12 pt-6 pb-2">
                                <a class="lh-17 d-inline-block other-feature collapsed" data-toggle="collapse"
                               href="#other-feature-3"
                               role="button"
                               aria-expanded="false" aria-controls="other-feature-3">
                                  <span class="fs-15 text-heading font-weight-500 hover-primary">Other Features</span>
                                </a>
                              </div>
                              <div class="collapse row mx-0 w-100" id="other-feature-3">
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check1-3" name="features[]">
                                    <label class="custom-control-label" for="check1-3">Air Conditioning</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check2-3" name="features[]">
                                    <label class="custom-control-label" for="check2-3">Laundry</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check4-3" name="features[]">
                                    <label class="custom-control-label" for="check4-3">Washer</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check5-3" name="features[]">
                                    <label class="custom-control-label" for="check5-3">Barbeque</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check6-3" name="features[]">
                                    <label class="custom-control-label" for="check6-3">Lawn</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check7-3" name="features[]">
                                    <label class="custom-control-label" for="check7-3">Sauna</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check8-3" name="features[]">
                                    <label class="custom-control-label" for="check8-3">WiFi</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check9-3" name="features[]">
                                    <label class="custom-control-label" for="check9-3">Dryer</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check10-3"
                                           name="features[]">
                                    <label class="custom-control-label" for="check10-3">Microwave</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check11-3"
                                           name="features[]">
                                    <label class="custom-control-label" for="check11-3">Swimming Pool</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check12-3"
                                           name="features[]">
                                    <label class="custom-control-label" for="check12-3">Window Coverings</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check13-3"
                                           name="features[]">
                                    <label class="custom-control-label" for="check13-3">Gym</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check14-3"
                                           name="features[]">
                                    <label class="custom-control-label" for="check14-3">Outdoor Shower</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check15-3"
                                           name="features[]">
                                    <label class="custom-control-label" for="check15-3">TV Cable</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check16-3"
                                           name="features[]">
                                    <label class="custom-control-label" for="check16-3">Refrigerator</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                      <form class="property-search property-search-mobile d-lg-none">
                        <div class="row align-items-lg-center" id="accordion-3-mobile">
                          <div class="col-12">
                            <div class="form-group mb-0 position-relative">
                              <a href="#advanced-search-filters-3-mobile"
                           class="text-secondary btn advanced-search shadow-none pr-3 pl-0 d-flex align-items-center position-absolute pos-fixed-left-center py-0 h-100 border-right collapsed"
                           data-toggle="collapse" data-target="#advanced-search-filters-3-mobile"
                           aria-expanded="true"
                           aria-controls="advanced-search-filters-3-mobile">
                              </a>
                              <input type="text"
                               class="form-control form-control-lg border shadow-none pr-9 pl-11 bg-white placeholder-muted"
                               name="key-word"
                               placeholder="Search...">
                              <button type="submit"
                                class="btn position-absolute pos-fixed-right-center p-0 text-heading fs-20 px-3 shadow-none h-100 border-left">
                                <i class="far fa-search"></i>
                              </button>
                            </div>
                          </div>
                          <div id="advanced-search-filters-3-mobile" class="col-12 pt-2 collapse"
                     data-parent="#accordion-3-mobile">
                            <div class="row mx-n2">
                              <div class="col-sm-6 pt-4 px-2">
                                <select class="form-control border shadow-none form-control-lg selectpicker bg-transparent"
                                    title="Select" data-style="btn-lg py-2 h-52 bg-transparent" name="type">
                                  <option>All status</option>
                                  <option>For Rent</option>
                                  <option>For Sale</option>
                                </select>
                              </div>
                              <div class="col-sm-6 pt-4 px-2">
                                <select class="form-control border shadow-none form-control-lg selectpicker bg-transparent"
                                    title="All Types" data-style="btn-lg py-2 h-52 bg-transparent" name="type">
                                  <option>Condominium</option>
                                  <option>Single-Family Home</option>
                                  <option>Townhouse</option>
                                  <option>Multi-Family Home</option>
                                </select>
                              </div>
                              <div class="col-sm-6 pt-4 px-2">
                                <select class="form-control border shadow-none form-control-lg selectpicker bg-transparent"
                                    name="bedroom"
                                    title="Bedrooms" data-style="btn-lg py-2 h-52 bg-transparent">
                                  <option>All Bedrooms</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                  <option>9</option>
                                  <option>10</option>
                                </select>
                              </div>
                              <div class="col-sm-6 pt-4 px-2">
                                <select class="form-control border shadow-none form-control-lg selectpicker bg-transparent"
                                    name="bathrooms"
                                    title="Bathrooms" data-style="btn-lg py-2 h-52 bg-transparent">
                                  <option>All Bathrooms</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                  <option>9</option>
                                  <option>10</option>
                                </select>
                              </div>
                              <div class="col-sm-6 pt-4 px-2">
                                <select class="form-control border shadow-none form-control-lg selectpicker bg-transparent"
                                    title="All Cities" data-style="btn-lg py-2 h-52 bg-transparent" name="city">
                                  <option>All Cities</option>
                                  <option>New York</option>
                                  <option>Los Angeles</option>
                                  <option>Chicago</option>
                                  <option>Houston</option>
                                  <option>San Diego</option>
                                  <option>Las Vegas</option>
                                  <option>Las Vegas</option>
                                  <option>Atlanta</option>
                                </select>
                              </div>
                              <div class="col-sm-6 pt-4 px-2">
                                <select class="form-control border shadow-none form-control-lg selectpicker bg-transparent"
                                    name="areas"
                                    title="All Areas" data-style="btn-lg py-2 h-52 bg-transparent">
                                  <option>All Areas</option>
                                  <option>Albany Park</option>
                                  <option>Altgeld Gardens</option>
                                  <option>Andersonville</option>
                                  <option>Beverly</option>
                                  <option>Brickel</option>
                                  <option>Central City</option>
                                  <option>Coconut Grove</option>
                                </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6 pt-6 slider-range slider-range-secondary">
                                <label for="price-3-mobile" class="mb-4 text-white">Price Range</label>
                                <div data-slider="true"
                                 data-slider-options='{"min":0,"max":1000000,"values":[100000,700000],"type":"currency"}'></div>
                                <div class="text-center mt-2">
                                  <input id="price-3-mobile" type="text" readonly
                                       class="border-0 amount text-center bg-transparent font-weight-500"
                                       name="price">
                                </div>
                              </div>
                              <div class="col-md-6 pt-6 slider-range slider-range-secondary">
                                <label for="area-size-3-mobile" class="mb-4">Area Size</label>
                                <div data-slider="true"
                                 data-slider-options='{"min":0,"max":15000,"values":[0,12000],"type":"sqrt"}'></div>
                                <div class="text-center mt-2">
                                  <input id="area-size-3-mobile" type="text" readonly
                                       class="border-0 amount text-center bg-transparent font-weight-500"
                                       name="area">
                                </div>
                              </div>
                              <div class="col-12 pt-4 pb-2">
                                <a class="lh-17 d-inline-block other-feature collapsed" data-toggle="collapse"
                               href="#other-feature-3-mobile"
                               role="button"
                               aria-expanded="false" aria-controls="other-feature-3-mobile">
                                  <span class="fs-15 font-weight-500 hover-primary">Other Features</span>
                                </a>
                              </div>
                              <div class="collapse row mx-0 w-100" id="other-feature-3-mobile">
                                <div class="col-sm-6 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="check1-3-mobile" name="feature[]">
                                    <label class="custom-control-label" for="check1-3-mobile">Air
                                      Conditioning</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="check2-3-mobile" name="feature[]">
                                    <label class="custom-control-label" for="check2-3-mobile">Laundry</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="check4-3-mobile" name="feature[]">
                                    <label class="custom-control-label" for="check4-3-mobile">Washer</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="check5-3-mobile" name="feature[]">
                                    <label class="custom-control-label" for="check5-3-mobile">Barbeque</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="check6-3-mobile" name="feature[]">
                                    <label class="custom-control-label" for="check6-3-mobile">Lawn</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="check7-3-mobile" name="feature[]">
                                    <label class="custom-control-label" for="check7-3-mobile">Sauna</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="check8-3-mobile" name="feature[]">
                                    <label class="custom-control-label" for="check8-3-mobile">WiFi</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="check9-3-mobile" name="feature[]">
                                    <label class="custom-control-label" for="check9-3-mobile">Dryer</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="check10-3-mobile" name="feature[]">
                                    <label class="custom-control-label" for="check10-3-mobile">Microwave</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="check11-3-mobile" name="feature[]">
                                    <label class="custom-control-label" for="check11-3-mobile">Swimming
                                      Pool</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="check12-3-mobile" name="feature[]">
                                    <label class="custom-control-label" for="check12-3-mobile">Window
                                      Coverings</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="check13-3-mobile" name="feature[]">
                                    <label class="custom-control-label" for="check13-3-mobile">Gym</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="check14-3-mobile" name="feature[]">
                                    <label class="custom-control-label" for="check14-3-mobile">Outdoor
                                      Shower</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="check15-3-mobile" name="feature[]">
                                    <label class="custom-control-label" for="check15-3-mobile">TV Cable</label>
                                  </div>
                                </div>
                                <div class="col-sm-6 py-2">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="check16-3-mobile" name="feature[]">
                                    <label class="custom-control-label"
                                           for="check16-3-mobile">Refrigerator</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </section>