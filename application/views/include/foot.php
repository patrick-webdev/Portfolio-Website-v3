<footer>
    <?php
    foreach($contactLinks as $contactLink){
        echo "<a href='" . $contactLink["url"] . "' title='" . $contactLink["title"] . "' class='contactLink' target='_blank'>" . $contactLink["icon"] . "</a>";
    }
    ?>
</footer>
<!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>