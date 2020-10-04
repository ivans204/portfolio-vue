<template>
  <div id="app">

    <Navbar></Navbar>

    <router-view/>

    <ContactQuote v-if="!isContact"></ContactQuote>
    <Footer></Footer>

  </div>
</template>

<script>
// @ is an alias to /src
import Navbar from '@/components/Navbar.vue'
import Footer from '@/components/Footer.vue'
import ContactQuote from '@/components/ContactQuote.vue'

export default {
  name: 'Home',
  components: {
    Navbar,
    Footer,
    ContactQuote
  },
  computed: {
    currentRouteName() {
      return this.$route.name;
    },
    isContact() {
      return this.currentRouteName === 'Contact' ? true : false
    }
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
</style>
