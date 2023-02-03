const { createApp } = Vue;

createApp({
  data() {
    return {
      serverUrl: "./php/server.php",
      moviesInfo: [],
    };
  },

  methods: {
    getMoviesInfo() {
      axios
        .get(this.serverUrl)
        .then((response) => {
          this.moviesInfo = response.data;
          console.log(this.moviesInfo);
        })
        .catch((err) => {
          console.warn(err);
        });
    },
  },

  created() {
    this.getMoviesInfo();
  },
}).mount("#app");
