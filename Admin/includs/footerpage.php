











</div>








<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>

<script src="js/footerpag.js"></script>

<script type="text/javascript">

window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 1500);


/*---------------useredit-----------------*/




 
function editUser(u_id){
      var el = u_id.children;
      document.getElementById('nom').setAttribute("value",   el[1].innerHTML );
      document.getElementById('prnom').setAttribute("value", el[2].innerHTML );
      document.getElementById('login').setAttribute("value", el[3].innerHTML );
      document.getElementById('edit_sub').setAttribute("value", el[3].innerHTML );
      var sel_1 =document.getElementById('password');
      var sel_0 = document.getElementById('Actif');
      
     


        for (var i = 0; i < sel_0.options.length; i++) {
          if (sel_0.options.item(i).value === el[6].innerHTML ) {
            sel_0.options.item(i).selected = true ;
            break;
          }
        }

        for (var i = 0; i < sel_1.options.length; i++) {
          if (sel_1.options.item(i).value === el[7].innerHTML ) {
            sel_1.options.item(i).selected = true ;
            break;
          }
        }
       }

       function remUser(u_cl){
          document.getElementById('rem_sub').setAttribute("value", u_cl);
       }
       function suprimeimg(img_cl){
          document.getElementById('rem_sub1').setAttribute("value", img_cl);
       }
       function suprimeimgn(imgn_cl){
          document.getElementById('rem_sub2').setAttribute("value", imgn_cl);
       }


      

/*--------------------------------*/



/*--------------------------------*/
      var cel_1 = document.getElementById('nombre_d_individus');
       var cel_2 = document.getElementById('prix_intial');
       var cel_3 = document.getElementById('prix_somme');


      cel_1.addEventListener("change", function() {
         var r = (parseInt(cel_2.value) * parseInt(cel_1.value));
         cel_3.value = isNaN(r)? cel_1.value : r +" " +"DZ";
        });

        cel_2.addEventListener("change", function() {
          var k = (parseInt(cel_2.value) * parseInt(cel_1.value));
          cel_3.value = isNaN(k)? cel_2.value : k +" " +"DZ";
         });


     



         function Print(){
           backup_data = document.body.innerHTML;

           var elemen_2 = document.getElementById('ta-show-2').innerHTML;
           document.body.innerHTML = elemen_2;

           window.print();
           document.body.innerHTML = backup_data;


         }

         function Print_2(){
           backup_data = document.body.innerHTML;

           var elemen_2 = document.getElementById('print_2').innerHTML;
           document.body.innerHTML = elemen_2;

           window.print();
           document.body.innerHTML = backup_data;


         }
         function Print_3(){
           backup_data = document.body.innerHTML;

           var elemen_2 = document.getElementById('print_3').innerHTML;
           document.body.innerHTML = elemen_2;

           window.print();
           document.body.innerHTML = backup_data;


         }
         function Print_4(){
           backup_data = document.body.innerHTML;

           var elemen_2 = document.getElementById('print_4').innerHTML;
           document.body.innerHTML = elemen_2;

           window.print();
           document.body.innerHTML = backup_data;


         }



        
   


</script>

                    <!-- container -->

                    </div> 
                <!-- content -->


 </div>

<script type="text/javascript"  src="js\jquery-3.6.0.min.js"></script>

<script type="text/javascript"  src="js\bootstrap.js"></script>

<script type="text/javascript"  src="js\myscript.js"></script>
<!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="assets/js/vendor/apexcharts.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
       <!-- third party js ends -->

       <!-- demo app -->
        <script src="assets/js/pages/demo.dashboard.js"></script>
       <!-- end demo js-->



 <script src="assets/js/vendor/jquery.dataTables.min.js"></script>
<script src="assets/js/vendor/dataTables.bootstrap5.js"></script>
<script src="assets/js/vendor/dataTables.responsive.min.js"></script>
<script src="assets/js/vendor/responsive.bootstrap5.min.js"></script>

        <!-- demo app -->
        <script src="assets/js/pages/demo.datatable-init.js"></script>

        <!-- end demo js-->



        <script src="js/sweetalert.js"></script>

<?php 

if (isset($_SESSION['status']) && $_SESSION['status'] != '' ) {


?>
            <script>
                Swal.fire({
                   position: 'top-end',
                    title:"<?php echo  $_SESSION['status']; ?>",
                    icon:"<?php echo  $_SESSION['status_cod']; ?>",
                    showConfirmButton: false,
                     timer: 1500
 });
            </script>

    <?php
    unset($_SESSION['status']);
    
}



?>
</body>
</html>
