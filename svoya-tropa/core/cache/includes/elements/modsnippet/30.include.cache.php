<?php
$page = $modx->getObject('modResource', 1);

$cost_s = $page->getTVValue('cost_s');
$cost_two_s = $page->getTVValue('cost_two_s');
$where_now_s = $page->getTVValue('where_now_s');
$where_yesterday_s = $page->getTVValue('where_yesterday_s');
$price_info_main_st = $page->getTVValue('price_info_main_st');

$cost_l = $page->getTVValue('cost_l');
$cost_two_l = $page->getTVValue('cost_two_l');
$where_now_l = $page->getTVValue('where_now_l');
$where_yesterday_l = $page->getTVValue('where_yesterday_l');
$price_info_main = $page->getTVValue('price_info_main');

$cost_y = $page->getTVValue('cost_y');
$cost_two_y = $page->getTVValue('cost_two_y');
$where_now_y = $page->getTVValue('where_now_y');
$where_yesterday_y = $page->getTVValue('where_yesterday_y');
$price_info_main_yo = $page->getTVValue('price_info_main_yo');

$cost_tr = $page->getTVValue('cost_tr');
$cost_two_tr = $page->getTVValue('cost_two_tr');
$where_now_tr = $page->getTVValue('where_now_tr');
$where_yesterday_tr = $page->getTVValue('where_yesterday_tr');
$price_info_main_tr = $page->getTVValue('price_info_main_tr');

