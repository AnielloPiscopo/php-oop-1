const { createApp } = Vue;

createApp({
  data() {
    return {
      serverUrl: "./assets/db/movies.json",
      moviesInfo: [],
    };
  },

  methods: {
    getMoviesInfo() {
      axios.get(this.serverUrl).then((response) => {
        this.moviesInfo = response.data;
        console.log(this.moviesInfo);
      });
    },
  },

  created() {
    this.getMoviesInfo();
  },
}).mount("#app");
