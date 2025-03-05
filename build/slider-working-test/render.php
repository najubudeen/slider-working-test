<?php
$imageOne = $attributes['imageOne'];
$imageTwo = $attributes['imageTwo'];
?>
<div <?php echo get_block_wrapper_attributes(); ?>>
    <div class="slider">
        <div class="slides">
            <div class="slide">
                <img src="<?php echo $imageOne; ?>" alt="Image 1">
                <div class="caption">
                    <div class="title">
                        First Image My titleeeee
                    </div>
                    <div class="line">
                        <h5>First Image My Line</h5>
                    </div>
                    <div class="line">
                    First Image My Line Three
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="<?php echo $imageTwo; ?>" alt="Image 2">
                <div class="caption">
                    <div class="title">
                        Second Image My title
                    </div>
                    <div class="line">
                        <h5>Second Image My Line Two</h5>
                    </div>
                    <div class="line">
                        Second Image My Line Three
                    </div>
                </div>
            </div>
        </div>
        <div class="navigation">
            <button class="prev">&#10094;</button>
            <button class="next">&#10095;</button>
        </div>
    </div>
</div>
