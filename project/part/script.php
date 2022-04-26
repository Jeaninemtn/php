<script src="<script src=" https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    $.get('add-to-cart-api.php', function(data){
        countCartObj(data);
    }, 'json');

    function countCartObj(data){
        let total = 0;
        for(let i in data){
            total += data[i];
        }
        $('.cart-count').text(total);
    }
</script>