const app = new Vue(
    {
      el: '#app',
      data: {
        cards: [],
      },
      created() {
        axios.get('http://localhost/php-snacks-b1/server/controller-api.php')
          .then((result) => {
            this.cards = result.data.results;
            console.log(result.data.results)
        })
          .catch((error) => {
          console.log(error);
        })
      },
      
    }
  );