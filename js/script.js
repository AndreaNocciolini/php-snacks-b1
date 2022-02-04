const app = new Vue(
    {
      el: '#app',
      data: {
        usedCars: [],
      },
      created() {
        axios.get('http://localhost/php-snacks-b1/server/controller-api.php')
          .then((result) => {
            this.usedCars = result.data.results;
            console.log(result.data.results)
        })
          .catch((error) => {
          console.log(error);
        })
      },
      
    }
  );