<template>
  <nav class="mt-5">
    <b-container>
      <b-row class="nav-height">
        <b-col cols="3" class="nav-menu" @click="show = true">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
               class="feather feather-menu">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
        </b-col>

        <b-col cols="6" class="text-center">
          <a href="/home" class="logo">ivan<span>svrga</span></a>
        </b-col>

        <b-col cols="3" class="contact">
          <router-link to="/contact">
            <button class="btn-contact ml-auto d-block">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                   class="feather feather-mail">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                <polyline points="22,6 12,13 2,6"></polyline>
              </svg>
            </button>
          </router-link>
        </b-col>
      </b-row>
    </b-container>

    <div class="nav-mobile" v-if="show">

      <div class="nav-mobile_x" @click="show = false">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
             stroke="currentColor"
             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </div>

      <div class="nav-mobile_links">
        <router-link @click.native="show = false" to="/">home</router-link>
        <router-link @click.native="show = false" to="/projects">projects</router-link>
        <router-link @click.native="show = false" to="/contact">contact</router-link>
      </div>

    </div>
  </nav>
</template>

<script>
export default {
  name: 'navbarMobile',
  data: () => ({
    show: null,
  }),
}
</script>

<style scoped lang="scss">

.nav-menu {
  color: #D2D2D2;
  cursor: pointer;

  svg {
    width: 40px;
    height: 40px;
    color: #AFAFAF;
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

.nav-height {
  height: 50px;
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

.nav-mobile {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.97);
  height: 100%;
  width: 100%;
  z-index: 10;
  text-align: center;
}

.nav-mobile_x {
  position: absolute;
  left: 90px;
  top: 35px;
  cursor: pointer;

  @media screen and (max-width: 800px) {
    left: 10px;
  }

  svg {
    width: 40px;
    height: 40px;
    color: #D2D2D2;
  }
}

.nav-mobile_links {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  font-family: 'Nunito', sans-serif;
  letter-spacing: 2.4px;
  font-size: 2rem;

  a {
    display: block;
    color: #D2D2D2;
    font-weight: bold;

    &:hover {
      text-decoration: underline #F9CA30;
    }
  }
}

.nav-links {

  text-align: center;

  a {
    color: #AFAFAF;

    &:hover {
      text-decoration: underline #F9CA30;
    }
  }
}
</style>
