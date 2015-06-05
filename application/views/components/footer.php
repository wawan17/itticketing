    <script>
        $(document).ready(function() {
            // flash message
            setTimeout(function() {
                $(".flash-msg").fadeOut();
            }, 5000);
            
            $('.media-body textarea').focus(function(){
                $(this).addClass('area-medium');
            });
        });        
    </script>
    
    </body>
</html>