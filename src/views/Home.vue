<template>
  <div class="home">
    <section id="intro">
      <b-container>
        <h1 class="intro-text">Hi! <span class="font-weight-bold">I'm Ivan,</span> web developer
          <br> from Croatia<span class="yellow font-weight-bold">.</span></h1>
      </b-container>
    </section>
    <About></About>

    <section id="myProjects" class="section-name">
      <b-container>
        <h3>
          >> cd myprojects
        </h3>
      </b-container>
    </section>
    <Projects></Projects>

    <section id="mySkills" class="section-name">
      <b-container>
        <h3>
          >> cd myskills
        </h3>
      </b-container>
    </section>
    <Skills></Skills>

  </div>
</template>

<script>
  // @ is an alias to /src
  import About from '@/components/About.vue'
  import Projects from '@/components/Projects.vue'
  import Skills from '@/components/Skills.vue'

  export default {
    name: 'Home',
    components: {
      About,
      Projects,
      Skills,
    }
  }
</script>

<style scoped lang="scss">
  #app {
    font-family: 'Nunito', sans-serif;
    color: #292E34;
  }

  #intro {
    margin: 150px 0;
    padding: 0 15px;
  }

  .intro-text {
    letter-spacing: 2.4px;
    font-size: 3.5rem;
  }

  .yellow {
    color: #F9CA30;
  }

  .section-name {
    background-color: #F9CA30;
    color: black;
    font-family: 'Ubuntu', sans-serif;
    letter-spacing: 3px;

    h3 {
      padding: 15px 0;
      font-size: 1.4rem;
    }
  }

  #nav {
    padding: 30px;

    a {
      font-weight: bold;
      color: #2c3e50;

      &.router-link-exact-active {
        color: #42b983;
      }
    }
  }

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
    margin: 0 auto;
    display: block;
  }
</style>
