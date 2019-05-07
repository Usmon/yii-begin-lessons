<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="slider">
    <div class="img-responsive">
        <ul class="bxslider">
            <li><?php echo Html::img('/site/img/slider/1.jpg')?></li>
            <li><?php echo Html::img('/site/img/slider/2.jpg')?></li>
            <li><?php echo Html::img('/site/img/slider/3.jpg')?></li>
        </ul>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
                <div class="align-center">
                    <h4>Quick Support</h4>
                    <div class="icon">
                        <i class="fa fa-heart-o fa-3x"></i>
                    </div>
                    <p>
                        Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
                    </p>
                    <div class="ficon">
                        <a href="#" class="btn btn-default" role="button">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
                <div class="align-center">
                    <h4>Web Design</h4>
                    <div class="icon">
                        <i class="fa fa-desktop fa-3x"></i>
                    </div>
                    <p>
                        Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
                    </p>
                    <div class="ficon">
                        <a href="#" class="btn btn-default" role="button">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
                <div class="align-center">
                    <h4>Easy Customize</h4>
                    <div class="icon">
                        <i class="fa fa-location-arrow fa-3x"></i>
                    </div>
                    <p>
                        Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
                    </p>
                    <div class="ficon">
                        <a href="#" class="btn btn-default" role="button">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="box">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <div class="img-thumbnail">
                        <?php echo Html::img('/site/img/team/1.jpg'); ?>
                        <div class="caption">
                            <h3>John Doe</h3>
                            <p>Voluptatem accusantium doloremque laudantium sprea totam rem aperiam. </p>
                            <a href="#" class="btn btn-default" role="button">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <div class="img-thumbnail">
                        <?php echo Html::img('/site/img/team/2.jpg'); ?>
                        <div class="caption">
                            <h3>Hidayah</h3>
                            <p>Voluptatem accusantium doloremque laudantium sprea totam rem aperiam. </p>
                            <a href="#" class="btn btn-default" role="button">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <div class="img-thumbnail">
                        <?php echo Html::img('/site/img/team/4.jpg'); ?>
                        <div class="caption">
                            <h3>John Doe</h3>
                            <p>Voluptatem accusantium doloremque laudantium sprea totam rem aperiam. </p>
                            <a href="#" class="btn btn-default" role="button">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
