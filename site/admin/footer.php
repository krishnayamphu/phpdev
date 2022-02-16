<footer class="site-footer bg-dark py-5">
    <div class="container">
        <p class="text-center text-white">&copy; copyright <?php echo date('Y') ?>, All rights are reserved to Company name.</p>
    </div>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ),{

        } )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );

</script>
</body>
</html>
