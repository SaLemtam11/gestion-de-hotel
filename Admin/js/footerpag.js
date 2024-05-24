
    function lettersOnly(input) {
        var  regex = /[^a-z]\s/gi;
        input.value = input.value.replace(regex,"") ;
        
    }
    function nombr(input) {
            var  regex = /[^0-9]/gi;
            input.value = input.value.replace(regex,'') ;
            
        }
    
    
    
    /* -----------------------admin------------------------------------ */
    $('input[name="nom"]').on('keypress',function(event){
            var x = event.which || event.keyCode;
            if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x ===32 ) {
                return true; 
            }else{
                return false;
            }
        });
        $('input[name="prnom"]').on('keypress',function(event){
            var x = event.which || event.keyCode;
            if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x ===32 ) {
                return true; 
            }else{
                return false;
            }
        });
        $('input[name="login"]').on('keypress',function(event){
            var x = event.which || event.keyCode;
            if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x ===32 ) {
                return true; 
            }else{
                return false;
            }
        });
    
    function mymaxLength(x, y) {
          if (y.length == x.maxLength) {
            var next = x.tabIndex;
            if (next < document.getElementById("adminn").length) {
              document.getElementById("adminn").elements[next].focus();
            }
          }
        }
    
    /* --------------------------------------------------- */

/* -----------------------------------edit admin--------------------------------------- */
$('input[name="e_nom"]').on('keypress',function(event){
    var x = event.which || event.keyCode;
    if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x ===32 ) {
        return true; 
    }else{
        return false;
    }
});
$('input[name="e_prnom"]').on('keypress',function(event){
    var x = event.which || event.keyCode;
    if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x ===32 ) {
        return true; 
    }else{
        return false;
    }
});
$('input[name="e_login"]').on('keypress',function(event){
    var x = event.which || event.keyCode;
    if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x ===32 ) {
        return true; 
    }else{
        return false;
    }
});

function mymaxLength(x, y) {
  if (y.length == x.maxLength) {
    var next = x.tabIndex;
    if (next < document.getElementById("edit-admin").length) {
      document.getElementById("edit-admin").elements[next].focus();
    }
  }
}







