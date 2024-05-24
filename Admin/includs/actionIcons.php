



  <div class="icons">
  
    <a href="#" id="" onclick="editUser(this)" data-toggle="modal" data-target="#editModal" >
      <h5><i class="fas fa-user-edit"></i></h5>

      <div style="display:none"><?php echo $row['nom']  ?></div>
      <div style="display:none" ><?php echo $row['prenom']  ?></div>
      <div style="display:none" ><?php echo $row['login'] ?></div>
      <div style="display:none" ><?php echo $row['password']  ?></div>
      <div style="display:none" ><?php echo $row['Actif'] ?></div>
    </a>
    



    <a href="#"  id="<?php echo $row['id'] ?>"  onclick="remUser(this.id)" data-toggle="modal" data-target="#removeModal" >
     <h5><i class="fas fa-user-times"></i></h5> 
    </a>
  </div>
