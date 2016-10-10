<?php snippet('header') ?>

    <main role="main" class="o-main  js--pjax__target">
        <div class="o-main__content  js--pjax__content">

            <section class="c-masthead  t-zebra  js--vh-trick">
                <div class="c-masthead__content">
                    <div class="c-masthead__content__inner">
                        <div class="o-retain  o-retain--readable  module">
                            <h1><span class="u-h4  u-hN  u-color--gray-a  u-family-body">Bram Smulders</span><span class="u-visuallyhidden">, </span>UX and Front-End architecture enthousiast</h1>

                            <p><?php echo $site->email()->html() ?><br><a href="<?php echo $site->twitterlink()->html() ?>"><?php echo $site->twitter()->html() ?></a></p>
                        </div>
                    </div>
                </div>
                <div class="c-masthead__visual">
                    <picture>
                        <source srcset="<?php echo url('assets/images/bakkes.jpg'); ?>" media="(min-width: 768px)">
                        <img class="c-masthead__visual__object" src="<?php echo url('assets/images/bakkes-small.jpg'); ?>" alt="Bram’s Bakkes">
                    </picture>
                </div>
            </section>

            <section class="o-layer  t-zebra">

                <div class="o-retain  o-retain--readable  module">
                    <?php echo $page->text()->kirbytext() ?>
                </div>

            </section>

            <?php snippet('blog') ?>

            <?php // snippet('clients') ?>

            <?php snippet('contentinfo') ?>

        </div>


    </main>

<?php snippet('footer') ?>