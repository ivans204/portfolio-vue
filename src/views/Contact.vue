<template>
  <div class="contact">
    <b-container>
      <div class="page">
        <h2 class="page-title">Contact</h2>
      </div>

      <b-row>
        <b-col offset-sm="3" offset="1" cols="10" sm="6">
          <div class="contact-form">
            <form class="contact-form" method="post" action="mail_handler.php">

              <input class="contact-input" name="contact_name" type="text" placeholder="Name" required>
              <input class="contact-input" name="contact_email" type="email" placeholder="Email" required>
              <textarea name="contact_message" rows="4" placeholder="Message" required></textarea>

              <b-row>
                <b-col class="d-flex"><p class="m-auto">{{ firstNum }} + {{ secondNum }} = </p></b-col>
                <b-col>
                  <input class="contact-input m-0" type="number" placeholder="Enter result" v-model="res" required>
                </b-col>
              </b-row>

              <button name="submit" :disabled="!isCheched" class="btn-send">Send</button>
            </form>
          </div>

        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>

export default {
  name: 'Contact',
  data: () => ({
    firstNum: Math.floor(Math.random() * 10),
    secondNum: Math.floor(Math.random() * 10),
    res: null
  }),
  methods: {

  },
  computed: {
    isCheched() {
      return this.firstNum + this.secondNum == this.res;
    }
  }
}
</script>

<style scoped lang="scss">

.page {
  margin: 100px auto;
}

.page-title {
  color: #292E34;
  text-align: center;
  letter-spacing: 3px;
  margin-top: 50px;
  font-weight: bold;
}

.contact-form {
  .contact-input, textarea, button {
    width: 100%;
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px solid #D2D2D2;
    padding: 10px 15px;
    color: #292E34;

    &:focus {
      border: 1px solid #292E34;
    }
  }

  button {
    margin-top: 20px;
    background-color: #F9CA30;
    font-weight: bold;
  }
}

</style>
