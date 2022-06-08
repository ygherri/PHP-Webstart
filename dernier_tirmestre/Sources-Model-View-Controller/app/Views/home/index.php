  <!--Body Container-->
      <div id="page-content">
        <!--Home slider-->
        <section class="slideshow slideshow-wrapper">
          <div
            id="carouselExampleControls"
            class="carousel slide"
            data-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  class="d-block w-100"
                  src="images/photo1.jpg"
                  alt="First slide"
                />
              </div>
              <div class="carousel-item">
                <img
                  class="d-block w-100"
                  src="images/photo1.jpg"
                  alt="Second slide"
                />
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Third slide" />
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#carouselExampleControls"
              role="button"
              data-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleControls"
              role="button"
              data-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </section>
        <!--End Home slider-->

        <!--Best Seller With Tabs-->
        <section class="section product-slider tab-slider-product">
          <div class="container">
            <div class="section-header">
              <h2>Catégories</h2>
            </div>
            <div class="tabs-listing">
              <ul class="tabs clearfix tabs-style2">
                <li class="active" rel="tab1">Montres Femmes</li>
                <li rel="tab2">Montres Hommes</li>
                <li rel="tab3" class="tab_last">Bracelets de montres</li>
              </ul>
              <div class="tab_container">
                <h3
                  class="tab_drawer_heading d_active body-font text-uppercase text-center"
                  rel="tab1"
                >
                  Montres Femmes
                  <i class="an an-angle-down-r" aria-hidden="true"></i>
                </h3>
                <div id="tab1" class="tab_content">
                  <div class="grid-products">
                    <div class="row">
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              data-src="images/montre1.jpeg"
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                          </a>
                          <!-- end product image -->

                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>
                              <li></li>
                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                              <li></li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html">Martha Knit Top</a>
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            
                            <span class="price">$219.00</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star-o"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              data-src="images/montre1.jpeg"
                              src="images/montre1.jpeg"
                              title=""
                            />
                            <!-- End image -->
                          </a>
                          <!-- end product image -->

                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-quickshop-popup"
                                  href="#pro-quickshop1"
                                  data-bs-toggle="offcanvas"
                                  data-bs-target="#pro-quickshop1"
                                  aria-controls="pro-quickshop1"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Quick Shop</span>
                                </a>
                                <!--end Cart Button-->
                              </li>
                              <li></li>
                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                              <li></li>
                            </ul>
                          </div>
                          <!--End Product Button-->

                          <!-- Product Quickshop Form -->
                          <div
                            class="quickshop-content d-flex-center"
                            data-bs-scroll="true"
                            data-bs-backdrop="false"
                            tabindex="-1"
                            id="pro-quickshop1"
                          >
                            <button
                              type="button"
                              class="btn-close text-reset ms-auto position-absolute top-0 end-0 m-1"
                              data-bs-dismiss="offcanvas"
                              aria-label="Close"
                            ></button>
                            <div
                              class="offcanvas-body quickshop-variant h-100 d-flex align-items-start align-items-sm-center"
                            >
                              <form
                                method="post"
                                action="#"
                                id="product_form_1052"
                                class="product-form align-items-center text-center"
                                accept-charset="UTF-8"
                                enctype="multipart/form-data"
                              >
                                <!-- Product Price -->
                                <div
                                  class="product-single__price lh-1 mb-3 mt-0 mx-auto"
                                >
                                  <span class="visually-hidden"
                                    >Regular price</span
                                  >
                                  <span class="product-price__sale--single">
                                   <span
                                      class="product-price__price product-price__sale0"
                                      >$199.00</span
                                    >
                                  </span>
                                </div>
                                <!-- End Product Price -->
                              
                                <!-- Swatches Size -->
                                <div
                                  class="swatch clearfix mb-3 swatch-1 option2"
                                  data-option-index="1"
                                >
                                  <div class="product-form__item">
                                    <label
                                      class="label d-flex justify-content-center"
                                      >Size:<span class="required d-none"
                                        >*</span
                                      ><span class="slVariant ms-1 fw-bold"
                                        >S</span
                                      ></label
                                    >
                                    <ul
                                      class="swatches-size d-flex-justify-center list-unstyled m-0 clearfix"
                                    >
                                      <li
                                        data-value="S"
                                        class="swatch-element s available active"
                                      >
                                        <label
                                          class="swatchLbl rounded-0 medium"
                                          title="S"
                                          >S</label
                                        ><span class="tooltip-label">S</span>
                                      </li>
                                      <li
                                        data-value="M"
                                        class="swatch-element m available"
                                      >
                                        <label
                                          class="swatchLbl rounded-0 medium"
                                          title="M"
                                          >M</label
                                        ><span class="tooltip-label">M</span>
                                      </li>
                                      <li
                                        data-value="L"
                                        class="swatch-element l available"
                                      >
                                        <label
                                          class="swatchLbl rounded-0 medium"
                                          title="L"
                                          >L</label
                                        ><span class="tooltip-label">L</span>
                                      </li>
                                      <li
                                        data-value="XL"
                                        class="swatch-element xl available"
                                      >
                                        <label
                                          class="swatchLbl rounded-0 medium"
                                          title="XL"
                                          >XL</label
                                        ><span class="tooltip-label">XL</span>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <!-- End Swatches Size -->
                                <!-- Product Action -->
                                <div class="product-form-submit mx-auto">
                                  <button
                                    type="submit"
                                    name="add"
                                    class="btn rounded product-form__cart-submit btn-small px-3"
                                  >
                                    <span>Ajouter au panier</span>
                                  </button>
                                  <button
                                    type="submit"
                                    name="add"
                                    class="btn rounded product-form__sold-out btn-small px-3 d-none"
                                    disabled="disabled"
                                  >
                                    Sold out
                                  </button>
                                  <button
                                    type="button"
                                    name="buy"
                                    class="btn rounded btn-outline-primary proceed-to-checkout btn-small px-3 d-none"
                                  >
                                    Buy it now
                                  </button>
                                </div>
                                <!-- End Product Action -->
                              </form>
                            </div>
                          </div>
                          <!-- End Product Quickshop Form -->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html"
                              >Long Sleeve T-shirts</a
                            >
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            <span class="price">$199.00</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star"></i> <i class="an an-star"></i
                            ><i class="an an-star"></i>
                            <i class="an an-star"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item mb-3">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                           
                          </a>
                          <!-- end product image -->

                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                              <li></li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html"
                              >Button Up Top Black</a
                            >
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            <span class="price">$99.01</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star-o"></i>
                            <i class="an an-star-o"></i>
                            <i class="an an-star-o"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item mb-3">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                           
                          </a>
                          <!-- end product image -->
                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                              <li>
                                <!--End Compare Button-->
                              </li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html"
                              >Sunset Sleep Scarf Top</a
                            >
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            <span class="price">$99.01</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star-o"></i>
                            <i class="an an-star-o"></i>
                            <i class="an an-star-o"></i>
                            <i class="an an-star-o"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                           
                          </a>
                          <!-- end product image -->

                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                              <li></li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html"
                              >Backpack With Contrast Bow</a
                            >
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            <span class="price">$39.01</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star-o"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                           
                          </a>
                          <!-- end product image -->

                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                              <li></li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html">Puffer Jacket</a>
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            <span class="price">$89.00</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star-o"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                           
                          </a>
                          <!-- end product image -->

                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html">Women Long Jeans</a>
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            <span class="price">$189.00</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star-o"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                           
                          </a>
                          <!-- end product image -->

                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html">Long Sleev Top</a>
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            <span class="price">$189.00</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star-o"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                    </div>
                  </div>
                  <div class="view-collection text-center mt-3 mt-md-4">
                    <a href="shop-top-filter.html" class="btn btn-primary"
                      >Voir la Collection</a
                    >
                  </div>
                </div>
                <h3
                  class="tab_drawer_heading body-font text-uppercase text-center"
                  rel="tab2"
                >
                  Montres Hommes
                  <i class="an an-angle-down-r" aria-hidden="true"></i>
                </h3>
                <div id="tab2" class="tab_content">
                  <div class="grid-products">
                    <div class="row">
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                           
                          </a>
                          <!-- end product image -->

                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html">Martha Knit Top</a>
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                           
                            <span class="price">$219.00</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star-o"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                           
                          </a>
                          <!-- end product image -->

                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html"
                              >Long Sleeve T-shirts</a
                            >
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            <span class="price">$199.00</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star"></i> <i class="an an-star"></i
                            ><i class="an an-star"></i>
                            <i class="an an-star"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                           
                          </a>
                          <!-- end product image -->

                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html"
                              >Stand Collar Slim Shirt</a
                            >
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            <span class="price">$399.00</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star-o"></i>
                            <i class="an an-star-o"></i>
                            <i class="an an-star-o"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                            
                          </a>
                          <!-- end product image -->
                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html"
                              >Weave Hoodie Sweatshirt</a
                            >
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            <span class="price">$199.00</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star-o"></i>
                            <i class="an an-star-o"></i>
                            <i class="an an-star-o"></i>
                            <i class="an an-star-o"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                           
                          </a>
                          <!-- end product image -->

                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html"
                              >Cool Short Sleev T-Shirt</a
                            >
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            <span class="price">$59.00</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star-o"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                           
                          </a>
                          <!-- end product image -->

                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html"
                              >Collar Denim Jacket</a
                            >
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            <span class="price">$59.00</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star-o"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                           
                          </a>
                          <!-- end product image -->

                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html">Black Solid Cap</a>
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                           
                            <span class="price">$89.00</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star-o"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                            
                          </a>
                          <!-- end product image -->

                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html"
                              >Leather backpack Black</a
                            >
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            <span class="price">$199.00</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star"></i> <i class="an an-star"></i
                            ><i class="an an-star"></i>
                            <i class="an an-star"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                    </div>
                  </div>
                  <div class="view-collection text-center mt-3 mt-md-4">
                    <a href="shop-top-filter.html" class="btn btn-primary"
                      >View Collection</a
                    >
                  </div>
                </div>
                <h3
                  class="tab_drawer_heading body-font text-uppercase text-center"
                  rel="tab3"
                >
                  Bracelets de montres
                  <i class="an an-angle-down-r" aria-hidden="true"></i>
                </h3>
                <div id="tab3" class="tab_content">
                  <div class="grid-products">
                    <div class="row">
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                           
                          </a>
                          <!-- end product image -->

                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html">Black Solid Cap</a>
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            
                            <span class="price">$89.00</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star-o"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                           
                          </a>
                          <!-- end product image -->

                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html"
                              >Leather backpack Black</a
                            >
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            <span class="price">$199.00</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star"></i> <i class="an an-star"></i
                            ><i class="an an-star"></i>
                            <i class="an an-star"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                           
                          </a>
                          <!-- end product image -->
                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html"
                              >Aviator Sunglasses</a
                            >
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            <span class="price">$59.00</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star-o"></i>
                            <i class="an an-star-o"></i>
                            <i class="an an-star-o"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                            
                          </a>
                          <!-- end product image -->
                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html"
                              >Classic Watch Khaki</a
                            >
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            <span class="price">$499.00</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star-o"></i>
                            <i class="an an-star-o"></i>
                            <i class="an an-star-o"></i>
                            <i class="an an-star-o"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                           
                          </a>
                          <!-- end product image -->

                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html"
                              >Backpack With Contrast Bow</a
                            >
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            <span class="price">$39.01</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star-o"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                           
                          </a>
                          <!-- end product image -->

                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                              <li></li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html">Classic Tie</a>
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            <span class="price">$49.00</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star-o"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                           
                          </a>
                          <!-- end product image -->

                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                              <li></li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html">Knit Glove</a>
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            <span class="price">$89.00</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star-o"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="product-layout1.html" class="product-img">
                            <!-- image -->
                            <img
                              class=""
                              src="images/montre1.jpeg"
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                           
                          </a>
                          <!-- end product image -->

                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="#pro-addtocart-popup"
                                >
                                  <i class="icon an an-cart-l"></i>
                                  <span class="tooltip-label">Ajouter au panier</span>
                                </a>
                                <!--end Cart Button-->
                              </li>

                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="my-wishlist.html"
                                >
                                  <i class="icon an an-heart-l"></i>
                                  <span class="tooltip-label"
                                    >Ajouter aux favoris </span
                                  >
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                              <li></li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a href="product-layout1.html">Winter Cap</a>
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            <span class="price">$79.00</span>
                          </div>
                          <!-- End product price -->
                          <!--Product Review-->
                          <div class="product-review">
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star"></i>
                            <i class="an an-star-o"></i>
                          </div>
                          <!--End Product Review-->
                        </div>
                        <!-- End product details -->
                      </div>
                    </div>
                  </div>
                  <div class="view-collection text-center mt-3 mt-md-4">
                    <a href="shop-top-filter.html" class="btn btn-primary"
                      >View Collection</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--End Best Seller With Tabs-->

        <!--Collection Slider Section-->

        <!--Collection Slider Section-->

        <!--Top Picks On Fashion Product Slider-->
        <section class="section product-slider">
          <div class="container">
            <div class="row">
              <div class="section-header col-12">
                <h2>Meillures ventes</h2>
              </div>
            </div>
            <div class="productSlider grid-products">
              <div class="item">
                <!-- start product image -->
                <div class="product-image">
                  <!-- start product image -->
                  <a href="product-layout1.html" class="product-img">
                    <!-- image -->
                    <img
                      class=""
                      src="images/montre1.jpeg"
                      alt="image"
                      title=""
                    />
                    <!-- End image -->
                   
                  </a>
                  <!-- end product image -->

                  <!--Product Button-->
                  <div class="button-set style2">
                    <ul>
                      <li>
                        <!--Cart Button-->
                        <a
                          class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                          href="#pro-addtocart-popup"
                        >
                          <i class="icon an an-cart-l"></i>
                          <span class="tooltip-label">Ajouter au panier</span>
                        </a>
                        <!--end Cart Button-->
                      </li>

                      <li>
                        <!--Wishlist Button-->
                        <a
                          class="btn-icon wishlist add-to-wishlist"
                          href="my-wishlist.html"
                        >
                          <i class="icon an an-heart-l"></i>
                          <span class="tooltip-label">Ajouter aux favoris </span>
                        </a>
                        <!--End Wishlist Button-->
                      </li>
                      <li>
                        <!--End Compare Button-->
                      </li>
                    </ul>
                  </div>
                  <!--End Product Button-->
                </div>
                <!-- end product image -->
                <!--start product details -->
                <div class="product-details text-left">
                  <!-- product name -->
                  <div class="product-name">
                    <a href="product-layout1.html">Martha Knit Top</a>
                  </div>
                  <!-- End product name -->
                  <!-- product price -->
                  <div class="product-price">
                   
                    <span class="price">$219.00</span>
                  </div>
                  <!-- End product price -->
                  <!--Product Review-->
                  <div class="product-review">
                    <i class="an an-star"></i> <i class="an an-star"></i>
                    <i class="an an-star"></i> <i class="an an-star"></i>
                    <i class="an an-star-o"></i>
                  </div>
                  <!--End Product Review-->
                </div>
                <!-- End product details -->
              </div>
              <div class="item">
                <!-- start product image -->
                <div class="product-image">
                  <!-- start product image -->
                  <a href="product-layout1.html" class="product-img">
                    <!-- image -->
                    <img
                      class=""
                      src="images/montre1.jpeg"
                      alt="image"
                      title=""
                    />
                    <!-- End image -->
                   
                  </a>
                  <!-- end product image -->

                  <!--Product Button-->
                  <div class="button-set style2">
                    <ul>
                      <li>
                        <!--Cart Button-->
                        <a
                          class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                          href="#pro-addtocart-popup"
                        >
                          <i class="icon an an-cart-l"></i>
                          <span class="tooltip-label">Ajouter au panier</span>
                        </a>
                        <!--end Cart Button-->
                      </li>

                      <li>
                        <!--Wishlist Button-->
                        <a
                          class="btn-icon wishlist add-to-wishlist"
                          href="my-wishlist.html"
                        >
                          <i class="icon an an-heart-l"></i>
                          <span class="tooltip-label">Ajouter aux favoris </span>
                        </a>
                        <!--End Wishlist Button-->
                      </li>
                      <li></li>
                    </ul>
                  </div>
                  <!--End Product Button-->
                </div>
                <!-- end product image -->
                <!--start product details -->
                <div class="product-details text-left">
                  <!-- product name -->
                  <div class="product-name">
                    <a href="product-layout1.html">Long Sleeve T-shirts</a>
                  </div>
                  <!-- End product name -->
                  <!-- product price -->
                  <div class="product-price">
                    <span class="price">$199.00</span>
                  </div>
                  <!-- End product price -->
                  <!--Product Review-->
                  <div class="product-review">
                    <i class="an an-star"></i> <i class="an an-star"></i>
                    <i class="an an-star"></i><i class="an an-star"></i>
                    <i class="an an-star"></i>
                  </div>
                  <!--End Product Review-->
                </div>
                <!-- End product details -->
              </div>
              <div class="item">
                <!-- start product image -->
                <div class="product-image">
                  <!-- start product image -->
                  <a href="product-layout1.html" class="product-img">
                    <!-- image -->
                    <img
                      class=""
                      src="images/montre1.jpeg"
                      alt="image"
                      title=""
                    />
                    <!-- End image -->
                    
                  </a>
                  <!-- end product image -->
                  <!--Product Button-->
                  <div class="button-set style2">
                    <ul>
                      <li>
                        <!--Cart Button-->
                        <a
                          class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                          href="#pro-addtocart-popup"
                        >
                          <i class="icon an an-cart-l"></i>
                          <span class="tooltip-label">Ajouter au panier</span>
                        </a>
                        <!--end Cart Button-->
                      </li>

                      <li>
                        <!--Wishlist Button-->
                        <a
                          class="btn-icon wishlist add-to-wishlist"
                          href="my-wishlist.html"
                        >
                          <i class="icon an an-heart-l"></i>
                          <span class="tooltip-label">Ajouter aux favoris </span>
                        </a>
                        <!--End Wishlist Button-->
                      </li>
                      <li></li>
                    </ul>
                  </div>
                  <!--End Product Button-->
                </div>
                <!-- end product image -->
                <!--start product details -->
                <div class="product-details text-left">
                  <!-- product name -->
                  <div class="product-name">
                    <a href="product-layout1.html">Sunset Sleep Scarf Top</a>
                  </div>
                  <!-- End product name -->
                  <!-- product price -->
                  <div class="product-price">
                    <span class="price">$99.01</span>
                  </div>
                  <!-- End product price -->
                  <!--Product Review-->
                  <div class="product-review">
                    <i class="an an-star"></i> <i class="an an-star-o"></i>
                    <i class="an an-star-o"></i> <i class="an an-star-o"></i>
                    <i class="an an-star-o"></i>
                  </div>
                  <!--End Product Review-->
                </div>
                <!-- End product details -->
              </div>
              <div class="item">
                <!-- start product image -->
                <div class="product-image">
                  <!-- start product image -->
                  <a href="product-layout1.html" class="product-img">
                    <!-- image -->
                    <img
                      class=""
                      src="images/montre1.jpeg"
                      alt="image"
                      title=""
                    />
                    <!-- End image -->
                   
                  </a>
                  <!-- end product image -->

                  <!--Product Button-->
                  <div class="button-set style2">
                    <ul>
                      <li>
                        <!--Cart Button-->
                        <a
                          class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                          href="#pro-addtocart-popup"
                        >
                          <i class="icon an an-cart-l"></i>
                          <span class="tooltip-label">Ajouter au panier</span>
                        </a>
                        <!--end Cart Button-->
                      </li>

                      <li>
                        <!--Wishlist Button-->
                        <a
                          class="btn-icon wishlist add-to-wishlist"
                          href="my-wishlist.html"
                        >
                          <i class="icon an an-heart-l"></i>
                          <span class="tooltip-label">Ajouter aux favoris </span>
                        </a>
                        <!--End Wishlist Button-->
                      </li>
                      <li></li>
                    </ul>
                  </div>
                  <!--End Product Button-->
                </div>
                <!-- end product image -->
                <!--start product details -->
                <div class="product-details text-left">
                  <!-- product name -->
                  <div class="product-name">
                    <a href="product-layout1.html">Women Long Jeans</a>
                  </div>
                  <!-- End product name -->
                  <!-- product price -->
                  <div class="product-price">
                    <span class="price">$189.00</span>
                  </div>
                  <!-- End product price -->
                  <!--Product Review-->
                  <div class="product-review">
                    <i class="an an-star"></i> <i class="an an-star"></i>
                    <i class="an an-star"></i> <i class="an an-star"></i>
                    <i class="an an-star-o"></i>
                  </div>
                  <!--End Product Review-->
                </div>
                <!-- End product details -->
              </div>
              <div class="item">
                <!-- start product image -->
                <div class="product-image">
                  <!-- start product image -->
                  <a href="product-layout1.html" class="product-img">
                    <!-- image -->
                    <img
                      class=""
                      src="images/montre1.jpeg"
                      alt="image"
                      title=""
                    />
                    <!-- End image -->
                   
                  </a>
                  <!-- end product image -->

                  <!--Product Button-->
                  <div class="button-set style2">
                    <ul>
                      <li>
                        <!--Cart Button-->
                        <a
                          class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                          href="#pro-addtocart-popup"
                        >
                          <i class="icon an an-cart-l"></i>
                          <span class="tooltip-label">Ajouter au panier</span>
                        </a>
                        <!--end Cart Button-->
                      </li>

                      <li>
                        <!--Wishlist Button-->
                        <a
                          class="btn-icon wishlist add-to-wishlist"
                          href="my-wishlist.html"
                        >
                          <i class="icon an an-heart-l"></i>
                          <span class="tooltip-label">Ajouter aux favoris </span>
                        </a>
                        <!--End Wishlist Button-->
                      </li>
                      <li></li>
                    </ul>
                  </div>
                  <!--End Product Button-->
                </div>
                <!-- end product image -->
                <!--start product details -->
                <div class="product-details text-left">
                  <!-- product name -->
                  <div class="product-name">
                    <a href="product-layout1.html">Long Sleev Top</a>
                  </div>
                  <!-- End product name -->
                  <!-- product price -->
                  <div class="product-price">
                    <span class="price">$189.00</span>
                  </div>
                  <!-- End product price -->
                  <!--Product Review-->
                  <div class="product-review">
                    <i class="an an-star"></i> <i class="an an-star"></i>
                    <i class="an an-star"></i> <i class="an an-star"></i>
                    <i class="an an-star-o"></i>
                  </div>
                  <!--End Product Review-->
                </div>
                <!-- End product details -->
              </div>
            </div>
          </div>
        </section>
        <!--End Top Picks On Fashion Product Slider-->

        <!--Parallax Banner-->

        <!--End Parallax Banner-->
        <div class="row">
          <div class="section-header col-12">
            <h2>
              Homme ou Femme, Mine d’Or vous propose une montre et un bracelet
              qui feront la différence.
            </h2>
          </div>
        </div>
        <!--Store Feature-->
        <section class="store-features style1 py-0">
          <div class="container">
            <div class="row store-info">
              <div class="col mb-3 my-sm-3 text-center">
                <i class="an an-ship-fast rounded-circle mb-4"></i>
                <h5 class="body-font">Livraison Offerte</h5>
                <p class="sub-text">à partir de 50€</p>
              </div>
              <div class="col mb-3 my-sm-3 text-center">
                <i class="an an-shield rounded-circle mb-4"></i>
                <h5 class="body-font">Produits de qualité</h5>
                <p class="sub-text"></p>
              </div>
              <div class="col mb-3 my-sm-3 text-center">
                <i class="an an-award rounded-circle mb-4"></i>
                <h5 class="body-font">Paiement sécurisé</h5>
                <p class="sub-text"></p>
              </div>
              <div class="col mb-3 my-sm-3 text-center">
                <i class="an an-chat rounded-circle mb-4"></i>
                <h5 class="body-font">Assistance dédiée</h5>
                <p class="sub-text">24/7 Service Clients</p>
              </div>
            </div>
          </div>
        </section>
        <!--End Store Feature-->

        <!--Instagram Section-->
        <div
          class="col-12 col-sm-12 col-md-6 col-lg-6 newsletter-col mt-4 mt-lg-5"
        >
          <div class="display-table pe-lg-3">
            <div class="display-table-cell footer-newsletter">
              <form action="#" method="post">
                <label class="h4">Newsletter</label>
                <p class="p_h4">
                  Inscrivez-vous à notre newsletter et ne manquez rien de nos
                  offres !
                </p>
                <div class="input-group">
                  <input
                    type="email"
                    class="input-group__field newsletter-input"
                    name="EMAIL"
                    value=""
                    placeholder="Email address"
                    required
                  />
                  <span class="input-group__btn">
                    <button
                      type="submit"
                      class="btn newsletter__submit"
                      name="commit"
                    >
                      Valider
                    </button>
                  </span>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--End Instagram Section-->
      </div>
      <!--End Body Container-->