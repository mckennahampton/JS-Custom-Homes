<!--Large Slideshow -->
<div id="<?php echo $slider_id_large; ?>" class="<?php echo $slider_class_large; ?>" style="<?php echo $slider_style_large; ?>">

<?php

    //check if $images is a single element or an array
    if ( is_array($images) ) {
        //loop through each gallery image
        foreach ($images as $image) {

    ?>
        
        <div class="ls-slide" data-ls="transition2d: 1, 11; slidedelay: 6000;">

            <!--Link covering whole slide-->
            <a  class="ls-l" style="width: 100%; height: 100%; top: 50%; left: 50%;" href="<?php echo get_permalink(); ?>"></a>

            <!--Main Image-->
            <div class="ls-l"
            data-ls="
            offsetxin: 500;
            offsetxout: -500;
            durationout: 2500;
            durationin: 1000;
            easingin: easeOutSine;
            easingout: easeInSine;
            "
            style="
            left: 50%;
            top: 50%;
            width: 100%;
            height: 100%;
            background-image: url('<?php echo $image; ?>');
            background-size: cover;
            background-position: center;
            ">
                
            </div>

            <!--Semi-transparent background for Featured Plan image-->
            <div class="ls-l"
            data-ls="
            duration:8000;
            durationin:0;
            durationout:0;
            fadein:false;
            fadeout:false;
            "
            style="
            width: 40%;
            height: 12%;
            /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,000000+100&0.65+0,0+100;Neutral+Density */
            background: -moz-linear-gradient(left, rgba(0,0,0,0.65) 0%, rgba(0,0,0,0) 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(left, rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to right, rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=1 ); /* IE6-9 */
            left: 0;
            top: 0;
            "
            ></div>

            <!--Featured Plan Image-->
            <div class="ls-l"
                data-ls="
                duration:8000;
                durationin:0;
                durationout:0;
                fadein:false;
                "
                style="
                width: 20%;
                left: 30px;
                top: -8px;
                color: #fff;
                font-size: 50px;
                ">
                
                <span style="font-family: RalewayLight;"> <?php echo get_the_title(); ?></span>

            </div>

            <!--View More button-->
            <div class="ls-l"

                data-ls="
                duration:8000;
                durationin:0;
                durationout:0;
                fadein:false;
                "
            
                style="
                width: 50%;
                height: 3%;
                top: 75%;
                left: 50%;
                font-size: 30px;
                text-align: center;
                "
            >
                <a href="<?php echo get_permalink(); ?>" class="featured-slideshow-link">View</a>
            </div>

            <!--Transparent black bar behind the custom fields-->
            <div class="ls-l"

                data-ls="
                duration:8000;
                durationin:0;
                durationout:0;
                fadein:false;
                "
            
                style="
                width: 100%;
                height: 15%;
                top: 100%;
                left: 50%;
                background: rgba(0,0,0,0.9);
                border-top: 2px solid white;
                "
            >
            </div>


            <!--Square Feet-->
            <div class="ls-l"
                data-ls="
                duration:8000;
                durationin:0;
                durationout:0;
                fadein:false;
                "

                style="
                left: 50%;
                width: 90%;
                top: 92%;
                color: #fff;
                height: 40px;
                font-size: 25px;
                font-family: RalewayThin;
                "
            >
                <span style="display: table; width: 100%;">
                    <span style="display:table-cell;text-align: center;"><span style="font-family: RalewayRegular;">Interior</span> - <?php echo $custom_fields["square_feet"][0]; ?> sq/ft</span>
                    <span style="display:table-cell;text-align: center;"><span style="font-family: RalewayRegular;">Garage</span> - <?php echo $custom_fields["garage"][0]; ?></span>
                    <span style="display:table-cell;text-align: center;"><span style="font-family: RalewayRegular;">Bedrooms</span> - <?php echo $custom_fields["bedrooms"][0]; ?></span>
                    <span style="display:table-cell;text-align: center;"><span style="font-family: RalewayRegular;">Bathrooms</span> - <?php echo $custom_fields["bathrooms"][0]; ?></span>
                    <span style="display:table-cell;text-align: center;"><span style="font-family: RalewayRegular;">Plan Style</span> - <?php echo $custom_fields["plan_design_style"][0]; ?></span>
                    <span style="display:table-cell;text-align: center;"><span style="font-family: RalewayRegular;">Stories</span> - <?php echo $custom_fields["stories"][0]; ?></span>
                </span>
            </div>

            <!--Thumbnail-->
            <img src="<?php echo $image; ?>" class="ls-tn" alt="Slide thumbnail">

        </div><!--end of slide-->

    <?php

        } //end of foreach loop
    } //end if

    else {
        ?>

        <div class="ls-slide" data-ls="transition2d: 1, 11; slidedelay: 6000;">

            <!--Link covering whole slide-->
            <a  class="ls-l" style="width: 100%; height: 100%; top: 50%; left: 50%;" href="<?php echo get_permalink(); ?>"></a>

            <!--Main Image-->
            <div class="ls-l"
            data-ls="
            offsetxin: 500;
            offsetxout: -500;
            durationout: 2500;
            durationin: 1000;
            easingin: easeOutSine;
            easingout: easeInSine;
            "
            style="
            left: 50%;
            top: 50%;
            width: 100%;
            height: 100%;
            background-image: url('<?php echo $images[0]; ?>');
            background-size: cover;
            background-position: center;
            ">
                
            </div>

            <!--Semi-transparent background for Featured Plan image-->
            <div class="ls-l"
            data-ls="
            duration:8000;
            durationin:0;
            durationout:0;
            fadein:false;
            fadeout:false;
            "
            style="
            width: 40%;
            height: 12%;
            /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,000000+100&0.65+0,0+100;Neutral+Density */
            background: -moz-linear-gradient(left, rgba(0,0,0,0.65) 0%, rgba(0,0,0,0) 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(left, rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to right, rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=1 ); /* IE6-9 */
            left: 0;
            top: 0;
            "
            ></div>

            <!--Featured Plan Image-->
            <div class="ls-l"
                data-ls="
                duration:8000;
                durationin:0;
                durationout:0;
                fadein:false;
                "
                style="
                width: 20%;
                left: 30px;
                top: -8px;
                color: #fff;
                font-size: 50px;
                ">
                
                <span style="font-family: RalewayLight;"> <?php echo get_the_title(); ?></span>

            </div>

            <!--View More button-->
            <div class="ls-l"

                data-ls="
                duration:8000;
                durationin:0;
                durationout:0;
                fadein:false;
                "
            
                style="
                width: 50%;
                height: 5%;
                top: 75%;
                left: 50%;
                font-size: 30px;
                text-align: center;
                "
            >
                <a href="<?php echo get_permalink(); ?>" class="featured-slideshow-link">View</a>
            </div>

            <!--Transparent black bar behind the custom fields-->
            <div class="ls-l"

                data-ls="
                duration:8000;
                durationin:0;
                durationout:0;
                fadein:false;
                "
            
                style="
                width: 100%;
                height: 15%;
                top: 100%;
                left: 50%;
                background: rgba(0,0,0,0.9);
                border-top: 2px solid white;
                "
            >
            </div>


            <!--Square Feet-->
            <div class="ls-l"
                data-ls="
                duration:8000;
                durationin:0;
                durationout:0;
                fadein:false;
                "

                style="
                left: 50%;
                width: 90%;
                top: 92%;
                color: #fff;
                height: 40px;
                font-size: 25px;
                font-family: RalewayThin;
                "
            >
                <span style="display: table; width: 100%;">
                    <span style="display:table-cell;text-align: center;"><span style="font-family: RalewayRegular;">Interior</span> - <?php echo $custom_fields["square_feet"][0]; ?> sq/ft</span>
                    <span style="display:table-cell;text-align: center;"><span style="font-family: RalewayRegular;">Garage</span> - <?php echo $custom_fields["garage"][0]; ?></span>
                    <span style="display:table-cell;text-align: center;"><span style="font-family: RalewayRegular;">Bedrooms</span> - <?php echo $custom_fields["bedrooms"][0]; ?></span>
                    <span style="display:table-cell;text-align: center;"><span style="font-family: RalewayRegular;">Bathrooms</span> - <?php echo $custom_fields["bathrooms"][0]; ?></span>
                    <span style="display:table-cell;text-align: center;"><span style="font-family: RalewayRegular;">Plan Style</span> - <?php echo $custom_fields["plan_design_style"][0]; ?></span>
                    <span style="display:table-cell;text-align: center;"><span style="font-family: RalewayRegular;">Stories</span> - <?php echo $custom_fields["stories"][0]; ?></span>
                </span>
            </div>

            <!--Thumbnail-->
            <img src="<?php echo $images[0]; ?>" class="ls-tn" alt="Slide thumbnail">

        </div><!--end of slide-->
        <?php
    }
?>
    
</div><!--end of slider-->