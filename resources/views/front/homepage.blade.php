@extends('front.layout.app')
<link href="https://fireandsafetyhouse.com/wp-content/themes/fireandsafetyhouse/css/magnific-popup.css" rel="stylesheet">
@section('content')
    <style>
        @font-face {
            font-family: "Glyphicons Halflings";
            src: url(../fonts/glyphicons-halflings-regular.eot);
            src: url(../fonts/glyphicons-halflings-regular.eot?#iefix) format("embedded-opentype"), url(../fonts/glyphicons-halflings-regular.woff2) format("woff2"), url(../fonts/glyphicons-halflings-regular.woff) format("woff"), url(../fonts/glyphicons-halflings-regular.ttf) format("truetype"), url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format("svg")
        }

        .glyphicon {
            position: relative;
            top: 1px;
            display: inline-block;
            font-family: "Glyphicons Halflings";
            font-style: normal;
            font-weight: 400;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .glyphicon-asterisk:before {
            content: "\002a"
        }

        .glyphicon-plus:before {
            content: "\002b"
        }

        .glyphicon-eur:before,
        .glyphicon-euro:before {
            content: "\20ac"
        }

        .glyphicon-minus:before {
            content: "\2212"
        }

        .glyphicon-cloud:before {
            content: "\2601"
        }

        .glyphicon-envelope:before {
            content: "\2709"
        }

        .glyphicon-pencil:before {
            content: "\270f"
        }

        .glyphicon-glass:before {
            content: "\e001"
        }

        .glyphicon-music:before {
            content: "\e002"
        }

        .glyphicon-search:before {
            content: "\e003"
        }

        .glyphicon-heart:before {
            content: "\e005"
        }

        .glyphicon-star:before {
            content: "\e006"
        }

        .glyphicon-star-empty:before {
            content: "\e007"
        }

        .glyphicon-user:before {
            content: "\e008"
        }

        .glyphicon-film:before {
            content: "\e009"
        }

        .glyphicon-th-large:before {
            content: "\e010"
        }

        .glyphicon-th:before {
            content: "\e011"
        }

        .glyphicon-th-list:before {
            content: "\e012"
        }

        .glyphicon-ok:before {
            content: "\e013"
        }

        .glyphicon-remove:before {
            content: "\e014"
        }

        .glyphicon-zoom-in:before {
            content: "\e015"
        }

        .glyphicon-zoom-out:before {
            content: "\e016"
        }

        .glyphicon-off:before {
            content: "\e017"
        }

        .glyphicon-signal:before {
            content: "\e018"
        }

        .glyphicon-cog:before {
            content: "\e019"
        }

        .glyphicon-trash:before {
            content: "\e020"
        }

        .glyphicon-home:before {
            content: "\e021"
        }

        .glyphicon-file:before {
            content: "\e022"
        }

        .glyphicon-time:before {
            content: "\e023"
        }

        .glyphicon-road:before {
            content: "\e024"
        }

        .glyphicon-download-alt:before {
            content: "\e025"
        }

        .glyphicon-download:before {
            content: "\e026"
        }

        .glyphicon-upload:before {
            content: "\e027"
        }

        .glyphicon-inbox:before {
            content: "\e028"
        }

        .glyphicon-play-circle:before {
            content: "\e029"
        }

        .glyphicon-repeat:before {
            content: "\e030"
        }

        .glyphicon-refresh:before {
            content: "\e031"
        }

        .glyphicon-list-alt:before {
            content: "\e032"
        }

        .glyphicon-lock:before {
            content: "\e033"
        }

        .glyphicon-flag:before {
            content: "\e034"
        }

        .glyphicon-headphones:before {
            content: "\e035"
        }

        .glyphicon-volume-off:before {
            content: "\e036"
        }

        .glyphicon-volume-down:before {
            content: "\e037"
        }

        .glyphicon-volume-up:before {
            content: "\e038"
        }

        .glyphicon-qrcode:before {
            content: "\e039"
        }

        .glyphicon-barcode:before {
            content: "\e040"
        }

        .glyphicon-tag:before {
            content: "\e041"
        }

        .glyphicon-tags:before {
            content: "\e042"
        }

        .glyphicon-book:before {
            content: "\e043"
        }

        .glyphicon-bookmark:before {
            content: "\e044"
        }

        .glyphicon-print:before {
            content: "\e045"
        }

        .glyphicon-camera:before {
            content: "\e046"
        }

        .glyphicon-font:before {
            content: "\e047"
        }

        .glyphicon-bold:before {
            content: "\e048"
        }

        .glyphicon-italic:before {
            content: "\e049"
        }

        .glyphicon-text-height:before {
            content: "\e050"
        }

        .glyphicon-text-width:before {
            content: "\e051"
        }

        .glyphicon-align-left:before {
            content: "\e052"
        }

        .glyphicon-align-center:before {
            content: "\e053"
        }

        .glyphicon-align-right:before {
            content: "\e054"
        }

        .glyphicon-align-justify:before {
            content: "\e055"
        }

        .glyphicon-list:before {
            content: "\e056"
        }

        .glyphicon-indent-left:before {
            content: "\e057"
        }

        .glyphicon-indent-right:before {
            content: "\e058"
        }

        .glyphicon-facetime-video:before {
            content: "\e059"
        }

        .glyphicon-picture:before {
            content: "\e060"
        }

        .glyphicon-map-marker:before {
            content: "\e062"
        }

        .glyphicon-adjust:before {
            content: "\e063"
        }

        .glyphicon-tint:before {
            content: "\e064"
        }

        .glyphicon-edit:before {
            content: "\e065"
        }

        .glyphicon-share:before {
            content: "\e066"
        }

        .glyphicon-check:before {
            content: "\e067"
        }

        .glyphicon-move:before {
            content: "\e068"
        }

        .glyphicon-step-backward:before {
            content: "\e069"
        }

        .glyphicon-fast-backward:before {
            content: "\e070"
        }

        .glyphicon-backward:before {
            content: "\e071"
        }

        .glyphicon-play:before {
            content: "\e072"
        }

        .glyphicon-pause:before {
            content: "\e073"
        }

        .glyphicon-stop:before {
            content: "\e074"
        }

        .glyphicon-forward:before {
            content: "\e075"
        }

        .glyphicon-fast-forward:before {
            content: "\e076"
        }

        .glyphicon-step-forward:before {
            content: "\e077"
        }

        .glyphicon-eject:before {
            content: "\e078"
        }

        .glyphicon-chevron-left:before {
            content: "\e079"
        }

        .glyphicon-chevron-right:before {
            content: "\e080"
        }

        .glyphicon-plus-sign:before {
            content: "\e081"
        }

        .glyphicon-minus-sign:before {
            content: "\e082"
        }

        .glyphicon-remove-sign:before {
            content: "\e083"
        }

        .glyphicon-ok-sign:before {
            content: "\e084"
        }

        .glyphicon-question-sign:before {
            content: "\e085"
        }

        .glyphicon-info-sign:before {
            content: "\e086"
        }

        .glyphicon-screenshot:before {
            content: "\e087"
        }

        .glyphicon-remove-circle:before {
            content: "\e088"
        }

        .glyphicon-ok-circle:before {
            content: "\e089"
        }

        .glyphicon-ban-circle:before {
            content: "\e090"
        }

        .glyphicon-arrow-left:before {
            content: "\e091"
        }

        .glyphicon-arrow-right:before {
            content: "\e092"
        }

        .glyphicon-arrow-up:before {
            content: "\e093"
        }

        .glyphicon-arrow-down:before {
            content: "\e094"
        }

        .glyphicon-share-alt:before {
            content: "\e095"
        }

        .glyphicon-resize-full:before {
            content: "\e096"
        }

        .glyphicon-resize-small:before {
            content: "\e097"
        }

        .glyphicon-exclamation-sign:before {
            content: "\e101"
        }

        .glyphicon-gift:before {
            content: "\e102"
        }

        .glyphicon-leaf:before {
            content: "\e103"
        }

        .glyphicon-fire:before {
            content: "\e104"
        }

        .glyphicon-eye-open:before {
            content: "\e105"
        }

        .glyphicon-eye-close:before {
            content: "\e106"
        }

        .glyphicon-warning-sign:before {
            content: "\e107"
        }

        .glyphicon-plane:before {
            content: "\e108"
        }

        .glyphicon-calendar:before {
            content: "\e109"
        }

        .glyphicon-random:before {
            content: "\e110"
        }

        .glyphicon-comment:before {
            content: "\e111"
        }

        .glyphicon-magnet:before {
            content: "\e112"
        }

        .glyphicon-chevron-up:before {
            content: "\e113"
        }

        .glyphicon-chevron-down:before {
            content: "\e114"
        }

        .glyphicon-retweet:before {
            content: "\e115"
        }

        .glyphicon-shopping-cart:before {
            content: "\e116"
        }

        .glyphicon-folder-close:before {
            content: "\e117"
        }

        .glyphicon-folder-open:before {
            content: "\e118"
        }

        .glyphicon-resize-vertical:before {
            content: "\e119"
        }

        .glyphicon-resize-horizontal:before {
            content: "\e120"
        }

        .glyphicon-hdd:before {
            content: "\e121"
        }

        .glyphicon-bullhorn:before {
            content: "\e122"
        }

        .glyphicon-bell:before {
            content: "\e123"
        }

        .glyphicon-certificate:before {
            content: "\e124"
        }

        .glyphicon-thumbs-up:before {
            content: "\e125"
        }

        .glyphicon-thumbs-down:before {
            content: "\e126"
        }

        .glyphicon-hand-right:before {
            content: "\e127"
        }

        .glyphicon-hand-left:before {
            content: "\e128"
        }

        .glyphicon-hand-up:before {
            content: "\e129"
        }

        .glyphicon-hand-down:before {
            content: "\e130"
        }

        .glyphicon-circle-arrow-right:before {
            content: "\e131"
        }

        .glyphicon-circle-arrow-left:before {
            content: "\e132"
        }

        .glyphicon-circle-arrow-up:before {
            content: "\e133"
        }

        .glyphicon-circle-arrow-down:before {
            content: "\e134"
        }

        .glyphicon-globe:before {
            content: "\e135"
        }

        .glyphicon-wrench:before {
            content: "\e136"
        }

        .glyphicon-tasks:before {
            content: "\e137"
        }

        .glyphicon-filter:before {
            content: "\e138"
        }

        .glyphicon-briefcase:before {
            content: "\e139"
        }

        .glyphicon-fullscreen:before {
            content: "\e140"
        }

        .glyphicon-dashboard:before {
            content: "\e141"
        }

        .glyphicon-paperclip:before {
            content: "\e142"
        }

        .glyphicon-heart-empty:before {
            content: "\e143"
        }

        .glyphicon-link:before {
            content: "\e144"
        }

        .glyphicon-phone:before {
            content: "\e145"
        }

        .glyphicon-pushpin:before {
            content: "\e146"
        }

        .glyphicon-usd:before {
            content: "\e148"
        }

        .glyphicon-gbp:before {
            content: "\e149"
        }

        .glyphicon-sort:before {
            content: "\e150"
        }

        .glyphicon-sort-by-alphabet:before {
            content: "\e151"
        }

        .glyphicon-sort-by-alphabet-alt:before {
            content: "\e152"
        }

        .glyphicon-sort-by-order:before {
            content: "\e153"
        }

        .glyphicon-sort-by-order-alt:before {
            content: "\e154"
        }

        .glyphicon-sort-by-attributes:before {
            content: "\e155"
        }

        .glyphicon-sort-by-attributes-alt:before {
            content: "\e156"
        }

        .glyphicon-unchecked:before {
            content: "\e157"
        }

        .glyphicon-expand:before {
            content: "\e158"
        }

        .glyphicon-collapse-down:before {
            content: "\e159"
        }

        .glyphicon-collapse-up:before {
            content: "\e160"
        }

        .glyphicon-log-in:before {
            content: "\e161"
        }

        .glyphicon-flash:before {
            content: "\e162"
        }

        .glyphicon-log-out:before {
            content: "\e163"
        }

        .glyphicon-new-window:before {
            content: "\e164"
        }

        .glyphicon-record:before {
            content: "\e165"
        }

        .glyphicon-save:before {
            content: "\e166"
        }

        .glyphicon-open:before {
            content: "\e167"
        }

        .glyphicon-saved:before {
            content: "\e168"
        }

        .glyphicon-import:before {
            content: "\e169"
        }

        .glyphicon-export:before {
            content: "\e170"
        }

        .glyphicon-send:before {
            content: "\e171"
        }

        .glyphicon-floppy-disk:before {
            content: "\e172"
        }

        .glyphicon-floppy-saved:before {
            content: "\e173"
        }

        .glyphicon-floppy-remove:before {
            content: "\e174"
        }

        .glyphicon-floppy-save:before {
            content: "\e175"
        }

        .glyphicon-floppy-open:before {
            content: "\e176"
        }

        .glyphicon-credit-card:before {
            content: "\e177"
        }

        .glyphicon-transfer:before {
            content: "\e178"
        }

        .glyphicon-cutlery:before {
            content: "\e179"
        }

        .glyphicon-header:before {
            content: "\e180"
        }

        .glyphicon-compressed:before {
            content: "\e181"
        }

        .glyphicon-earphone:before {
            content: "\e182"
        }

        .glyphicon-phone-alt:before {
            content: "\e183"
        }

        .glyphicon-tower:before {
            content: "\e184"
        }

        .glyphicon-stats:before {
            content: "\e185"
        }

        .glyphicon-sd-video:before {
            content: "\e186"
        }

        .glyphicon-hd-video:before {
            content: "\e187"
        }

        .glyphicon-subtitles:before {
            content: "\e188"
        }

        .glyphicon-sound-stereo:before {
            content: "\e189"
        }

        .glyphicon-sound-dolby:before {
            content: "\e190"
        }

        .glyphicon-sound-5-1:before {
            content: "\e191"
        }

        .glyphicon-sound-6-1:before {
            content: "\e192"
        }

        .glyphicon-sound-7-1:before {
            content: "\e193"
        }

        .glyphicon-copyright-mark:before {
            content: "\e194"
        }

        .glyphicon-registration-mark:before {
            content: "\e195"
        }

        .glyphicon-cloud-download:before {
            content: "\e197"
        }

        .glyphicon-cloud-upload:before {
            content: "\e198"
        }

        .glyphicon-tree-conifer:before {
            content: "\e199"
        }

        .glyphicon-tree-deciduous:before {
            content: "\e200"
        }

        .glyphicon-cd:before {
            content: "\e201"
        }

        .glyphicon-save-file:before {
            content: "\e202"
        }

        .glyphicon-open-file:before {
            content: "\e203"
        }

        .glyphicon-level-up:before {
            content: "\e204"
        }

        .glyphicon-copy:before {
            content: "\e205"
        }

        .glyphicon-paste:before {
            content: "\e206"
        }

        .glyphicon-alert:before {
            content: "\e209"
        }

        .glyphicon-equalizer:before {
            content: "\e210"
        }

        .glyphicon-king:before {
            content: "\e211"
        }

        .glyphicon-queen:before {
            content: "\e212"
        }

        .glyphicon-pawn:before {
            content: "\e213"
        }

        .glyphicon-bishop:before {
            content: "\e214"
        }

        .glyphicon-knight:before {
            content: "\e215"
        }

        .glyphicon-baby-formula:before {
            content: "\e216"
        }

        .glyphicon-tent:before {
            content: "\26fa"
        }

        .glyphicon-blackboard:before {
            content: "\e218"
        }

        .glyphicon-bed:before {
            content: "\e219"
        }

        .glyphicon-apple:before {
            content: "\f8ff"
        }

        .glyphicon-erase:before {
            content: "\e221"
        }

        .glyphicon-hourglass:before {
            content: "\231b"
        }

        .glyphicon-lamp:before {
            content: "\e223"
        }

        .glyphicon-duplicate:before {
            content: "\e224"
        }

        .glyphicon-piggy-bank:before {
            content: "\e225"
        }

        .glyphicon-scissors:before {
            content: "\e226"
        }

        .glyphicon-bitcoin:before {
            content: "\e227"
        }

        .glyphicon-btc:before {
            content: "\e227"
        }

        .glyphicon-xbt:before {
            content: "\e227"
        }

        .glyphicon-yen:before {
            content: "\00a5"
        }

        .glyphicon-jpy:before {
            content: "\00a5"
        }

        .glyphicon-ruble:before {
            content: "\20bd"
        }

        .glyphicon-rub:before {
            content: "\20bd"
        }

        .glyphicon-scale:before {
            content: "\e230"
        }

        .glyphicon-ice-lolly:before {
            content: "\e231"
        }

        .glyphicon-ice-lolly-tasted:before {
            content: "\e232"
        }

        .glyphicon-education:before {
            content: "\e233"
        }

        .glyphicon-option-horizontal:before {
            content: "\e234"
        }

        .glyphicon-option-vertical:before {
            content: "\e235"
        }

        .glyphicon-menu-hamburger:before {
            content: "\e236"
        }

        .glyphicon-modal-window:before {
            content: "\e237"
        }

        .glyphicon-oil:before {
            content: "\e238"
        }

        .glyphicon-grain:before {
            content: "\e239"
        }

        .glyphicon-sunglasses:before {
            content: "\e240"
        }

        .glyphicon-text-size:before {
            content: "\e241"
        }

        .glyphicon-text-color:before {
            content: "\e242"
        }

        .glyphicon-text-background:before {
            content: "\e243"
        }

        .glyphicon-object-align-top:before {
            content: "\e244"
        }

        .glyphicon-object-align-bottom:before {
            content: "\e245"
        }

        .glyphicon-object-align-horizontal:before {
            content: "\e246"
        }

        .glyphicon-object-align-left:before {
            content: "\e247"
        }

        .glyphicon-object-align-vertical:before {
            content: "\e248"
        }

        .glyphicon-object-align-right:before {
            content: "\e249"
        }

        .glyphicon-triangle-right:before {
            content: "\e250"
        }

        .glyphicon-triangle-left:before {
            content: "\e251"
        }

        .glyphicon-triangle-bottom:before {
            content: "\e252"
        }

        .glyphicon-triangle-top:before {
            content: "\e253"
        }

        .glyphicon-console:before {
            content: "\e254"
        }

        .glyphicon-superscript:before {
            content: "\e255"
        }

        .glyphicon-subscript:before {
            content: "\e256"
        }

        .glyphicon-menu-left:before {
            content: "\e257"
        }

        .glyphicon-menu-right:before {
            content: "\e258"
        }

        .glyphicon-menu-down:before {
            content: "\e259"
        }

        .glyphicon-menu-up:before {
            content: "\e260"
        }
    </style>


    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
    <section id="" class="bg-fixed vc_rows wpb_rows vc_rows-fluid">

        {{-- OUR RECENT WORKs  image open perpose --}}

        {{-- <link href="{{ asset('front/css/jquery.fancybox.min.css') }}" rel="stylesheet" /> --}}

        {{-- End --}}


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <div class="">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @foreach ($homeslider as $key => $slider)
                        <div class="item {{ $key == 0 ? 'active' : '' }}">
                            <img src="{{ $slider->image }}" alt="Chania" style="opacity:0.7">
                            <div class="carousel-caption">
                                <div class="home-slider-text" style="font-size:30px;font-weight:300;line-height:46px;">{{ $slider->title }}</div>
                                <div  class="home-slider-desc" style="font-size:30px;font-weight:300;line-height:46px;">{{ $slider->description }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </section>


    <section id="section-about" class="bg-fixed vc_rows wpb_rows vc_rows-fluid vc_custom_1468049150627">
        <div class="container">
            <div class="row">
                <div class="wpb_column vc_column_container col-md-12">
                    <div class="wpb_wrapper wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <h1 style="text-align: center;"> WHAT WE DO</h1>
                        <div class="wpb_text_column wpb_content_element  vc_custom_1468649023628">
                            <div class="wpb_wrapper">
                                <p style="text-align: center;">We Provide Complete Interior Furnishing Work Solution </p>
                            </div>
                        </div>
                        <div class="separator">
                            <span>
                                <i class="fa fa-circle"></i>
                            </span>
                        </div>
                        <div class="spacer-single"></div>
                    </div>
                </div>

                @foreach ($wedoall as $wedo)
                    <div class="wpb_column vc_column_container col-md-4">
                        <div class="wpb_wrapper wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                            @foreach ($wedo as $do)
                                <div class="wpb_single_image wpb_content_element vc_align_center wpb_animate_when_almost_visible wpb_top-to-bottom vc_custom_1468644952589 wpb_start_animation">
                                    <figure class="wpb_wrapper vc_figure">
                                        <div class="vc_single_image-wrapper vc_box_border_grey">
                                            <img width="200" height="200" src="{{ asset($do->image) }}" class="vc_single_image-img attachment-full" alt="" decoding="async" loading="lazy" srcset="{{ asset($do->image) }} 200w, {{ asset($do->image) }} 150w, {{ asset($do->image) }}  600w" sizes="(max-width: 200px) 100vw, 200px">
                                        </div>
                                    </figure>
                                </div>
                                <h3 style="text-align: center;">
                                    <b>{{ $do->title }}</b>
                                </h3>
                                <div class="wpb_text_column wpb_content_element  vc_custom_1468647486720">
                                    <div class="wpb_wrapper">
                                        <p style="text-align: center;">{{ $do->description }}</p>
                                    </div>
                                </div>
                            @endforeach
                            <div class="vc_empty_space" style="height: 30px">
                                <span class="vc_empty_space_inner"></span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="bg-fixed vc_rows wpb_rows vc_rows-fluid vc_custom_1490341728344">
        <div class="container">
            <div class="row">
                <div class="wpb_column vc_column_container col-md-12">
                    <div class="wpb_wrapper wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <h1 style="text-align: center;color: #ffffff;"> OUR SERVICES</h1>
                        <div class="separator">
                            <span>
                                <i class="fa fa-circle"></i>
                            </span>
                        </div>
                        <div class="spacer-single"></div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container col-md-12">
                    <div class="wpb_wrapper">
                        <div class="de_tab tab_steps">
                            <ul class="de_nav">
                                {{-- @foreach ($services as $key => $service)
                                    @if ($key < 5)
                                        <li class="{{ $key == 0 ? 'active' : '' }} wow fadeIn animated" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                                            <span>{{ $service->title }}</span>
                                            <div class="v-border"></div>
                                        </li>
                                    @endif
                                @endforeach --}}
                                <a href="{{ route('front.project', 'turnkey_project') }}">
                                    <li class="wow fadeIn animated active" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                                        <span>TURNKEY PROJECTS</span>
                                        <div class="v-border"></div>
                                    </li>
                                </a>
                                <a href="{{ route('front.project', 'interior_execution') }}">
                                    <li class="wow fadeIn animated" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                                        <span>INTERIOR EXECUTION</span>
                                        <div class="v-border"></div>
                                    </li>
                                </a>
                                <a href="{{ route('front.project', 'interior_designing') }}">
                                    <li class="wow fadeIn animated" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                                        <span>INTERIOR DESIGNING</span>
                                        <div class="v-border"></div>
                                    </li>
                                </a>
                                <a href="{{ route('front.project', 'project_management') }}">
                                    <li class="wow fadeIn animated" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                                        <span>PROJECT MANAGEMENT</span>
                                        <div class="v-border"></div>
                                    </li>
                                </a>
                                <a href="{{ route('front.project', 'civil_work') }}">
                                    <li class="wow fadeIn animated" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                                        <span>CIVIL WORK</span>
                                        <div class="v-border"></div>
                                    </li>
                                </a>

                            </ul>
                            <div class="de_tab_content">
                                {{-- <div id="tab1">
                                    <p>TURNKEY PROJECTS</p>
                                </div>
                                <div id="tab2">
                                    <p>CIVIL AND INTERIOR EXECUTION</p>
                                </div>
                                <div id="tab3">
                                    <p>INTERIOR DESIGNING</p>
                                </div>
                                <div id="tab4">
                                    <p>PROJECT MANAGEMENT</p>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-fixed vc_rows wpb_rows vc_rows-fluid vc_custom_1468045889040">
        <div class="no-padd">
            <div class="row">
                <div class="wpb_column vc_column_container col-md-12">
                    <div class="wpb_wrapper">
                        <h1 style="text-align: center;color: #ffffff;">OUR RECENT WORKS</h1>
                        <div class="separator">
                            <span>
                                <i class="fa fa-circle"></i>
                            </span>
                        </div>
                        <div class="spacer-single"></div>
                        <div class="container">
                            <!-- portfolio filter begin -->
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <ul id="filters" class="wow fadeInUp animated" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                                        <li>
                                            <a href="javascript:void(0)" data-filter="*" class="filt selected">ALL Work</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-filter=".commercial"  class="filt">Commercial</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-filter=".office"  class="filt">Office</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-filter=".residential"  class="filt" >Residential</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div id="gallery" class="gallery full-gallery de-gallery pf_full_width wow fadeInUp animated" data-wow-delay=".3s" >
                            @foreach ($works as $work)
                                <div class="item {{ $work->category }} ">
                                    <div class="picframe">

                                        <div class="row">
                                            <div class="column">
                                                <div class="img-parent">
                                                        <div class="img-holder popup-gallery">
                                                            <a class="lumos-link" data-lumos="gallery1" href="{{ asset($work->image) }}"><img alt="" src="{{ asset($work->image) }}">
                                                           </a>
                                                       </div>
                                                        {{-- <a href="{{ asset($work->image) }}" data-fancybox="preview" data-width="1500" data-height="1000" >
                                                        <img src="{{ asset($work->image) }}">
                                                        </a> --}}
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-fixed vc_rows wpb_rows vc_rows-fluid call-to-action bg-color text-center vc_custom_1468043061779">
        <div class="no-padd">
            <div class="row">
                <div class="wpb_column vc_column_container col-md-8">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <p style="text-align: center; font-size: 25px;">
                                    <strong>WE PROVIDE BEST INTERIOR DESIGNING SERVICES IN RAJKOT</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container col-md-4">
                    <div class="wpb_wrapper">
                        <a href="{{ route('aboutus') }}" class="btn btn-line-black btn-big">ABOUT US</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-fixed vc_rows wpb_rows vc_rows-fluid vc_custom_1468217654486">
        <div class="container">
            <div class="row">
                <div class="wpb_column vc_column_container col-md-12">
                    <div class="wpb_wrapper wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <h1 style="text-align: center; font-weight:bold; color: white;"> OUR CUSTOMER SAYS</h1>
                        <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                        <div class="spacer-single"></div>

                        <div id="testimonial-carousel" class="de_carousel  wow fadeInUp owl-carousel owl-theme animated" data-wow-delay=".3s" style="opacity: 1; display: block; visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">

                            {{-- <div class="owl-wrapper-outer"> --}}
                                {{-- <div class="owl-wrapper" style="width: 2340px; left: 0px; display: block;"> --}}

                                    <div class="row">
                                        <div class="col-md-12 col-lg-6">
                                            <div class="de_testi">
                                                <blockquote>
                                                    <p><b>I wanted to thank you for your excellent service and for the
                                                            beautiful quality of all the furniture.
                                                            I wish more of the companies I have dealt with over the last few
                                                            months could have matched your customer service. All too often we
                                                            have been let down.
                                                            Once again many thanks and we will certainly be in touch with our
                                                            next refurbishment projects.</b></p>
                                                    <div class="de_testi_by">
                                                        Janhavi Chaphekar, Customer </div>
                                                </blockquote>
                                            </div>
                                        </div>


                                        <div class="col-md-12 col-lg-6">
                                            <div class="de_testi">

                                                <blockquote>
                                                    <p><b>Vishwakarma has given us very good and very satisfied with the work.
                                                            Will work again in the future. Luxurious look and durability.</b></p>
                                                    <div class="de_testi_by">
                                                        KETAN R. SHETH, Customer </div>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>

                                {{-- </div> --}}
                            {{-- </div> --}}
                            {{-- <div class="owl-controls clickable" style="display: none;">
                                <div class="owl-pagination">
                                    <div class="owl-page active">
                                        <span class=""></span>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
<script>
$(".filt").on('click',function (e) {
    e.preventDefault();
    var a = $(this).attr("data-filter");
    a = a.substr(1);
    console.log(a);
    $(this).parent().siblings().find('a').removeClass('selected');
    $(this).addClass('selected');
    $("#gallery .item").each(function () {
        console.log($(this).hasClass(a));
        if (!$(this).hasClass(a) && a != "") $(this).addClass("hide");
        else $(this).removeClass("hide");
    });
});
</script>
    {{-- <script type="55b4e0a457b8a53cdeada212-text/javascript">
    jQuery(document).ready(function() {
        'use strict';
        jQuery("#testimonial-carousel").owlCarousel({
            items : 2,
            navigation : false,
            itemsDesktop : [1199,1],
            itemsDesktopSmall : [979,1]


        });
    });
</script> --}}

    <script>
        // Get the elements with class="column"
        var elements = document.getElementsByClassName("column");
        // Declare a loop variable
        var i;
        // Two images side by side
        function two() {
            for (i = 0; i < elements.length; i++) {
                elements[i].style.msFlex = "50%"; // IE10
                elements[i].style.flex = "50%";
            }
        }
    </script>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:2
        }

        1600:{
            items:2
        }
    }
})
</script>


<script src="https://fireandsafetyhouse.com/wp-content/themes/fireandsafetyhouse/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			//tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				//return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
			}
		}
	});
});
</script>
    {{-- OUR RECENT WORKs click image open perpose --}}
    {{-- <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: 'none',
                closeEffect: 'none',
                afterLoad: function() {
                    this.title = 'Click to Enlarge';
                },
                afterShow: function() {
                    //$(".fancybox").zoom({on:"click"});
                }
            });
        });
    </script>

    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.fancybox.pack.js') }}"></script> --}}
    <script>
    $("#filters li").on('click',function (e) {
        alert('f');
        e.preventDefault();
        var a = $(this).attr("href");
        a = a.substr(1);
        $(".sets a").each(function () {
          if (!$(this).hasClass(a) && a != "") $(this).addClass("hide");
          else $(this).removeClass("hide");
        });
    });

    {{-- End --}}
@endpush
