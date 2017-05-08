<template>
  <v-row>
    <v-col xs4 offset-xs1>
      <v-subheader>Numer komputera DESKTOP000</v-subheader>
    </v-col>
    <v-col xs6>
      <v-text-field
              single-line
              name="desktopNr"
              label="np: 201"
              prepend-icon="info"
              v-model:value="value"
              v-on:input="updateValue(value)"
      ></v-text-field>
    </v-col>
  </v-row>
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
