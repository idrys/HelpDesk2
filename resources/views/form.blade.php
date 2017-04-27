<v-card class=" lighten-4 elevation-0">
  <v-card-text>
    <v-container fluid>
      <v-row row>
        <v-col xs4>
          <v-subheader>Numer komputera DESKTOP???</v-subheader>
        </v-col>
        <v-col xs8>
          <v-text-field
            name="input-1"
            label="np: 201"
            prepend-icon="info"
            single-line
          ></v-text-field>
        </v-col>
      </v-row>
      <v-row row>
        <v-col xs4>
          <v-subheader>Imię i nazwisko zgłaszającego</v-subheader>
        </v-col>
        <v-col xs8>
          <v-text-field
            name="input-2"
            label="np: Jan Kowalski"
            prepend-icon="people"
              single-line

          ></v-text-field>
        </v-col>
      </v-row>
      <v-row row>
        <v-col xs4>
          <v-subheader>Nr telefonu zgłaszającego</v-subheader>
        </v-col>
        <v-col xs8>
          <v-text-field
            name="input-3"
            label="podaj cały numer np: 600123456"
            prepend-icon="phone"
            single-line
          ></v-text-field>
        </v-col>
      </v-row>

      <v-row row>
        <v-col xs4>
          <v-subheader>Adres e-mail, na króry chcesz otrzymać powiadomienia</v-subheader>
        </v-col>
        <v-col xs8>
          <v-text-field
            name="input-3"
            label="np: jan.kowalski@tgs.pl"
            prepend-icon="email"
            single-line
          ></v-text-field>
        </v-col>
      </v-row>

      <v-row row>
        <v-col xs4 class="text-xs-center">
          <v-subheader>Opisz problem</v-subheader>
        </v-col>
        <v-col xs8>
          <v-text-field
            name="input-4"
            label="np: Drukarka nie drukuje"
            prepend-icon="description"
            single-line
            multi-line
          ></v-text-field>
        </v-col>
      </v-row>
