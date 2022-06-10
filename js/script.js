const app = new Vue({
  el: "#root",
  data: {
    discs: [],
    genres: [],
    selectedGenre: "",
  },
  methods: {
    filterDiscs(selectedGenre) {
      this.selectedGenre = selectedGenre;
    }
  },
  computed: {
    getGenres() {
      this.discs.forEach(item => {
        if (!this.genres.includes(item.genre)) {
          this.genres.push(item.genre);
        }
      });
    }
  },
  created() {
    axios.get("http://localhost/php-ajax-dischi/server.php")
    .then((resp) => {
      this.discs = resp.data;
    });
  }
});