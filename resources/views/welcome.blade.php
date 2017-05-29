<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Help Desk</title>

        <!-- Fonts
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet" type="text/css">
-->
        <!-- Styles
        <link href="https://unpkg.com/vuetify@0.12.2/dist/vuetify.min.css" rel="stylesheet" type="text/css">
      -->
      <link href="/css/main.css" rel="stylesheet" type="text/css">

    </head>
    <body>
<!--
      <div id="app">
        <notification>Test</notification>
      </div>
    -->
    <div class="container">
      <div id="app" class="row">


        <template>
          <v-card class="grey lighten-4 elevation-0">
            <v-card-text>
              <v-container fluid>
                <v-layout row>
                  <v-flex xs4>
                    <v-subheader>Normal with hint text</v-subheader>
                  </v-flex>
                  <v-flex xs8>
                    <v-text-field
                      name="input-1-3"
                      label="Hint Text"
                      single-line
                    ></v-text-field>
                  </v-flex>
                </v-layout>
                <v-layout row>
                  <v-flex xs4>
                    <v-subheader>Press</v-subheader>
                  </v-flex>
                  <v-flex xs8>
                    <v-text-field
                      name="input-2-3"
                      label="Hint Text"
                      class="input-group--focused"
                      single-line
                    ></v-text-field>
                  </v-flex>
                </v-layout>
                <v-layout row>
                  <v-flex xs4>
                    <v-subheader>Focus</v-subheader>
                  </v-flex>
                  <v-flex xs8>
                    <v-text-field
                      name="input-3-3"
                      label="Hint Text"
                      value="Input text"
                      class="input-group--focused"
                      single-line
                    ></v-text-field>
                  </v-flex>
                </v-layout>
                <v-layout row>
                  <v-flex xs4>
                    <v-subheader>Normal with input text</v-subheader>
                  </v-flex>
                  <v-flex xs8>
                    <v-text-field
                      name="input-3-4"
                      label="Hint Text"
                      value="Input text"
                      single-line
                    ></v-text-field>
                  </v-flex>
                </v-layout>
                <v-layout row>
                  <v-flex xs4>
                    <v-subheader>Error</v-subheader>
                  </v-flex>
                  <v-flex xs8>
                    <v-text-field
                      name="input-3-5"
                      label="Hint Text"
                      value="Input text"

                      class="input-group--focused"
                      single-line
                    ></v-text-field>
                  </v-flex>
                </v-layout>
                <v-layout row>
                  <v-flex xs4>
                    <v-subheader>Disabled</v-subheader>
                  </v-flex>
                  <v-flex xs8>
                    <v-text-field
                      name="input-3"
                      label="Label Text"
                      value="Input text"
                      disabled
                      single-line
                    ></v-text-field>
                  </v-flex>
                </v-layout>
              </v-container>
            </v-card-text>
          </v-card>
        </template>


          <v-card>
              <v-card-row class="blue-grey darken-1">
                <v-card-title>
                  <span class="white--text">Zgłoszenie</span>
                </v-card-title>
              </v-card-row>
              <v-card-row  height="10px"></v-card-row>

                    <v-container fluid>
                      <v-layout row class="black--text">
                        <v-flex xs4>
                          <v-subheader>Focus</v-subheader>
                        </v-flex>
                        <v-flex xs8 >
                          <v-text-field
                            v-model="desktopNr"

                            name="input-2"
                            label="Label Text"
                            value="desktopNr"
                            class="input-group--focused"
                            single-line


                          ></v-text-field>
                        </v-flex>
                      </v-layout>
                    </v-container>


<!--
              <v-row class="text-xs-center">
                <v-col xs12 class="text-xs-center">
                  <div>
                    <a href="{{route('sendEmail')}}"> Wyślij </a>
                    <v-btn light default href="{{route('sendEmail')}}">Wyślij</v-btn>
                  </div>
                </v-col>
              </v-row>
              <br />
-->


                  <div>
                    <v-btn light default v-on:click.native="savePost">Wyślij nr 2</v-btn>
                  </div>


              <br />

              <v-card-text class="blue-grey darken-3 white--text">

              </v-card-text>
              <v-card-row actions class="blue-grey darken-1 mt-0">
                <v-btn flat class="white--text">W formularzu nigdy nie podawaj swojich haseł</v-btn>
                <v-spacer></v-spacer>
                <v-btn icon>
                  <v-icon class="white--text">explore</v-icon>
                </v-btn>
              </v-card-row>
          </v-card>

      </div>
    </div>
      <script>
            window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
          ]); ?>
      </script>
<!--
      <script src="https://unpkg.com/vuetify@0.12.2/dist/vuetify.min.js"></script>
    -->
      <script src="js/app.js"></script>

    </body>
</html>
