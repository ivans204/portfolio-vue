<template>
  <div class="projects">
    <section id="myProjects" class="section-name">
      <b-container>
        <h2>
          My Projects
        </h2>
      </b-container>
    </section>
    <Projects></Projects>
  </div>
</template>

<script>
// @ is an alias to /src
import Projects from '@/components/Projects.vue'

export default {
  name: 'Home',
  components: {
    Projects,
  }
}
</script>

<style scoped lang="scss">

.section-name {

  h2 {
    color: #292E34;
    text-align: center;
    letter-spacing: 3px;
    margin-top: 50px;
    font-weight: bold;
  }
}

</style>
