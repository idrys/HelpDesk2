<template>

  <div class="container">
    <div class="row">
      <v-card >
        <v-card-text>
          <v-container fluid>
            <v-layout row>
              <v-flex xs4>
                <v-subheader>Focus</v-subheader>
              </v-flex>
              <v-flex xs8>
                <v-text-field
                  v-model="desktopNr"

                  name="input-2"
                  label="Label Text"
                  value="desktopNr"

                  class="input-group--focused"
                ></v-text-field>
              </v-flex>
            </v-layout>
          </v-container>
        </v-card-text>
      </v-card>
    </div>
    <div class="row">
      <v-row class="text-xs-center">
        <v-col xs12 class="text-xs-center">
          <div>
            <v-btn light default v-on:click.native="savePost">Wyślij nr 2</v-btn>
          </div>
        </v-col>
      </v-row>
      <br />
    </div>
    <div class="row">
      <div class="col-lg-4">.col-lg-4</div>
      <div class="col-lg-4">.col-lg-4</div>
      <div class="col-lg-4">.col-lg-4</div>
    </div>
    <div class="row">
      <div class="col-lg-6">.col-lg-6</div>
      <div class="col-lg-6">.col-lg-6</div>
    </div>
  </div>




</template>

<script>

    export default {
      data(){
        return{
          message: "Nie działa drukarka",
          desktopNr: "322",
          value: ''

        }
      },
      /*
      created: function(){
          Vue.http.get("/test")
          .then(function(resp){
              if(typeof resp.data == 'string') {
                 resp.data = JSON.parse(resp.data);
              }
              this.posts=resp.data.data.children;
              console.log(this.posts);
          });
      },
*/
      methods: {
        updateValue: function (t) {
          console.log(t)
/*
          var formattedValue = value
            // Remove whitespace on either side
            .trim()
            // Shorten to 2 decimal places
            .slice(0, value.indexOf('.') + 3)
          // If the value was not already normalized,
          // manually override it to conform
          if (formattedValue !== value) {
            this.$refs.input.value = formattedValue
          }
          // Emit the number value through the input event
          this.$emit('input', Number(formattedValue))
          */
        }
      },
      mounted() {
        Vue.http.get()
        console.log('Component mounted.')
      }
    }
</script>

//https://youtu.be/pTVCW5k4piU
