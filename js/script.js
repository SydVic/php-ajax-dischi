const app = new Vue({
  el: "#root",
  data: {
    discs: [],
    genres: [],
    selectedGenre: "",
  },
  methods: {
    getDiscs() {
      axios.get("http://localhost/php-ajax-dischi/server.php", {
        params: {
          genre: this.selectedGenre
        }
      })
      .then((resp) => {
        this.discs = resp.data;
      });
    }
  },
  computed: {
    getGenres() {
      this.discs.forEach(item => {
        if (!this.genres.includes(item.genre)) {
          this.genres.push(item.genre);
        }
      });
    },
  },
  created() {
    this.getDiscs();
  }
});