<?php get_header(); ?>

<?php 
    $carousel = get_field('karuselli');
?>
<div id="frontPageCarousel" class="carousel slide front--page--carousel" data-ride="carousel">
    <div class="carousel-inner">


        <div class="carousel-item active">
            <img src="<?php echo esc_url($carousel['karuselli_kuva_1']['url'])?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <?php if($carousel['karuselli_kuva_2']): ?>
        <div class="carousel-item">
            <img src="<?php echo esc_url($carousel['karuselli_kuva_2']['url'])?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <?php endif; ?>
        <?php if($carousel['karuselli_kuva_3']): ?>
        <div class="carousel-item">
            <img src="<?php echo esc_url($carousel['karuselli_kuva_2']['url'])?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="content">
    <div class="container">
        <!-- <div class="card-group"> -->
        <div class="row row-cols-1 row-cols-lg-3">
            <?php 
                $card1 = get_field('kortti_1');
                $card2 = get_field('kortti_2');
                $card3 = get_field('kortti_3');
                if ($card1):
            ?>

            <div class="col mb-4">

                <div class="card">

                    <img src="<?php echo esc_url($card1['kortti_kuva']['url']);?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $card1['kortti_otsikko'];?></h3>
                        <p class="card-text"><?php echo $card1['kortti_teksti'];?></p>
                        <?php if($card1['kortti_nappi_linkki']): ;?>
                        <div class="button-container">
                            <a href="<?php echo $card1['kortti_nappi_linkki'] ;?>"
                                class="btn btn-primary"><?php echo $card1['kortti_nappi_teksti'];?></a>
                        </div>
                        <?php endif;?>
                    </div>

                </div>
            </div>
            <?php 
                endif; 
                if ($card2):
            ?>

            <div class="col mb-4">

                <div class="card">

                    <img src="<?php echo esc_url($card2['kortti_kuva']['url']);?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $card2['kortti_otsikko'];?></h3>
                        <p class="card-text"><?php echo $card2['kortti_teksti'];?></p>
                        <?php if($card2['kortti_nappi_linkki']): ;?>
                        <div class="button-container">
                            <a href="<?php echo $card2['kortti_nappi_linkki'] ;?>"
                                class="btn btn-primary"><?php echo $card2['kortti_nappi_teksti'];?></a>
                        </div>
                        <?php endif;?>
                    </div>

                </div>
            </div>
            <?php 
                endif; 
                if ($card3):
            ?>
            <div class="col mb-4">

                <div class="card">

                    <img src="<?php echo esc_url($card3['kortti_kuva']['url']);?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $card3['kortti_otsikko'];?></h3>
                        <p class="card-text"><?php echo $card3['kortti_teksti'];?></p>
                        <?php if($card3['kortti_nappi_linkki']): ;?>
                        <div class="button-container">
                            <a href="<?php echo $card3['kortti_nappi_linkki'] ;?>"
                                class="btn btn-primary"><?php echo $card3['kortti_nappi_teksti'];?></a>
                        </div>
                        <?php endif;?>
                    </div>

                </div>
            </div>
            <?php 
                endif; 
            ?>
            
        </div>
    </div>
</div>

<?php get_footer(); ?>