<template>
  <div class="projects">
    <b-container>

      <div class="project-titles">
        <h2 class="project-title">PU Turopolje</h2>
        <p class="project-subtitle">web blog <span class="delimiter">/</span> 2020.</p>
      </div>

      <div class="project-image">
        <a class="project-link" href="https://www.puturopolje.hr/" target="_blank">
          <img :src="src" alt="">
          <span class="live-mark">live website ></span>
        </a>

      </div>

      <p class="project-desc">
        PU Turopolje is a blog website for an active group of beekeepers. My task was to bring old blog from Joomla2 to Wordpress. I was transferring old data like images, posts, post categories, pages, users to a new database and then importing transferred data to Wordpress though a custom importer. Also added custom registration fields in user profile, created custom widget menus and categories for users only.
      </p>

      <p class="project-tech">
        <span class="font-weight-bold">Technologies used: <br></span>
        HTML, CSS, JavaScript, Wordpress, PHP
      </p>
    </b-container>
  </div>
</template>

<script>

export default {
  name: 'Home',
  components: {},
  data: () => ({
    src: require('@/assets/img/put-web.png')
  })
}
</script>

<style scoped lang="scss">

.project-titles {
  margin: 100px auto;
}

.project-title {
  color: #292E34;
  text-align: center;
  letter-spacing: 3px;
  margin-top: 50px;
  font-weight: bold;
}

.project-subtitle {
  text-align: center;
  font-size: 1.5rem;
  color: #AFAFAF;
}

.delimiter {
  color: #F9CA30;
}

.project-image {
  box-shadow: 0px 0px 20px 0px #D2D2D2;
  margin-bottom: 50px;
  position: relative;

  img {
    width: 100%;
  }

  .live-mark {
    position: absolute;
    bottom: 10px;
    right: 10px;
    padding: 10px 15px;
    background-color: #F9CA30;
    font-family: 'Ubuntu', sans-serif;
    letter-spacing: 2px;
    color: #292E34;
  }
}

.project-desc {
  text-align: center;
  font-size: 1.2rem;
  line-height: 35px;
  margin-bottom: 50px;
}

.project-tech {
  text-align: center;
  font-size: 1.2rem;
  line-height: 35px;
  margin-bottom: 100px;
}

</style>
