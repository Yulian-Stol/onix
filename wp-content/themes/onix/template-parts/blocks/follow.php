<div class="follow">
    <div class="container">

        <?php
        $btn_text = get_field('button_text');
        $btn_link = get_field('hero_link');
        ?>

        <div class="row">
            <div class="col">
                <div class="follow__bg">
                    <?php if (have_rows('background')) : ?>
                        <?php while (have_rows('background')) : the_row();
                            $img = get_sub_field('image');
                        ?>
                            <img src="<?= $img; ?>" alt="">
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <a href="<?= $btn_link ?>"><?= $btn_text ?></a>
            </div>
        </div>
    </div>
</div>