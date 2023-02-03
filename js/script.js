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