$out = "";
if ($page_id == 64) {
    $out = "<a href='[[~2]]'>
            <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 padd-null'>
                <div class='card-light'>
                    <img alt='' src='assets/app/img/light-put-min.jpg' />
                    <p class='upper card-title'>light</p>
                    <p class='upper card-level'>сложность</p>
                    <p class='card-img'>
                        <img alt='' src='assets/app/img/l1.png' />
                        <img alt='' src='assets/app/img/l1.png' />
                        <img alt='' src='assets/app/img/l2.png' />
                    </p>
                    <div class='all-desc'>
                        [[!getInfoMain? &info=`$price_info_main`]]
                    </div>
                    <div class='row'>
                        <div class='main-main'>
                            <div class='know-it'>
                                <p class='upper'>узнать подробнее</p>
                            </div>
                            <div class='main-oval'>
                                <p>$cost_two_l &#8381;</p>
                                <p class='upper'>$where_yesterday_l</p>
                            </div>
                            <div class='yel-oval'>
                                <p>$cost_l &#8381;</p>
                                <p class='upper'>$where_now_l</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href='[[~3]]'>
            <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 padd-null'>
                <div class='card-light card_new_st'>
                    <img alt='' src='assets/app/img/stand-put-min.jpg' />
                    <p class='upper card-title'>standart</p>
                    <p class='upper card-level'>сложность</p>
                    <p class='card-img'>
                        <img alt='' src='assets/app/img/l1.png' />
                        <img alt='' src='assets/app/img/l1.png' />
                        <img alt='' src='assets/app/img/l1.png' />
                    </p>
                    <div class='all-desc'>
                        [[!getInfoMain? &info=`$price_info_main_st`]]
                    </div>
                    <div class='row'>
                        <div class='main-main main_new'>
                            <div class='know-it'>
                                <p class='upper'>узнать подробнее</p>
                            </div>
                            <div class='main-oval'>
                                <p>$cost_two_s &#8381;</p>
                                <p class='upper'>$where_yesterday_s</p>
                            </div>
                            <div class='yel-oval'>
                                <p>$cost_s &#8381;</p>
                                <p class='upper'>$where_now_s</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href='[[~4]]'>
            <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 padd-null'>
                <div class='card-light card_new_marg'>
                    <img alt='' src='assets/app/img/yoga-put-min.jpg' />
                    <p class='upper card-title'>yoga</p>
                    <p class='upper card-level'>сложность</p>
                    <p class='card-img'>
                        <img alt='' src='assets/app/img/l1.png' />
                        <img alt='' src='assets/app/img/l2.png' />
                        <img alt='' src='assets/app/img/l2.png' />
                    </p>
                    <div class='all-desc'>
                        [[!getInfoMain? &info=`$price_info_main_yo`]]
                    </div>
                    <div class='row'>
                        <div class='main-main main_new_yo'>
                            <div class='know-it'>
                                <p class='upper'>узнать подробнее</p>
                            </div>
                            <div class='main-oval'>
                                <p>$cost_two_y &#8381;</p>
                                <p class='upper'>$where_yesterday_y</p>
                            </div>
                            <div class='yel-oval'>
                                <p>$cost_y &#8381;</p>
                                <p class='upper'>$where_now_y</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        ";
} elseif ($page_id == 2 ) {
    $out = "
        <a href='[[~3]]'>
            <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 padd-null'>
                <div class='card-light'>
                    <img alt='' src='assets/app/img/stand-put-min.jpg' />
                    <p class='upper card-title'>standart</p>
                    <p class='upper card-level'>сложность</p>
                    <p class='card-img'>
                        <img alt='' src='assets/app/img/l1.png' />
                        <img alt='' src='assets/app/img/l1.png' />
                        <img alt='' src='assets/app/img/l1.png' />
                    </p>
                    <div class='all-desc'>
                        [[!getInfoMain? &info=`$price_info_main_st`]]
                    </div>
                    <div class='row'>
                        <div class='main-main main_new'>
                            <div class='know-it'>
                                <p class='upper'>узнать подробнее</p>
                            </div>
                            <div class='main-oval'>
                                <p>$cost_two_s &#8381;</p>
                                <p class='upper'>$where_yesterday_s</p>
                            </div>
                            <div class='yel-oval'>
                                <p>$cost_s &#8381;</p>
                                <p class='upper'>$where_now_s</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href='[[~64]]'>
            <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 padd-null'>
                <div class='card-light card_new_st'>
                    <img alt='' src='assets/app/img/yotr.jpg' />
                    <p class='upper card-title'>Yoga + Tracking</p>
                    <p class='upper card-level'>сложность</p>
                    <p class='card-img'>
                        <img alt='' src='assets/app/img/l1.png' />
                        <img alt='' src='assets/app/img/l1.png' />
                        <img alt='' src='assets/app/img/l2.png' />
                    </p>
                    <div class='all-desc'>
                        [[!getInfoMain? &info=`$price_info_main_tr`]]
                    </div>
                    <div class='row'>
                        <div class='main-main main_new'>
                            <div class='know-it'>
                                <p class='upper'>узнать подробнее</p>
                            </div>
                            <div class='main-oval'>
                                <p>$cost_two_tr &#8381;</p>
                                <p class='upper'>$where_yesterday_tr</p>
                            </div>
                            <div class='yel-oval'>
                                <p>$cost_tr &#8381;</p>
                                <p class='upper'>$where_now_tr</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href='[[~4]]'>
            <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 padd-null'>
                <div class='card-light card_new_marg'>
                    <img alt='' src='assets/app/img/yoga-put-min.jpg' />
                    <p class='upper card-title'>yoga</p>
                    <p class='upper card-level'>сложность</p>
                    <p class='card-img'>
                        <img alt='' src='assets/app/img/l1.png' />
                        <img alt='' src='assets/app/img/l2.png' />
                        <img alt='' src='assets/app/img/l2.png' />
                    </p>
                    <div class='all-desc'>
                        [[!getInfoMain? &info=`$price_info_main_yo`]]
                    </div>
                    <div class='row'>
                        <div class='main-main main_new_yo'>
                            <div class='know-it'>
                                <p class='upper'>узнать подробнее</p>
                            </div>
                            <div class='main-oval'>
                                <p>$cost_two_y &#8381;</p>
                                <p class='upper'>$where_yesterday_y</p>
                            </div>
                            <div class='yel-oval'>
                                <p>$cost_y &#8381;</p>
                                <p class='upper'>$where_now_y</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        
        ";
} elseif ( $page_id == 3 ) {
    $out = "<a href='[[~2]]'>
            <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 padd-null'>
                <div class='card-light'>
                    <img alt='' src='assets/app/img/light-put-min.jpg' />
                    <p class='upper card-title'>light</p>
                    <p class='upper card-level'>сложность</p>
                    <p class='card-img'>
                        <img alt='' src='assets/app/img/l1.png' />
                        <img alt='' src='assets/app/img/l1.png' />
                        <img alt='' src='assets/app/img/l2.png' />
                    </p>
                    <div class='all-desc'>
                        [[!getInfoMain? &info=`$price_info_main`]]
                    </div>
                    <div class='row'>
                        <div class='main-main'>
                            <div class='know-it'>
                                <p class='upper'>узнать подробнее</p>
                            </div>
                            <div class='main-oval'>
                                <p>$cost_two_l &#8381;</p>
                                <p class='upper'>$where_yesterday_l</p>
                            </div>
                            <div class='yel-oval'>
                                <p>$cost_l &#8381;</p>
                                <p class='upper'>$where_now_l</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href='[[~64]]'>
            <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 padd-null'>
                <div class='card-light card_new_st'>
                    <img alt='' src='assets/app/img/yotr.jpg' />
                    <p class='upper card-title'>Yoga + Tracking</p>
                    <p class='upper card-level'>сложность</p>
                    <p class='card-img'>
                        <img alt='' src='assets/app/img/l1.png' />
                        <img alt='' src='assets/app/img/l1.png' />
                        <img alt='' src='assets/app/img/l2.png' />
                    </p>
                    <div class='all-desc'>
                        [[!getInfoMain? &info=`$price_info_main_tr`]]
                    </div>
                    <div class='row'>
                        <div class='main-main main_new'>
                            <div class='know-it'>
                                <p class='upper'>узнать подробнее</p>
                            </div>
                            <div class='main-oval'>
                                <p>$cost_two_tr &#8381;</p>
                                <p class='upper'>$where_yesterday_tr</p>
                            </div>
                            <div class='yel-oval'>
                                <p>$cost_tr &#8381;</p>
                                <p class='upper'>$where_now_tr</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href='[[~4]]'>
            <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 padd-null'>
                <div class='card-light card_new_marg'>
                    <img alt='' src='assets/app/img/yoga-put-min.jpg' />
                    <p class='upper card-title'>yoga</p>
                    <p class='upper card-level'>сложность</p>
                    <p class='card-img'>
                        <img alt='' src='assets/app/img/l1.png' />
                        <img alt='' src='assets/app/img/l2.png' />
                        <img alt='' src='assets/app/img/l2.png' />
                    </p>
                    <div class='all-desc'>
                        [[!getInfoMain? &info=`$price_info_main_yo`]]
                    </div>
                    <div class='row'>
                        <div class='main-main main_new_yo'>
                            <div class='know-it'>
                                <p class='upper'>узнать подробнее</p>
                            </div>
                            <div class='main-oval'>
                                <p>$cost_two_y &#8381;</p>
                                <p class='upper'>$where_yesterday_y</p>
                            </div>
                            <div class='yel-oval'>
                                <p>$cost_y &#8381;</p>
                                <p class='upper'>$where_now_y</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        ";
} elseif ( $page_id == 4 ) {
    $out = "<a href='[[~2]]'>
            <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 padd-null'>
                <div class='card-light'>
                    <img alt='' src='assets/app/img/light-put-min.jpg' />
                    <p class='upper card-title'>light</p>
                    <p class='upper card-level'>сложность</p>
                    <p class='card-img'>
                        <img alt='' src='assets/app/img/l1.png' />
                        <img alt='' src='assets/app/img/l1.png' />
                        <img alt='' src='assets/app/img/l2.png' />
                    </p>
                    <div class='all-desc'>
                        [[!getInfoMain? &info=`$price_info_main`]]
                    </div>
                    <div class='row'>
                        <div class='main-main'>
                            <div class='know-it'>
                                <p class='upper'>узнать подробнее</p>
                            </div>
                            <div class='main-oval'>
                                <p>$cost_two_l &#8381;</p>
                                <p class='upper'>$where_yesterday_l</p>
                            </div>
                            <div class='yel-oval'>
                                <p>$cost_l &#8381;</p>
                                <p class='upper'>$where_now_l</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href='[[~64]]'>
            <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 padd-null'>
                <div class='card-light card_new_st'>
                    <img alt='' src='assets/app/img/yotr.jpg' />
                    <p class='upper card-title'>Yoga + Tracking</p>
                    <p class='upper card-level'>сложность</p>
                    <p class='card-img'>
                        <img alt='' src='assets/app/img/l1.png' />
                        <img alt='' src='assets/app/img/l1.png' />
                        <img alt='' src='assets/app/img/l2.png' />
                    </p>
                    <div class='all-desc'>
                        [[!getInfoMain? &info=`$price_info_main_tr`]]
                    </div>
                    <div class='row'>
                        <div class='main-main main_new'>
                            <div class='know-it'>
                                <p class='upper'>узнать подробнее</p>
                            </div>
                            <div class='main-oval'>
                                <p>$cost_two_tr &#8381;</p>
                                <p class='upper'>$where_yesterday_tr</p>
                            </div>
                            <div class='yel-oval'>
                                <p>$cost_tr &#8381;</p>
                                <p class='upper'>$where_now_tr</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href='[[~3]]'>
            <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 padd-null'>
                <div class='card-light card_new_marg'>
                    <img alt='' src='assets/app/img/stand-put-min.jpg' />
                    <p class='upper card-title'>standart</p>
                    <p class='upper card-level'>сложность</p>
                    <p class='card-img'>
                        <img alt='' src='assets/app/img/l1.png' />
                        <img alt='' src='assets/app/img/l1.png' />
                        <img alt='' src='assets/app/img/l1.png' />
                    </p>
                    <div class='all-desc'>
                        [[!getInfoMain? &info=`$price_info_main_st`]]
                    </div>
                    <div class='row'>
                        <div class='main-main main_new'>
                            <div class='know-it'>
                                <p class='upper'>узнать подробнее</p>
                            </div>
                            <div class='main-oval'>
                                <p>$cost_two_s &#8381;</p>
                                <p class='upper'>$where_yesterday_s</p>
                            </div>
                            <div class='yel-oval'>
                                <p>$cost_s &#8381;</p>
                                <p class='upper'>$where_now_s</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        ";
}
return $out;
return;
