<template>
  <v-row>
    <v-col xs4 offset-xs1>
      <v-subheader>Numer komputera DESKTOP000</v-subheader>
    </v-col>
    <v-col xs6>
      <v-text-field
              name="desktopNr"
              label="np: 201"
              prepend-icon="info"
              single-line
      ></v-text-field>
    </v-col>
  </v-row>
</template>

<script>
    export default {
      data(){
        return{
          message: "Nie działa drukarka",
          desktopNr: "322"
        }
      },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

https://youtu.be/pTVCW5k4piU
