<template>
  <section class="black">

    <b-container>
      <b-row>
        <b-col cols="12" sm="5" class="education">
          <h3><span>// </span>Education</h3>

          <div class="school">
            <p class="education-year">2015-2020</p>
            <p class="education-school">Faculty of transport and traffic science Zagreb</p>
            <p class="education-major">Information and communications transport</p>
          </div>

          <div class="school">
            <p class="education-year">2011-2015</p>
            <p class="education-school">Technical school Zagreb</p>
            <p class="education-major">Computer Technician</p>
          </div>

        </b-col>
        <b-col cols="12" sm="7" class="about">
          <h3><span>// </span>About Me</h3>
          <p class="about-text">My name is Ivan Švrga and I'm from Velika Gorica (town near Zagreb).</p>
          <p class="about-text">My passion is front-end development and I like to be surrounded with countless lines of
            code, because it makes me feel good doing something like this.</p>
          <p class="about-text">For anything else about me feel free to contact me. :)</p>
        </b-col>

      </b-row>
    </b-container>

  </section>
</template>

<script>
export default {
  name: 'About',
}
</script>

<style scoped lang="scss">

.black {
  background: linear-gradient(to right, #000000 0%, #000000 50%, #111111 50%, #111111 100%);

  h3 {
    color: #AFAFAF;
    margin: 100px 0;
    letter-spacing: 5px;
    font-size: 1.3rem;
    font-family: 'Ubuntu', sans-serif;

    span {
      color: #F9CA30;
    }
  }
}

.education {
  padding-right: 60px;
  background-color: black;

  @media screen and (max-width: 768px) and (min-width: 575px) {
    padding-right: 15px;
  }

  @media screen and (width: 576px)  {
    padding: 0 20px;
  }

  @media screen and (max-width: 575px) {
    padding: 0 30px;
  }
}

.about {
  background-color: #111111;
  padding-left: 50px;

  @media screen and (width: 576px)  {
    padding: 0 20px;
  }

  @media screen and (max-width: 575px) {
    padding: 0 30px;
  }
}

.school {
  margin: 100px 0;
}

p {
  margin: 5px 0;
}

.education-year {
  color: #AFAFAF;
  font-size: 1.2rem;
}

.education-school {
  color: white;
  font-size: 1.4rem;
  font-weight: bold;
  letter-spacing: 2px;
}

.education-major {
  color: white;
  font-style: italic;
  font-size: 1.2rem;
}

.about-text {
  color: white;
  margin-bottom: 20px;
  font-size: 1.4rem;
  letter-spacing: 2px;

  &:last-child {
    margin-bottom: 100px;
  }
}
</style>
