<footer>
    <?php
    foreach($contactLinks as $contactLink){
        echo "<a href='" . $contactLink["url"] . "' title='" . $contactLink["title"] . "' class='contactLink' target='_blank'>" . $contactLink["icon"] . "</a>";
    }
    ?>
</footer>
<!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> -->
</body>
</html>