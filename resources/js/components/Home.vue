<template>
    dit werktasdfasdfsssrrrrrfffffrrrrasdfad
    <p>{{books}}</p>
</template>

<script>

export default {

  data() {
    return {
      books: null,
      loading: false,
      columns: 3
    };
  },

  created() {
    this.loading = true;

    const request = axios.get("/api/test").then(response => {
        console.log(response.data)
      this.books = response.data;
    });
  }
};
</script>