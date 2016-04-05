        <footer>
            <center><p>&copy; Nilsine & ULCO 2015</p></center>
        </footer>
    </div>



<!-- JavaScript -->
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script>
    // Fonction appui icone search
        $('.fa-search').mouseover( function() {
            $('.field-toggle').fadeToggle(200);
        });
        
        $(document).ready(function() {

            $("#addNews").click(function(){
                $.ajax({
                    url : 'assets/newslette.php',
                    type : 'POST',
                    data: {email :  $("#news").val()},
                    dataType: "html",
                    success : function(code_html, statut){
                        alert(code_html,statut);
                    },

                    error : function(resultat, statut, erreur){
                        alert(resultat);
                    }
                })
            })
        });
        
    </script>

  </body>
</html>

<?php 
//on ferme la connection SQL
mysql_close($link); 

?>