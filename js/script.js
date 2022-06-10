const app = new Vue({
  el: "#root",
  data: {
    discs: [],
  },
  created() {
    axios.get("http://localhost/php-ajax-dischi/server.php")
    .then((resp) => {
      this.discs = resp.data;
    });
  }
});