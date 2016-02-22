        <footer>
            <center><p>&copy; Nilsine & ULCO 2015</p></center>
        </footer>
    </div>



<!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script>
    // Search
        $('.fa-search').on('click', function() {
            $('.field-toggle').fadeToggle(200);
        });
    </script>

  </body>
</html>

<?php 
//on ferme la connection SQL
mysql_close($link); 

?>