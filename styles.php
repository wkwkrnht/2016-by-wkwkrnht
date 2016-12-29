<style>
	@font-face{font-family:'FontAwesome';src:<?php echo 'url(' . get_template_directory_uri() . '/inc/font-awesome/fontawesome-webfont.eot)';?>;src:<?php echo 'url(' . get_template_directory_uri() . '/inc/font-awesome/fontawesome-webfont.eot?#iefix)';?> format('embedded-opentype'),<?php echo 'url(' . get_template_directory_uri() . '/inc/font-awesome/fontawesome-webfont.woff2)';?> format('woff2'),<?php echo 'url(' . get_template_directory_uri() . '/inc/font-awesome/fontawesome-webfont.woff)';?> format('woff'),<?php echo 'url(' . get_template_directory_uri() . '/inc/font-awesome/fontawesome-webfont.ttf)';?> format('truetype'),<?php echo 'url(' . get_template_directory_uri() . '/inc/font-awesome/fontawesome-webfont.svg#fontawesomeregular)';?> format('svg');font-weight:normal;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-lg{font-size:1.33333333em;line-height:.75em;vertical-align:-15%}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-fw{width:1.28571429em;text-align:center}.fa-ul{padding-left:0;margin-left:2.14285714em;list-style-type:none}.fa-ul>li{position:relative}.fa-li{position:absolute;left:-2.14285714em;width:2.14285714em;top:.14285714em;text-align:center}.fa-li.fa-lg{left:-1.85714286em}.fa-border{padding:.2em .25em .15em;border:solid .08em #eee;border-radius:.1em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left{margin-right:.3em}.fa.fa-pull-right{margin-left:.3em}.pull-right{float:right}.pull-left{float:left}.fa.pull-left{margin-right:.3em}.fa.pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}.fa-rotate-90{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";-webkit-transform:rotate(270deg);-ms-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";-webkit-transform:scale(-1, 1);-ms-transform:scale(-1, 1);transform:scale(-1, 1)}.fa-flip-vertical{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";-webkit-transform:scale(1, -1);-ms-transform:scale(1, -1);transform:scale(1, -1)}:root .fa-rotate-90,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-flip-horizontal,:root .fa-flip-vertical{filter:none}.fa-stack{position:relative;display:inline-block;width:2em;height:2em;line-height:2em;vertical-align:middle}.fa-stack-1x,.fa-stack-2x{position:absolute;left:0;width:100%;text-align:center}.fa-stack-1x{line-height:inherit}.fa-stack-2x{font-size:2em}.fa-inverse{color:#fff}.fa-glass:before{content:"\f000"}.fa-music:before{content:"\f001"}.fa-search:before{content:"\f002"}.fa-envelope-o:before{content:"\f003"}.fa-heart:before{content:"\f004"}.fa-star:before{content:"\f005"}.fa-star-o:before{content:"\f006"}.fa-user:before{content:"\f007"}.fa-film:before{content:"\f008"}.fa-th-large:before{content:"\f009"}.fa-th:before{content:"\f00a"}.fa-th-list:before{content:"\f00b"}.fa-check:before{content:"\f00c"}.fa-remove:before,.fa-close:before,.fa-times:before{content:"\f00d"}.fa-search-plus:before{content:"\f00e"}.fa-search-minus:before{content:"\f010"}.fa-power-off:before{content:"\f011"}.fa-signal:before{content:"\f012"}.fa-gear:before,.fa-cog:before{content:"\f013"}.fa-trash-o:before{content:"\f014"}.fa-home:before{content:"\f015"}.fa-file-o:before{content:"\f016"}.fa-clock-o:before{content:"\f017"}.fa-road:before{content:"\f018"}.fa-download:before{content:"\f019"}.fa-arrow-circle-o-down:before{content:"\f01a"}.fa-arrow-circle-o-up:before{content:"\f01b"}.fa-inbox:before{content:"\f01c"}.fa-play-circle-o:before{content:"\f01d"}.fa-rotate-right:before,.fa-repeat:before{content:"\f01e"}.fa-refresh:before{content:"\f021"}.fa-list-alt:before{content:"\f022"}.fa-lock:before{content:"\f023"}.fa-flag:before{content:"\f024"}.fa-headphones:before{content:"\f025"}.fa-volume-off:before{content:"\f026"}.fa-volume-down:before{content:"\f027"}.fa-volume-up:before{content:"\f028"}.fa-qrcode:before{content:"\f029"}.fa-barcode:before{content:"\f02a"}.fa-tag:before{content:"\f02b"}.fa-tags:before{content:"\f02c"}.fa-book:before{content:"\f02d"}.fa-bookmark:before{content:"\f02e"}.fa-print:before{content:"\f02f"}.fa-camera:before{content:"\f030"}.fa-font:before{content:"\f031"}.fa-bold:before{content:"\f032"}.fa-italic:before{content:"\f033"}.fa-text-height:before{content:"\f034"}.fa-text-width:before{content:"\f035"}.fa-align-left:before{content:"\f036"}.fa-align-center:before{content:"\f037"}.fa-align-right:before{content:"\f038"}.fa-align-justify:before{content:"\f039"}.fa-list:before{content:"\f03a"}.fa-dedent:before,.fa-outdent:before{content:"\f03b"}.fa-indent:before{content:"\f03c"}.fa-video-camera:before{content:"\f03d"}.fa-photo:before,.fa-image:before,.fa-picture-o:before{content:"\f03e"}.fa-pencil:before{content:"\f040"}.fa-map-marker:before{content:"\f041"}.fa-adjust:before{content:"\f042"}.fa-tint:before{content:"\f043"}.fa-edit:before,.fa-pencil-square-o:before{content:"\f044"}.fa-share-square-o:before{content:"\f045"}.fa-check-square-o:before{content:"\f046"}.fa-arrows:before{content:"\f047"}.fa-step-backward:before{content:"\f048"}.fa-fast-backward:before{content:"\f049"}.fa-backward:before{content:"\f04a"}.fa-play:before{content:"\f04b"}.fa-pause:before{content:"\f04c"}.fa-stop:before{content:"\f04d"}.fa-forward:before{content:"\f04e"}.fa-fast-forward:before{content:"\f050"}.fa-step-forward:before{content:"\f051"}.fa-eject:before{content:"\f052"}.fa-chevron-left:before{content:"\f053"}.fa-chevron-right:before{content:"\f054"}.fa-plus-circle:before{content:"\f055"}.fa-minus-circle:before{content:"\f056"}.fa-times-circle:before{content:"\f057"}.fa-check-circle:before{content:"\f058"}.fa-question-circle:before{content:"\f059"}.fa-info-circle:before{content:"\f05a"}.fa-crosshairs:before{content:"\f05b"}.fa-times-circle-o:before{content:"\f05c"}.fa-check-circle-o:before{content:"\f05d"}.fa-ban:before{content:"\f05e"}.fa-arrow-left:before{content:"\f060"}.fa-arrow-right:before{content:"\f061"}.fa-arrow-up:before{content:"\f062"}.fa-arrow-down:before{content:"\f063"}.fa-mail-forward:before,.fa-share:before{content:"\f064"}.fa-expand:before{content:"\f065"}.fa-compress:before{content:"\f066"}.fa-plus:before{content:"\f067"}.fa-minus:before{content:"\f068"}.fa-asterisk:before{content:"\f069"}.fa-exclamation-circle:before{content:"\f06a"}.fa-gift:before{content:"\f06b"}.fa-leaf:before{content:"\f06c"}.fa-fire:before{content:"\f06d"}.fa-eye:before{content:"\f06e"}.fa-eye-slash:before{content:"\f070"}.fa-warning:before,.fa-exclamation-triangle:before{content:"\f071"}.fa-plane:before{content:"\f072"}.fa-calendar:before{content:"\f073"}.fa-random:before{content:"\f074"}.fa-comment:before{content:"\f075"}.fa-magnet:before{content:"\f076"}.fa-chevron-up:before{content:"\f077"}.fa-chevron-down:before{content:"\f078"}.fa-retweet:before{content:"\f079"}.fa-shopping-cart:before{content:"\f07a"}.fa-folder:before{content:"\f07b"}.fa-folder-open:before{content:"\f07c"}.fa-arrows-v:before{content:"\f07d"}.fa-arrows-h:before{content:"\f07e"}.fa-bar-chart-o:before,.fa-bar-chart:before{content:"\f080"}.fa-twitter-square:before{content:"\f081"}.fa-facebook-square:before{content:"\f082"}.fa-camera-retro:before{content:"\f083"}.fa-key:before{content:"\f084"}.fa-gears:before,.fa-cogs:before{content:"\f085"}.fa-comments:before{content:"\f086"}.fa-thumbs-o-up:before{content:"\f087"}.fa-thumbs-o-down:before{content:"\f088"}.fa-star-half:before{content:"\f089"}.fa-heart-o:before{content:"\f08a"}.fa-sign-out:before{content:"\f08b"}.fa-linkedin-square:before{content:"\f08c"}.fa-thumb-tack:before{content:"\f08d"}.fa-external-link:before{content:"\f08e"}.fa-sign-in:before{content:"\f090"}.fa-trophy:before{content:"\f091"}.fa-github-square:before{content:"\f092"}.fa-upload:before{content:"\f093"}.fa-lemon-o:before{content:"\f094"}.fa-phone:before{content:"\f095"}.fa-square-o:before{content:"\f096"}.fa-bookmark-o:before{content:"\f097"}.fa-phone-square:before{content:"\f098"}.fa-twitter:before{content:"\f099"}.fa-facebook-f:before,.fa-facebook:before{content:"\f09a"}.fa-github:before{content:"\f09b"}.fa-unlock:before{content:"\f09c"}.fa-credit-card:before{content:"\f09d"}.fa-feed:before,.fa-rss:before{content:"\f09e"}.fa-hdd-o:before{content:"\f0a0"}.fa-bullhorn:before{content:"\f0a1"}.fa-bell:before{content:"\f0f3"}.fa-certificate:before{content:"\f0a3"}.fa-hand-o-right:before{content:"\f0a4"}.fa-hand-o-left:before{content:"\f0a5"}.fa-hand-o-up:before{content:"\f0a6"}.fa-hand-o-down:before{content:"\f0a7"}.fa-arrow-circle-left:before{content:"\f0a8"}.fa-arrow-circle-right:before{content:"\f0a9"}.fa-arrow-circle-up:before{content:"\f0aa"}.fa-arrow-circle-down:before{content:"\f0ab"}.fa-globe:before{content:"\f0ac"}.fa-wrench:before{content:"\f0ad"}.fa-tasks:before{content:"\f0ae"}.fa-filter:before{content:"\f0b0"}.fa-briefcase:before{content:"\f0b1"}.fa-arrows-alt:before{content:"\f0b2"}.fa-group:before,.fa-users:before{content:"\f0c0"}.fa-chain:before,.fa-link:before{content:"\f0c1"}.fa-cloud:before{content:"\f0c2"}.fa-flask:before{content:"\f0c3"}.fa-cut:before,.fa-scissors:before{content:"\f0c4"}.fa-copy:before,.fa-files-o:before{content:"\f0c5"}.fa-paperclip:before{content:"\f0c6"}.fa-save:before,.fa-floppy-o:before{content:"\f0c7"}.fa-square:before{content:"\f0c8"}.fa-navicon:before,.fa-reorder:before,.fa-bars:before{content:"\f0c9"}.fa-list-ul:before{content:"\f0ca"}.fa-list-ol:before{content:"\f0cb"}.fa-strikethrough:before{content:"\f0cc"}.fa-underline:before{content:"\f0cd"}.fa-table:before{content:"\f0ce"}.fa-magic:before{content:"\f0d0"}.fa-truck:before{content:"\f0d1"}.fa-pinterest:before{content:"\f0d2"}.fa-pinterest-square:before{content:"\f0d3"}.fa-google-plus-square:before{content:"\f0d4"}.fa-google-plus:before{content:"\f0d5"}.fa-money:before{content:"\f0d6"}.fa-caret-down:before{content:"\f0d7"}.fa-caret-up:before{content:"\f0d8"}.fa-caret-left:before{content:"\f0d9"}.fa-caret-right:before{content:"\f0da"}.fa-columns:before{content:"\f0db"}.fa-unsorted:before,.fa-sort:before{content:"\f0dc"}.fa-sort-down:before,.fa-sort-desc:before{content:"\f0dd"}.fa-sort-up:before,.fa-sort-asc:before{content:"\f0de"}.fa-envelope:before{content:"\f0e0"}.fa-linkedin:before{content:"\f0e1"}.fa-rotate-left:before,.fa-undo:before{content:"\f0e2"}.fa-legal:before,.fa-gavel:before{content:"\f0e3"}.fa-dashboard:before,.fa-tachometer:before{content:"\f0e4"}.fa-comment-o:before{content:"\f0e5"}.fa-comments-o:before{content:"\f0e6"}.fa-flash:before,.fa-bolt:before{content:"\f0e7"}.fa-sitemap:before{content:"\f0e8"}.fa-umbrella:before{content:"\f0e9"}.fa-paste:before,.fa-clipboard:before{content:"\f0ea"}.fa-lightbulb-o:before{content:"\f0eb"}.fa-exchange:before{content:"\f0ec"}.fa-cloud-download:before{content:"\f0ed"}.fa-cloud-upload:before{content:"\f0ee"}.fa-user-md:before{content:"\f0f0"}.fa-stethoscope:before{content:"\f0f1"}.fa-suitcase:before{content:"\f0f2"}.fa-bell-o:before{content:"\f0a2"}.fa-coffee:before{content:"\f0f4"}.fa-cutlery:before{content:"\f0f5"}.fa-file-text-o:before{content:"\f0f6"}.fa-building-o:before{content:"\f0f7"}.fa-hospital-o:before{content:"\f0f8"}.fa-ambulance:before{content:"\f0f9"}.fa-medkit:before{content:"\f0fa"}.fa-fighter-jet:before{content:"\f0fb"}.fa-beer:before{content:"\f0fc"}.fa-h-square:before{content:"\f0fd"}.fa-plus-square:before{content:"\f0fe"}.fa-angle-double-left:before{content:"\f100"}.fa-angle-double-right:before{content:"\f101"}.fa-angle-double-up:before{content:"\f102"}.fa-angle-double-down:before{content:"\f103"}.fa-angle-left:before{content:"\f104"}.fa-angle-right:before{content:"\f105"}.fa-angle-up:before{content:"\f106"}.fa-angle-down:before{content:"\f107"}.fa-desktop:before{content:"\f108"}.fa-laptop:before{content:"\f109"}.fa-tablet:before{content:"\f10a"}.fa-mobile-phone:before,.fa-mobile:before{content:"\f10b"}.fa-circle-o:before{content:"\f10c"}.fa-quote-left:before{content:"\f10d"}.fa-quote-right:before{content:"\f10e"}.fa-spinner:before{content:"\f110"}.fa-circle:before{content:"\f111"}.fa-mail-reply:before,.fa-reply:before{content:"\f112"}.fa-github-alt:before{content:"\f113"}.fa-folder-o:before{content:"\f114"}.fa-folder-open-o:before{content:"\f115"}.fa-smile-o:before{content:"\f118"}.fa-frown-o:before{content:"\f119"}.fa-meh-o:before{content:"\f11a"}.fa-gamepad:before{content:"\f11b"}.fa-keyboard-o:before{content:"\f11c"}.fa-flag-o:before{content:"\f11d"}.fa-flag-checkered:before{content:"\f11e"}.fa-terminal:before{content:"\f120"}.fa-code:before{content:"\f121"}.fa-mail-reply-all:before,.fa-reply-all:before{content:"\f122"}.fa-star-half-empty:before,.fa-star-half-full:before,.fa-star-half-o:before{content:"\f123"}.fa-location-arrow:before{content:"\f124"}.fa-crop:before{content:"\f125"}.fa-code-fork:before{content:"\f126"}.fa-unlink:before,.fa-chain-broken:before{content:"\f127"}.fa-question:before{content:"\f128"}.fa-info:before{content:"\f129"}.fa-exclamation:before{content:"\f12a"}.fa-superscript:before{content:"\f12b"}.fa-subscript:before{content:"\f12c"}.fa-eraser:before{content:"\f12d"}.fa-puzzle-piece:before{content:"\f12e"}.fa-microphone:before{content:"\f130"}.fa-microphone-slash:before{content:"\f131"}.fa-shield:before{content:"\f132"}.fa-calendar-o:before{content:"\f133"}.fa-fire-extinguisher:before{content:"\f134"}.fa-rocket:before{content:"\f135"}.fa-maxcdn:before{content:"\f136"}.fa-chevron-circle-left:before{content:"\f137"}.fa-chevron-circle-right:before{content:"\f138"}.fa-chevron-circle-up:before{content:"\f139"}.fa-chevron-circle-down:before{content:"\f13a"}.fa-html5:before{content:"\f13b"}.fa-css3:before{content:"\f13c"}.fa-anchor:before{content:"\f13d"}.fa-unlock-alt:before{content:"\f13e"}.fa-bullseye:before{content:"\f140"}.fa-ellipsis-h:before{content:"\f141"}.fa-ellipsis-v:before{content:"\f142"}.fa-rss-square:before{content:"\f143"}.fa-play-circle:before{content:"\f144"}.fa-ticket:before{content:"\f145"}.fa-minus-square:before{content:"\f146"}.fa-minus-square-o:before{content:"\f147"}.fa-level-up:before{content:"\f148"}.fa-level-down:before{content:"\f149"}.fa-check-square:before{content:"\f14a"}.fa-pencil-square:before{content:"\f14b"}.fa-external-link-square:before{content:"\f14c"}.fa-share-square:before{content:"\f14d"}.fa-compass:before{content:"\f14e"}.fa-toggle-down:before,.fa-caret-square-o-down:before{content:"\f150"}.fa-toggle-up:before,.fa-caret-square-o-up:before{content:"\f151"}.fa-toggle-right:before,.fa-caret-square-o-right:before{content:"\f152"}.fa-euro:before,.fa-eur:before{content:"\f153"}.fa-gbp:before{content:"\f154"}.fa-dollar:before,.fa-usd:before{content:"\f155"}.fa-rupee:before,.fa-inr:before{content:"\f156"}.fa-cny:before,.fa-rmb:before,.fa-yen:before,.fa-jpy:before{content:"\f157"}.fa-ruble:before,.fa-rouble:before,.fa-rub:before{content:"\f158"}.fa-won:before,.fa-krw:before{content:"\f159"}.fa-bitcoin:before,.fa-btc:before{content:"\f15a"}.fa-file:before{content:"\f15b"}.fa-file-text:before{content:"\f15c"}.fa-sort-alpha-asc:before{content:"\f15d"}.fa-sort-alpha-desc:before{content:"\f15e"}.fa-sort-amount-asc:before{content:"\f160"}.fa-sort-amount-desc:before{content:"\f161"}.fa-sort-numeric-asc:before{content:"\f162"}.fa-sort-numeric-desc:before{content:"\f163"}.fa-thumbs-up:before{content:"\f164"}.fa-thumbs-down:before{content:"\f165"}.fa-youtube-square:before{content:"\f166"}.fa-youtube:before{content:"\f167"}.fa-xing:before{content:"\f168"}.fa-xing-square:before{content:"\f169"}.fa-youtube-play:before{content:"\f16a"}.fa-dropbox:before{content:"\f16b"}.fa-stack-overflow:before{content:"\f16c"}.fa-instagram:before{content:"\f16d"}.fa-flickr:before{content:"\f16e"}.fa-adn:before{content:"\f170"}.fa-bitbucket:before{content:"\f171"}.fa-bitbucket-square:before{content:"\f172"}.fa-tumblr:before{content:"\f173"}.fa-tumblr-square:before{content:"\f174"}.fa-long-arrow-down:before{content:"\f175"}.fa-long-arrow-up:before{content:"\f176"}.fa-long-arrow-left:before{content:"\f177"}.fa-long-arrow-right:before{content:"\f178"}.fa-apple:before{content:"\f179"}.fa-windows:before{content:"\f17a"}.fa-android:before{content:"\f17b"}.fa-linux:before{content:"\f17c"}.fa-dribbble:before{content:"\f17d"}.fa-skype:before{content:"\f17e"}.fa-foursquare:before{content:"\f180"}.fa-trello:before{content:"\f181"}.fa-female:before{content:"\f182"}.fa-male:before{content:"\f183"}.fa-gittip:before,.fa-gratipay:before{content:"\f184"}.fa-sun-o:before{content:"\f185"}.fa-moon-o:before{content:"\f186"}.fa-archive:before{content:"\f187"}.fa-bug:before{content:"\f188"}.fa-vk:before{content:"\f189"}.fa-weibo:before{content:"\f18a"}.fa-renren:before{content:"\f18b"}.fa-pagelines:before{content:"\f18c"}.fa-stack-exchange:before{content:"\f18d"}.fa-arrow-circle-o-right:before{content:"\f18e"}.fa-arrow-circle-o-left:before{content:"\f190"}.fa-toggle-left:before,.fa-caret-square-o-left:before{content:"\f191"}.fa-dot-circle-o:before{content:"\f192"}.fa-wheelchair:before{content:"\f193"}.fa-vimeo-square:before{content:"\f194"}.fa-turkish-lira:before,.fa-try:before{content:"\f195"}.fa-plus-square-o:before{content:"\f196"}.fa-space-shuttle:before{content:"\f197"}.fa-slack:before{content:"\f198"}.fa-envelope-square:before{content:"\f199"}.fa-wordpress:before{content:"\f19a"}.fa-openid:before{content:"\f19b"}.fa-institution:before,.fa-bank:before,.fa-university:before{content:"\f19c"}.fa-mortar-board:before,.fa-graduation-cap:before{content:"\f19d"}.fa-yahoo:before{content:"\f19e"}.fa-google:before{content:"\f1a0"}.fa-reddit:before{content:"\f1a1"}.fa-reddit-square:before{content:"\f1a2"}.fa-stumbleupon-circle:before{content:"\f1a3"}.fa-stumbleupon:before{content:"\f1a4"}.fa-delicious:before{content:"\f1a5"}.fa-digg:before{content:"\f1a6"}.fa-pied-piper-pp:before{content:"\f1a7"}.fa-pied-piper-alt:before{content:"\f1a8"}.fa-drupal:before{content:"\f1a9"}.fa-joomla:before{content:"\f1aa"}.fa-language:before{content:"\f1ab"}.fa-fax:before{content:"\f1ac"}.fa-building:before{content:"\f1ad"}.fa-child:before{content:"\f1ae"}.fa-paw:before{content:"\f1b0"}.fa-spoon:before{content:"\f1b1"}.fa-cube:before{content:"\f1b2"}.fa-cubes:before{content:"\f1b3"}.fa-behance:before{content:"\f1b4"}.fa-behance-square:before{content:"\f1b5"}.fa-steam:before{content:"\f1b6"}.fa-steam-square:before{content:"\f1b7"}.fa-recycle:before{content:"\f1b8"}.fa-automobile:before,.fa-car:before{content:"\f1b9"}.fa-cab:before,.fa-taxi:before{content:"\f1ba"}.fa-tree:before{content:"\f1bb"}.fa-spotify:before{content:"\f1bc"}.fa-deviantart:before{content:"\f1bd"}.fa-soundcloud:before{content:"\f1be"}.fa-database:before{content:"\f1c0"}.fa-file-pdf-o:before{content:"\f1c1"}.fa-file-word-o:before{content:"\f1c2"}.fa-file-excel-o:before{content:"\f1c3"}.fa-file-powerpoint-o:before{content:"\f1c4"}.fa-file-photo-o:before,.fa-file-picture-o:before,.fa-file-image-o:before{content:"\f1c5"}.fa-file-zip-o:before,.fa-file-archive-o:before{content:"\f1c6"}.fa-file-sound-o:before,.fa-file-audio-o:before{content:"\f1c7"}.fa-file-movie-o:before,.fa-file-video-o:before{content:"\f1c8"}.fa-file-code-o:before{content:"\f1c9"}.fa-vine:before{content:"\f1ca"}.fa-codepen:before{content:"\f1cb"}.fa-jsfiddle:before{content:"\f1cc"}.fa-life-bouy:before,.fa-life-buoy:before,.fa-life-saver:before,.fa-support:before,.fa-life-ring:before{content:"\f1cd"}.fa-circle-o-notch:before{content:"\f1ce"}.fa-ra:before,.fa-resistance:before,.fa-rebel:before{content:"\f1d0"}.fa-ge:before,.fa-empire:before{content:"\f1d1"}.fa-git-square:before{content:"\f1d2"}.fa-git:before{content:"\f1d3"}.fa-y-combinator-square:before,.fa-yc-square:before,.fa-hacker-news:before{content:"\f1d4"}.fa-tencent-weibo:before{content:"\f1d5"}.fa-qq:before{content:"\f1d6"}.fa-wechat:before,.fa-weixin:before{content:"\f1d7"}.fa-send:before,.fa-paper-plane:before{content:"\f1d8"}.fa-send-o:before,.fa-paper-plane-o:before{content:"\f1d9"}.fa-history:before{content:"\f1da"}.fa-circle-thin:before{content:"\f1db"}.fa-header:before{content:"\f1dc"}.fa-paragraph:before{content:"\f1dd"}.fa-sliders:before{content:"\f1de"}.fa-share-alt:before{content:"\f1e0"}.fa-share-alt-square:before{content:"\f1e1"}.fa-bomb:before{content:"\f1e2"}.fa-soccer-ball-o:before,.fa-futbol-o:before{content:"\f1e3"}.fa-tty:before{content:"\f1e4"}.fa-binoculars:before{content:"\f1e5"}.fa-plug:before{content:"\f1e6"}.fa-slideshare:before{content:"\f1e7"}.fa-twitch:before{content:"\f1e8"}.fa-yelp:before{content:"\f1e9"}.fa-newspaper-o:before{content:"\f1ea"}.fa-wifi:before{content:"\f1eb"}.fa-calculator:before{content:"\f1ec"}.fa-paypal:before{content:"\f1ed"}.fa-google-wallet:before{content:"\f1ee"}.fa-cc-visa:before{content:"\f1f0"}.fa-cc-mastercard:before{content:"\f1f1"}.fa-cc-discover:before{content:"\f1f2"}.fa-cc-amex:before{content:"\f1f3"}.fa-cc-paypal:before{content:"\f1f4"}.fa-cc-stripe:before{content:"\f1f5"}.fa-bell-slash:before{content:"\f1f6"}.fa-bell-slash-o:before{content:"\f1f7"}.fa-trash:before{content:"\f1f8"}.fa-copyright:before{content:"\f1f9"}.fa-at:before{content:"\f1fa"}.fa-eyedropper:before{content:"\f1fb"}.fa-paint-brush:before{content:"\f1fc"}.fa-birthday-cake:before{content:"\f1fd"}.fa-area-chart:before{content:"\f1fe"}.fa-pie-chart:before{content:"\f200"}.fa-line-chart:before{content:"\f201"}.fa-lastfm:before{content:"\f202"}.fa-lastfm-square:before{content:"\f203"}.fa-toggle-off:before{content:"\f204"}.fa-toggle-on:before{content:"\f205"}.fa-bicycle:before{content:"\f206"}.fa-bus:before{content:"\f207"}.fa-ioxhost:before{content:"\f208"}.fa-angellist:before{content:"\f209"}.fa-cc:before{content:"\f20a"}.fa-shekel:before,.fa-sheqel:before,.fa-ils:before{content:"\f20b"}.fa-meanpath:before{content:"\f20c"}.fa-buysellads:before{content:"\f20d"}.fa-connectdevelop:before{content:"\f20e"}.fa-dashcube:before{content:"\f210"}.fa-forumbee:before{content:"\f211"}.fa-leanpub:before{content:"\f212"}.fa-sellsy:before{content:"\f213"}.fa-shirtsinbulk:before{content:"\f214"}.fa-simplybuilt:before{content:"\f215"}.fa-skyatlas:before{content:"\f216"}.fa-cart-plus:before{content:"\f217"}.fa-cart-arrow-down:before{content:"\f218"}.fa-diamond:before{content:"\f219"}.fa-ship:before{content:"\f21a"}.fa-user-secret:before{content:"\f21b"}.fa-motorcycle:before{content:"\f21c"}.fa-street-view:before{content:"\f21d"}.fa-heartbeat:before{content:"\f21e"}.fa-venus:before{content:"\f221"}.fa-mars:before{content:"\f222"}.fa-mercury:before{content:"\f223"}.fa-intersex:before,.fa-transgender:before{content:"\f224"}.fa-transgender-alt:before{content:"\f225"}.fa-venus-double:before{content:"\f226"}.fa-mars-double:before{content:"\f227"}.fa-venus-mars:before{content:"\f228"}.fa-mars-stroke:before{content:"\f229"}.fa-mars-stroke-v:before{content:"\f22a"}.fa-mars-stroke-h:before{content:"\f22b"}.fa-neuter:before{content:"\f22c"}.fa-genderless:before{content:"\f22d"}.fa-facebook-official:before{content:"\f230"}.fa-pinterest-p:before{content:"\f231"}.fa-whatsapp:before{content:"\f232"}.fa-server:before{content:"\f233"}.fa-user-plus:before{content:"\f234"}.fa-user-times:before{content:"\f235"}.fa-hotel:before,.fa-bed:before{content:"\f236"}.fa-viacoin:before{content:"\f237"}.fa-train:before{content:"\f238"}.fa-subway:before{content:"\f239"}.fa-medium:before{content:"\f23a"}.fa-yc:before,.fa-y-combinator:before{content:"\f23b"}.fa-optin-monster:before{content:"\f23c"}.fa-opencart:before{content:"\f23d"}.fa-expeditedssl:before{content:"\f23e"}.fa-battery-4:before,.fa-battery-full:before{content:"\f240"}.fa-battery-3:before,.fa-battery-three-quarters:before{content:"\f241"}.fa-battery-2:before,.fa-battery-half:before{content:"\f242"}.fa-battery-1:before,.fa-battery-quarter:before{content:"\f243"}.fa-battery-0:before,.fa-battery-empty:before{content:"\f244"}.fa-mouse-pointer:before{content:"\f245"}.fa-i-cursor:before{content:"\f246"}.fa-object-group:before{content:"\f247"}.fa-object-ungroup:before{content:"\f248"}.fa-sticky-note:before{content:"\f249"}.fa-sticky-note-o:before{content:"\f24a"}.fa-cc-jcb:before{content:"\f24b"}.fa-cc-diners-club:before{content:"\f24c"}.fa-clone:before{content:"\f24d"}.fa-balance-scale:before{content:"\f24e"}.fa-hourglass-o:before{content:"\f250"}.fa-hourglass-1:before,.fa-hourglass-start:before{content:"\f251"}.fa-hourglass-2:before,.fa-hourglass-half:before{content:"\f252"}.fa-hourglass-3:before,.fa-hourglass-end:before{content:"\f253"}.fa-hourglass:before{content:"\f254"}.fa-hand-grab-o:before,.fa-hand-rock-o:before{content:"\f255"}.fa-hand-stop-o:before,.fa-hand-paper-o:before{content:"\f256"}.fa-hand-scissors-o:before{content:"\f257"}.fa-hand-lizard-o:before{content:"\f258"}.fa-hand-spock-o:before{content:"\f259"}.fa-hand-pointer-o:before{content:"\f25a"}.fa-hand-peace-o:before{content:"\f25b"}.fa-trademark:before{content:"\f25c"}.fa-registered:before{content:"\f25d"}.fa-creative-commons:before{content:"\f25e"}.fa-gg:before{content:"\f260"}.fa-gg-circle:before{content:"\f261"}.fa-tripadvisor:before{content:"\f262"}.fa-odnoklassniki:before{content:"\f263"}.fa-odnoklassniki-square:before{content:"\f264"}.fa-get-pocket:before{content:"\f265"}.fa-wikipedia-w:before{content:"\f266"}.fa-safari:before{content:"\f267"}.fa-chrome:before{content:"\f268"}.fa-firefox:before{content:"\f269"}.fa-opera:before{content:"\f26a"}.fa-internet-explorer:before{content:"\f26b"}.fa-tv:before,.fa-television:before{content:"\f26c"}.fa-contao:before{content:"\f26d"}.fa-500px:before{content:"\f26e"}.fa-amazon:before{content:"\f270"}.fa-calendar-plus-o:before{content:"\f271"}.fa-calendar-minus-o:before{content:"\f272"}.fa-calendar-times-o:before{content:"\f273"}.fa-calendar-check-o:before{content:"\f274"}.fa-industry:before{content:"\f275"}.fa-map-pin:before{content:"\f276"}.fa-map-signs:before{content:"\f277"}.fa-map-o:before{content:"\f278"}.fa-map:before{content:"\f279"}.fa-commenting:before{content:"\f27a"}.fa-commenting-o:before{content:"\f27b"}.fa-houzz:before{content:"\f27c"}.fa-vimeo:before{content:"\f27d"}.fa-black-tie:before{content:"\f27e"}.fa-fonticons:before{content:"\f280"}.fa-reddit-alien:before{content:"\f281"}.fa-edge:before{content:"\f282"}.fa-credit-card-alt:before{content:"\f283"}.fa-codiepie:before{content:"\f284"}.fa-modx:before{content:"\f285"}.fa-fort-awesome:before{content:"\f286"}.fa-usb:before{content:"\f287"}.fa-product-hunt:before{content:"\f288"}.fa-mixcloud:before{content:"\f289"}.fa-scribd:before{content:"\f28a"}.fa-pause-circle:before{content:"\f28b"}.fa-pause-circle-o:before{content:"\f28c"}.fa-stop-circle:before{content:"\f28d"}.fa-stop-circle-o:before{content:"\f28e"}.fa-shopping-bag:before{content:"\f290"}.fa-shopping-basket:before{content:"\f291"}.fa-hashtag:before{content:"\f292"}.fa-bluetooth:before{content:"\f293"}.fa-bluetooth-b:before{content:"\f294"}.fa-percent:before{content:"\f295"}.fa-gitlab:before{content:"\f296"}.fa-wpbeginner:before{content:"\f297"}.fa-wpforms:before{content:"\f298"}.fa-envira:before{content:"\f299"}.fa-universal-access:before{content:"\f29a"}.fa-wheelchair-alt:before{content:"\f29b"}.fa-question-circle-o:before{content:"\f29c"}.fa-blind:before{content:"\f29d"}.fa-audio-description:before{content:"\f29e"}.fa-volume-control-phone:before{content:"\f2a0"}.fa-braille:before{content:"\f2a1"}.fa-assistive-listening-systems:before{content:"\f2a2"}.fa-asl-interpreting:before,.fa-american-sign-language-interpreting:before{content:"\f2a3"}.fa-deafness:before,.fa-hard-of-hearing:before,.fa-deaf:before{content:"\f2a4"}.fa-glide:before{content:"\f2a5"}.fa-glide-g:before{content:"\f2a6"}.fa-signing:before,.fa-sign-language:before{content:"\f2a7"}.fa-low-vision:before{content:"\f2a8"}.fa-viadeo:before{content:"\f2a9"}.fa-viadeo-square:before{content:"\f2aa"}.fa-snapchat:before{content:"\f2ab"}.fa-snapchat-ghost:before{content:"\f2ac"}.fa-snapchat-square:before{content:"\f2ad"}.fa-pied-piper:before{content:"\f2ae"}.fa-first-order:before{content:"\f2b0"}.fa-yoast:before{content:"\f2b1"}.fa-themeisle:before{content:"\f2b2"}.fa-google-plus-circle:before,.fa-google-plus-official:before{content:"\f2b3"}.fa-fa:before,.fa-font-awesome:before{content:"\f2b4"}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}
	html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;}
	:root{font:400 62.5%/1.9 -apple-system,"Lucida Grande","Helvetica Neue","Hiragino Kaku Gothic ProN","游ゴシック","メイリオ",'Meiryo',sans-serif;font-feature-settings:"pkna" on;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;color:<?php echo get_option('root_color','#333');?>;}
	body{width:100%;padding-bottom:20vh;margin:0;overflow-y:scroll;scroll-behavior:smooth;}
	article,aside,details,figcaption,figure,footer,header,main,menu,nav,section,summary,.block{display:block}
	audio,canvas,progress,video,.inline-block{display:inline-block}
	audio:not([controls]){display:none;height:0}
	progress{vertical-align:baseline;}
	template,[hidden],.none{display:none;}
	a{color:<?php echo get_option('a_color','#03a9f4');?>;background-color:transparent;-webkit-text-decoration-skip:objects;text-decoration:none;border-bottom:0;}
	a:visited{color:<?php echo get_option('a_visited_color','#03a9f4');?>;}
	a:active,a:hover{outline-width:0;}
	a:active{color:<?php echo get_option('a_active_color','#03a9f4');?>;}
	abbr[title]{border-bottom:0;text-decoration:underline;text-decoration:underline dotted}
	b,strong{font-weight:inherit;font-weight:bolder;}
	dfn{font-style:italic;}
	h1{font-size:2em;margin:.67em 0;}
	mark{background-color:<?php echo get_option('mark_background','#ff0');?>;color:<?php echo get_option('mark_color','#333');?>;}
	small{font-size:80%;}
	sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline;}
	sub{bottom:-.25em;}
	sup{top:-0.5em;}
	img{border-style:none;object-fit:contain;image-rendering:pixelated;-ms-interpolation-mode:bicubic;}
	img[src$=".gif"],img[src$=".png"]{image-rendering:-moz-crisp-edges;image-rendering:-o-crisp-edges;image-rendering:-webkit-optimize-contrast;image-rendering:crisp-edges;}
	svg:not(:root){overflow:hidden;}
	code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em;}
	pre{tab-size:4;}
	figure{margin:1em 2.5rem;}
	hr{box-sizing:content-box;height:0;overflow:visible;}
	button,input,select,textarea{font:inherit;margin:0;}
	optgroup{font-weight:700;}
	button,input{overflow:visible;}
	button,select{text-transform:none;}
	button,html [type="button"],[type="reset"],[type="submit"]{-webkit-appearance:button;}
	button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner{border-style:none;padding:0;}
	button:-moz-focusring,[type="button"]:-moz-focusring,[type="reset"]:-moz-focusring,[type="submit"]:-moz-focusring{outline:1px dotted ButtonText;}
	fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em;}
	legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal;}
	textarea{overflow:auto}[type="checkbox"],[type="radio"]{box-sizing:border-box;padding:0;}
	[type="number"]::-webkit-inner-spin-button,[type="number"]::-webkit-outer-spin-button{height:auto;}
	[type="search"]{-webkit-appearance:textfield;outline-offset:-2px;}
	[type="search"]::-webkit-search-cancel-button,[type="search"]::-webkit-search-decoration{-webkit-appearance:none;}
	::-webkit-input-placeholder{color:inherit;opacity:.54}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit;}
	.close{visibility:hidden;}
	.open{visibility:visible;}
	.vcard,.fn,.author{margin:0;}
	.screen-reader-text{clip:rect(1px,1px,1px,1px);position:absolute;height:1px;width:1px;overflow:hidden;}
	.screen-reader-text:focus{display:block;height:auto;width:auto;clip:auto;padding:15px 23px 14px;border-radius:3px;top:5px;left:5px;z-index:100000;font-size:1.6rem;font-weight:bold;text-decoration:none;color:#21759b;background-color:#f1f1f1;box-shadow:0 0 2px 2px rgba(0,0,0,.6);}
	/*
		navigation
	1.toggle
	2.commmon style
	3.share menu
	4.main menu
	5.main-nav
	6.social-nav
	7.page-nation
	*/
	#menu-toggle{display:inline-block;height:15vh;width:15vh;border-radius:50%;position:fixed;bottom:4vh;left:calc(50% - 7.5vh);z-index:100;text-align:center;opacity:.7;box-shadow:0 0 3vmin rgba(0,0,0,.2);line-height:15vh;vertical-align:middle;font-size:5rem;font-weight:900;}
	#menu-wrap.open ~ #menu-toggle{transform:rotate(45deg);}
	.menu-tab,#menu-toggle,#main-menu-toggle,#share-menu-toggle{background-color:<?php echo get_option('footer_background','#03a9f4');?>;color:<?php echo get_option('footer_color','#fff');?>;}
	#menu-toggle:visited,#main-menu-toggle,#main-menu-toggle a:visited,#share-menu-toggle,#share-menu-toggle a:visited{color:<?php echo get_option('footer_color','#fff');?>;}
	.menu-tab{height:8vh;width:86vw;display:flex;flex-wrap:wrap;justify-content:flex-start;align-items:center;}
	#main-menu-toggle,#share-menu-toggle{display:inline-block;height:8vh;box-sizing:border-box;padding:1vh 0;margin:0 auto;text-align:center;}
	#main-menu-toggle{font-size:4rem;font-weight:900;font-family:monospace;line-height:8vh;}

	#menu-wrap{opacity:.85;height:74vh;width:86vw;margin:0 7vw;position:fixed;top:6vh;left:0;z-index:111;box-shadow:0 0 3vmin rgba(0,0,0,.3);}
	#share-menu,#main-menu{height:66vh;width:86vw;overflow-x:hidden;overflow-y:auto;top:8vh;}
	#share-menu ul,#main-menu > ul{width:80vw;}

	#share-menu ul{width:86vw;list-style:none;display:flex;flex-wrap:wrap;justify-content:flex-start;align-items:center;padding:0;margin:0;}
	#share-menu ul li{width:calc((86vw / 2) - 1vmin);height:20vh;text-align:center;}
	#share-menu ul li a{position:relative;top:35%;color:#fff;}
	#share-menu .close-button{background-color:#fff;}
	#share-menu .tweet{background-color:#55acee;}
	#share-menu .fb-like{background-color:#3b5998;}
	#share-menu .buffer{background-color:#333;font-size:4rem;font-weight:900;}
	#share-menu .buffer > a{top:28%;}
	#share-menu .line{background-color:#6cc655;}
	#share-menu .g-plus{background-color:#dc4e41;}
	#share-menu .linkedin{background-color:#36465d;}
	#share-menu .reddit{background-color:#ff5700;}
	#share-menu .vk{background-color:#83bad6;}
	#share-menu .stumbleupon{background-color:#ffcc00;}
	#share-menu .hatebu{background-color:#00a5de;font-size:5rem;font-weight:900;}
	#share-menu .hatebu > a{top:25%;}
	#share-menu li.instapaper{background-color:#fff;}
	#share-menu li.instapaper > a{color:#333;font:900 5rem/1.9 serif;top:25%;}
	#share-menu .pinterest{background-color:#bd081c;}
	#share-menu .pocket{background-color:#ef3f56;}
	#share-menu .tumblr{background-color:#36465d;}

	#main-menu{box-sizing:border-box;padding-top:2vh;background-color:<?php echo get_option('menu_background','#fff');?>;}

	.main-nav ul{list-style-type:none;}
	.main-nav a{display:inline-block;width:inherit;text-decoration:none;border-bottom:1px dashed #aaa;font-size:1.8rem;}
	.social-nav{display:block;min-height:4em;width:100%;margin:2vmin auto;}
	.social-nav ul{list-style:none;margin:0 0 -1.6em 0;}
	.social-nav li{float:left;}
	.social-nav a{display:block;position:relative;height:4em;width:4em;}
	.social-nav a::before{content:"\f07b";display:inline-block;font:400 2.5rem/1.8 "FontAwesome";font-style:normal;font-variant:normal;speak:none;text-align:center;text-decoration:none;text-transform:none;position:absolute;top:0;left:0;}
	.social-nav a::after{display:inline-block;font:400 1.8rem/1.8 "FontAwesome";position:relative;bottom:0;right:0;font-style:normal;font-variant:normal;speak:none;text-align:center;text-decoration:none;text-transform:none;}
	.social-nav a[href*="amazon"]::before{content:"\f270";}
	.social-nav a[href*="codepen.io"]::before{content:"\f1cb";color:#ffc700;}
	.social-nav a[href*="digg.com"]::before{content:'\f1a6';}
	.social-nav a[href*="dribbble.com"]::before{content:'\f17d';color:#ea4c89;}
	.social-nav a[href*="dropbox.com"]::before{content:"\f16b";color:#00b8ff;}
	.social-nav a[href*="facebook.com"]::before{content:"\f230";color:#0033ff;}
	.social-nav a[href*="reader.livedwango.com/subscribe/"]::before,.social-nav a[href*="/feed"]::before,.social-navigation a[href*="/feed/"]::before{content:'\f09e';color:#2aff00;}
	.social-nav a[href*="feedly.com"]::before{content:'\f143';color:#2aff00;transform:rotate(-15deg);}
	.social-nav a[href*="flickr.com"]::before{content:'\f16e';color:#ff0084;}
	.social-nav a[href*="foursquare.com"]::before{content:'\f180';color:#f94877;}
	.social-nav a[href*="plus.google.com"]::before{content:"\f0d5";color:#ff0033;}
	.social-nav a[href*="github.com"]::before{content:'\f09b';color:#0033ff;}
	.social-nav a[href*="instagram.com"]::before{content:'\f16d';color:#3f729b;}
	.social-nav a[href*="linkedin.com"]::before{content:"\f0e1";color:#0077b5;}
	.social-nav a[href*="mailto:"]::before{content:"\f0e0";}
	.social-nav a[href*="nicovideo"]::before,.social-nav a[href*="reader.livedwango.com/subscribe/"]::after{content:"\f26c";}
	.social-nav a[href*="pinterest.com"]::before{content:"\f231";color:#ff0033;}
	.social-nav a[href*="getpocket.com"]::before{content:"\f265";color:#ee4056;}
	.social-nav a[href*="polldaddy.com"]:before{content:'\f200';}
	.social-nav a[href*="push.dog"]::before,.social-nav a[href*="bpush.net"]::before,.social-nav a[href*="pushnate.com"]::before,.social-nav a[href*="pushsan.com"]::before,.social-nav a[href*="onesignal.com"]::before{content:'\f0f3';}
	.social-nav a[href*="push7.jp"]::before{content:'\f0e7';color:#fffc00;}
	.social-nav a[href*="reddit.com"]::before{content:'\f1a1';color:#ff5700;}
	.social-nav a[href*="skype.com"]::before{content:'\f17e';color:#00aff0;}
	.social-nav a[href*="stumbleupon.com"]::before{content:'\f1a4';color:#eb4924;}
	.social-nav a[href*="spotify.com"]::before{content:"\f1bc";color:#1db954;}
	.social-nav a[href*="soundcloud.com"]::before{content:'\f1be';color:#ffcc00;}
	.social-nav a[href*="tumblr.com"]::before{content:"\f173";color:#2c4762;}
	.social-nav a[href*="twitch.tv"]::before{content:'\f1e8';color:#0033ff;}
	.social-nav a[href*="twitter.com"]::before{content:"\f099";color:#00b8ff;}
	.social-nav a[href*="twilog.org"]::before{content:"\f099";color:#00b8ff;}
	.social-nav a[href*="twilog.org"]::after{content:"\f022";}
	.social-nav a[href*="twipf.jp"]::before{content:"\f099";color:#00b8ff;}
	.social-nav a[href*="twipf.jp"]::after{content:"\f007";}
	.social-nav a[href*="vimeo.com"]::before{content:'\f27d';color:#1ab7ea;}
	.social-nav a[href*="youtube.com"]::before{content:'\f167';color:#ff0033;}
	.social-nav a[href*="wordpress.com"]::before,.social-navigation a[href*="wordpress.org"]::before{content:'\f19a';color:#21759b;}
	.social-nav a[data-title*="問い合わせ"]::before,.social-nav a[data-title*="質問"]::before,.social-nav a[data-title*="Q&A"]::before{content:"\f298";}

	.page-nation{list-style:none;height:10vw;width:80vw;margin:5vmin auto;background-color:<?php echo get_option('page_nation_background','#fff');?>;box-shadow:0 0 3vmin rgba(0,0,0,.2);}
	.page-nation{display:flex;flex-wrap:wrap;justify-content:center;align-items:center;}
    .page-nation a,.page-nation .current,.page-nation li .dots{padding:2vmin;margin:0 .5vmin;border:solid .5vmin <?php echo get_option('page_nation_border','#03a9f4');?>;font-weight:bold;}
    .page-nation a,.page-nation li .dots{background-color:<?php echo get_option('page_nation_a_background','#fff');?>;color:<?php echo get_option('page_nation_a_color','#03a9f4');?>;font-size:1.3rem;text-decoration:none;}
    .page-nation a:hover,.page-nation .current{color:<?php echo get_option('page_nation_hover_color','#fff');?>;background-color:<?php echo get_option('page_nation_hover_background','#03a9f4');?>;}
	/*
		widget custom
	1.generall
	2.tag cloud
	3.recent entries
	4.archive
	*/
	ul.widget-area{list-style:none;}
	.widget{max-width:94%;margin:4vh auto;}
	.widget.info-card{overflow:hidden;}
	.widget li{max-width:93%;}
	.widget-title{min-height:5vh;max-width:94%;margin:2vh auto;line-height:5vh;text-align:center;color:<?php echo get_option('wkwkrnht_widget_title_color','#fff');?>;background-color:<?php echo get_option('wkwkrnht_widget_title_background','#03a9f4');?>;}
	.widget select{width:70%;margin:2vh auto;}

	.widget_tag_cloud{margin:3vmin;padding:0;}
	.widget_tag_cloud a{display:inline-block;max-width:100px;height:28px;padding:0 1em;margin:0 .3em .3em 0;background-color:#fff;border:1px solid <?php echo get_option('tag_cloud_border','#03a9f4');?>;border-radius:3vmin;color:<?php echo get_option('tag_cloud_hover_color','#333');?>;font-size:1.6rem;text-decoration:none;white-space:nowrap;text-overflow:ellipsis;overflow:hidden;}
	.widget_tag_cloud a:hover{background-color:<?php echo get_option('tag_cloud_border','#03a9f4');?>;border:1px solid <?php echo get_option('tag_cloud_hover_border','#fff');?>;color:<?php echo get_option('tag_cloud_hover_color','#fff');?>;}

	.widget_recent_entries ul{list-style-type:none;}
	.widget_recent_entries ul li{border-bottom:1px dashed <?php echo get_option('article_main_li_border','#aaa');?>;}
	.widget_recent_entries ul li a{text-decoration:none;color:<?php echo get_option('root_color','#333');?>;font-size:1.6rem;}
	.widget_recent_entries ul li span{font-size:calc(1.6rem * 0.8);}

	.widget_archive ul{list-style-type:none;text-align:center;}
	.widget_archive ul li{font-size:calc(1.8rem * 0.8);}
	.widget_archive ul li a{font-size:1.8rem;}
	/*
	    original
	1.card-design
	2.Site Header
	3.ToC
	4.marker
	5.columun
	6.blogcard by OGP
	7.area for notice
	8.move to search
	*/
	.card{min-height:40.5vmin;width:72vmin;margin:4vh 3vmin;padding:2vmin 3vmin;border-radius:3vmin;font-size:1.8rem;text-align:center;background-color:#fff;box-shadow:0 0 3vmin rgba(0,0,0,.2);}
	.card-eyecatch{display:block;float:left;height:100%;width:calc(72vmin / 2 - 1vmin);vertical-align:middle;}
	.card-info{max-width:calc(72vmin / 2);float:right;}
	.card-title{display:inline-block;height:calc(40.5vmin / 10 * 3);margin:0 1em;}
	.card-meta{display:inline-block;height:calc(40.5vmin / 10 * 7);margin:0 1em;}
	.site-info{text-align:center;}
	.card-list{background-color:<?php echo get_option('card_list_background','#fff');?>;display:-webkit-flex;display:flex;justify-content:space-around;align-items:baseline;-webkit-flex-flow:row wrap;flex-flow:row wrap;-webkit-align-content:space-around;align-content:space-around;}

	.site-header{height:10%;width:100%;padding:3vh 0 5vh;margin:0 0 5vh 0;text-align:center;box-shadow:0 0 3vmin rgba(0,0,0,.1);<?php if(get_header_image()){echo'background-image:url(' . get_header_image() . ');';}else{echo'background-color:' . get_option('site_header_background','#03a9f4') . ';';}?>}
	.site-header,.site-header a{color:<?php echo get_option('site_header_color','#fff');?>;}
	.site-title{font-size:2.5rem;}
	.site-description,.site-header .copyright{font-size:1.8rem;}

	.toc{width:90vw;padding:4vh 0;margin:4vh auto;box-shadow:0 0 3vmin rgba(0,0,0,.2);}
	.toc-toggle{display:block;height:3em;width:3em;border-radius:50%;font-size:1.8rem;position:relative;top:-1.5em;left:85vw;text-align:center;color:#fff;background-color:#03a9f4;box-shadow:0 0 3vmin rgba(0,0,0,.3);}

	.marker{box-shadow:0 -0.3em 0 -0.1em rgb(255,255,0) inset;}

	.ogp-blogcard{display:block;height:37vh;width:80vw;padding:2vmin 5vmin;border-radius:3vmin;margin:3vmin auto;position:relative;border:1px solid #e5e5e5;background-color:#fff;box-shadow:0 0 3vmin rgba(0,0,0,.15);}
	.ogp-blogcard-share{height:calc(37vh + 2vmin * 2);width:calc(80vw + 5vmin * 2);border-radius:3vmin;position:absolute;top:0;left:0;z-index:2;background-color:rgba(0,0,0,.3);}
	.ogp-blogcard-share-close{position:absolute;top:1em;right:2em;font-size:3rem;}
	.ogp-blogcard-share > ul{list-style:none;}
	.ogp-blogcard-share > ul > li{display:inline-block;padding:1em;margin:2vmin auto;border:1px solid #fff;font-size:2.2rem;}
	.ogp-blogcard-share-close,.ogp-blogcard-share-close:visited,.ogp-blogcard-share > ul > li > a,.ogp-blogcard-share > ul > li > a:visited{color:#fff;}
	.ogp-blogcard-share-toggle{display:block;height:5em;width:5em;border-radius:50%;position:absolute;top:-2.5em;left:-2.5em;color:#fff;background-color:#03a9f4;text-align:center;line-height:6em;}
	.ogp-blogcard-main{height:calc(37vh * .8);width:80vw;position:absolute;top:0;margin-bottom:1vh;}
	.ogp-blogcard-img{display:inline-block;max-height:calc(37vh * .75);max-width:calc(80vw * .4);}
	.ogp-blogcard-info{display:inline-block;max-width:calc(80vw * .6);position:absolute;right:0;text-align:center;}
	.ogp-blogcard-title{font-size:2rem;}
	.ogp-blogcard-site-name{display:none;}

	.information,.question{background-color:#f4f3eb;padding:2em;padding-left:calc(7rem + 2vmin);border-radius:3vmin;position:relative;margin:1em auto;}
	.information::before,.question::before{display:inline-block;height:7rem;width:7rem;border-radius:50%;position:absolute;top:1vmin;left:1vmin;margin-right:7rem;color:#f4f3eb;background-color:#eae3b4;text-align:center;font-size:5rem;font-weight:700;line-height:7rem;}
	.information::before{content:"ｉ";}
	.question::before{content:"？";}

	.cutin-box{box-sizing:border-box;width:calc(80vw + (3vh * 2));padding:1vh 2vh;margin:2vh auto;text-align:center;color:#fff;}
	.red.cutin-box{background-color:#f44336;}
	.blue.cutin-box{background-color:#03a9f4;}
	.yellow.cutin-box{background-color:#ffeb3b;}
	.orange.cutin-box{background-color:#ff9800;}
	.green.cutin-box{background-color:#8bc34a;}
	.black.cutin-box{background-color:#333;}
	.cutin-box > h3{font-weight:700;}
	.cutin-box-inner{box-sizing:border-box;width:calc(80vw + (2vh * 2));padding:1vh 2vh;margin:0;background-color:#fff;color:#333;text-align:initial;border:1vh solid;}
	.red.cutin-box > .cutin-box-inner{border-color:#f44336;}
	.blue.cutin-box > .cutin-box-inner{border-color:#03a9f4;}
	.yellow.cutin-box > .cutin-box-inner{border-color:#ffeb3b;}
	.orange.cutin-box > .cutin-box-inner{border-color:#ff9800;}
	.green.cutin-box > .cutin-box-inner{border-color:#8bc34a;}
	.black.cutin-box > .cutin-box-inner{border-color:#333;}

	.button{display:block;box-sizing:border-box;min-height:4rem;width:80%;padding:2vmin 5vmin;border-radius:1.5vmin;font-size:2rem;font-weight:600;line-height:2;text-align:center;margin:2vh auto;position:relative;}
	.red.button{color:#fff;background-color:#f44336;box-shadow:0 1vmin 0 #d32f2f;}
	.red.button:hover{top:.2vmin;box-shadow:0 .75vmin 0 #d32f2f;}
	.blue.button{color:#fff;background-color:#03a9f4;box-shadow:0 1vmin 0 #0288d1;}
	.blue.button:hover{top:.2vmin;box-shadow:0 .75vmin 0 #0288d1;}
	.yellow.button{color:#fff;background-color:#ffeb3b;box-shadow:0 1vmin 0 #fbc02d;}
	.yellow.button:hover{top:.2vmin;box-shadow:0 .75vmin 0 #fbc02d;}
	.orange.button{color:#fff;background-color:#ff9800;box-shadow:0 1vmin 0 #f57c00;}
	.orange.button:hover{top:.2vmin;box-shadow:0 .75vmin 0 #f57c00;}
	.green.button{color:#fff;background-color:#8bc34a;box-shadow:0 1vmin 0 #689f38;}
	.green.button:hover{top:.2vmin;box-shadow:0 .75vmin 0 #689f38;}
	.black.button{color:#fff;background-color:#333;box-shadow:0 1vmin 0 #9e9e9e;}
	.black.button:hover{top:.2vmin;box-shadow:0 .75vmin 0 #9e9e9e;}

	.search-form{margin:3em auto;line-height:170%;}
	.search-form div{display:inline-block;padding:5px;margin-left:1em;border:1px solid #555;border-radius:3vmin;}
	.search-form .sform{min-width:280px;background-color:#fff;}
	.search-form .sbtn{position:absolute;padding-left:2rem;padding-right:3rem;color:#fff;background-color:#1155ee;}
	.search-form div.sbtn:after{content:"\f25a";font-family:"FontAwesome";font-size:2.5rem;color:#000;position:absolute;bottom:-28px;}

	<?php if(is_actived_plugin('wp-appbox/wp-appbox.php')===true):?>
		.wpappbox *,.wpappbox::after,.wpappbox::before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
		.wpappbox a,.wpappbox a::after,.wpappbox::before{text-decoration:none ;color:#323232;-webkit-transition-property:background color;-webkit-transition-duration:.2s;-webkit-transition-timing-function:ease;-moz-transition-property:background color;-moz-transition-duration:.2s;-moz-transition-timing-function:ease;-o-transition-property:background color;-o-transition-duration:.2s;-o-transition-timing-function:ease;transition-property:background color;transition-duration:.2s;transition-timing-function:ease;}
		.wpappbox a img{-webkit-transition:all .5s ease;-moz-transition:all .5s ease;-o-transition:all .5s ease;-ms-transition:all .5s ease;transition:all .5s ease;}
		.wpappbox a:hover img{opacity:.9;-ms-filter:"progid: DXImageTransform.Microsoft.Alpha(Opacity=90)";filter:alpha(opacity=90);-webkit-filter:grayscale(100%);}
		.wpappbox-tinymce-button{background-image:url(../buttons/appbox.btn.png);}
		.wpappbox{clear:both;font-family:'Open Sans',Arial;background-color:#f9f9f9;width:auto;line-height:1;color:#545450;margin:4vh auto;font-size:16px;border:1px solid #e5e5e5;box-shadow:0 0 8px 1px rgba(0,0,0,.11);}
		.wpappbox.simple{height:114px;}
		.wpappbox.compact{height:70px;}
		.wpappbox.screenshots-only{cursor:pointer;}
		.wpappbox .appicon{position:relative;height:112px;width:112px;float:left;padding:10px;background:#fff;text-align:center;border-right:1px solid #e5e5e5;}
		.wpappbox.compact .appicon{height:68px;width:68px;float:left;padding:6px;}
		.wpappbox .appicon img{height:92px;max-height:92px;width:92px;max-width:92px;margin:auto;border:0;border-radius:6px;}
		.wpappbox.compact .appicon img{height:54px;width:54px;max-width:54px;margin:auto;border:0;border-radius:6px;}
		.wpappbox .watch-icon{height:40px;width:40px;max-width:40px;position:absolute;bottom:3px;right:3px;border:3px solid #fff;border-radius:20px;}
		.wpappbox .qrcode{display:none;position:absolute;padding:6px;z-index:999;}
		.wpappbox .applinks,.wpappbox.compact .applinks{float:right;position:relative;background:#FFF;text-align:center;border-left:1px solid #e5e5e5;}
		.wpappbox .qrcode img{height:100px;width:100px;opacity:1;}
		.wpappbox .appdetails{font-size:16px;line-height:16px;padding-top:10px;}
		.wpappbox.compact .appdetails{font-size:15px;line-height:15px;padding-top:6px;}
		.wpappbox .appdetails > div{overflow:hidden;white-space:nowrap;text-overflow:ellipsis;-webkit-hyphens:none;-moz-hyphens:none;-ms-hyphens:none;hyphens:none;padding:6px 8px;}
		.wpappbox.compact .appdetails > div{padding:5px 8px;}
		.wpappbox .apptitle{font-size:19px;line-height:19px;font-weight:600;margin:2px 0 0;}
		.wpappbox.compact .apptitle{font-size:17px;line-height:17px;}
		.wpappbox .appdetails > .price-old{text-decoration:line-through;}
		.wpappbox .applinks{height:112px;width:92px;display:block;}
		.wpappbox.compact .applinks{height:68px;width:68px;display:block;}
		.wpappbox .appbuttons{position:absolute;bottom:1px;width:92px;}
		.wpappbox .appbuttons a,.wpappbox .appbuttons span{font-size:13px;box-shadow:0 1px 3px 0 rgba(0,0,0,.15);background:#f1f1f1;border-bottom:0;color:#323232;padding:3px 5px;display:block;margin:8px 10px;border-radius:2px;cursor:pointer;font-weight:400;}
		.wpappbox .appbuttons a:hover,.wpappbox .appbuttons span:hover{background:#373941;border-bottom:0;color:#fff;transition:background-color .5s ease-in-out;-moz-transition:background-color .5s ease-in-out;-webkit-transition:background-color .5s ease-in-out;}
		.wpappbox .rating-stars{width:65px;height:13px;margin-left:5px;margin-top:4px;display:inline-block;}
		.wpappbox .stars-monochrome{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/stars-sprites-monochrome.png');?>) no-repeat;}
		.wpappbox .stars-colorful{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/stars-sprites-colorful.png');?>) no-repeat;}
		.wpappbox .stars00{background-position:0 0;}
		.wpappbox .stars05{background-position:0 -13px;}
		.wpappbox .stars10{background-position:0 -26px;}
		.wpappbox .stars15{background-position:0 -39px;}
		.wpappbox .stars20{background-position:0 -52px;}
		.wpappbox .stars25{background-position:0 -65px;}
		.wpappbox .stars30{background-position:0 -78px;}
		.wpappbox .stars35{background-position:0 -91px;}
		.wpappbox .stars40{background-position:0 -104px;}
		.wpappbox .stars45{background-position:0 -117px;}
		.wpappbox .stars50{background-position:0 -130px;}
		.wpappbox a:link,.wpappbox a:visited{color:#545450;}
		.wpappbox a:active,.wpappbox a:hover{text-decoration:none;color:#5588b5;}
		.wpappbox.screenshots > .screenshots{width:auto;margin:0 auto;padding:10px;clear:both;border-top:1px solid #e5e5e5;}
		.wpappbox.screenshots > .screenshots > .slider{overflow-x:scroll;overflow-y:hidden;height:320px;margin-top:0;}
		.wpappbox.screenshots > .screenshots > .slider > ul{padding:0 ;margin:0 ;list-style-image:none;white-space:nowrap;}
		.wpappbox.screenshots > .screenshots > .slider > ul > li{padding:0;margin:0 6px 0 0;list-style-type:none;display:inline;}
		.wpappbox.screenshots > .screenshots > .slider > ul > li:last-child{margin-right:0;}
		.wpappbox.screenshots > .screenshots > .slider > ul > li img{height:320px ;display:inline;}
		.wpappbox.error > span{display:block;width:100%;height:100%;padding:10px;font-size:16px;border-left:3px solid #df4a4a;}
		.wpappbox.error a{display:inline-block;font-size:15px;margin-left:3px;}
		.wpappbox .appdetails .fallback{font-size:.9em;line-height:1.7em;white-space:normal;}
		.wpappbox .appdetails .oldprice{text-decoration:line-through;}
		.wpappbox.appstore .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/appstore-colorful.png');?>);}
		.wpappbox.macappstore .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/macappstore-colorful.png');?>);}
		.wpappbox.googleplay .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/googleplay-colorful.png');?>);}
		.wpappbox.goodoldgames .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/goodoldgames-colorful.png');?>);}
		.wpappbox.windowsstore .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/windowsstore-colorful.png');?>);}
		.wpappbox.firefoxmarketplace .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/firefoxmarketplace-colorful.png');?>);}
		.wpappbox.chromewebstore .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/chromewebstore-colorful.png');?>);}
		.wpappbox.firefoxaddon .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/firefoxaddon-colorful.png');?>);}
		.wpappbox.amazonapps .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/amazonapps-colorful.png');?>);}
		.wpappbox.wordpress .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/wordpress-colorful.png');?>);}
		.wpappbox.steam .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/steam-colorful.png');?>);}
		.wpappbox.operaaddons .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/operaaddons-colorful.png');?>);}
		.wpappbox:not(.colorful).appstore .applinks,.wpappbox:not(.colorful).macappstore .applinks,.wpappbox:not(.colorful).googleplay .applinks,.wpappbox:not(.colorful).goodoldgames .applinks,.wpappbox:not(.colorful).windowsstore .applinks,.wpappbox:not(.colorful).firefoxmarketplace .applinks,.wpappbox:not(.colorful).chromewebstore .applinks,.wpappbox:not(.colorful).firefoxaddon .applinks,.wpappbox:not(.colorful).amazonapps .applinks,.wpappbox:not(.colorful).wordpress .applinks,.wpappbox:not(.colorful).steam .applinks,.wpappbox:not(.colorful).operaaddons .applinks{-webkit-filter:grayscale(100%);-moz-filter:grayscale(100%);-ms-filter:grayscale(100%);-o-filter:grayscale(100%);filter:grayscale(100%)}
		.wpappbox.appstore .applinks,.wpappbox.macappstore .applinks,.wpappbox.googleplay .applinks,.wpappbox.goodoldgames .applinks,.wpappbox.windowsstore .applinks,.wpappbox.firefoxmarketplace .applinks,.wpappbox.chromewebstore .applinks,.wpappbox.firefoxaddon .applinks,.wpappbox.amazonapps .applinks,.wpappbox.wordpress .applinks,.wpappbox.steam .applinks,.wpappbox.operaaddons .applinks{background-repeat:no-repeat;background-size:auto 42px;background-position:center 7px;background-color:#FFF;}
		.wpappbox.compact.appstore .applinks,.wpappbox.compact.macappstore .applinks,.wpappbox.compact.googleplay .applinks,.wpappbox.compact.goodoldgames .applinks,.wpappbox.compact.windowsstore .applinks,.wpappbox.compact.firefoxmarketplace .applinks,.wpappbox.compact.chromewebstore .applinks,.wpappbox.compact.firefoxaddon .applinks,.wpappbox.compact.amazonapps .applinks,.wpappbox.compact.wordpress .applinks,.wpappbox.compact.steam .applinks,.wpappbox.compact.operaaddons .applinks{background-position:center center;background-size:auto 48px;}
		@media only screen and (-webkit-min-device-pixel-ratio:1.5),only screen and (min--moz-device-pixel-ratio:1.5),only screen and (min-resolution:240dpi){
			.wpappbox .rating-stars{background-size:65px 143px}
			.wpappbox .stars-monochrome{background-image:<?php echo 'url(' . plugins_url('/wp-appbox/img/stars-sprites-monochrome@2x.png');?>);}
			.wpappbox .stars-colorful{background-image:<?php echo 'url(' . plugins_url('/wp-appbox/img/stars-sprites-colorful@2x.png');?>);}
			.wpappbox.appstore .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/appstore-colorful@2x.png');?>);}
			.wpappbox.macappstore .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/macappstore-colorful@2x.png');?>);}
			.wpappbox.googleplay .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/googleplay-colorful@2x.png');?>);}
			.wpappbox.goodoldgames .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/goodoldgames-colorful@2x.png');?>);}
			.wpappbox.windowsstore .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/windowsstore-colorful@2x.png');?>);}
			.wpappbox.firefoxmarketplace .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/firefoxmarketplace-colorful@2x.png');?>);}
			.wpappbox.chromewebstore .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/chromewebstore-colorful@2x.png');?>);}
			.wpappbox.firefoxaddon .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/firefoxaddon-colorful@2x.png');?>);}
			.wpappbox.amazonapps .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/amazonapps-colorful@2x.png');?>);}
			.wpappbox.wordpress .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/wordpress-colorful@2x.png');?>);}
			.wpappbox.steam .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/steam-colorful@2x.png');?>);}
			.wpappbox.operaaddons .applinks{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/operaaddons-colorful@2x.png');?>);}
		}
		@media screen and (max-width:500px){
			.wpappbox .rating-stars,.wpappbox.screenshots > .screenshots > .slider{margin-top:0;}
			.wpappbox .appdetails > .developer,.wpappbox .watch-icon,.wpappbox.compact .applinks,.wpappbox.screenshots .applinks,.wpappbox.simple .applinks{display:none;}
			.wpappbox.screenshots > .screenshots{padding:8px;}
			.wpappbox .appdetails .fallback{white-space:nowrap;}
			.amazonapps .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/amazonapps-small.png');?>);padding-left:18px;}
			.appstore .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/appstore-small.png');?>);padding-left:18px;}
			.chromewebstore .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/hromewebstore-small.png');?>c);padding-left:16px;}
			.firefoxaddon .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/firefoxaddon-small.png');?>);padding-left:17px;}
			.firefoxmarketplace .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/firefoxmarketplace-small.png');?>);padding-left:16px;}
			.goodoldgames .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/goodoldgames-small.png');?>);padding-left:33px;}
			.googleplay .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/googleplay-small.png');?>);padding-left:18px;}
			.macappstore .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/macappstore-small.png');?>);padding-left:18px;}
			.operaaddons .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/operaaddons-small.png');?>);padding-left:16px;}
			.steam .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/steam-small.png');?>);padding-left:23px;}
			.windowsstore .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/windowsstore-small.png');?>);padding-left:16px;}
			.wordpress .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/wordpress-small.png');?>);padding-left:17px;}
			@media only screen and (-webkit-min-device-pixel-ratio:1.5),only screen and (min--moz-device-pixel-ratio:1.5),only screen and (min-resolution:240dpi){
				.amazonapps .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/amazonapps-small@2x.png');?>);}
				.appstore .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/appstore-small@2x.png');?>);}
				.chromewebstore .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/chromewebstore-small@2x.png');?>);}
				.firefoxaddon .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/firefoxaddon-small@2x.png');?>);}
				.firefoxmarketplace .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/firefoxmarketplace-small@2x.png');?>);}
				.goodoldgames .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/goodoldgames-small@2x.png');?>);}
				.googleplay .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/googleplay-small@2x.png');?>);}
				.macappstore .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/macappstore-small@2x.png');?>);}
				.operaaddons .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/operaaddons-small@2x.png');?>);}
				.steam .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/steam-small@2x.png');?>);}
				.windowsstore .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/windowsstore-small@2x.png');?>);}
				.wordpress .apptitle{background:<?php echo 'url(' . plugins_url('/wp-appbox/img/wordpress-small@2x.png');?>);}
			}
			.appdetails .apptitle{background-repeat:no-repeat;background-position:center left;background-size:auto 13px;}
			.wpappbox.simple{height:62px;}
			.wpappbox .appicon,.wpappbox.compact .appicon{height:60px;width:60px;padding:6px;}
			.wpappbox .appicon img,.wpappbox.compact .appicon img{height:48px;width:48px;max-width:48px;}
			.wpappbox .appdetails > div,.wpappbox.compact  .appdetails > div{padding:0 6px;}
			.wpappbox .appdetails,.wpappbox.compact .appdetails{font-size:15px;line-height:15px;padding-top:8px;}
			.wpappbox .apptitle,.wpappbox.compact .apptitle{font-size:17px;line-height:20px;font-weight:600;margin-top:0;margin-bottom:6px;}
		}
	<?php endif;?>
	<?php if(is_singular()===true):?>
		/*
		    article
		1.header
		2.p & a
		3.hx
		4.pre & address & quote & embed
		5.list
		6.table
		7.img
		8.page-navigation
		9.for chat format
		10.original
		11.codex
		*/
		.article-header{height:0;width:100%;padding-top:85%;position:relative;margin:20% 0 6vh;}
		.article-eyecatch,.article-meta{position:absolute;bottom:0;text-align:center;vertical-align:middle;}
		.article-eyecatch{height:auto;min-height:15vh;width:100%;}
		.article-meta{min-height:15vh;width:100%;font-size:2rem;color:<?php echo get_option('article_meta_color','#fff');?>;background-image:linear-gradient(to top,<?php $color = color_to_rgb($colorcode = get_option('article_meta_background','#f1f1f1'));echo'rgba(' . $color["red"] . ',' . $color["green"] . ',' . $color["blue"] . ',.8)';?>,rgba(0,0,0,.15));}
		.article-title{font-size:2.5rem;}
		.article-date{margin-right:3em;}

		.article-main{font-size:1.6rem;}
		.article-main p{max-width:calc(1.6rem * 40);padding:1vh 8vmin;margin:2vh auto;}
		.article-main a[href^="http"]:empty::before{content:attr(href);}
		.article-main a[href^="http"][title]:empty::before{content:attr(title);}
		.article-main a[href*=".png"],.article-main a[href*=".jpg"],.article-main a[href*=".jpeg"],.article-main a[href*=".gif"]{display:block;margin:2vh auto;}
		.article-main a:hover,.article-main a:focus{border-bottom:solid 1px <?php echo get_option('article_main_a_hover_border','#03a9f4');?>;}

		.article-main h1,.article-main h2,.article-main h3,.article-main h4,.article-main h5,.article-main h6{min-height:6vh;max-width:90%;margin:2vh auto;line-height:6vh;text-align:center;}
		.article-main h3,.article-main h4,.article-main h5,.article-main h6{font-size:2rem;}
		.article-main h1{padding:.75em;background-color:<?php echo get_option('article_main_h1_background','#f4f4f4');?>;border-top:1px dashed <?php echo get_option('article_main_h1_border','#ccc');?>;border-bottom:1px dashed <?php echo get_option('article_main_h1_border','#ccc');?>;box-shadow:0 7px 10px -5px rgba(0,0,0,.1) inset;counter-increment:counter-h1;counter-reset:counter-h2;}
		.article-main h2{color:<?php echo get_option('article_main_h2_color','#fff');?>;background-color:<?php echo get_option('article_main_h2_background','#03a9f4');?>;box-shadow:0 0 3vmin rgba(0,0,0,.2);counter-increment:counter-h2;counter-reset:counter-h3;}
		.article-main h2 > a:visited{color:<?php echo get_option('article_main_h2_color','#fff');?>;}
		.article-main h3{color:<?php echo get_option('article_main_h3_color','#03a9f4');?>;border:1vmin solid <?php echo get_option('article_main_h3_border','#03a9f4');?>;box-shadow:0 0 3vmin rgba(0,0,0,.1);counter-increment:counter-h3;counter-reset:counter-h4;}
		.article-main h3 > a:visited{color:<?php echo get_option('article_main_h3_color','#03a9f4');?>;}
		.article-main h4{border-left:.5em solid <?php echo get_option('article_main_h4_border','#03a9f4');?>;border-bottom:1px solid;counter-increment:counter-h4;counter-reset:counter-h5;}
		.article-main h5{border-left:.5em solid <?php echo get_option('article_main_h5_border','#03a9f4');?>;counter-increment:counter-h5;counter-reset:counter-h6;}
		.article-main h6{border-bottom:.75vmin dashed <?php echo get_option('article_main_h6_border','#03a9f4');?>;counter-increment:counter-h6;}

		.article-main pre,.article-main address{max-width:94vw;margin:1vh auto;}
		.article-main pre{font-weight:bold;}
		.article-main code{white-space:pre;overflow-x:auto;}
		.article-main address,.article-main code,.article-main q{background-color:#eee;}
		.article-main blockquote,.article-main q{quotes:none;padding:1em 2em;}
		.article-main blockquote{border:1px solid <?php echo get_option('article_main_bq_border','#bbb');?>;border-radius:3vmin;}
		.article-main blockquote::after{content:attr(title)'\a'attr(cite);display:block;padding-top:1em;border-top:1px solid <?php echo get_option('article_main_bq_border','#bbb');?>;text-align:right;white-space:pre-wrap;word-wrap:break-word;}
		.article-main > div{max-width:80vw;margin:4vh auto;}
		.article-main iframe[src*="youtu.be"],.article-main iframe[src*="youtube.com"],.article-main iframe[src*="www.youtube.com"]{height:calc(80vw / 100 * 56.25);width:80vw;margin:4vh auto;}
		.article-main p iframe[src*="youtu.be"],.article-main p iframe[src*="youtube.com"],.article-main p iframe[src*="www.youtube.com"]{height:calc(80vw / 100 * 56.25);max-height:calc(720px / 100 * 56.25);width:80vw;max-width:720px;margin:4vh 0;}

		.article-main li::after{content:'';display:block;height:0;width:100%;position:relative;top:0;left:0;border-bottom:1px dashed <?php echo get_option('article_main_li_border','#aaa');?>;}
		.article-main ul{max-width:80%;margin:2em auto;list-style:none;}
		.article-main ul li::before{content:'●';display:inline;color:<?php echo get_option('article_main_li_color','#03a9f4');?>;font-size:.8em;padding-right:1em;}
		.article-main ol{counter-reset:counter-name;}
		.article-main ol li:before{counter-increment:counter-name;content:counter(counter-name);display:inline-block;height:1.5em;width:1.5em;border-radius:50%;position:absolute;left:0;background-color:<?php echo get_option('article_main_ol_background','#03a9f4');?>;color:<?php echo get_option('article_main_ol_color','#fff');?>;line-height:1.5em;text-align:center;}
		.article-main ol li{margin:0;list-style:none;position:relative;padding-top:.1em;padding-left:2em;}

		.article-main table{-webkit-box-sizing:border-box;box-sizing:border-box;width:calc(100% - 16vmin);margin:2vh 4vh;table-layout:fixed;border-collapse:collapse;}
		.article-main table caption{padding:1.2em;text-align:center;background-color:<?php echo get_option('article_main_table_caption_background','#ffc045');?>;}
		.article-main table tr th{color:<?php echo get_option('article_main_th_color','#fff');?>;background-color:<?php echo get_option('article_main_th_background','#03a9f4');?>;}
		.article-main table tr th,.article-main table tr td{padding:1.2em;text-align:center;border:1px solid <?php echo get_option('article_main_li_border','#cfcfcf');?>;}
		.article-main table tr:last-child{border-left:none;}
		.article-main table:last-child{border-bottom:none;}

		.article-main .toc-title{max-width:72vw;}
		.article-main .toc-title:hover::before{content:"";}
		.article-main .cutin-box > h3{color:#fff;box-shadow:none;}
		.article-main .ogp-blogcard-share > ul > li::before,.article-main .ogp-blogcard-share > ul > li::after{display:none;}
		.article-main .ogp-blogcard-main{border:0;padding:0;}
		.article-main .ogp-blogcard-main::after{display:none;}
		.article-main .ogp-blogcard img{display:inline-block;}
		.article-main .ogp-blogcard-title{box-shadow:none;}
		.article-main .ogp-blogcard-description,.article-main .ogp-blogcard-site-name{color:<?php echo get_option('root_color','#333');?>;}
		.article-main .ogp-blogcard-description:visited,.article-main .ogp-blogcard-site-name:visited{color:<?php echo get_option('root_color','#333');?>;}

		.article-main img{display:block;min-height:50px;width:100%;height:auto;position:relative;margin:4vh auto;line-height:2;text-align:center;}
		.article-main img::before{content:"";display:block;height:calc(100% + 2em);width:100%;border-radius:3vmin;position:absolute;top:-2em;left:0;border:1vmin dashed #ddd;background-color:#f1f1f1;}
		.article-main img::after{content:"\f127" "この画像が読み込めませんでした。" attr(alt);display:block;width:100%;position:absolute;top:1em;left:0;color:rgb(100,100,100);font-size:1.8rem;font-family:"FontAwesome";font-style:normal;text-align:center;}
		.wp-caption{height:3em;max-width:96%;padding:1em .5em;margin:4vh auto;text-align:center;background-color:#f4f4f4;box-shadow:0 0 3vmin rgba(0,0,0,.1);}
		.wp-caption.alignleft{margin-left:0;}
		.wp-caption.alignright{margin-right:0;}
		.wp-caption img{height:auto;width:auto;max-width:100%;border:0;margin:0;padding:0;}
		.wp-caption p.wp-caption-text{font-size:.9em;margin:0;padding:1.5em 2em;}
		.alignnone,a img.alignnone{margin:2vh 3vw 5vh 0;}
		.alignright,a img.alignright{float:right;margin:2vh 0 5vh 3vw;}
		.aligncenter,div.aligncenter{display:block;margin:1vh auto;}
		.alignleft,a img.alignleft{float:left;margin:2vh 3vw 5vh 0;}
		a img.aligncenter{display:block;margin-left:auto;margin-right:auto;}

		.page-nav{text-align:center;}
		.page-nav a{color:<?php echo get_option('page_nav_color','#03a9f4');?>;margin:0 1em;}
		.page-nav a:hover{border-bottom:solid 1px <?php echo get_option('page_nav_hover_border','#03a9f4');?>;}

		.format-chat .article-main p{display:block;height:3em;width:60%;padding:1em;border:1px solid #777;border-radius:5vmin;margin-bottom:2em;font-size:1.8rem;vertical-align:middle;}
		.format-chat .article-main p:nth-of-type(odd){float:left;clear:both;margin-left:3vmin;background-color:rgba(139,195,74,.6);}
		.format-chat .article-main p:nth-of-type(even){float:right;clear:both;margin-right:3vmin;background-color:rgba(230,230,230,.6);}

		.sticky,.gallery-caption,.bypostauthor{}
	<?php endif;?>
	/*
	    Media Query
	1.PC style
	2.Large-PC style
	3.Large-mobile style
	4.mobile style
	5.print
	*/
	@media screen and (min-width:992px){
		.info-card{min-height:30vmin;width:160vmin;margin:3vmin auto;}
		.widget.info-card{min-height:30vmin;}
		.card-title{font-size:2.7rem;}
		.hatenablogcard{max-width:60vw;margin:5vh 10vw;}
		.information,.question{width:80%;}
		<?php if(is_singular()===true):?>
			.article-date{font-size:2.2rem;}
			.article-main{font-size:2rem;}
		<?php endif;?>
	}
	@media screen and (max-width:992px){
		.info-card{min-height:45vmin;width:80vmin;}
		.widget.info-card{min-height:45vmin;}
		.card{font-size:1.6rem;margin:3vmin auto;}
		.card-title{font-size:2rem;}
		.toc,.article-main .toc-title{width:94vw;}
		.hatenablogcard{max-width:70vw;margin:5vh 5vw;}
		.ogp-blogcard{border-width:2vmin;max-width:94%;}
		.ogp-blogcard-title{font-size:1.6rem;}
		.ogp-blogcard-description{display:none;}
		.information,.question{width:96%;}
		<?php if(is_singular()===true):?>
			.article-date{font-size:2rem;}
		    .article-main h3,.article-main h4,.article-main h5,.article-main h6{font-size:2.2rem;}
		    .article-main table,.article-main table caption,.article-main table thead,.article-main table tbody,.article-main table tr,.article-main table tr th{display:block;}
		    .article-main table tr th{margin:-1px;}
		    .article-main table tr td{display:list-item;list-style:disc inside;border:0;}
		    .article-main table tr td + td {padding-top:0;}
		<?php endif;?>
	}
	@media screen and (max-width:640px){
		.card{font-size:1.6rem;}
		.card-title{font-size:1.8rem;}
		.hatenablogcard{max-width:80vw;margin:5vh 0;}
		.search-form div{padding:3px 5px;font-size:75%;}
		.search-form .sform{min-width:180px;}
		.search-form .sbtn{padding-left:5px;padding-right:10px;}
		.search-form .sbtn::after{font-size:2rem;margin-left:-0.5em;}
	}
	@media print{
		:root{font-size:10pt;}
		#menu-toggle,#menu-wrap{display:none;}
	}
	.night-mode .hide-nav-prev a,.night-mode .hide-nav-next a,body.night-mode,.night-mode #main-menu,.night-mode .card,.night-mode div.card-list,.night-mode div#menu-wrap,.night-mode a#menu-toggle,.night-mode nav.menu-tab,.night-mode a#main-menu-toggle,.night-mode a#share-menu-toggle{color:#fff;background-color:#333;}
	.night-mode ul.page-nation,.night-mode ul.page-nation a,.night-mode ul.page-nation li span.dots,.night-mode ul.page-nation li.current,.night-mode .page-nav,.night-mode .page-nav a:hover{color:#fff;background-color:#333;border-color:#fff;}
	.night-mode ul.page-nation li span.dots{color:#f1f1f1;}
	.night-mode ul.page-nation a:hover{color:#333;background-color:#fff;}
	.night-mode .card,.night-mode ul.page-nation{box-shadow:0 0 3vmin rgba(0,0,0,.3);}
	.night-mode div.article-meta,.night-mode .article-main h1,.night-mode div.information,.night-mode div.question{color:#333;}
	.night-mode .article-main h2.ogp-blogcard-title,.night-mode .article-main p.ogp-blogcard-description,.night-mode .article-main a.ogp-blogcard-site-name,.night-mode .article-main h2.ogp-blogcard-title:visited,.night-mode .article-main p.ogp-blogcard-description:visited,.night-mode .article-main a.ogp-blogcard-site-name:visited,.night-mode .article-main img.ogp-blogcard-img::after{color:#fff;}
	.night-mode div.ogp-blogcard{background-color:#333;border-color:#f1f1f1;}
	.night-mode aside.toc{border:0;box-shadow:none;}
</style>