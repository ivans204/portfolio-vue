<template>
  <section id="contact">
    <b-container>
      <h2 class="contact-title">For any questions, feel free to contact me.</h2>
    <router-link class="contact-btn" to="/contact">contact ></router-link>
    </b-container>
  </section>
</template>

<script>
export default {
  name: 'ContactQuote',
}
</script>

<style scoped lang="scss">
#contact {
  background-color: black;
  padding: 100px 0;
}

.contact-title {
  color: white;
  font-weight: bold;
  text-align: center;
  margin-bottom: 50px;
}

.contact-btn {
  background-color: transparent;
  color: #F9CA30;
  border: none;
  font-size: 1.5rem;
  letter-spacing: 3px;
  text-align: center;
  display: block;
}
</style>
