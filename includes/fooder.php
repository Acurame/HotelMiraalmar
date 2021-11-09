<script src="/node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
    <script>
        var nav = document.querySelector('nav');
        window.addEventListener('scroll', function(){
            if(window.pageYOffset > 100){
                nav.classList.add('opacity-md-75', 'shadow');
            }else{
                nav.classList.remove('bg-dark', 'shadow');
            }
        });
    </script>
</body>
</html> 