<template>
  <div class="thanks">
    <b-container>
      <h2 class="title">Thank You for contacting!</h2>
      <p class="subtitle">I'll get in touch with you as soon as possible.</p>
    </b-container>
  </div>
</template>

<script>

export default {
  name: 'Thank',
}
</script>

<style scoped lang="scss">

.thanks {
  margin: 100px auto;
}

h2.title {
  color: #292E34;
  text-align: center;
  letter-spacing: 3px;
  font-weight: bold;
}

.subtitle {
  text-align: center;
  font-size: 1.5rem;
  color: #AFAFAF;
  margin-top: 30px;
}

</style>
