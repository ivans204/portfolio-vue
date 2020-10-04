<template>
  <div class="">

    <b-container fluid="sm" class="d-none d-md-block">
      <b-row class="nav-height">

        <b-col cols="3" class="text-left">
          <a href="/home" class="logo">ivan<span>svrga</span></a>
        </b-col>

        <b-col cols="6" class="nav-links">
          <router-link to="/">home</router-link>
          <span>/</span>
          <router-link to="/projects">projects</router-link>
          <span>/</span>
          <router-link to="/contact">contact</router-link>
        </b-col>

        <b-col cols="3" class="contact">
          <router-link to="/contact"> <button class="btn-contact ml-auto d-block">contact me</button></router-link>
        </b-col>

      </b-row>
    </b-container>

    <navbar-mobile class="d-md-none"></navbar-mobile>

  </div>

</template>

<script>
import navbarMobile from '@/components/NavbarMobile.vue'

export default {
  name: 'Navbar',
  components: {
    navbarMobile
  }
}
</script>

<style scoped lang="scss">

.nav-height {
  height: 150px;
  align-items: center;
  font-size: 1.3rem;
}

.logo {
  font-family: 'Ubuntu', sans-serif;
  color: #292E34;
  text-decoration: none;
  font-size: 1.5rem;

  span {
    font-weight: bold;
  }
}

.nav-links {
  font-family: 'Nunito', sans-serif;
  letter-spacing: 2.4px;
  text-align: center;

  a {
    color: #D2D2D2;

    &:hover {
      text-decoration: underline #F9CA30;
    }
  }

  span {
    margin: 0 16px;
    color: #F9CA30;
  }
}

.contact {
  height: 100%;
}

.btn-contact {
  font-family: 'Nunito', sans-serif;
  letter-spacing: 2.4px;
  background-color: #F9CA30;
  border: none;
  height: 100%;
  text-decoration: underline;
  padding: 0 10px;

  &:focus {
    outline: none;
  }
}

</style>
