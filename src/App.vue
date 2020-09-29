<template>
  <div id="app">

    <Navbar></Navbar>

    <section id="intro">
      <b-container>
        <h1 class="intro-text">Hi! <span class="font-weight-bold">I'm Ivan,</span> web developer <br> based in Croatia<span class="yellow font-weight-bold">.</span></h1>
      </b-container>
    </section>
    <About></About>
    <section id="myprojects" class="section-name">
      <b-container>
        <h3>
          >> cd myprojects
        </h3>
      </b-container>
    </section>
    <Projects></Projects>

<!--    <div id="nav">-->
<!--      <router-link to="/">Home</router-link>-->
<!--      |-->
<!--      <router-link to="/about">About</router-link>-->
<!--    </div>-->
<!--    <router-view/>-->
  </div>
</template>

<script>
// @ is an alias to /src
import Navbar from '@/components/Navbar.vue'
import About from '@/components/About.vue'
import Projects from '@/components/Projects.vue'

export default {
  name: 'Home',
  components: {
    Navbar,
    About,
    Projects,
  }
}
</script>

<style lang="scss">
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
</style>
