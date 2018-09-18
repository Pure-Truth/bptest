<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

Loc::loadLanguageFile(__FILE__);

return array(
	'name' => Loc::getMessage('LANDING_DEMO_TITLE'),
	'description' => Loc::getMessage('LANDING_DEMO_DESCRIPTION'),
	'fields' => array(
		'ADDITIONAL_FIELDS' => array(
			'THEME_CODE' => 'shipping',
			'THEME_CODE_TYPO' => 'shipping',
			'METAOG_IMAGE' => 'https://repo.bitrix24.site/bitrix/images/demo/page/shipping/preview.jpg',
			'METAOG_TITLE' => Loc::getMessage('LANDING_DEMO_TITLE'),
			'METAOG_DESCRIPTION' => Loc::getMessage('LANDING_DEMO_DESCRIPTION'),
			'METAMAIN_TITLE' => Loc::getMessage('LANDING_DEMO_TITLE'),
			'METAMAIN_DESCRIPTION' => Loc::getMessage('LANDING_DEMO_DESCRIPTION'),
		),
	),
	'items' => array (
		'0.menu_16' =>
			array (
				'CODE' => '0.menu_16',
				'SORT' => '-100',
				'CONTENT' => '<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

$context = \\Bitrix\\Main\\Application::getInstance()->getContext();
$request = $context->getRequest();

if ($request->get("landing_mode") != "edit")
{
	\\Bitrix\\Landing\\Manager::setPageView(
		"MainClass",
		"g-pt-130 g-pt-170--lg"
	);
}
?>

<header class="landing-block landing-block-menu u-header u-header--sticky-top u-header--toggle-section u-header--change-appearance" data-header-fix-moment="200">
	<div class="landing-block-node-top-block text-center text-lg-left u-header__section u-header__section--hidden u-header__section--light g-bg-white g-brd-bottom g-brd-gray-light-v4 g-py-20">
		<div class="container">
			<div class="row flex-lg-row align-items-center justify-content-lg-start">
				<div class="col-6 col-sm-3 col-lg-2">
					<!-- Logo -->
					<a href="#" class="navbar-brand landing-block-node-menu-logo-link">
						<img class="landing-block-node-menu-logo img-fluid g-max-width-180" src="/bitrix/images/landing/logos/real-estate-logo.png" alt="Logo" />
					</a>
					<!-- End Logo -->
				</div>

				<div class="col-6 col-sm-9 col-lg-10">
					<div class="row">
						<div class="landing-block-card-menu-contact col-sm g-brd-right--sm g-brd-gray-light-v4">
							<div class="g-pa-10--lg">
								<span class="landing-block-node-menu-contact-img icon icon-screen-smartphone g-valign-middle g-font-size-18 g-color-primary g-mr-5"></span>
								<div class="landing-block-node-menu-contact-title d-inline-block text-uppercase g-font-size-13">
									Call Us
								</div>
								<a href="tel:+469548521" class="landing-block-node-menu-contact-link d-block g-pl-25 g-color-gray-dark-v2 g-font-weight-700">+469 548 521</a>
							</div>
						</div>

						<div class="landing-block-card-menu-contact col-sm g-hidden-md-down g-brd-right--sm g-brd-gray-light-v4">
							<div class="g-pa-10--lg">
								<span class="landing-block-node-menu-contact-img icon icon-clock g-valign-middle g-font-size-18 g-color-primary g-mr-5"></span>
								<div class="landing-block-node-menu-contact-title d-inline-block text-uppercase g-font-size-13">
									Opening time
								</div>
								<strong class="landing-block-node-menu-contact-value d-block g-color-gray-dark-v2 g-pl-25">Mon-Sat: 08.00 -
									18.00</strong>
							</div>
						</div>

						<div class="landing-block-card-menu-contact col-sm g-hidden-sm-down g-brd-right--sm g-brd-gray-light-v4">
							<div class="g-pa-10--lg">
								<span class="landing-block-node-menu-contact-img icon icon-envelope g-valign-middle g-font-size-18 g-color-primary g-mr-5"></span>
								<div class="landing-block-node-menu-contact-title d-inline-block text-uppercase g-font-size-13">
									Email us
								</div>
								<a href="mailto:market@info.com" class="landing-block-node-menu-contact-link d-block g-pl-25 g-color-gray-dark-v2 g-font-weight-700">market@info.com</a>
							</div>
						</div>

						<div class="col-sm g-hidden-sm-down">
							<!--							<ul class="list-inline mb-0 g-pa-10--lg landing-block-node-menu-list-social">-->
							<!--								<li class="landing-block-node-menu-social-list-item list-inline-item g-valign-middle g-mx-3">-->
							<!--									<a class="landing-block-node-menu-social-list-item-link d-block u-icon-v3 u-icon-size--sm g-rounded-50x g-bg-gray-light-v4 g-color-gray-light-v1 g-bg-primary--hover g-color-white--hover" href="#">-->
							<!--										<i class="landing-block-node-menu-social-list-item-img fa fa-facebook g-font-size-default"></i>-->
							<!--									</a>-->
							<!--								</li>-->
							<!--								<li class="landing-block-node-menu-social-list-item list-inline-item g-valign-middle g-mx-3">-->
							<!--									<a class="landing-block-node-menu-social-list-item-link d-block u-icon-v3 u-icon-size--sm g-rounded-50x g-bg-gray-light-v4 g-color-gray-light-v1 g-bg-primary--hover g-color-white--hover" href="#">-->
							<!--										<i class="landing-block-node-menu-social-list-item-img fa fa-twitter g-font-size-default"></i>-->
							<!--									</a>-->
							<!--								</li>-->
							<!--								<li class="landing-block-node-menu-social-list-item list-inline-item g-valign-middle g-mx-3">-->
							<!--									<a class="landing-block-node-menu-social-list-item-link d-block u-icon-v3 u-icon-size--sm g-rounded-50x g-bg-gray-light-v4 g-color-gray-light-v1 g-bg-primary--hover g-color-white--hover" href="#">-->
							<!--										<i class="landing-block-node-menu-social-list-item-img fa fa-instagram g-font-size-default"></i>-->
							<!--									</a>-->
							<!--								</li>-->
							<!--							</ul>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="landing-block-node-bottom-block u-header__section u-header__section--dark g-bg-black g-py-15" data-header-fix-moment-classes="u-shadow-v18">
		<nav class="navbar navbar-expand-lg py-0">
			<div class="container">
				<!-- Navigation -->
				<div class="collapse navbar-collapse align-items-center flex-sm-row g-mr-40--sm" id="navBar">
					<ul class="landing-block-node-menu-list js-scroll-nav navbar-nav text-uppercase g-font-weight-700 g-font-size-13 g-py-10--md mr-auto">
						<li class="landing-block-node-menu-list-item nav-item g-mr-15--lg g-mb-7 g-mb-0--lg active">
							<a href="#block@block[33.32.form_light_bgimg_right_text]" class="landing-block-node-menu-list-item-link nav-link g-color-primary--hover p-0">Home
							</a><span class="sr-only">(current)</span>
						</li>
						<li class="landing-block-node-menu-list-item nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
							<a href="#block@block[30.2.three_cols_fix_img_and_links]" class="landing-block-node-menu-list-item-link nav-link g-color-primary--hover p-0" target="_self">about</a>
						</li>
						
						<li class="landing-block-node-menu-list-item nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
							<a href="#block@block[41.4.cover_with_text_columns_on_bgimg]" class="landing-block-node-menu-list-item-link nav-link g-color-primary--hover p-0" target="_self">services</a>
						</li>
						<li class="landing-block-node-menu-list-item nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
							<a href="#block@block[04.7.one_col_fix_with_title_and_text_2@2]" class="landing-block-node-menu-list-item-link nav-link g-color-primary--hover p-0" target="_self">skills</a>
						</li>
						<li class="landing-block-node-menu-list-item nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
							<a href="#block@block[11.2.three_cols_fix_tariffs_with_img]" class="landing-block-node-menu-list-item-link nav-link g-color-primary--hover p-0" target="_self">offers</a>
						</li>
						<li class="landing-block-node-menu-list-item nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
							<a href="#block@block[04.7.one_col_fix_with_title_and_text_2@3]" class="landing-block-node-menu-list-item-link nav-link g-color-primary--hover p-0" target="_self">gallery</a>
						</li>
						<li class="landing-block-node-menu-list-item nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
							<a href="#block@block[04.7.one_col_fix_with_title_and_text_2@4]" class="landing-block-node-menu-list-item-link nav-link g-color-primary--hover p-0" target="_self">faq</a>
						</li><li class="landing-block-node-menu-list-item nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
							<a href="#block@block[43.3.cover_with_feedback]" class="landing-block-node-menu-list-item-link nav-link g-color-primary--hover p-0">Testimonials</a>
						</li>
						<li class="landing-block-node-menu-list-item nav-item g-ml-15--lg g-mb-7 g-mb-0--lg">
							<a href="#block@block[04.7.one_col_fix_with_title_and_text_2@5]" class="landing-block-node-menu-list-item-link nav-link g-color-primary--hover p-0">Contact</a>
						</li>
					</ul>
				</div>
				<!-- End Navigation -->

				<!-- Responsive Toggle Button -->
				<button class="navbar-toggler btn g-pos-rel g-line-height-1 g-brd-none g-pa-0 ml-auto" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                <span class="hamburger hamburger--slider">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
				</button>
				<!-- End Responsive Toggle Button -->
			</div>
		</nav>
	</div>
</header>',
			),
		'33.32.form_light_bgimg_right_text' =>
			array (
				'CODE' => '33.32.form_light_bgimg_right_text',
				'SORT' => '500',
				'CONTENT' => '<section class="g-pos-rel landing-block g-bg-primary-dark-v1">
	<div class="landing-block-node-bgimg g-bg-size-cover g-bg-img-hero g-bg-cover g-bg-black-opacity-0_3--after g-py-20" style="background-image: url(https://cdn.bitrix24.site/bitrix/images/landing/business/1732x1155/img1.jpg);">

		<div class="landing-block-form-styles" hidden="">
			<div class="g-bg-transparent h1 g-color-white g-brd-none g-pa-0" data-form-style-wrapper-padding="1" data-form-style-bg="1" data-form-style-bg-content="1" data-form-style-bg-block="1" data-form-style-header-font-size="1" data-form-style-main-font-weight="1" data-form-style-button-font-color="1" data-form-style-border-block="1">
			</div>
			<div class="g-bg-primary g-color-primary g-brd-primary" data-form-style-main-bg="1" data-form-style-main-border-color="1" data-form-style-main-font-color-hover="1">
			</div>
			<div class="g-bg-gray-light-v5 g-color-gray-dark-v5 g-brd-around g-brd-white g-rounded-4" data-form-style-input-bg="1" data-form-style-input-select-bg="1" data-form-style-input-border="1" data-form-style-input-border-radius="1" data-form-style-main-font-color="1">
			</div>
			<div class="g-brd-around g-brd-gray-light-v2 g-color-black g-brd-bottom g-bg-black-opacity-0_7" data-form-style-input-border-color="1" data-form-style-input-border-hover="1" data-form-style-second-font-color="1">
			</div>
		</div>

		<div class="container g-pos-rel g-z-index-1 g-py-100">
			<div class="row">
				<div class="col-sm-12 col-lg-6 js-animation fadeInLeft landing-block-node-form align-self-center animated">
					<div class="g-bg-white g-rounded-5 g-pa-0">
						<div class="bitrix24forms g-py-30 g-brd-white-opacity-0_6" data-b24form="" data-b24form-use-style="Y" data-b24form-show-header="N" data-b24form-original-domain=""></div>
					</div>
				</div>

				<!-- Promo Block - Info -->
				<div class="col-sm-12 col-lg-6 g-pt-30 g-pt-0--lg align-self-center g-color-white">
					<h2 class="landing-block-node-title js-animation fadeInRight text-uppercase g-line-height-1 g-font-weight-700 g-font-size-55 g-color-white g-mb-30 animated">
						Planning <br />&amp; Shipping</h2>
					<h3 class="landing-block-node-subtitle text-uppercase g-font-weight-700 g-font-size-18 g-color-white g-mb-20">
						Delivering
						anything to anywhere</h3>
					<div class="landing-block-node-text js-animation fadeInRight g-font-size-default g-color-white-opacity-0_8 g-mb-35 animated">
						<p>Maecenas lacus magna, pretium in congue a, pharetra at lacus. Nulla neque justo, sodales
							vitae dui non, imperdiet luctus libero.</p>
					</div>
					<a class="landing-block-node-button js-animation fadeInRight btn btn-md text-uppercase u-btn-primary g-font-weight-700 g-font-size-12 g-brd-none g-rounded-4 g-py-12 g-px-25 animated" href="#">Learn more</a>
				</div>
				<!-- End Promo Block - Info -->
			</div>
		</div>
	</div>
</section>',
			),
		'30.2.three_cols_fix_img_and_links' =>
			array (
				'CODE' => '30.2.three_cols_fix_img_and_links',
				'SORT' => '1000',
				'CONTENT' => '<section class="landing-block g-pt-60 g-pb-60">

        <div class="container g-pt-30 g-pb-20">
            <div class="row">

                <div class="landing-block-card col-sm-6 col-md-4 g-mb-20 js-animation fadeIn animated landing-card">
                    <article class="u-shadow-v28 g-bg-white">
                        <img class="landing-block-node-img img-fluid w-100" src="https://cdn.bitrix24.site/bitrix/images/landing/business/600x400/img1.jpg" alt="" data-fileid="-1" data-filehash="9eef207add73028ae50f74a9033c20cb" />

                        <div class="g-pos-rel">
                            <!-- SVG Background -->
                            <svg class="g-pos-abs g-left-0 g-right-0" version="1.1" preserveaspectratio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="140px" viewbox="20 -20 300 100" style="top: -70%;">
                                <path d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
              c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" opacity="0.4" fill="#f0f1f3" />
                                <path d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
              c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" opacity="0.4" fill="#f0f1f3" />
                                <path d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
              H42.401L43.415,98.342z" opacity="0" fill="#fff" />
                                <path d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
              c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#fff" />
                            </svg>
                            <!-- End SVG Background -->

                            <div class="g-pos-rel g-z-index-1 g-pa-30">
                                <h3 class="h5 mb-3">
                                    <a class="landing-block-node-link u-link-v5 g-color-main g-color-primary--hover" href="#" target="_self">CARGO</a>
                                </h3>
                                <a class="landing-block-node-link-more u-link-v5 g-color-text g-color-primary--hover g-font-weight-500" href="#" target="_self">Read More</a>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="landing-block-card col-sm-6 col-md-4 g-mb-20 js-animation fadeIn animated landing-card">
                    <article class="u-shadow-v28 g-bg-white">
                        <img class="landing-block-node-img img-fluid w-100" src="https://cdn.bitrix24.site/bitrix/images/landing/business/600x400/img2.jpg" alt="" data-fileid="-1" data-filehash="9eef207add73028ae50f74a9033c20cb" />

                        <div class="g-pos-rel">
                            <!-- SVG Background -->
                            <svg class="g-pos-abs g-left-0 g-right-0" version="1.1" preserveaspectratio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="140px" viewbox="20 -20 300 100" style="top: -70%;">
                                <path d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
              c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" opacity="0.4" fill="#f0f1f3" />
                                <path d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
              c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" opacity="0.4" fill="#f0f1f3" />
                                <path d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
              H42.401L43.415,98.342z" opacity="0" fill="#fff" />
                                <path d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
              c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#fff" />
                            </svg>
                            <!-- End SVG Background -->

                            <div class="g-pos-rel g-z-index-1 g-pa-30">
                                <h3 class="h5 mb-3">
                                    <a class="landing-block-node-link u-link-v5 g-color-main g-color-primary--hover" href="#" target="_self">LOGISTIC SERVICES</a>
                                </h3>
                                <a class="landing-block-node-link-more u-link-v5 g-color-text g-color-primary--hover g-font-weight-500" href="#" target="_self">Read More</a>
                            </div>
                        </div>
                    </article>
                </div>


				<div class="landing-block-card col-sm-6 col-md-4 g-mb-20 js-animation fadeIn animated landing-card">
					<article class="u-shadow-v28 g-bg-white">
						<img class="landing-block-node-img img-fluid w-100" src="https://cdn.bitrix24.site/bitrix/images/landing/business/600x400/img3.jpg" alt="" data-fileid="-1" data-filehash="9eef207add73028ae50f74a9033c20cb" />

						<div class="g-pos-rel">
							<!-- SVG Background -->
							<svg class="g-pos-abs g-left-0 g-right-0" version="1.1" preserveaspectratio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="140px" viewbox="20 -20 300 100" style="top: -70%;">
								<path d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
              c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" opacity="0.4" fill="#f0f1f3" />
								<path d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
              c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" opacity="0.4" fill="#f0f1f3" />
								<path d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
              H42.401L43.415,98.342z" opacity="0" fill="#fff" />
								<path d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
              c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#fff" />
							</svg>
							<!-- End SVG Background -->

							<div class="g-pos-rel g-z-index-1 g-pa-30">
								<h3 class="h5 mb-3">
									<a class="landing-block-node-link u-link-v5 g-color-main g-color-primary--hover" href="#" target="_self">STORAGE</a>
								</h3>
								<a class="landing-block-node-link-more u-link-v5 g-color-text g-color-primary--hover g-font-weight-500" href="#" target="_self">Read More</a>
							</div>
						</div>
					</article>
				</div>

            </div>
        </div>

    </section>',
			),
		'04.7.one_col_fix_with_title_and_text_2' =>
			array (
				'CODE' => '04.7.one_col_fix_with_title_and_text_2',
				'SORT' => '1500',
				'CONTENT' => '<section class="landing-block g-theme-bg-gray-light-v7 g-py-20 js-animation fadeInUp animated g-pt-60 g-pb-20">

        <div class="container landing-block-node-subcontainer text-center g-max-width-800 g-mb-20">

            <div class="landing-block-node-inner text-uppercase u-heading-v2-4--bottom g-brd-primary">
                <h4 class="landing-block-node-subtitle g-font-weight-700 g-font-size-12 g-color-primary g-mb-15"> </h4>
                <h2 class="landing-block-node-title u-heading-v2__title g-line-height-1_1 g-font-weight-700 g-color-black g-mb-minus-10 g-font-size-26">TYPES OF SHIPPING</h2>
            </div>

			<div class="landing-block-node-text g-color-gray-dark-v5"><p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p></div>
        </div>

    </section>',
			),
		'44.1.four_columns_with_img_and_text' =>
			array (
				'CODE' => '44.1.four_columns_with_img_and_text',
				'SORT' => '2000',
				'CONTENT' => '<section class="landing-block">
	<div class="container-fluid px-0">
		<!-- Banners -->
		<div class="row no-gutters">
			<div class="landing-block-node-card col-md-6 col-lg-3">
				<!-- Article -->
				<article
						class="landing-block-node-card-inner h-100 text-center info-v3-3 g-parent g-bg-gray-light-v5 g-bg-cover g-bg-primary-opacity-0_6--after g-color-gray-dark-v3 g-color-white--hover g-py-30">
					<!-- Article Image -->
					<img class="landing-block-node-card-img info-v3-3__img"
						 src="https://cdn.bitrix24.site/bitrix/images/landing/business/166x319/img1.png" alt="">
					<!-- End Article Image -->

					<!-- Article Content -->
					<div class="info-v3-3__description u-link-v2 g-pos-cover g-flex-middle">
						<div class="g-flex-middle-item g-pa-30">
							<h4 class="landing-block-node-card-title h3 text-uppercase g-line-height-1 g-font-weight-700
							g-mb-20 info-v3-3__title g-color-gray-dark-v2 g-color-white--parent-hover g-text-underline--none--hover g-transition-0_3">
								<span style="font-weight: bold;" class="g-transition-0_3 g-color-gray-dark-v2 g-color-white--parent-hover">Small</span><br>
								Objects
							</h4>
							<div class="landing-block-node-card-text-unhover info-v3-3__category g-font-size-11 text-uppercase">
								Shipping & package
							</div>

							<div class="info-v3-3__content g-opacity-0_7">
								<div class="landing-block-node-card-text g-color-white--parent-hover mb-0">
									Maecenas tempus, tellus eget condimentum rhoncus.
								</div>
							</div>
						</div>
					</div>
					<!-- End Article Content -->
				</article>
				<!-- End Article -->
			</div>

			<div class="landing-block-node-card col-md-6 col-lg-3">
				<!-- Article -->
				<article
						class="landing-block-node-card-inner h-100 text-center info-v3-3 g-parent g-bg-gray-light-v5 g-bg-cover g-bg-primary-opacity-0_6--after g-color-gray-dark-v3 g-color-white--hover g-py-30">
					<!-- Article Image -->
					<img class="landing-block-node-card-img info-v3-3__img"
						 src="https://cdn.bitrix24.site/bitrix/images/landing/business/166x319/img2.png" alt="">
					<!-- End Article Image -->

					<!-- Article Content -->
					<div class="info-v3-3__description u-link-v2 g-pos-cover g-flex-middle">
						<div class="g-flex-middle-item g-pa-30">
							<h4 class="landing-block-node-card-title h3 text-uppercase g-line-height-1 g-font-weight-700
							g-mb-20 info-v3-3__title g-color-gray-dark-v2 g-color-white--parent-hover g-text-underline--none--hover g-transition-0_3">
								<span style="font-weight: bold;" class="g-transition-0_3 g-color-gray-dark-v2 g-color-white--parent-hover">Medium</span><br>
								Objects
							</h4>
							<div class="landing-block-node-card-text-unhover info-v3-3__category g-font-size-11 text-uppercase">
								Shipping & package
							</div>

							<div class="info-v3-3__content g-opacity-0_7">
								<div class="landing-block-node-card-text g-color-white--parent-hover mb-0">
									Maecenas tempus, tellus eget condimentum rhoncus.
								</div>
							</div>
						</div>
					</div>
					<!-- End Article Content -->
				</article>
				<!-- End Article -->
			</div>

			<div class="landing-block-node-card col-md-6 col-lg-3">
				<!-- Article -->
				<article
						class="landing-block-node-card-inner h-100 text-center info-v3-3 g-parent g-bg-gray-light-v5 g-bg-cover g-bg-primary-opacity-0_6--after g-color-gray-dark-v3 g-color-white--hover g-py-30">
					<!-- Article Image -->
					<img class="landing-block-node-card-img info-v3-3__img"
						 src="https://cdn.bitrix24.site/bitrix/images/landing/business/166x319/img3.png" alt="">
					<!-- End Article Image -->

					<!-- Article Content -->
					<div class="info-v3-3__description u-link-v2 g-pos-cover g-flex-middle">
						<div class="g-flex-middle-item g-pa-30">
							<h4 class="landing-block-node-card-title h3 text-uppercase g-line-height-1 g-font-weight-700
							g-mb-20 info-v3-3__title g-color-gray-dark-v2 g-color-white--parent-hover g-text-underline--none--hover g-transition-0_3">
								<span style="font-weight: bold;" class="g-transition-0_3 g-color-gray-dark-v2 g-color-white--parent-hover">Large</span><br>
								Objects
							</h4>
							<div class="landing-block-node-card-text-unhover info-v3-3__category g-font-size-11 text-uppercase">
								Shipping & package
							</div>

							<div class="info-v3-3__content g-opacity-0_7">
								<div class="landing-block-node-card-text g-color-white--parent-hover mb-0">
									Maecenas tempus, tellus eget condimentum rhoncus.
								</div>
							</div>
						</div>
					</div>
					<!-- End Article Content -->
				</article>
				<!-- End Article -->
			</div>

			<div class="landing-block-node-card col-md-6 col-lg-3">
				<!-- Article -->
				<article
						class="landing-block-node-card-inner h-100 text-center info-v3-3 g-parent g-bg-gray-light-v5 g-bg-cover g-bg-primary-opacity-0_6--after g-color-gray-dark-v3 g-color-white--hover g-py-30">
					<!-- Article Image -->
					<img class="landing-block-node-card-img info-v3-3__img"
						 src="https://cdn.bitrix24.site/bitrix/images/landing/business/166x319/img4.png" alt="">
					<!-- End Article Image -->

					<!-- Article Content -->
					<div class="info-v3-3__description u-link-v2 g-pos-cover g-flex-middle">
						<div class="g-flex-middle-item g-pa-30">
							<h4 class="landing-block-node-card-title h3 text-uppercase g-line-height-1 g-font-weight-700
							g-mb-20 info-v3-3__title g-color-gray-dark-v2 g-color-white--parent-hover g-text-underline--none--hover g-transition-0_3">
								<span style="font-weight: bold;" class="g-transition-0_3 g-color-gray-dark-v2 g-color-white--parent-hover">XXXXL</span><br>
								Objects
							</h4>
							<div class="landing-block-node-card-text-unhover info-v3-3__category g-font-size-11 text-uppercase">
								Shipping & package
							</div>

							<div class="info-v3-3__content g-opacity-0_7">
								<div class="landing-block-node-card-text g-color-white--parent-hover mb-0">
									Maecenas tempus, tellus eget condimentum rhoncus.
								</div>
							</div>
						</div>
					</div>
					<!-- End Article Content -->
				</article>
				<!-- End Article -->
			</div>
		</div>
		<!-- End Banners -->
	</div>
</section>
',
			),
		'41.4.cover_with_text_columns_on_bgimg' =>
			array (
				'CODE' => '41.4.cover_with_text_columns_on_bgimg',
				'SORT' => '2500',
				'CONTENT' => '<section
		class="landing-block landing-block-node-bgimg u-bg-overlay g-bg-img-hero g-bg-black-opacity-0_6--after g-pt-85 g-pb-85"
		style="background-image: url(https://cdn.bitrix24.site/bitrix/images/landing/business/1732x1155/img2.jpg);">
	<div class="container u-bg-overlay__inner g-max-width-800">
		<div class="landing-block-node-header text-center mx-auto u-heading-v2-2--bottom g-brd-primary g-mb-70">
			<h2 class="landing-block-node-title text-uppercase g-line-height-1_1 g-font-weight-700 g-font-size-26 g-color-white g-mb-15">
				Tour
				services</h2>
			<div class="landing-block-node-text g-color-white-opacity-0_8 mb-0">
				<p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
					Maecenas tempus.</p>
			</div>
		</div>
	</div>

	<div class="container u-bg-overlay__inner">
		<!-- Icon Blocks -->
		<div class="row">
			<div class="landing-block-node-card js-animation fadeInUp col-lg-4 g-mb-80">
				<!-- Icon Blocks -->
				<div class="u-info-v2-2 h-100 g-color-white text-center">
					<div class="u-info-v2-2__item h-100 g-brd-around g-brd-top-none g-brd-white-opacity-0_2 g-px-20 g-pb-30">
						<span class="u-icon-v1 u-icon-size--2xl g-line-height-1 g-color-white g-pull-50x-up">
							<i class="landing-block-node-card-icon icon-transport-026 u-line-icon-pro"></i>
						</span>
						<h3 class="landing-block-node-card-title h6 text-uppercase g-font-weight-700 g-color-white g-mt-minus-35 g-mb-15">
							International Shipping</h3>
						<div class="landing-block-node-card-text g-color-white-opacity-0_8 mb-0">
							<p>Fusce mauris eros, ullamcorper in gravida a, feugiat
								in mauris. Curabitur ac scelerisque nisi. Vivamus accumsan in purus et egestas.</p>
						</div>
					</div>
				</div>
				<!-- End Icon Blocks -->
			</div>

			<div class="landing-block-node-card js-animation fadeInUp col-lg-4 g-mb-80">
				<!-- Icon Blocks -->
				<div class="u-info-v2-2 h-100 g-color-white text-center">
					<div class="u-info-v2-2__item h-100 g-brd-around g-brd-top-none g-brd-white-opacity-0_2 g-px-20 g-pb-30">
						<span class="u-icon-v1 u-icon-size--2xl g-line-height-1 g-color-white g-pull-50x-up">
							<i class="landing-block-node-card-icon icon-christmas-090 u-line-icon-pro"></i>
						</span>
						<h3 class="landing-block-node-card-title h6 text-uppercase g-font-weight-700 g-color-white g-mt-minus-35 g-mb-15">
							Packaging</h3>
						<div class="landing-block-node-card-text g-color-white-opacity-0_8 mb-0">
							<p>Fusce mauris eros, ullamcorper in gravida a, feugiat
								in mauris. Curabitur ac scelerisque nisi. Vivamus accumsan in purus et egestas.</p>
						</div>
					</div>
				</div>
				<!-- End Icon Blocks -->
			</div>

			<div class="landing-block-node-card js-animation fadeInUp col-lg-4 g-mb-80">
				<!-- Icon Blocks -->
				<div class="u-info-v2-2 h-100 g-color-white text-center">
					<div class="u-info-v2-2__item h-100 g-brd-around g-brd-top-none g-brd-white-opacity-0_2 g-px-20 g-pb-30">
						<span class="u-icon-v1 u-icon-size--2xl g-line-height-1 g-color-white g-pull-50x-up">
							<i class="landing-block-node-card-icon icon-travel-044 u-line-icon-pro"></i>
						</span>
						<h3 class="landing-block-node-card-title h6 text-uppercase g-font-weight-700 g-color-white g-mt-minus-35 g-mb-15">
							Competitive
							rates</h3>
						<div class="landing-block-node-card-text g-color-white-opacity-0_8 mb-0">
							<p>Fusce mauris eros, ullamcorper in gravida a, feugiat
								in mauris. Curabitur ac scelerisque nisi. Vivamus accumsan in purus et egestas.</p>
						</div>
					</div>
				</div>
				<!-- End Icon Blocks -->
			</div>

			<div class="landing-block-node-card js-animation fadeInUp col-lg-4 g-mb-80">
				<!-- Icon Blocks -->
				<div class="u-info-v2-2 h-100 g-color-white text-center">
					<div class="u-info-v2-2__item h-100 g-brd-around g-brd-top-none g-brd-white-opacity-0_2 g-px-20 g-pb-30">
						<span class="u-icon-v1 u-icon-size--2xl g-line-height-1 g-color-white g-pull-50x-up">
							<i class="landing-block-node-card-icon icon-hotel-restaurant-249 u-line-icon-pro"></i>
						</span>
						<h3 class="landing-block-node-card-title h6 text-uppercase g-font-weight-700 g-color-white g-mt-minus-35 g-mb-15">
							Quick
							shipping</h3>
						<div class="landing-block-node-card-text g-color-white-opacity-0_8 mb-0">
							<p>Fusce mauris eros, ullamcorper in gravida a, feugiat
								in mauris. Curabitur ac scelerisque nisi. Vivamus accumsan in purus et egestas.</p>
						</div>
					</div>
				</div>
				<!-- End Icon Blocks -->
			</div>

			<div class="landing-block-node-card js-animation fadeInUp col-lg-4 g-mb-80">
				<!-- Icon Blocks -->
				<div class="u-info-v2-2 h-100 g-color-white text-center">
					<div class="u-info-v2-2__item h-100 g-brd-around g-brd-top-none g-brd-white-opacity-0_2 g-px-20 g-pb-30">
						<span class="u-icon-v1 u-icon-size--2xl g-line-height-1 g-color-white g-pull-50x-up">
							<i class="landing-block-node-card-icon icon-hotel-restaurant-211 u-line-icon-pro"></i>
						</span>
						<h3 class="landing-block-node-card-title h6 text-uppercase g-font-weight-700 g-color-white g-mt-minus-35 g-mb-15">
							Quality
							protection</h3>
						<div class="landing-block-node-card-text g-color-white-opacity-0_8 mb-0">
							<p>Fusce mauris eros, ullamcorper in gravida a, feugiat
								in mauris. Curabitur ac scelerisque nisi. Vivamus accumsan in purus et egestas.</p>
						</div>
					</div>
				</div>
				<!-- End Icon Blocks -->
			</div>

			<div class="landing-block-node-card js-animation fadeInUp col-lg-4 g-mb-80">
				<!-- Icon Blocks -->
				<div class="u-info-v2-2 h-100 g-color-white text-center">
					<div class="u-info-v2-2__item h-100 g-brd-around g-brd-top-none g-brd-white-opacity-0_2 g-px-20 g-pb-30">
						<span class="u-icon-v1 u-icon-size--2xl g-line-height-1 g-color-white g-pull-50x-up">
							  <i class="landing-block-node-card-icon icon-hotel-restaurant-234 u-line-icon-pro"></i>
						</span>
						<h3 class="landing-block-node-card-title h6 text-uppercase g-font-weight-700 g-color-white g-mt-minus-35 g-mb-15">
							Shipping
							anywhere</h3>
						<div class="landing-block-node-card-text g-color-white-opacity-0_8 mb-0">
							<p>Fusce mauris eros, ullamcorper in gravida a, feugiat
								in mauris. Curabitur ac scelerisque nisi. Vivamus accumsan in purus et egestas.</p>
						</div>
					</div>
				</div>
				<!-- End Icon Blocks -->
			</div>
		</div>
		<!-- End Icon Blocks -->
	</div>
</section>',
			),
		'04.7.one_col_fix_with_title_and_text_2@2' =>
			array (
				'CODE' => '04.7.one_col_fix_with_title_and_text_2',
				'SORT' => '3000',
				'CONTENT' => '<section class="landing-block g-theme-bg-gray-light-v7 g-py-20 js-animation fadeInUp animated g-pt-60 g-pb-20">

        <div class="container landing-block-node-subcontainer text-center g-max-width-800 g-mb-20">

            <div class="landing-block-node-inner text-uppercase u-heading-v2-4--bottom g-brd-primary">
                <h4 class="landing-block-node-subtitle g-font-weight-700 g-font-size-12 g-color-primary g-mb-15"> </h4>
                <h2 class="landing-block-node-title u-heading-v2__title g-line-height-1_1 g-font-weight-700 g-color-black g-mb-minus-10 g-font-size-26">OUR SKILLS</h2>
            </div>

			<div class="landing-block-node-text g-color-gray-dark-v5"><p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas ac nulla vehicula risus pulvinar feugiat ullamcorper sit amet mi.</p></div>
        </div>

    </section>',
			),
		'08.1.three_cols_fix_title_and_text' =>
			array (
				'CODE' => '08.1.three_cols_fix_title_and_text',
				'SORT' => '3500',
				'CONTENT' => '<section class="landing-block g-pb-60 g-pt-20">
        <div class="container">
            <div class="row">

                <div class="landing-block-card g-mb-40 g-mb-0--lg landing-card col-lg-3 js-animation fadeIn animated">
                    <div class="landing-block-card-header text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-40">
                        <h4 class="landing-block-node-subtitle h6 g-font-weight-800 g-font-size-12 g-letter-spacing-1 g-color-primary g-mb-20"> </h4>
                        <h2 class="landing-block-node-title h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-mb-minus-10 g-color-black g-font-size-17 g-text-break-word">84 HAPPY CLIENTS</h2>
                    </div>

                    <div class="landing-block-node-text"><p>Integer accumsan maximus leo, et consectetur metus vestibulum in. Vestibulum viverra justo odio maximus efficitur</p></div>
                </div>

                <div class="landing-block-card g-mb-40 g-mb-0--lg landing-card col-lg-3 js-animation fadeIn animated">
                    <div class="landing-block-card-header text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-40">
                        <h4 class="landing-block-node-subtitle h6 g-font-weight-800 g-font-size-12 g-letter-spacing-1 g-color-primary g-mb-20"> </h4>
                        <h2 class="landing-block-node-title h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-mb-minus-10 g-color-black g-font-size-17 g-text-break-word">34 COMPLETED PROJECTS</h2>
                    </div>

                    <div class="landing-block-node-text"><p>Integer accumsan maximus leo, et consectetur metus vestibulum in. Vestibulum viverra justo odio maximus efficitur</p></div>
                </div>

                <div class="landing-block-card g-mb-40 g-mb-0--lg landing-card col-lg-3 js-animation fadeIn animated">
                    <div class="landing-block-card-header text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-40">
                        <h4 class="landing-block-node-subtitle h6 g-font-weight-800 g-font-size-12 g-letter-spacing-1 g-color-primary g-mb-20"> </h4>
                        <h2 class="landing-block-node-title h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-mb-minus-10 g-color-black g-font-size-17 g-text-break-word">35 OUR TEAM</h2>
                    </div>

                    <div class="landing-block-node-text"><p>Integer accumsan maximus leo, et consectetur metus vestibulum in. Vestibulum viverra justo odio maximus efficitur</p></div>
                </div>

            <div class="landing-block-card g-mb-40 g-mb-0--lg landing-card col-lg-3 js-animation fadeIn animated">
                    <div class="landing-block-card-header text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-40">
                        <h4 class="landing-block-node-subtitle h6 g-font-weight-800 g-font-size-12 g-letter-spacing-1 g-color-primary g-mb-20"> </h4>
                        <h2 class="landing-block-node-title h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-mb-minus-10 g-color-black g-font-size-17 g-text-break-word">67 COUNTRIES</h2>
                    </div>

                    <div class="landing-block-node-text"><p>Integer accumsan maximus leo, et consectetur metus vestibulum in. Vestibulum viverra justo odio maximus efficitur</p></div>
                </div></div>
        </div>
    </section>',
			),
		'10.1.two_cols_big_img_text_and_text_blocks' =>
			array (
				'CODE' => '10.1.two_cols_big_img_text_and_text_blocks',
				'SORT' => '4000',
				'CONTENT' => '<section class="landing-block row no-gutters g-pt-0">
        <div class="landing-block-node-img col-lg-5 g-min-height-360 g-bg-img-hero" style="background-image: url(\'https://cdn.bitrix24.site/bitrix/images/landing/business/600x985/img1.jpg\');" data-fileid="-1" data-filehash="9eef207add73028ae50f74a9033c20cb"></div>

        <div class="landing-block-node-texts col-lg-7 g-pt-100 g-pb-80 g-px-15 g-px-40--md g-bg-gray-light-v5">
            <header class="landing-block-node-header text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-40">
                <h4 class="landing-block-node-subtitle h6 g-font-weight-800 g-font-size-12 g-letter-spacing-1 g-color-primary g-mb-20"> </h4>
                <h2 class="landing-block-node-title h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-mb-minus-10 g-color-black-opacity-0_9 g-font-size-26">PACKING FRAGILE ITEMS</h2>
            </header>

			<div class="landing-block-node-text g-color-gray-dark-v3"><p>Aenean volutpat erat quis mollis accumsan. Mauris at cursus ipsum. Praesent molestie imperdiet purus in finibus. Pellentesque elit enim, malesuada a varius elementum, sodales id turpis. Maecenas interdum enim egestas risus semper, consectetur auctor metus rhoncus.<br /><br /><span style="font-size: 1rem;">Proin tempus tincidunt nunc sed pellentesque. Vivamus suscipit, tellus nec auctor egestas, urna augue hendrerit est, vel luctus nisl leo ut sem. Suspendisse sed tincidunt risus.</span></p></div>

            <div class="row align-items-stretch">

                <div class="col-sm-6 g-mb-30 landing-block-card-text-block">
                    <article class="h-100 g-flex-middle g-brd-left g-brd-3 g-brd-primary g-brd-white--hover g-transition-0_3 g-pa-20 g-bg-main js-animation fadeIn animated">
                        <div class="g-flex-middle-item">
                            <h4 class="landing-block-node-text-block-title h6 g-font-weight-600 text-uppercase g-mb-10 g-color-black"><span style="color: rgb(244, 67, 54);">01.</span> FUSCE ACCUMSAN FAUCIBUS</h4>
                            <div class="landing-block-node-text-block-text g-color-gray-dark-v3"><p>Curabitur sit amet fringilla mi. Etiam ac massa sit amet nulla eleifend rutrum vitae non sem. Fusce accumsan faucibus laoreet. Maecenas auctor mauris erat quis mollis.</p></div>
                        </div>
                    </article>
                </div>

                <div class="col-sm-6 g-mb-30 landing-block-card-text-block">
                    <article class="h-100 g-flex-middle g-brd-left g-brd-3 g-brd-primary g-brd-white--hover g-transition-0_3 g-pa-20 g-bg-main js-animation fadeIn animated">
                        <div class="g-flex-middle-item">
                            <h4 class="landing-block-node-text-block-title h6 g-font-weight-600 text-uppercase g-mb-10 g-color-black">02. MAECENAS AUCTOR MAURIS</h4>
                            <div class="landing-block-node-text-block-text g-color-gray-dark-v3"><p>Curabitur sit amet fringilla mi. Etiam ac massa sit amet nulla eleifend rutrum vitae non sem. Fusce accumsan faucibus laoreet. Maecenas auctor mauris erat quis mollis.</p></div>
                        </div>
                    </article>
                </div>

<!--            </div>-->
<!---->
<!--            <div class="row align-items-stretch">-->

                <div class="col-sm-6 g-mb-30 landing-block-card-text-block">
                    <article class="h-100 g-flex-middle g-brd-left g-brd-3 g-brd-primary g-brd-white--hover g-transition-0_3 g-pa-20 g-bg-main js-animation fadeIn animated">
                        <div class="g-flex-middle-item">
                            <h4 class="landing-block-node-text-block-title h6 g-font-weight-600 text-uppercase g-mb-10 g-color-black">03. SUSPENDISSE PHARETRA ELIT AC</h4>
                            <div class="landing-block-node-text-block-text g-color-gray-dark-v3"><p>Curabitur sit amet fringilla mi. Etiam ac massa sit amet nulla eleifend rutrum vitae non sem. Fusce accumsan faucibus laoreet. Maecenas auctor mauris erat quis mollis.</p></div>
                        </div>
                    </article>
                </div>

                <div class="col-sm-6 g-mb-30 landing-block-card-text-block">
                    <article class="h-100 g-flex-middle g-brd-left g-brd-3 g-brd-primary g-brd-white--hover g-transition-0_3 g-pa-20 g-bg-main js-animation fadeIn animated">
                        <div class="g-flex-middle-item">
                            <h4 class="landing-block-node-text-block-title h6 g-font-weight-600 text-uppercase g-mb-10 g-color-black">04. VESTIBULUM FRINGILLA RISUS EGE</h4>
                            <div class="landing-block-node-text-block-text g-color-gray-dark-v3"><p>Curabitur sit amet fringilla mi. Etiam ac massa sit amet nulla eleifend rutrum vitae non sem. Fusce accumsan faucibus laoreet. Maecenas auctor mauris erat quis mollis.</p></div>
                        </div>
                    </article>
                </div><div class="col-sm-6 g-mb-30 landing-block-card-text-block">
                    <article class="h-100 g-flex-middle g-brd-left g-brd-3 g-brd-primary g-brd-white--hover g-transition-0_3 g-pa-20 g-bg-main js-animation fadeIn animated">
                        <div class="g-flex-middle-item">
                            <h4 class="landing-block-node-text-block-title h6 g-font-weight-600 text-uppercase g-mb-10 g-color-black">05. ENIM EGESTAS RISUS SEMPER</h4>
                            <div class="landing-block-node-text-block-text g-color-gray-dark-v3"><p>Curabitur sit amet fringilla mi. Etiam ac massa sit amet nulla eleifend rutrum vitae non sem. Fusce accumsan faucibus laoreet. Maecenas auctor mauris erat quis mollis.</p></div>
                        </div>
                    </article>
                </div>

            <div class="col-sm-6 g-mb-30 landing-block-card-text-block">
                    <article class="h-100 g-flex-middle g-brd-left g-brd-3 g-brd-primary g-brd-white--hover g-transition-0_3 g-pa-20 g-bg-main js-animation fadeIn animated">
                        <div class="g-flex-middle-item">
                            <h4 class="landing-block-node-text-block-title h6 g-font-weight-600 text-uppercase g-mb-10 g-color-black">06. EU VENENATIS NULLA PORTTITOR</h4>
                            <div class="landing-block-node-text-block-text g-color-gray-dark-v3"><p>Curabitur sit amet fringilla mi. Etiam ac massa sit amet nulla eleifend rutrum vitae non sem. Fusce accumsan faucibus laoreet. Maecenas auctor mauris erat quis mollis.</p></div>
                        </div>
                    </article>
                </div></div>

        </div>
    </section>',
			),
		'11.2.three_cols_fix_tariffs_with_img' =>
			array (
				'CODE' => '11.2.three_cols_fix_tariffs_with_img',
				'SORT' => '4500',
				'CONTENT' => '<section class="landing-block g-bg-gray-light-v5 g-pt-60 g-pb-60">
	<div class="container">
		<div class="text-uppercase text-center g-mb-70">
			<h2 class="landing-block-node-title d-inline-block g-letter-spacing-0_5 g-font-weight-700 g-brd-bottom g-brd-5 g-brd-primary g-pb-8 g-mb-20 g-font-size-26">Best offers</h2>
			<div class="landing-block-node-text g-color-gray-dark-v5 mb-0 g-text-transform-none g-font-size-14 g-letter-spacing-0"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p></div>
		</div>

		<div class="row">
			<div class="landing-block-node-card col-md-6 g-mb-30 g-mb-0--md landing-card col-lg-3">
				<!-- Article -->
				<article
 class="landing-block-node-card-container js-animation fadeInRight text-center text-uppercase g-color-white-opacity-0_5 animated g-bg-main">
					<!-- Article Image -->
					<img class="landing-block-node-card-img w-100" src="https://cdn.bitrix24.site/bitrix/images/landing/business/600x400/img3.jpg" alt="" data-fileid="-1" />
					<!-- End Article Image -->

					<!-- Article Content -->
					<header class="g-letter-spacing-3 g-pos-rel g-px-40 g-mb-30">
						<span class="u-icon-v3 u-icon-size--xl g-rounded-50x g-font-size-26 g-bg-gray-dark-v1 g-color-white g-pull-50x-up">
							<i class="landing-block-node-card-icon icon-tag"></i>
						</span>
						<h4 class="landing-block-node-card-title h6 g-mt-minus-25 g-mb-10 g-letter-spacing-0 g-color-gray-dark-v1 g-font-size-20"><span style="font-weight: bold;">
							small</span></h4>
						<div class="landing-block-node-card-text mb-0 g-text-transform-none g-letter-spacing-0 g-font-size-14 g-color-gray-dark-v3"><p><span style="font-style: italic;">Dimentions: 10x10x15cm</span></p></div>
					</header>

					<div class="landing-block-node-card-price g-font-weight-700 d-block g-mb-20 g-color-primary g-font-size-30 g-letter-spacing-0">$10.00</div>
					<ul class="landing-block-node-card-price-list list-unstyled g-letter-spacing-0_5 g-font-size-12 mb-0"><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">CURABITUR SIT AMET</span></li><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">ETIAM AC MASSA SIT</span></li><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">FUSCE ACCUMSAN FAUCIBUS</span></li><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">DUIS TRISTIQUE BIBENDUM</span></li><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">DUIS VEHICULA</span></li><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">DONEC FRINGILLA</span></li></ul>

					<footer class="g-pa-40 landing-block-node-card-button-container">
						<a class="landing-block-node-card-button btn btn-md g-brd-2 g-font-size-12 g-font-weight-600 g-letter-spacing-1 u-btn-primary g-color-white g-rounded-4" href="#">Order Now</a>
					</footer>
					<!-- End of Article Content -->
				
				<!-- End Article -->
			</article
></div>

			<div class="landing-block-node-card col-md-6 g-mb-30 g-mb-0--md landing-card col-lg-3">
				<!-- Article -->
				<article
 class="landing-block-node-card-container js-animation fadeInRight text-center text-uppercase g-color-white-opacity-0_5 animated g-bg-main">
					<!-- Article Image -->
					<img class="landing-block-node-card-img w-100" src="https://cdn.bitrix24.site/bitrix/images/landing/business/600x400/img4.jpg" alt="" data-fileid="-1" />
					<!-- End Article Image -->

					<!-- Article Content -->
					<header class="g-letter-spacing-3 g-pos-rel g-px-40 g-mb-30">
						<span class="u-icon-v3 u-icon-size--xl g-rounded-50x g-font-size-26 g-bg-gray-dark-v1 g-color-white g-pull-50x-up">
							<i class="landing-block-node-card-icon icon-bag"></i>
						</span>
						<h4 class="landing-block-node-card-title h6 g-mt-minus-25 g-mb-10 g-letter-spacing-0 g-color-gray-dark-v1 g-font-size-20"><span style="font-weight: bold;">medium</span></h4>
						<div class="landing-block-node-card-text mb-0 g-text-transform-none g-letter-spacing-0 g-font-size-14 g-color-gray-dark-v3"><p><span style="font-style: italic;">Dimentions: 10x10x15cm</span></p></div>
					</header>

					<div class="landing-block-node-card-price g-font-weight-700 d-block g-mb-20 g-color-primary g-font-size-30 g-letter-spacing-0">$20.00</div>
					<ul class="landing-block-node-card-price-list list-unstyled g-letter-spacing-0_5 g-font-size-12 mb-0"><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">CURABITUR SIT AMET</span></li><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">ETIAM AC MASSA SIT</span></li><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">FUSCE ACCUMSAN FAUCIBUS</span></li><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">DUIS TRISTIQUE BIBENDUM</span></li><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">DUIS VEHICULA</span></li><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">DONEC FRINGILLA</span></li></ul>

					<footer class="g-pa-40 landing-block-node-card-button-container">
						<a class="landing-block-node-card-button btn btn-md g-brd-2 g-font-size-12 g-font-weight-600 g-letter-spacing-1 u-btn-primary g-color-white g-rounded-4" href="#">Order Now</a>
					</footer>
					<!-- End of Article Content -->
				
				<!-- End Article -->
			</article
></div>

			<div class="landing-block-node-card col-md-6 g-mb-30 g-mb-0--md landing-card col-lg-3">
				<!-- Article -->
				<article
 class="landing-block-node-card-container js-animation fadeInRight text-center text-uppercase g-color-white-opacity-0_5 animated g-bg-main">
					<!-- Article Image -->
					<img class="landing-block-node-card-img w-100" src="https://cdn.bitrix24.site/bitrix/images/landing/business/600x400/img5.jpg" alt="" data-fileid="-1" />
					<!-- End Article Image -->

					<!-- Article Content -->
					<header class="g-letter-spacing-3 g-pos-rel g-px-40 g-mb-30">
						<span class="u-icon-v3 u-icon-size--xl g-rounded-50x g-font-size-26 g-bg-gray-dark-v1 g-color-white g-pull-50x-up">
							<i class="landing-block-node-card-icon icon-briefcase"></i>
						</span>
						<h4 class="landing-block-node-card-title h6 g-mt-minus-25 g-mb-10 g-letter-spacing-0 g-color-gray-dark-v1 g-font-size-20"><span style="font-weight: bold;">large</span></h4>
						<div class="landing-block-node-card-text mb-0 g-text-transform-none g-letter-spacing-0 g-font-size-14 g-color-gray-dark-v3"><p><span style="font-style: italic;">Dimentions: 10x10x15cm</span></p></div>
					</header>

					<div class="landing-block-node-card-price g-font-weight-700 d-block g-mb-20 g-color-primary g-font-size-30 g-letter-spacing-0">$40.00</div>
					<ul class="landing-block-node-card-price-list list-unstyled g-letter-spacing-0_5 g-font-size-12 mb-0"><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">CURABITUR SIT AMET</span></li><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">ETIAM AC MASSA SIT</span></li><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">FUSCE ACCUMSAN FAUCIBUS</span></li><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">DUIS TRISTIQUE BIBENDUM</span></li><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">DUIS VEHICULA</span></li><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">DONEC FRINGILLA</span></li></ul>

					<footer class="g-pa-40 landing-block-node-card-button-container">
						<a class="landing-block-node-card-button btn btn-md g-brd-2 g-font-size-12 g-font-weight-600 g-letter-spacing-1 u-btn-primary g-color-white g-rounded-4" href="#">Order Now</a>
					</footer>
					<!-- End of Article Content -->
				
				<!-- End Article -->
			</article
></div>
		<div class="landing-block-node-card col-md-6 g-mb-30 g-mb-0--md landing-card col-lg-3">
				<!-- Article -->
				<article
 class="landing-block-node-card-container js-animation fadeInRight text-center text-uppercase g-color-white-opacity-0_5 animated g-bg-main">
					<!-- Article Image -->
					<img class="landing-block-node-card-img w-100" src="https://cdn.bitrix24.site/bitrix/images/landing/business/600x400/img6.jpg" alt="" data-fileid="-1" />
					<!-- End Article Image -->

					<!-- Article Content -->
					<header class="g-letter-spacing-3 g-pos-rel g-px-40 g-mb-30">
						<span class="u-icon-v3 u-icon-size--xl g-rounded-50x g-font-size-26 g-bg-gray-dark-v1 g-color-white g-pull-50x-up">
							<i class="landing-block-node-card-icon icon-present"></i>
						</span>
						<h4 class="landing-block-node-card-title h6 g-mt-minus-25 g-mb-10 g-letter-spacing-0 g-color-gray-dark-v1 g-font-size-20"><span style="font-weight: 700;">extra large</span></h4>
						<div class="landing-block-node-card-text mb-0 g-text-transform-none g-letter-spacing-0 g-font-size-14 g-color-gray-dark-v3"><p><span style="font-style: italic;">Dimentions: 10x10x15cm</span></p></div>
					</header>

					<div class="landing-block-node-card-price g-font-weight-700 d-block g-mb-20 g-color-primary g-font-size-30 g-letter-spacing-0">$100.00</div>
					<ul class="landing-block-node-card-price-list list-unstyled g-letter-spacing-0_5 g-font-size-12 mb-0"><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">CURABITUR SIT AMET</span></li><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">ETIAM AC MASSA SIT</span></li><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">FUSCE ACCUMSAN FAUCIBUS</span></li><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">DUIS TRISTIQUE BIBENDUM</span></li><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">DUIS VEHICULA</span></li><li class="g-py-10 g-px-30 g-color-black g-bg-main"><span style="font-weight: 700;color: rgb(33, 33, 33);">DONEC FRINGILLA</span></li></ul>

					<footer class="g-pa-40 landing-block-node-card-button-container">
						<a class="landing-block-node-card-button btn btn-md g-brd-2 g-font-size-12 g-font-weight-600 g-letter-spacing-1 u-btn-primary g-color-white g-rounded-4" href="#">Order Now</a>
					</footer>
					<!-- End of Article Content -->
				
				<!-- End Article -->
			</article
></div></div>
	</div>
</section>',
			),
		'04.7.one_col_fix_with_title_and_text_2@3' =>
			array (
				'CODE' => '04.7.one_col_fix_with_title_and_text_2',
				'SORT' => '5000',
				'CONTENT' => '<section class="landing-block g-theme-bg-gray-light-v7 g-py-20 js-animation fadeInUp animated g-pt-60 g-pb-20">

        <div class="container landing-block-node-subcontainer text-center g-max-width-800 g-mb-20">

            <div class="landing-block-node-inner text-uppercase u-heading-v2-4--bottom g-brd-primary">
                <h4 class="landing-block-node-subtitle g-font-weight-700 g-font-size-12 g-color-primary g-mb-15"> </h4>
                <h2 class="landing-block-node-title u-heading-v2__title g-line-height-1_1 g-font-weight-700 g-color-black g-mb-minus-10 g-font-size-26"><p style="text-align: center;"><span style="font-family: inherit;">Gallery</span></p></h2>
            </div>

			<div class="landing-block-node-text g-color-gray-dark-v5"><p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, Etiam rhoncus. Maecenas tempus.</p></div>
        </div>

    </section>',
			),
		'32.5.img_grid_3cols_1_wo_gutters' =>
			array (
				'CODE' => '32.5.img_grid_3cols_1_wo_gutters',
				'SORT' => '5500',
				'CONTENT' => '<section class="landing-block g-pt-0 g-pb-0">

	<div class="row no-gutters js-gallery-cards">

		<div class="col-12 col-sm-4">
			<div class="h-100">
				<div class="landing-block-node-img-container landing-block-node-img-container-left js-animation fadeInLeft h-100 g-pos-rel g-parent u-block-hover">
					<img data-fancybox="gallery"
						 class="landing-block-node-img img-fluid g-object-fit-cover h-100 w-100 u-block-hover__main--zoom-v1"
						 src="https://cdn.bitrix24.site/bitrix/images/landing/business/600x400/img7.jpg"/>
				</div>
			</div>
		</div>

		<div class="col-12 col-sm-4">
			<div class="h-100">
				<div class="landing-block-node-img-container landing-block-node-img-container-center js-animation fadeInUp h-100 g-pos-rel g-parent u-block-hover">
					<img data-fancybox="gallery"
						 class="landing-block-node-img img-fluid g-object-fit-cover h-100 w-100 u-block-hover__main--zoom-v1"
						 src="https://cdn.bitrix24.site/bitrix/images/landing/business/600x400/img8.jpg"/>
				</div>
			</div>
		</div>

		<div class="col-12 col-sm-4">
			<div class="h-100">
				<div class="landing-block-node-img-container landing-block-node-img-container-right js-animation fadeInRight h-100 g-pos-rel g-parent u-block-hover">
					<img data-fancybox="gallery"
						 class="landing-block-node-img img-fluid g-object-fit-cover h-100 w-100 u-block-hover__main--zoom-v1"
						 src="https://cdn.bitrix24.site/bitrix/images/landing/business/600x400/img9.jpg"/>
				</div>
			</div>
		</div>

	</div>

</section>',
			),
		'32.5.img_grid_3cols_1_wo_gutters@2' =>
			array (
				'CODE' => '32.5.img_grid_3cols_1_wo_gutters',
				'SORT' => '6000',
				'CONTENT' => '<section class="landing-block g-pt-0 g-pb-0">

	<div class="row no-gutters js-gallery-cards">

		<div class="col-12 col-sm-4">
			<div class="h-100">
				<div class="landing-block-node-img-container landing-block-node-img-container-left js-animation fadeInLeft h-100 g-pos-rel g-parent u-block-hover">
					<img data-fancybox="gallery" class="landing-block-node-img img-fluid g-object-fit-cover h-100 w-100 u-block-hover__main--zoom-v1" src="https://cdn.bitrix24.site/bitrix/images/landing/business/600x400/img10.jpg" alt="" data-fileid="-1" />
				</div>
			</div>
		</div>

		<div class="col-12 col-sm-4">
			<div class="h-100">
				<div class="landing-block-node-img-container landing-block-node-img-container-center js-animation fadeInUp h-100 g-pos-rel g-parent u-block-hover">
					<img data-fancybox="gallery" class="landing-block-node-img img-fluid g-object-fit-cover h-100 w-100 u-block-hover__main--zoom-v1" src="https://cdn.bitrix24.site/bitrix/images/landing/business/600x400/img11.jpg" alt="" data-fileid="-1" />
				</div>
			</div>
		</div>

		<div class="col-12 col-sm-4">
			<div class="h-100">
				<div class="landing-block-node-img-container landing-block-node-img-container-right js-animation fadeInRight h-100 g-pos-rel g-parent u-block-hover">
					<img data-fancybox="gallery" class="landing-block-node-img img-fluid g-object-fit-cover h-100 w-100 u-block-hover__main--zoom-v1" src="https://cdn.bitrix24.site/bitrix/images/landing/business/600x400/img12.jpg" alt="" data-fileid="-1" />
				</div>
			</div>
		</div>

	</div>

</section>',
			),
		'04.7.one_col_fix_with_title_and_text_2@4' =>
			array (
				'CODE' => '04.7.one_col_fix_with_title_and_text_2',
				'SORT' => '6500',
				'CONTENT' => '<section class="landing-block g-theme-bg-gray-light-v7 g-py-20 g-bg-gray-light-v5 js-animation fadeInUp animated g-pt-60 g-pb-20">

        <div class="container landing-block-node-subcontainer text-center g-max-width-800 g-mb-20">

            <div class="landing-block-node-inner text-uppercase u-heading-v2-4--bottom g-brd-primary">
                <h4 class="landing-block-node-subtitle g-font-weight-700 g-font-size-12 g-color-primary g-mb-15"> </h4>
                <h2 class="landing-block-node-title u-heading-v2__title g-line-height-1_1 g-font-weight-700 g-color-black g-mb-minus-10 g-font-size-26">FAQ</h2>
            </div>

			<div class="landing-block-node-text g-color-gray-dark-v3"><p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p></div>
        </div>

    </section>',
			),
		'19.1.two_cols_fix_img_text_blocks' =>
			array (
				'CODE' => '19.1.two_cols_fix_img_text_blocks',
				'SORT' => '7000',
				'CONTENT' => '<section class="landing-block g-py-20 g-bg-gray-light-v5 g-pt-20">
        <div class="container">
            <div class="row">

                <div class="col-md-5 g-mb-30 g-mb-0--md">
                    <img class="landing-block-node-img img-fluid g-mb-30" src="https://cdn.bitrix24.site/bitrix/images/landing/business/348x660/img1.png" alt="" data-fileid="-1" data-filehash="9eef207add73028ae50f74a9033c20cb" />

                    <h3 class="landing-block-node-title text-uppercase g-font-weight-700 g-color-black g-mb-20 g-font-size-40"> </h3>
                    <div class="landing-block-node-text"><br /></div>
                </div>

                <div class="col-md-7">
                    <div aria-multiselectable="true">
                        <div class="landing-block-card-accordeon-element card g-brd-none js-animation fadeInUp animated landing-card">
                            <div class="card-header u-accordion__header g-bg-transparent g-brd-none rounded-0 p-0">
								<div class="landing-block-card-accordeon-element-title-link d-block text-uppercase g-pos-rel g-font-weight-700 g-font-size-12 g-brd-bottom g-brd-primary g-brd-2 g-py-15">
                                    <i class="landing-block-node-accordeon-element-img g-valign-middle g-font-size-23 g-color-primary g-mr-10 fa fa-plus-square-o"></i>
                                    <div class="d-inline-block landing-block-node-accordeon-element-title">Phasellus bibendum semper lectus, in ornare erat tempus eget?</div>
                                </div>
                            </div>

                            <div class="landing-block-card-accordeon-element-body" aria-labelledby="aboutAccordionHeading1">
                                <div class="card-block u-accordion__body g-py-20 px-0 g-color-gray-dark-v3">
                                    <div class="landing-block-node-accordeon-element-text g-font-size-default"><p>Anim pariatur cliche reprehenderit, 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p></div>
                                </div>
                            </div>
                        </div>

                        <div class="landing-block-card-accordeon-element card g-brd-none js-animation fadeInUp animated landing-card">
                            <div class="card-header u-accordion__header g-bg-transparent g-brd-none rounded-0 p-0">
                                <div class="landing-block-card-accordeon-element-title-link d-block text-uppercase g-pos-rel g-font-weight-700 g-font-size-12 g-brd-bottom g-brd-primary g-brd-2 g-py-15">
                                    <i class="landing-block-node-accordeon-element-img g-valign-middle g-font-size-23 g-color-primary g-mr-10 fa fa-plus-square-o"></i>
                                    <div class="d-inline-block landing-block-node-accordeon-element-title">Duis vehicula turpis tincidunt, malesuada mauris et, tincidunt nisl?</div>
                                </div>
                            </div>

                            <div class="landing-block-card-accordeon-element-body" aria-labelledby="aboutAccordionHeading2">
                                <div class="card-block u-accordion__body g-py-20 px-0 g-color-gray-dark-v3">
                                    <div class="landing-block-node-accordeon-element-text g-font-size-default"><p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Food truck quinoa nesciunt laborum eiusmod.</p></div>
                                </div>
                            </div>
                        </div>

                        <div class="landing-block-card-accordeon-element card g-brd-none js-animation fadeInUp animated landing-card">
                            <div class="card-header u-accordion__header g-bg-transparent g-brd-none rounded-0 p-0">
                                <div class="landing-block-card-accordeon-element-title-link d-block text-uppercase g-pos-rel g-font-weight-700 g-font-size-12 g-brd-bottom g-brd-primary g-brd-2 g-py-15">
                                    <i class="landing-block-node-accordeon-element-img g-valign-middle g-font-size-23 g-color-primary g-mr-10 fa fa-plus-square-o"></i>
                                    <div class="d-inline-block landing-block-node-accordeon-element-title">Mauris et lacus ut massa luctus varius?</div>
                                </div>
                            </div>

                            <div class="landing-block-card-accordeon-element-body" aria-labelledby="aboutAccordionHeading3">
                                <div class="card-block u-accordion__body g-py-20 px-0 g-color-gray-dark-v3">
                                    <div class="landing-block-node-accordeon-element-text g-font-size-default"><p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Food truck quinoa nesciunt laborum eiusmod.</p></div>
                                </div>
                            </div>
                        </div>

                        <div class="landing-block-card-accordeon-element card g-brd-none js-animation fadeInUp animated landing-card">
                            <div class="card-header u-accordion__header g-bg-transparent g-brd-none rounded-0 p-0">
                                <div class="landing-block-card-accordeon-element-title-link d-block text-uppercase g-pos-rel g-font-weight-700 g-font-size-12 g-brd-bottom g-brd-primary g-brd-2 g-py-15">
                                    <i class="landing-block-node-accordeon-element-img g-valign-middle g-font-size-23 g-color-primary g-mr-10 fa fa-plus-square-o"></i>
                                    <div class="d-inline-block landing-block-node-accordeon-element-title">Curabitur id elit lobortis, malesuada nibh in, fringilla metus?</div>
                                </div>
                            </div>

                            <div class="landing-block-card-accordeon-element-body" aria-labelledby="aboutAccordionHeading4">
                                <div class="card-block u-accordion__body g-py-20 px-0 g-color-gray-dark-v3">
                                    <div class="landing-block-node-accordeon-element-text g-font-size-default"><p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Food truck quinoa nesciunt laborum eiusmod.</p></div>
                                </div>
                            </div>
                        </div>
                    <div class="landing-block-card-accordeon-element card g-brd-none js-animation fadeInUp animated landing-card">
                            <div class="card-header u-accordion__header g-bg-transparent g-brd-none rounded-0 p-0">
                                <div class="landing-block-card-accordeon-element-title-link d-block text-uppercase g-pos-rel g-font-weight-700 g-font-size-12 g-brd-bottom g-brd-primary g-brd-2 g-py-15">
                                    <i class="landing-block-node-accordeon-element-img g-valign-middle g-font-size-23 g-color-primary g-mr-10 fa fa-plus-square-o"></i>
                                    <div class="d-inline-block landing-block-node-accordeon-element-title">Fusce accumsan faucibus laoreet?</div>
                                </div>
                            </div>

                            <div class="landing-block-card-accordeon-element-body" aria-labelledby="aboutAccordionHeading4">
                                <div class="card-block u-accordion__body g-py-20 px-0 g-color-gray-dark-v3">
                                    <div class="landing-block-node-accordeon-element-text g-font-size-default"><p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute.</p></div>
                                </div>
                            </div>
                        </div></div>
                </div>

            </div>
        </div>
    </section>',
			),
		'43.3.cover_with_feedback' =>
			array (
				'CODE' => '43.3.cover_with_feedback',
				'SORT' => '7500',
				'CONTENT' => '<section class="landing-block">
	<div class="landing-block-node-bgimg u-bg-overlay g-bg-img-hero g-bg-black-opacity-0_5--after g-py-90"
		 style="background-image: url(https://cdn.bitrix24.site/bitrix/images/landing/business/1920x1280/img10.jpg);">
		<div class="container u-bg-overlay__inner g-max-width-800">
			<div class="landing-block-node-header js-animation fadeInUp text-center mx-auto u-heading-v2-2--bottom g-brd-primary g-mb-70">
				<h2 class="landing-block-node-title text-uppercase g-line-height-1_1 g-font-weight-700 g-font-size-26 g-color-white g-mb-15">
					What
					do people say about us?</h2>
				<div class="landing-block-node-text g-color-white-opacity-0_8 mb-0">
					<p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam
						rhoncus. Nam eget dui. Etiam rhoncus. ullamcorper ultricies nisi, ullamcorper ultricies nisi</p>
				</div>
			</div>
		</div>

		<div class="container u-bg-overlay__inner g-width-900">
			<div class="js-carousel g-pb-70"
				 data-infinite="true"
				 data-arrows-classes="u-arrow-v1 g-absolute-centered--x g-bottom-0 g-width-40 g-height-40 g-rounded-50x g-font-size-default g-theme-color-gray-light-v2 g-color-white--hover g-bg-white g-bg-primary--hover g-transition-0_2 g-transition--ease-in"
				 data-arrow-left-classes="fa fa-angle-left g-ml-minus-30"
				 data-arrow-right-classes="fa fa-angle-right g-ml-30">
				<div class="landing-block-node-card js-slide">
					<!-- Testimonial Block -->
					<div class="landing-block-node-card-container js-animation fadeIn media d-block d-md-flex">
						<div class="g-mb-30 g-mb-0--md g-pr-30--sm">
							<img class="landing-block-node-card-photo img-fluid rounded-circle img-bordered g-brd-white mx-auto"
								 src="https://cdn.bitrix24.site/bitrix/images/landing/business/120x120/img11.jpg" alt="">
						</div>

						<div class="media-body align-self-center text-sm-left text-center g-color-white">
							<div class="landing-block-node-card-text g-mb-25">The customisation options you implemented are countless, and I
								feel sorry I can\'t use them all. Good job, and keep going! are countless, and I feel
							</div>
							<h4 class="landing-block-node-card-name h6 text-uppercase g-font-weight-700 g-color-white mb-0">Someone someone</h4>
						</div>
					</div>
					<!-- End Testimonial Block -->
				</div>

				<div class="landing-block-node-card js-slide">
					<!-- Testimonial Block -->
					<div class="landing-block-node-card-container js-animation fadeIn media d-block d-md-flex">
						<div class="g-mb-30 g-mb-0--md g-pr-30--sm">
							<img class="landing-block-node-card-photo img-fluid rounded-circle img-bordered g-brd-white mx-auto"
								 src="https://cdn.bitrix24.site/bitrix/images/landing/business/120x120/img12.jpg" alt="">
						</div>

						<div class="media-body align-self-center text-center text-sm-left g-color-white">
							<div class="landing-block-node-card-text g-mb-25">The customisation options you implemented are countless, and I
								feel sorry I can\'t use them all. Good job, and keep going! are countless, and I feel
							</div>
							<h4 class="landing-block-node-card-name h6 text-uppercase g-font-weight-700 g-color-white mb-0">Someone someone</h4>
						</div>
					</div>
					<!-- End Testimonial Block -->
				</div>

				<div class="landing-block-node-card js-slide">
					<!-- Testimonial Block -->
					<div class="landing-block-node-card-container js-animation fadeIn media d-block d-md-flex">
						<div class="g-mb-30 g-mb-0--md g-pr-30--sm">
							<img class="landing-block-node-card-photo img-fluid rounded-circle img-bordered g-brd-white mx-auto"
								 src="https://cdn.bitrix24.site/bitrix/images/landing/business/120x120/img13.jpg" alt="">
						</div>

						<div class="media-body align-self-center text-center text-sm-left g-color-white">
							<div class="landing-block-node-card-text g-mb-25">The customisation options you implemented are countless, and I
								feel sorry I can\'t use them all. Good job, and keep going! are countless, and I feel
							</div>
							<h4 class="landing-block-node-card-name h6 text-uppercase g-font-weight-700 g-color-white mb-0">Someone someone</h4>
						</div>
					</div>
					<!-- End Testimonial Block -->
				</div>
			</div>
		</div>
	</div>

</section>
',
			),
		'12.image_carousel_6_cols_fix' =>
			array (
				'CODE' => '12.image_carousel_6_cols_fix',
				'SORT' => '8000',
				'CONTENT' => '<section class="landing-block js-animation text-center g-py-20 zoomIn">
        <div class="container">

            <div id="carouselGLR003" class="js-carousel g-mb-20" data-autoplay="true" data-pause-hover="true" data-infinite="true" data-slides-show="6">
                <div class="landing-block-card-carousel-item js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
                    <img class="landing-block-node-carousel-img img-fluid g-max-width-170--md mx-auto" src="https://cdn.bitrix24.site/bitrix/images/landing/business/200x150/img1.png" alt="" />
                </div>

                <div class="landing-block-card-carousel-item js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
                    <img class="landing-block-node-carousel-img img-fluid g-max-width-170--md mx-auto" src="https://cdn.bitrix24.site/bitrix/images/landing/business/200x150/img2.png" alt="" />
                </div>

                <div class="landing-block-card-carousel-item js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
                    <img class="landing-block-node-carousel-img img-fluid g-max-width-170--md mx-auto" src="https://cdn.bitrix24.site/bitrix/images/landing/business/200x150/img3.png" alt="" />
                </div>

                <div class="landing-block-card-carousel-item js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
                    <img class="landing-block-node-carousel-img img-fluid g-max-width-170--md mx-auto" src="https://cdn.bitrix24.site/bitrix/images/landing/business/200x150/img4.png" alt="" />
                </div>

                <div class="landing-block-card-carousel-item js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
                    <img class="landing-block-node-carousel-img img-fluid g-max-width-170--md mx-auto" src="https://cdn.bitrix24.site/bitrix/images/landing/business/200x150/img5.png" alt="" />
                </div>

                <div class="landing-block-card-carousel-item js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
                    <img class="landing-block-node-carousel-img img-fluid g-max-width-170--md mx-auto" src="https://cdn.bitrix24.site/bitrix/images/landing/business/200x150/img6.png" alt="" />
                </div>

                <div class="landing-block-card-carousel-item js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
                    <img class="landing-block-node-carousel-img img-fluid g-max-width-170--md mx-auto" src="https://cdn.bitrix24.site/bitrix/images/landing/business/200x150/img7.png" alt="" />
                </div>

                <div class="landing-block-card-carousel-item js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
                    <img class="landing-block-node-carousel-img img-fluid g-max-width-170--md mx-auto" src="https://cdn.bitrix24.site/bitrix/images/landing/business/200x150/img8.png" alt="" />
                </div>

                <div class="landing-block-card-carousel-item js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10">
                    <img class="landing-block-node-carousel-img img-fluid g-max-width-170--md mx-auto" src="https://cdn.bitrix24.site/bitrix/images/landing/business/200x150/img9.png" alt="" />
                </div>
            </div>

        </div>
    </section>',
			),
		'04.7.one_col_fix_with_title_and_text_2@5' =>
			array (
				'CODE' => '04.7.one_col_fix_with_title_and_text_2',
				'SORT' => '8500',
				'CONTENT' => '<section class="landing-block g-theme-bg-gray-light-v7 g-py-20 js-animation fadeInUp animated g-pt-60 g-pb-20">

        <div class="container landing-block-node-subcontainer text-center g-max-width-800 g-mb-20">

            <div class="landing-block-node-inner text-uppercase u-heading-v2-4--bottom g-brd-primary">
                <h4 class="landing-block-node-subtitle g-font-weight-700 g-font-size-12 g-color-primary g-mb-15"> </h4>
                <h2 class="landing-block-node-title u-heading-v2__title g-line-height-1_1 g-font-weight-700 g-color-black g-mb-minus-10 g-font-size-26">CONTACT US</h2>
            </div>

			<div class="landing-block-node-text g-color-gray-dark-v5"><p>Curabitur ullamcorper ultricies nisi. Nam eget dui.</p></div>
        </div>

    </section>',
			),
		'33.10.form_2_light_left_text' =>
			array (
				'CODE' => '33.10.form_2_light_left_text',
				'SORT' => '9000',
				'CONTENT' => '<section class="g-pos-rel landing-block text-center g-color-gray-dark-v1 g-py-100 g-pt-20 g-pb-60">

	<div class="container">

		<div class="landing-block-form-styles" hidden="">
			<div class="g-bg-transparent h1 g-color-white g-brd-none g-pa-0" data-form-style-wrapper-padding="1" data-form-style-bg="1" data-form-style-bg-content="1" data-form-style-bg-block="1" data-form-style-header-font-size="1" data-form-style-main-font-weight="1" data-form-style-button-font-color="1" data-form-style-border-block="1">
			</div>
			<div class="g-bg-primary g-color-primary g-brd-primary" data-form-style-main-bg="1" data-form-style-main-border-color="1" data-form-style-main-font-color-hover="1">
			</div>
			<div class="g-bg-gray-light-v5 g-color-gray-dark-v1 g-brd-around g-brd-white rounded-0" data-form-style-input-bg="1" data-form-style-input-select-bg="1" data-form-style-input-border="1" data-form-style-input-border-radius="1" data-form-style-main-font-color="1">
			</div>
			<div class="g-brd-around g-brd-gray-light-v2 g-color-gray-dark-v5 g-brd-bottom g-bg-black-opacity-0_7" data-form-style-input-border-color="1" data-form-style-input-border-hover="1" data-form-style-icon-font-color="1">
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="text-center g-overflow-hidden">
					<h3 class="landing-block-node-main-title h3 text-uppercase g-font-weight-700 g-mb-20 g-color-black"> </h3>
					
					<div class="landing-block-node-text g-line-height-1_5 text-left g-mb-40 g-color-gray-dark-v5" data-form-style-main-font-family="1" data-form-style-main-font-weight="1" data-form-style-header-text-font-size="1"> </div>
					<div class="g-mx-minus-2 g-my-minus-2">
						<div class="row mx-0">
							<div class="landing-block-card-contact col-sm-6 g-brd-left g-brd-bottom g-brd-gray-light-v4 g-px-15 g-py-25 js-animation fadeIn animated landing-card">
								<i class="landing-block-card-contact-icon icon-anchor d-inline-block g-font-size-50 g-color-primary g-mb-30"></i>
								<h3 class="landing-block-card-contact-title text-uppercase g-font-size-11 g-color-gray-dark-v5 mb-0" data-form-style-label-font-weight="1" data-form-style-label-font-size="1" data-form-style-second-font-color="1">Address</h3>
								<div class="landing-block-card-contact-text g-font-size-11"><span style="font-weight: bold;">Sit amet adipiscing</span></div>
							</div>

							<div class="landing-block-card-contact col-sm-6 g-brd-left g-brd-bottom g-brd-gray-light-v4 g-px-15 g-py-25 js-animation fadeIn animated landing-card">
								<i class="landing-block-card-contact-icon icon-call-in d-inline-block g-font-size-50 g-color-primary g-mb-30"></i>
								<h3 class="landing-block-card-contact-title text-uppercase g-font-size-11 g-color-gray-dark-v5 mb-0" data-form-style-label-font-weight="1" data-form-style-label-font-size="1" data-form-style-second-font-color="1">Phone
									number</h3>
								<div class="g-font-size-11">
									<a href="tel:+4025448569" class="landing-block-card-contact-link g-font-weight-700">+402 5448 569</a>
								</div>
							</div>

							<div class="landing-block-card-contact col-sm-6 g-brd-left g-brd-bottom g-brd-gray-light-v4 g-px-15 g-py-25 js-animation fadeIn animated landing-card">
								<i class="landing-block-card-contact-icon icon-line icon-envelope-letter d-inline-block g-font-size-50 g-color-primary g-mb-30"></i>
								<h3 class="landing-block-card-contact-title text-uppercase g-font-size-11 g-color-gray-dark-v5 mb-0" data-form-style-label-font-weight="1" data-form-style-label-font-size="1" data-form-style-second-font-color="1">Email</h3>
								<div class="g-font-size-11 g-color-gray-dark-v1">
									<a href="mailto:info@company24.com" class="landing-block-card-contact-link g-font-weight-700">info@company24.com</a>
								</div>
							</div>

							<div class="landing-block-card-contact col-sm-6 g-brd-left g-brd-bottom g-brd-gray-light-v4 g-px-15 g-py-25 js-animation fadeIn animated landing-card">
								<i class="landing-block-card-contact-icon icon-earphones-alt d-inline-block g-font-size-50 g-color-primary g-mb-30"></i>
								<h3 class="landing-block-card-contact-title text-uppercase g-font-size-11 g-color-gray-dark-v5 mb-0" data-form-style-label-font-weight="1" data-form-style-label-font-size="1" data-form-style-second-font-color="1">Toll
									free</h3>
								<div class="g-font-size-11">
									<a href="tel:+4025897660" class="landing-block-card-contact-link g-font-weight-700">+402 5897 660</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="bitrix24forms g-brd-white-opacity-0_6" data-b24form="" data-b24form-use-style="Y" data-b24form-show-header="N" data-b24form-original-domain=""></div>
			</div>
		</div>
	</div>
</section>',
			),
		'17.1.copyright_with_social' =>
			array (
				'CODE' => '17.1.copyright_with_social',
				'SORT' => '9500',
				'CONTENT' => '<section class="landing-block g-brd-top g-brd-gray-dark-v2 g-bg-black-opacity-0_8 js-animation animation-none">
	<div class="text-center text-md-left g-py-40 g-color-gray-dark-v5 container">
		<div class="row">
			<div class="col-md-6 d-flex align-items-center g-mb-15 g-mb-0--md w-100 mb-0">
				<div class="landing-block-node-text mr-1 js-animation animation-none">
					&copy; 2018 All right reserved.
				</div>
			</div>

			<div class="col-md-6">
<!--				<ul class="list-inline float-md-right mb-0">-->
<!--					<li class="landing-block-card-social list-inline-item g-mr-10">-->
<!--						<a class="landing-block-node-social-link u-icon-v2 g-width-35 g-height-35 g-font-size-16 g-color-gray-light-v1 g-color-white--hover g-bg-primary--hover g-brd-gray-dark-v2 g-brd-primary--hover g-rounded-5"-->
<!--						   href="#"><i class="landing-block-node-social-img fa fa-twitter"></i></a>-->
<!--					</li>-->
<!--					<li class="landing-block-card-social list-inline-item g-mr-10">-->
<!--						<a class="landing-block-node-social-link u-icon-v2 g-width-35 g-height-35 g-font-size-16 g-color-gray-light-v1 g-color-white--hover g-bg-primary--hover g-brd-gray-dark-v2 g-brd-primary--hover g-rounded-5"-->
<!--						   href="#"><i class="landing-block-node-social-img fa fa-pinterest-p"></i></a>-->
<!--					</li>-->
<!--					<li class="landing-block-card-social list-inline-item g-mr-10">-->
<!--						<a class="landing-block-node-social-link u-icon-v2 g-width-35 g-height-35 g-font-size-16 g-color-gray-light-v1 g-color-white--hover g-bg-primary--hover g-brd-gray-dark-v2 g-brd-primary--hover g-rounded-5"-->
<!--						   href="#"><i class="landing-block-node-social-img fa fa-facebook"></i></a>-->
<!--					</li>-->
<!--					<li class="landing-block-card-social list-inline-item">-->
<!--						<a class="landing-block-node-social-link u-icon-v2 g-width-35 g-height-35 g-font-size-16 g-color-gray-light-v1 g-color-white--hover g-bg-primary--hover g-brd-gray-dark-v2 g-brd-primary--hover g-rounded-5"-->
<!--						   href="#"><i class="landing-block-node-social-img fa fa-linkedin"></i></a>-->
<!--					</li>-->
<!--				</ul>-->
			</div>
		</div>
	</div>
</section>',
			),
	),
);