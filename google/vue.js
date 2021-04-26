var app = new Vue({
    el: '#app',
    data: {
       googleSearch: "",
       cities: window.cities,
       text: "",
       value: 0,
    },

    computed: {
       filteredCities() {
          return this.cities
          
          .filter((city) => {
             return city.name.toLowerCase().includes(this.googleSearch);
          })

          .slice(0, 10);
       }
    },

    methods: {
      enter() {
          this.value = 0;
          this.text = this.googleSearch;
      },

      fill(city) {
          this.googleSearch = city.name;
          this.text = this.googleSearch;
          this.value = 0;
      },

      list() {
         this.value = 1;
     }
  }
  });

