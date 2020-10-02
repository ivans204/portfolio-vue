<template>
  <b-container class="projects">
    <div class="project">

      <b-row v-for="(project, i) in projects" :key="project[i]" class="project-bg" :class="{ 'rev': project.reverse}">

        <b-col cols="12" sm="6" class="center-item">
          <div class="project-wrapper">
            <h2 class="project-title" :style="{color: project.style}">{{ project.title }}</h2>
            <p class="project-detail">{{ project.detail }}</p>
            <a class="project-more" :href="project.route">show more ></a>
          </div>
        </b-col>
        <b-col cols="12" sm="6">
          <img class="project-img" :src="project.img" :alt="project.detail">
        </b-col>
      </b-row>

    </div>
  </b-container>
</template>

<script>
export default {
  name: 'Projects',
  data: () => ({
    projects: [
      // {
      //   title: 'Barabe',
      //   detail: 'Band portfolio / 2019.',
      //   img: require('../assets/img/barabe.png'),
      //   style: 'white'
      // },
      {
        title: 'PU Turopolje',
        detail: 'Beekeeping association blog / 2020.',
        img: require('../assets/img/put.png'),
        style: 'black',
        reverse: true,
        route: '/puturopolje'
      },
    ]
  }),
}
</script>

<style scoped lang="scss">

.center-item {
  display: flex;
  justify-content: center;
}

.projects {
  margin-top: 100px;
  margin-bottom: 100px;
}

.project-bg {
  background-color: black;
  margin-bottom: 100px;
  box-shadow: 0px 0px 20px 0px #D2D2D2;
  align-items: center;

  &:nth-child(odd) {
    background-color: white;
  }

  @media screen and (max-width: 768px) {
    padding: 50px 15px;
  }
}

.rev {
  flex-direction: row-reverse;
}

.project-title {
  font-weight: bold;
  letter-spacing: 2px;
}

.project-detail {
  color: #AFAFAF;
  font-size: 1.125rem;
  margin-bottom: 30px;
}

.project-more {
  color: #f9ca30;
  font-family: 'Ubuntu', sans-serif;
  letter-spacing: 3px;
  font-size: 1.3rem;
}

.project-img {
  width: 100%;
  height: auto;
}

</style>
