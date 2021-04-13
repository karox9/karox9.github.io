var app = new Vue({
    el: '#app',
    data: {
       googleSearch: "",
       cities: window.cities,
    },

    computed: {
       filteredCities() {
          return this.cities
          
          .filter((city) => {
             return city.name.toLowerCase().includes(this.googleSearch);
          })

          .slice(0,10);
       }
    }

  });