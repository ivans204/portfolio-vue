<template>
  <b-container class="footer">
    <b-row>
      <b-col cols="12" class="social">

        <div class="social-icons-wrap">
          <img class="social-icons" :src="require('../assets/icons/github.svg')" alt="github">
        </div>

        <div class="social-icons-wrap">
          <img class="social-icons" :src="require('../assets/icons/linkedin.svg')" alt="linkedin">
        </div>

      </b-col>
    </b-row>
    <p class="text-center footer-copyright">© copyright {{ new Date().getFullYear() }}. Ivan Švrga</p>
  </b-container>
</template>

<script>
export default {
  name: 'Footer',
}
</script>

<style scoped lang="scss">

.footer {
  margin: 100px auto;
}

.social {
  display: flex;
  justify-content: center;
}

.social-icons-wrap {
  padding: 15px;
  background-color: #f5f5f5;
  margin: 0 50px;
}

.social-icons {
  width: 50px;
}

.footer-copyright {
  margin-top: 100px;
  font-size: 1.3rem;
  color: #D2D2D2;
  font-family: 'Nunito', sans-serif;
  letter-spacing: 3px;
}
</style>