/* --------------------------------------------------------------------------- */

    /* -----------------------client------------------------------------ */
    
    $('input[name="nom_client"]').on('keypress',function(event){
        var x = event.which || event.keyCode;
        if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x ===32 ) {
            return true; 
        }else{
            return false;
        }
    });
    $('input[name="prenom_client"]').on('keypress',function(event){
        var x = event.which || event.keyCode;
        if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x ===32 ) {
            return true; 
        }else{
            return false;
        }
    });
    $('input[name="num_phone"]').on('keypress',function(event){
        var x = event.which || event.keyCode;
        if (x >= 48 && x <= 57) {
            return true; 
        }else{
            return false;
        }
    });
    $('input[name="nombre_d_individus"]').on('keypress',function(event){
        var x = event.which || event.keyCode;
        if (x >= 48 && x <= 57) {
            return true; 
        }else{
            return false;
        }
    });
    $('input[name="prix_intial"]').on('keypress',function(event){
        var x = event.which || event.keyCode;
        if (x >= 48 && x <= 57) {
            return true; 
        }else{
            return false;
        }
    });
    $('input[name="prix_somme"]').on('keypress',function(event){
        var x = event.which || event.keyCode;
        if (x >= 48 && x <= 57) {
          return false;
        }else{
            return false;
        }
    });
    
    function mymaxLength(x, y) {
          if (y.length == x.maxLength) {
            var next = x.tabIndex;
            if (next < document.getElementById("add-client-form").length) {
              document.getElementById("add-client-form").elements[next].focus();
            }
          }
        }
    
    /* --------------------------------------------------- */
    /* -----------------------editclient------------------------------------ */
    
    $('input[name="enom_client"]').on('keypress',function(event){
        var x = event.which || event.keyCode;
        if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x ===32 ) {
            return true; 
        }else{
            return false;
        }
    });
    $('input[name="eprenom_client"]').on('keypress',function(event){
        var x = event.which || event.keyCode;
        if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x ===32 ) {
            return true; 
        }else{
            return false;
        }
    });
    $('input[name="enum_phone"]').on('keypress',function(event){
        var x = event.which || event.keyCode;
        if (x >= 48 && x <= 57) {
            return true; 
        }else{
            return false;
        }
    });
    $('input[name="enombre_d_individus"]').on('keypress',function(event){
        var x = event.which || event.keyCode;
        if (x >= 48 && x <= 57) {
            return true; 
        }else{
            return false;
        }
    });
    $('input[name="eprix_intial"]').on('keypress',function(event){
        var x = event.which || event.keyCode;
        if (x >= 48 && x <= 57) {
            return true; 
        }else{
            return false;
        }
    });
    $('input[name="eprix_somme"]').on('keypress',function(event){
        var x = event.which || event.keyCode;
        if (x >= 48 && x <= 57) {
          return false;
        }else{
            return false;
        }
    });
    
    function mymaxLength(x, y) {
          if (y.length == x.maxLength) {
            var next = x.tabIndex;
            if (next < document.getElementById("edit-client-form").length) {
              document.getElementById("edit-client-form").elements[next].focus();
            }
          }
        }
    
    /* --------------------------------------------------- */
    /* -----------------------add nager-------------------------------------- */
    
    $('input[name="nom"]').on('keypress',function(event){
        var x = event.which || event.keyCode;
        if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x ===32 ) {
            return true; 
        }else{
            return false;
        }
    });
    $('input[name="prenom"]').on('keypress',function(event){
        var x = event.which || event.keyCode;
        if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x ===32 ) {
            return true; 
        }else{
            return false;
        }
    });
    $('input[name="tel"]').on('keypress',function(event){
        var x = event.which || event.keyCode;
        if (x >= 48 && x <= 57) {
            return true; 
        }else{
            return false;
        }
    });
    
    
    
    
    
        function mymaxLength(x, y) {
          if (y.length == x.maxLength) {
            var next = x.tabIndex;
            if (next < document.getElementById("add-nager").length) {
              document.getElementById("add-nager").elements[next].focus();
            }
          }
        }
    
    
    
    
    /* ------------------------------------------------------------------------ */
    
    /* -----------------------edit nager-------------------------------------- */
    
    $('input[name="enom"]').on('keypress',function(event){
        var x = event.which || event.keyCode;
        if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x ===32 ) {
            return true; 
        }else{
            return false;
        }
    });
    $('input[name="eprenom"]').on('keypress',function(event){
        var x = event.which || event.keyCode;
        if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x ===32 ) {
            return true; 
        }else{
            return false;
        }
    });
    $('input[name="etel"]').on('keypress',function(event){
        var x = event.which || event.keyCode;
        if (x >= 48 && x <= 57) {
            return true; 
        }else{
            return false;
        }
    });
    
    
    
    
    
        function mymaxLength(x, y) {
          if (y.length == x.maxLength) {
            var next = x.tabIndex;
            if (next < document.getElementById("edit-nager").length) {
              document.getElementById("edit-nager").elements[next].focus();
            }
          }
        }
    
    
    
    
    /* ------------------------------------------------------------------------ */
    
    /* ----------------------------add-Entraineurs----------------------------------------------- */
    
    $('input[name="nom_prenom"]').on('keypress',function(event){
            var x = event.which || event.keyCode;
            if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x ===32 ) {
                return true; 
            }else{
                return false;
            }
        });
        $('input[name="tel"]').on('keypress',function(event){
            var x = event.which || event.keyCode;
            if (x >= 48 && x <= 57) {
                return true; 
            }else{
                return false;
            }
        });
    
    
        function mymaxLength(x, y) {
          if (y.length == x.maxLength) {
            var next = x.tabIndex;
            if (next < document.getElementById("add-Entraineurs").length) {
              document.getElementById("add-Entraineurs").elements[next].focus();
            }
          }
        }
    
    /* ------------------------------------------------------------------------------ */
    /* -----------------------------edit-Entraineurs----------------------------------------------- */
    
    $('input[name="enom_prenom"]').on('keypress',function(event){
            var x = event.which || event.keyCode;
            if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x ===32 ) {
                return true; 
            }else{
                return false;
            }
        });
        $('input[name="etel"]').on('keypress',function(event){
            var x = event.which || event.keyCode;
            if (x >= 48 && x <= 57) {
                return true; 
            }else{
                return false;
            }
        });
        function mymaxLength(x, y) {
          if (y.length == x.maxLength) {
            var next = x.tabIndex;
            if (next < document.getElementById("edit-Entraineurs").length) {
              document.getElementById("edit-Entraineurs").elements[next].focus();
            }
          }
        }
    
    /* ------------------------------------------------------------------------------ */
    
    