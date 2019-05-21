<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.min.js"></script> 
<script type="text/javascript" src="script.js"></script>


<?php 
 require_once('../Modele/connexion_db.php');
?>
        <div>
          <div id="compare">
              <h2 id="cmp"> Comparer entre deux écoles </h2>
              <br>
                <?php
                    $query = "SELECT * FROM categorie";
                    $result = $connexion->query($query);
                  ?>

                  <section>
                        <div class="header-container">
                          <div class="button dropdown" align="center">
                            <label style="font-size:20px;" for="type">Catégorie : </label>
                            <select style="font-size:20px;width:30%;height:30px;"  class="selectpicker" name="type">
                              <option selected></option>
                              <?php
                                    foreach ($result as $row ){
                                      echo '<option value="'.$row["id"].'">'.$row["nom"].'</option>';
                                    }
                               ?>
                            </select>
                          </div>

                        <script type="text/javascript">
                            $(document).ready(function(){
                                $("select.selectpicker").change(function(){
                                    var selectedType = $(".selectpicker option:selected").val();
                                    $.ajax({
                                        type: "POST",
                                        url: "/Proj_web/Modele/comparateur.php",
                                        data: { type : selectedType }
                                    }).done(function(data){
                                                $(".custom-select").html(data);
                                    });
                                    });
                                $("select.custom-select#1").change(function(){
                                    var selectedType2 = $(".custom-select#1 option:selected").val();
                                    $.ajax({
                                        type: "POST",
                                        url: "/Proj_web/Modele/comparateurs.php",
                                        data: { type : selectedType2 }
                                  }).done(function(data){
                                               $(".compare").html(data);
                                    });
                                    });
                            });

                            </script>

                            <script type="text/javascript">
                                $(document).ready(function(){
                                $("select.custom-select#2").change(function(){
                                    var selectedType3 = $(".custom-select#2 option:selected").val();
                                    $.ajax({
                                        type: "POST",
                                        url: "/Proj_web/Modele/comparateurs.php",
                                        data: { type : selectedType3 }
                                      }).done(function(data){
                                        $(".ecole").html(data);
                                    });
                                    });
                                    });
                            </script>

                  <br>
                   <div style="width:50%;float:right;" class="custom">
                     <select id="1" class="custom-select">

                     </select>
                   </div>
                  <div style="width:50%" class="custom">
                    <select name="id_ec" id="2" class="custom-select">
                    </select>
                  </div>
</div>
                </div>
                  <br> 
                  <div style="width:48%;float:right;" class="gauche">
                    <div class="compare">
                    </div>
                  </div>

                  <div style="width:48%" class="droite">
                    <div class="ecole">
                    </div>
                  </div>
            </section>
          
              
</div>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.min.js"></script> 
<script type="text/javascript" src="script.js"></script>