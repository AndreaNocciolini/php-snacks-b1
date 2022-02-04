<main class="main-container">
    <?php
    foreach ($usedCars as $car) { ?>
        <div class="car-container">
            <div class="car-inner-container" style="max-height: 45em;overflow: auto;">
                <?php foreach ($car as $key => $value) {
                    if ($key == 'photo') {
                        if ($value == '') {
                            echo '<img class="car-photo" src="https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-1-scaled.png" />';
                        } else {
                            echo '<img class="car-photo" src="' . $value . '" />';
                        }
                    } elseif ($key== 'price') {
                        echo '<h4><span class="key-title">' . ucfirst($key) . '</span>: ' . $value . ' &euro;</h4>';
                    }
                     else {
                        echo '<h4><span class="key-title">' . ucfirst($key) . '</span>: ' . $value . '</h4>';
                    }
                }
                ?>
            </div>
        </div>
    <?php
    }
    ?>
</main>