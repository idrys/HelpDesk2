<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet" type="text/css">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

      <div id="app">

      <v-row>
        <v-col xs10 offset-xs1>
          <v-card>
              <v-card-row class="blue-grey darken-1">
                <v-card-title>
                  <span class="white--text">Zgłoszenie</span>
                  <v-spacer></v-spacer>
                  <!--v-menu id="space" bottom left origin="top right" transition="v-scale-transition">
                    <v-btn icon="icon" slot="activator" class="white--text">
                      <v-icon>more_vert</v-icon>
                    </v-btn>
                    <v-list>
                      <v-list-item>
                        <v-list-tile>
                          <v-list-tile-title>Remove Card</v-list-tile-title>
                        </v-list-tile>
                      </v-list-item>
                      <v-list-item>
                        <v-list-tile>
                          <v-list-tile-title>Send Feedback</v-list-tile-title>
                        </v-list-tile>
                      </v-list-item>
                    </v-list>
                  </v-menu-->
                </v-card-title>
              </v-card-row>
              <v-card-row  height="10px"></v-card-row>


              <notification>Test</notification>


              <v-row class="text-xs-center">
                <v-col xs12 class="text-xs-center">
                  <div>
                    <v-btn light default><a href="{{route('sendEmail')}}">Wyślij</a></v-btn>
                  </div>
                </v-col>
              </v-row>
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
        </v-col>
      </v-row>
      </div>



      <script>
            window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
          ]); ?>
      </script>

      <script src="js/app.js"></script>

    </body>
</html>
