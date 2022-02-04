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
                    } elseif ($key == 'price') {
                        echo '<h4><span class="key-title">' . ucfirst($key) . '</span>: ' . $value . ' &euro;</h4>';
                    } else {
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

<!-- Print with Vue -->
<!-- <main>
      <div>
        <div v-for="car in usedCars">
          <img :src="car.photo" />
          <div style="color: white">
            <h3>{{car.brand}}</h3>
            <small>{{car.model}}</small>
            <small>{{car.fuel}}</small>
            <small>{{car.year}}</small>
            <small>{{car.displacement}}</small>
            <small>{{car.horse_power}}</small>
            <small>{{car.kilometers}}</small>
            <small>{{car.color}}</small>
            <small>{{car.trasmission}}</small>
            <small>{{car.car_body}}</small>
            <small>{{car.locality}}</small>
            <small>{{car.accessories}}</small>
            <small>{{car.car_porters}}</small>
            <small>{{car.traction}}</small>
            <small>{{car.price}}</small>
          </div>
        </div>
      </div>
    </main>  -->


<!-- Print with nested v-for -->
<!-- <main>
      <div>
        <div v-for="car in usedCars">
          <img :src="car.photo" />
          <div style="color: white" v-for="key in car">
            <h3>{{key}}</h3>
          </div>
        </div>
      </div>
    </main> -->