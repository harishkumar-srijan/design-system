<?php use helpers\View; ?>

<!-- Page Headers -->
<?php View::render('layout/header', ['pageTitle' => 'Components - Stats']) ?>

<body>
<!-- Navigation -->
<?php View::render('layout/navigation/nav') ?>

<main class="components-index">

    <section class="other-inputs grid-container">
        <div class="grid-x grid-margin-x">

            <div class="cell medium-10 medium-offset-1 large-8 large-offset-2 component-categories">
                <h5 class="heading h5">CTA</h5>

                <?php
                    View::render('molecules/buttons/cta', [
                        'text' => 'View More',
                        'url' => '/components'
                    ])
                ?>
                <?php
                    View::render('molecules/buttons/cta', [
                        'text' => 'View More',
                        'url' => '/components',
                        'classes' => 'disabled'
                    ])
                ?>
            </div>

            <div class="cell medium-10 medium-offset-1 large-8 large-offset-2 component-categories">
                <h5 class="heading h5">CTA - No Arrow</h5>

                <?php
                    View::render('molecules/buttons/cta-no-arrow', [
                        'text' => 'View More',
                        'url' => '/components'
                    ])
                ?>
                <?php
                    View::render('molecules/buttons/cta-no-arrow', [
                        'classes' => 'blue',
                        'text' => 'Submit',
                        'url' => '/components'
                    ])
                ?>
                <?php
                View::render('molecules/buttons/cta-no-arrow', [
                    'text' => 'Submit',
                    'url' => '/components',
                    'classes' => 'disabled'
                ])
                ?>
            </div>

            <div class="cell medium-10 medium-offset-1 large-8 large-offset-2 component-categories">
                <h5 class="heading h5">4-5th Level Menu</h5>

                <?php
                    View::render('partials/standard-page/side-navigation', [
                        'menuItems' => [
                            [
                                'name' => 'Overview',
                                'link' => '#'
                            ],
                            [
                                'name' => 'Overview',
                                'link' => '#'
                            ],
                        ],
                        'classes' => 'cell small-12 medium-4 large-3'
                    ]);
                ?>
            </div>

            <div class="cell medium-10 medium-offset-1 large-8 large-offset-2 component-categories">
                <h5 class="heading h5">Breaks And Lines</h5>

                <hr class="separator-line gray"><br>
                <hr class="separator-line"><br>
                <hr class="separator-line medium"><br>
                <hr class="separator-line large"><br>
                <hr class="separator-line medium red"><br>
            </div>

            <div class="cell medium-4 medium-offset-1 large-3 large-offset-2 component-categories">
                <h5 class="heading h5">Language Select</h5>

                <?php View::render('molecules/buttons/language-dropdown'); ?>
            </div>

            <div class="cell medium-4 large-3 component-categories">
                <h5 class="heading h5">Hamburger Menu</h5>

                <?php View::render('molecules/buttons/hamburger-menu'); ?>
            </div>

            <div class="cell medium-4 large-3 component-categories">
                <h5 class="heading h5">Close Out</h5>

                <?php View::render('molecules/buttons/close-out'); ?>
            </div>

            <div class="cell medium-4 medium-offset-1 large-3 large-offset-2 component-categories">
                <h5 class="heading h5">Check Boxes</h5>

                <?php
                    View::render('molecules/buttons/checkbox-item', [
                        'value' => 'example-checkbox'
                    ]);
                ?>
            </div>

            <div class="cell medium-4 large-3 component-categories">
                <h5 class="heading h5">Radio Buttons</h5>

                <?php
                    View::render('molecules/buttons/radio-button', [
                        'value' => 'example-checkbox'
                    ]);
                ?>
            </div>

            <div class="cell medium-4 large-3 component-categories">
                <h5 class="heading h5">Download Button</h5>


            </div>
        </div>
    </section>

</main>

<!-- Footer -->
<?php View::render('layout/footer'); ?>
<script type="text/javascript" src="/dist/app.js"></script>
</body>
</html>
