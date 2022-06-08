<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="description" />

    <title>Mine d'or</title>
    <link rel="icon" href="images/M.png" />

    <link rel="stylesheet" href="css/plugins.css" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
  </head>

  <body class="body-index index-homepage">
    <!--Page Wrapper-->
    <div class="page-wrapper">
      <!--Header-->

      <header
        id="header"
        class="header header-main d-flex align-items-center header-2"
      >
        <div class="container">
          <div class="row">
            <!--Logo / Menu Toggle-->
            <div
              class="col-6 col-sm-6 col-md-6 col-lg-3 align-self-center justify-content-start d-flex"
            >
              <!--Logo-->
              <div class="logo">
                <a  href="index.php">Mine d'Or</a>
              </div>
              <!--End Logo-->
            </div>
            <!--End Logo / Menu Toggle-->
            <!--Main Navigation Desktop-->
            <div
              class="col-1 col-sm-1 col-md-1 col-lg-6 align-self-center d-menu-col"
            >
              <!--Desktop Menu-->
              <div class="row">
                <div
                  class="col-1 col-sm-12 col-md-12 col-lg-12 align-self-center d-menu-col"
                >
                  <!--Desktop Menu-->
                  <nav class="grid__item" id="AccessibleNav">
                    <ul id="siteNav" class="site-nav medium center hidearrow">
                      <li class="lvl1 parent dropdown">
                        <a href="#;"
                          >Montres Femmes <i class="an an-angle-down-l"></i
                        ></a>
                        <ul class="dropdown">
                          <li>
                            <a href="#" class="site-nav">Montres connectées </a>
                          </li>
                          <li>
                            <a href="#" class="site-nav">Montres classiques </a>
                          </li>
                          <li>
                            <a href="#" class="site-nav">Montres de sport </a>
                          </li>
                          <li>
                            <a href="#" class="site-nav">Montres de luxe </a>
                          </li>
                        </ul>
                      </li>
                      <li class="lvl1 parent dropdown">
                        <a href="#"
                          >Montres Hommes
                          <i
                            class="an an-angle-down-l dropdown-toggle"
                            id="dropdownMenuLink"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                          ></i
                        ></a>
                        <ul class="dropdown">
                          <li>
                            <a href="#" class="site-nav">Montres connectées </a>
                          </li>
                          <li>
                            <a href="#" class="site-nav">Montres classiques </a>
                          </li>
                          <li>
                            <a href="#" class="site-nav">Montres de sport </a>
                          </li>
                          <li>
                            <a href="#" class="site-nav">Montres de luxe </a>
                          </li>
                        </ul>
                      </li>

                      <li class="lvl1 parent dropdown">
                        <a href="#"
                          >Bracelets de montres
                          <i class="an an-angle-down-l"></i
                        ></a>
                        <ul class="dropdown">
                          <li>
                            <a href="#" class="site-nav">Cuir </a>
                          </li>
                          <li>
                            <a href="#" class="site-nav">Silicone </a>
                          </li>
                          <li>
                            <a href="#" class="site-nav">Acier</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </nav>
                  <!--End Desktop Menu-->
                </div>
              </div>
              <!--End Desktop Menu-->
            </div>
            <!--End Main Navigation Desktop-->
            <!--Right Action-->
            <div
              class="col-6 col-sm-6 col-md-6 col-lg-3 align-self-center icons-col text-right d-flex justify-content-end"
            >
              <!--Search-->
              <div class="site-search iconset">
                <i class="icon an an-search-l"></i>
              </div>
              <!--End Search-->
              <!--Wishlist-->
              <div class="wishlist-link iconset">
                <a href="my-wishlist.html"
                  ><i class="icon an an-heart-l"></i>
                </a>
              </div>
              <!--End Wishlist-->

              <!--Minicart Drawer-->
              <div class="header-cart iconset">
                <a
                  href="#"
                  class="site-header__cart btn-minicart"
                  data-bs-toggle="modal"
                  data-bs-target="#minicart-drawer"
                >
                  <i class="icon an an-cart-l"></i>
                </a>
              </div>

              <!--End Minicart Drawer-->
             
              <!--Setting Dropdown-->
              <div class="user-link iconset">
              <?php if (isset($_SESSION['user'])) {  ?>
                  <!-- <span class="welcome"> Bienvenue, <?php echo $_SESSION['user']->firstname . " " .$_SESSION['user']->lastname ;?></span> -->
              <a class="connexion" href="?p=users.logout">Déconnexion</a>
              <?php } else { ?>
          <a href="?p=users.login" class="connexion">Connexion</a>
          <?php }?>
              </div>
              <!--End Setting Dropdown-->
            </div>
            <!--End Right Action-->
          </div>
        </div>
      
      </header>
      <!--End Header-->
      <!--Mobile Menu-->
      <div class="mobile-nav-wrapper" role="navigation">
        <div class="closemobileMenu">
          <i class="icon an an-times-l pull-right"></i> Close Menu
        </div>
        <ul id="MobileNav" class="mobile-nav">
          <li class="lvl1 parent megamenu">
            <a href="index.html">Home </a>
          </li>
          <li class="lvl1 parent megamenu">
            <a href="#">Montres Femmes <i class="an an-plus-l"></i></a>
          </li>
          <li class="lvl1 parent megamenu">
            <a href="#">Montres Hommes <i class="an an-plus-l"></i></a>
          </li>
          <li class="lvl1 parent megamenu">
            <a href="#">Bracelets de montres <i class="an an-plus-l"></i></a>
          </li>
          <li class="lvl1 parent megamenu">
            <a href="blog-left-sidebar.html"
              >Panier<i class="an an-plus-l"></i
            ></a>
          </li>
          <li class="acLink"></li>
          <?php if (isset($_SESSION['user'])) { ?>
              <li class="lvl1 bottom-link"><a href="?p=users.logout">Déconnexion</a></li>
            <?php } else { ?>
          <li class="lvl1 bottom-link"><a href="?p=users.login">Connexion</a></li>
        <?php }?>
          <li class="lvl1 bottom-link">
            <a href="register.html">S'inscrire</a>
          </li>
          <li class="lvl1 bottom-link">
            <a href="my-wishlist.html">Wishlist</a>
          </li>
        </ul>
      </div>
      <!--End Mobile Menu-->

      <!--Body Container-->
    <?= $content ?>
      <!--End Body Container-->

      <!--Footer-->
      <div class="footer footer-2">
        <div class="footer-top clearfix">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-4 col-lg-2 footer-links">
                <h4 class="h4">Informations</h4>
                <ul>
                  <li><a href="my-account.html">Histoire</a></li>
                  <li>
                    <a href="aboutus-style1.html"
                      >Les engagements responsables</a
                    >
                  </li>
                  <li><a href="login.html">Abonnement à la newsletter</a></li>
                  <li><a href="privacy-policy.html">CGV</a></li>
                  <li><a href="#">Terms &amp; condition</a></li>
                </ul>
              </div>
              <div class="col-12 col-sm-12 col-md-4 col-lg-2 footer-links">
                <h4 class="h4">Services</h4>
                <ul>
                  <li><a href="#">Services de retours</a></li>
                  <li><a href="#">Information de livraison</a></li>
                  <li><a href="#">Service clients</a></li>
                  <li><a href="#">Sportswear</a></li>
                  <li><a href="#">Sale</a></li>
                </ul>
              </div>
              <div class="col-12 col-sm-12 col-md-4 col-lg-4 footer-contact">
                <h4 class="h4">© Mine d'Or</h4>
                <p class="address d-flex align-items-center">
                  <i class="an an-map-marker-al"></i> 55 rue de Chantilly, Paris
                  75000.
                </p>
                <p class="phone d-flex align-items-center">
                  <i class="an an-phone-l"></i> <b class="me-1">Phone:</b> (+33)
                  000 000 0000
                </p>
                <p class="email d-flex align-items-center">
                  <i class="an an-envelope-l"></i>
                  <b class="me-1">Email:</b> contact@minedor.com
                </p>
                <ul class="list-inline social-icons mt-3">
                  <li class="list-inline-item">
                    <a
                      href="#"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      title="Facebook"
                      ><i class="an an-facebook" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li class="list-inline-item">
                    <a
                      href="#"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      title="Twitter"
                      ><i class="an an-twitter" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li class="list-inline-item">
                    <a
                      href="#"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      title="Pinterest"
                      ><i class="an an-pinterest-p" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li class="list-inline-item">
                    <a
                      href="#"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      title="Instagram"
                      ><i class="an an-instagram" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li class="list-inline-item">
                    <a
                      href="#"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      title="TikTok"
                      ><i class="an an-tiktok" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li class="list-inline-item">
                    <a
                      href="#"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      title="Whatsapp"
                      ><i class="an an-whatsapp" aria-hidden="true"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="row"></div>
          </div>
        </div>
      </div>
      <!--End Footer-->

      <!--Scoll Top-->
      <span id="site-scroll"><i class="icon an an-arw-up"></i></span>
      <!--End Scoll Top-->

      <!--MiniCart Drawer-->
      <div class="minicart-right-drawer modal right fade" id="minicart-drawer">
        <div class="modal-dialog">
          <div class="modal-content">
            <!--MiniCart Empty-->
            <div
              id="cartEmpty"
              class="cartEmpty d-flex-justify-center flex-column text-center p-3 text-muted shadow d-none"
            >
              <div
                class="minicart-header d-flex-center justify-content-between w-100"
              >
                <h4 class="fs-6 text-transform-none text-black">
                  Your cart (0 Items)
                </h4>
                <a
                  href="javascript:void(0);"
                  class="close-cart"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                  ><i
                    class="an an-times-r"
                    aria-hidden="true"
                    data-bs-toggle="tooltip"
                    data-bs-placement="left"
                    title="Close"
                  ></i
                ></a>
              </div>
              <div class="cartEmpty-content my-4">
                <i class="icon an an-sq-bag fs-1 text-muted"></i>
                <p class="my-3">No Products in the Cart</p>
                <a
                  href="category-4columns.html"
                  class="btn btn-primary cart-btn rounded-0"
                  >Continue shopping</a
                >
              </div>
            </div>
            <!--End MiniCart Empty-->

            <!--MiniCart Content-->
            <div id="cart-drawer" class="block block-cart">
              <div class="minicart-header">
                <a
                  href="javascript:void(0);"
                  class="close-cart"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                  ><i
                    class="an an-times-r"
                    aria-hidden="true"
                    data-bs-toggle="tooltip"
                    data-bs-placement="left"
                    title="Close"
                  ></i
                ></a>
                <h4 class="fs-6 text-transform-none text-black">
                  Your cart (2 Items)
                </h4>
              </div>
              <div class="minicart-content">
                <ul class="m-0 clearfix">
                  <li
                    class="item d-flex justify-content-center align-items-center"
                  >
                    <a class="product-image" href="product-layout1.html">
                      <img
                        class="blur-up lazyload"
                        src="images/products/cart-product-img1.jpg"
                        data-src="images/products/cart-product-img1.jpg"
                        alt="image"
                        title=""
                      />
                    </a>
                    <div class="product-details">
                      <a class="product-title" href="product-layout1.html"
                        >Floral Crop Top</a
                      >
                      <div class="variant-cart">Black / XL</div>
                      <div class="priceRow">
                        <div class="product-price">
                          <span class="money">$59.00</span>
                        </div>
                      </div>
                    </div>
                    <div class="qtyDetail text-center">
                      <div class="wrapQtyBtn">
                        <div class="qtyField">
                          <a class="qtyBtn minus" href="javascript:void(0);"
                            ><i
                              class="icon an an-minus-r"
                              aria-hidden="true"
                            ></i
                          ></a>
                          <input
                            type="text"
                            name="quantity"
                            value="1"
                            class="qty rounded-0"
                          />
                          <a class="qtyBtn plus" href="javascript:void(0);"
                            ><i class="icon an an-plus-l" aria-hidden="true"></i
                          ></a>
                        </div>
                      </div>
                      <a href="#" class="edit-i remove"
                        ><i
                          class="icon an an-edit-l"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="Edit"
                        ></i
                      ></a>
                      <a href="#" class="remove"
                        ><i
                          class="an an-times-r"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="Remove"
                        ></i
                      ></a>
                    </div>
                  </li>
                  <li
                    class="item d-flex justify-content-center align-items-center"
                  >
                    <a class="product-image" href="product-layout1.html">
                      <img
                        class="blur-up lazyload"
                        src="images/products/cart-product-img1.jpg"
                        data-src="images/products/cart-product-img1.jpg"
                        alt="image"
                        title=""
                      />
                    </a>
                    <div class="product-details">
                      <a class="product-title" href="product-layout1.html"
                        >V Neck T-shirts</a
                      >
                      <div class="variant-cart">Blue / XL</div>
                      <div class="priceRow">
                        <div class="product-price">
                          <span class="money">$199.00</span>
                        </div>
                      </div>
                    </div>
                    <div class="qtyDetail text-center">
                      <div class="wrapQtyBtn">
                        <div class="qtyField">
                          <a class="qtyBtn minus" href="javascript:void(0);"
                            ><i
                              class="icon an an-minus-r"
                              aria-hidden="true"
                            ></i
                          ></a>
                          <input
                            type="text"
                            name="quantity"
                            value="1"
                            class="qty rounded-0"
                          />
                          <a class="qtyBtn plus" href="javascript:void(0);"
                            ><i class="icon an an-plus-l" aria-hidden="true"></i
                          ></a>
                        </div>
                      </div>
                      <a href="#" class="edit-i remove"
                        ><i
                          class="icon an an-edit-l"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="Edit"
                        ></i
                      ></a>
                      <a href="#" class="remove"
                        ><i
                          class="an an-times-r"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="Remove"
                        ></i
                      ></a>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="minicart-bottom text-black">
                <div class="shipinfo text-center mb-3 text-uppercase">
                  <p class="freeShipMsg">
                    <i class="an an-truck fs-5 me-2 align-middle"></i>SPENT
                    <b>$199.00</b> MORE FOR FREE SHIPPING
                  </p>
                </div>
                <div class="subtotal">
                  <span>Total:</span>
                  <span class="product-price">$93.13</span>
                </div>
                <a
                  href="checkout-style2.html"
                  class="w-100 p-2 my-2 btn proceed-to-checkout"
                  >Proceed to Checkout</a
                >
                <a
                  href="cart-style2.html"
                  class="w-100 btn btn-outline-primary cart-btn"
                  >View Cart</a
                >
              </div>
            </div>
            <!--End MiniCart Content-->
          </div>
        </div>
      </div>
      <!--End MiniCart Drawer-->
      <div class="modalOverly"></div>

      <!--Newsletter Popup-->
      <!-- <div id="newsletter-modal" class="style2 mfp-with-anim mfp-hide">
        <div class="d-flex flex-row align-items-center">
          <div class="newsltr-img col-md-6 d-none d-sm-none d-md-block">
            <img src="images/newsletter-s2-img.jpg" alt="image" />
          </div>
          <div class="newsltr-text col-md-6 text-center">
            <div class="wraptext mw-100">
              <h2 class="title mb-3">Hey Good Looking</h2>
              <p class="mb-3">
                Here is your <b>10% DISCOUNT</b> to get something new.
              </p>
              <form action="#" method="post" class="mcNewsletter mb-4">
                <div class="input-group d-flex flex-wrap">
                  <input
                    type="email"
                    class="newsletter__input mb-3 rounded-0 w-100"
                    name="EMAIL"
                    value=""
                    placeholder="Email address"
                    required
                  />
                  <button
                    type="submit"
                    class="btn mcNsBtn rounded-0 w-100"
                    name="commit"
                  >
                    <span>Subscribe</span>
                  </button>
                </div>
              </form>
              <div
                class="customCheckbox justify-content-center checkboxlink clearfix"
              >
                <input id="dontshow" name="newsPopup" type="checkbox" />
                <label for="dontshow" class=""
                  ><u>NO THANKS, LET ME SHOP</u></label
                >
              </div>
            </div>
          </div>
        </div>
        <button title="Close (Esc)" type="button" class="mfp-close text-black">
          ×
        </button>
      </div> -->
      <!--End Newsletter Popup-->

      <!-- Including Jquery -->
      <script src="js/jquery-min.js"></script>
      <script src="js/js.cookie.js"></script>
      <!--Including Javascript-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.js"></script>
            <script src="https://unpkg.com/imagesloaded@4.1.4/imagesloaded.pkgd.min.js
"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
      integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>  
      <script src="js/plugins.js"></script>
      <script src="js/main.js"></script>

      <!--Newsletter Popup Cookies-->
      <!-- <script>
        function newsletter_popup() {
          var cookieSignup = "cookieSignup",
            date = new Date();
          if (
            $.cookie(cookieSignup) != "true" &&
            window.location.href.indexOf("challenge#newsletter-modal") <= -1
          ) {
            setTimeout(function () {
              $.magnificPopup.open({
                items: {
                  src: "#newsletter-modal",
                },
                type: "inline",
                removalDelay: 300,
                mainClass: "mfp-zoom-in",
              });
            }, 5000);
          }
          $.magnificPopup.instance.close = function () {
            if ($("#dontshow").prop("checked") == true) {
              $.cookie(cookieSignup, "true", {
                expires: 1,
                path: "/",
              });
            }
            $.magnificPopup.proto.close.call(this);
          };
        }
        newsletter_popup();
      </script> -->
      <!--End Newsletter Popup Cookies-->
    </div>
    <!--End Page Wrapper-->
  </body>
</html>
