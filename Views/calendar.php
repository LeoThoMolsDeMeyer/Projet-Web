<h1 class=text-center>Calendrier</h1>
<table class="table table-striped table-dark table-bordered">
  <thead>
    <tr>
      <th scope="col">Favoris</th>
      <th scope="col">Date/Horaire</th>
      <th scope="col">Sujet</th>
      <th scope="col">Lieu</th>
      <th scope="col">Participation</th>
      <th scope="col">Intérêt</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php $data = $this->db->getEvent(1); ?> 
      <td><input class="btn btn-warning btn-block" type="button" name="favoris" value="favoris"></td>
      <td>Du <?php echo $data->schedule_begin; ?> Au <?php echo $data->schedule_end; ?></td>
      <td><?php echo $data->place; ?></td>
      <td><input class="btn btn-outline-info btn-block" type="submit" id="map" name="map" value="Map"></td>
      <td><input class="btn btn-success btn-block" type="button" id="participe" name="participe" value="Participe"></td>
      <td><input class="btn btn-primary btn-block" type="button" id="interessé" name="interessé" value="Interessé"></td>
    </tr>
    <tr>
      <?php $data = $this->db->getEvent(2); ?>
      <td><input class="btn btn-outline-warning btn-block" type="button" name="favoris" value="favoris"></td>
      <td>Du <?php echo $data->schedule_begin; ?> Au <?php echo $data->schedule_end; ?></td>
      <td><?php echo $data->place; ?></td>
      <td><input class="btn btn-outline-info btn-block" type="submit" id="map" name="map" value="Map"></td>
      <td><input class="btn btn-danger btn-block" type="button" id="participePas" name="participePas" value="Participe pas"></td>
      <td><input class="btn btn-primary btn-block" type="button" id="pasInteressé" name="pasInteressé" value="Pas interessé"></td>
    </tr>
    <tr>
      <td><input class="btn btn-outline-warning btn-block" type="button" name="favoris" value="favoris"></td>
      <td>10/04</td>
      <td>Souper du club</td>
      <td><input class="btn btn-outline-info btn-block" type="submit" id="map" name="map" value="Map"></td>
      <td><input class="btn btn-danger btn-block" type="button" id="participePas" name="participePas" value="Participe pas"></td>
      <td><input class="btn btn-primary btn-block" type="button" id="interessé" name="interessé" value="Interessé"></td>
    </tr>
  </tbody>
</table>
<input class="btn btn-primary btn-sm btn-block col-md-2 offset-10" type="submit" id="modifier" name="modifier" value="Modifier">