<template>
  <div class="contact">
    <b-container>
      <div class="page">
        <h2 class="page-title">Contact</h2>
      </div>

      <b-row>
        <b-col offset-sm="3" offset="1" cols="10" sm="6">
          <div class="contact-form">
            <form method="post" action="mail_handler.php">

              <input name="contact_name" type="text" placeholder="Name" v-model="contact.name">
              <input name="contact_email" type="text" placeholder="email" v-model="contact.email">
              <textarea name="contact_message" rows="4" placeholder="Message" v-model="contact.msg"></textarea>
              <button name="submit" class="btn-send">Send</button>

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
  methods: {},
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

#frmContact {
  width: 100%;
  margin-bottom: 100px;

  input, textarea {
    width: 100%;
  }
}

</style>
