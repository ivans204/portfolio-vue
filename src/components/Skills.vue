<template>
  <b-container class="skills">
    <b-row>
      <b-col cols="12" md="2" sm="4" v-for="icon in icons" :key="icon.icon" class="skills-col">
        <img :src="[!icon.hover ? icon.icon : icon.iconHover]" alt="" @mouseover="icon.hover = true"
             @mouseleave="icon.hover = false">
      </b-col>
    </b-row>
  </b-container>
</template>

<script>
export default {
  name: 'Skills',
  data: () => ({
    icons: [
      {
        hover: false,
        icon: require('../assets/icons/html5.svg'),
        iconHover: require('../assets/icons/html5 hover.svg'
        ),
      },
      {
        hover: false,
        icon: require('../assets/icons/css.svg'),
        iconHover: require('../assets/icons/css hover.svg'),
      },

      {
        hover: false,
        icon: require('../assets/icons/js.svg'),
        iconHover: require('../assets/icons/js hover.svg'),
      },
      {
        hover: false,
        icon: require('../assets/icons/sass.svg'),
        iconHover: require('../assets/icons/sass hover.svg'),
      },
      {
        hover: false,
        icon: require('../assets/icons/vue.svg'),
        iconHover: require('../assets/icons/vue hover.svg'),
      },
      {
        hover: false,
        icon: require('../assets/icons/wordpress.svg'),
        iconHover: require('../assets/icons/wordpress hover.svg'),
      }
    ]
  }),
  methods: {}
}
</script>

<style scoped lang="scss">
.skills {
  margin: 150px auto;
}

.skills-col {
  @media screen and (max-width: 575px) {
    img {
      display: block;
      margin: 25px auto;
    }
  }
}

</style>
